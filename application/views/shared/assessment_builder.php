<?php
class IformQuestion
{
    public $questionLevel;
    public $requiredType;
    public $questionNumber;
    public $questionText;
    public $questionLabelInfo;
    public $questionData;

    function __construct($questionNumber, $questionText ,$questionLevel, $requiredType, $questionLabelInfo, $questionData )
    {
        $this->requiredType = $requiredType;
        $this->questionLabelInfo = $questionLabelInfo;
        $this->questionLevel = $questionLevel;
        $this->questionNumber = $questionNumber;
        $this->questionText = $questionText;
        $this->questionData = $questionData;
    }

    public function RenderQuestion() {
        switch($this->questionData->type)
        {
            case "radio":
                return $this->renderRadioQuestion();
                break;
            case "checkbox":
                return $this->renderCheckQuestion();
                break;
            case "text":
                return $this->renderTextQuestion();
                break;
            case "span_summary":
                return $this->getSummarySpan();
                break;
            case "text_summary":
                return $this->getSummaryText();
                break;
        }
    }

    private function renderRadioQuestion() {

        $html = "<div class='iform-fieldset' tabindex='-1'>".
            "<fieldset class='".$this->getFieldsetClass()."'>".
            "<legend class='".$this->getLegendClass()."'>".
            ($this->questionNumber != null ? "<span>".$this->questionNumber.". <span>" : "").
            "<span>".$this->questionText."<span>".
            "</legend>".
            $this->getQuestionInfo().
            $this->getRadioList().
            "</fieldset>".
            "</div>";

        return $html;
    }

    private function renderTextQuestion() {
        $html = "<div class='iform-fieldset' tabindex='-1'>".
            "<fieldset class='".$this->getFieldsetClass()."'>".
            "<legend class='".$this->getLegendClass()."'>".
            "<span>".$this->questionNumber.". <span>".
            "<span>".$this->questionText."<span>".
            "</legend>".
            $this->getQuestionInfo().
            $this->getTextBox().
            "</fieldset>".
            "</div>";

        return $html;
    }

    private function renderCheckQuestion() {
        $html = "<div class='iform-fieldset' tabindex='-1'>".
            "<fieldset class='".$this->getFieldsetClass()."'>".
            "<legend class='".$this->getLegendClass()."'>".
            ($this->questionNumber != null ? "<span>".$this->questionNumber.". <span>" : "").
            "<span>".$this->questionText."<span>".
            "</legend>".
            $this->getQuestionInfo().
            $this->getCheckboxList().
            "</fieldset>".
            "</div>";

        return $html;
    }

    private function getQuestionInfo() {
        $html = "";

        if($this->questionLabelInfo != null )
        {
            $html = "<span class='header-info'>".
                        $this->questionLabelInfo.
                    "</span>";
        }

        return $html;
    }
    private function getLegendClass() {
        $legendClass = "";

        switch($this->questionLevel)
        {
            case 1:
                $legendClass = "legend-header-one";
                break;
            case 2:
                $legendClass = "legend-header-two";
                break;
            default:
                $legendClass = "fooLegend";
        }

        if($this->requiredType == "submit"){
            switch($this->questionData->type)
            {
                case "radio":
                    $legendClass .= ' selection-submit-required submit-required';
                    break;
                default:
                    $legendClass .= ' submit-required';
            }
        }

        return $legendClass;
    }

    private function getFieldsetClass() {
        switch($this->questionLevel)
        {
            case 1:
                return "fieldset-container-one";
                break;
            case 2:
                return "fieldset-container-two";
                break;
            default:
                return "fooFieldset";
        }
    }


    private function getRadioList() {
        $html = "";
        $radios = $this->questionData->radioData;
        $radioGroupName = $this->questionData->groupName;
        for($i = 0; $i < count($radios); $i++)
        {
            $radioId = $radioGroupName.$i;
            $html .=    "<div class='row'>".
                "<input type='radio' name='". $radioGroupName ."' id='". $radioId ."' value='".$radios[$i]->value."'/>".
                "<label for='".$radioId."'>".$radios[$i]->text."</label>".
                "</div>";
        }

        return $html;
    }

    private function getCheckboxList() {
        $html = "";
        $checkboxes = $this->questionData->checkboxData;
        $checkboxGroupName = $this->questionData->groupName;
        for($i = 0; $i < count($checkboxes); $i++)
        {
            $checkboxId = $checkboxGroupName.$i;
            $html .=    "<div class='row'>".
                "<input type='checkbox' name='". $checkboxGroupName ."' id='". $checkboxId ."' value='".$checkboxes[$i]->value."'/>".
                "<label for='".$checkboxId."'>".$checkboxes[$i]->text."</label>".
                "</div>";
        }

        return $html;
    }
    private function getTextBox() {
        $id = $this->questionData->id.$this->questionNumber;
        $labelText = $this->questionData->labelText;
        $isDate = $this->questionData->textBoxType == "date";
        $html = "<div class='row'>".
            "<label for='".$id."'>".$labelText."</label>".
            "<input id='".$id."' type='text' class='". ($isDate ? "kendo-date" : ""). "'/>".
            "</div>";

        return $html;
    }

    private function getSummarySpan() {
        $labelValue = $this->questionData->labelValue;
        $html = "<div class='row summary'>".
            "<span class='label'>".$this->questionText."</span>".
            "<span class='data-element'>".$labelValue."</span>".
            "</div>";

        return $html;
    }

    private function getSummaryText() {
        $id = str_replace(" ","", $this->questionText).$this->questionNumber;
        $labelText = $this->questionText;
        $isDate = $this->questionData->textBoxType == "date";
        $html = "<div class='row'>".
            "<label for='".$id."'>".$labelText."</label>".
            "<input id='".$id."' type='text' class='". ($isDate ? "kendo-date" : ""). "'/>".
            "</div>";

        return $html;
    }

    public function __toString() {
        return $this->RenderQuestion();
    }
}

class RadioCheckQuestion
{
    public $text;
    public $value;

    public function __construct($text, $value)
    {
        $this->text = $text;
        $this->value = $value;
    }
}

class QuestionData {
    public $type;

    function __construct($type)
    {
        $this->type = $type;
    }
}

class RadioQuestionData extends QuestionData{
    public $groupName;
    public $radioData;

    function __construct($groupName, $radioData)
    {
        parent::__construct("radio");
        $this->groupName = $groupName;
        $this->radioData = $radioData;
    }
}

class CheckQuestionData extends QuestionData {
    public $groupName;
    public $checkboxData;

    function __construct($groupName, $checkboxData)
    {
        parent::__construct("checkbox");
        $this->groupName = $groupName;
        $this->checkboxData = $checkboxData;

    }


}

class TextBoxQuestionData extends QuestionData {
    public $textBoxType;
    public $id;
    public $labelText;

    function __construct($labelText, $textBoxType)
    {
        $this->textBoxType = $textBoxType;
        $this->id = str_replace(" ","", $labelText);
        $this->labelText = $labelText;
        parent::__construct("text");
    }
}

class SpanSummaryQuestionData extends QuestionData {
    public $labelValue;

    function __construct($labelValue)
    {
        $this->labelValue = $labelValue;
        parent::__construct("span_summary");
    }

}

class TextSummaryQuestionData extends QuestionData {
    public $textBoxType;

    function __construct($textBoxType)
    {
        $this->textBoxType = $textBoxType;
        parent::__construct("text_summary");
    }

}

?>