<div id="newMessage" title="New Message" style="display: none">
    <form action="submit">
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">Message</legend>
            <div class="row">
                <label for="recipient" style="width: 100px">To:</label>
                <input type="text" id="recipient" placeholder="Recipient's Email" class="textbox-large"/>
            </div>
            <div class="row">
                <label for="subject" style="width: 100px">Subject:</label>
                <input type="text" id="subject" placeholder="Subject" class="textbox-large"/>
            </div>
            <div class="row">
                <label for="attachment" style="width: 100px">Attachment:</label>
                <input type="text" id="attachment" placeholder="no attachments" disabled class="readonly" class="textbox-medium">
                <button type="button" style="margin: 0;height: 25px;font-size: 11px;line-height: 11px;">Browse</button>
            </div>
            <div class="row">
                <label for="clinicaldocument">Latest Clinical Documents:</label>
                <table>
                    <tbody>
                        <tr>
                            <td width="200px">
                                <select type="text" multiple="multiple" id="subject" id="origin">
                                    <option value="1">C-CDA</option>
                                    <option value="1">CARE Assessment</option>
                                    <option value="1">LAB Results</option>
                                </select>
                            </td>
                            <td class="center">
                                <button type="button"><b><span class="icon-angle-right"></span></b></button>
                                <button type="button"><span class="icon-angle-left"></span></button>
                            </td>
                            <td width="200px">
                                <select type="text" multiple="multiple" id="subject" id="destination">
                                    <option value="1">CAHPS Survey</option>
                                    <option value="1">Plan of Care</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <label for="message">Message:</label>
                <textarea name="" id="message" rows="80" class="comments-textarea-tall" style="height:280px;"></textarea>
            </div>

        </fieldset>
    </form>
</div>