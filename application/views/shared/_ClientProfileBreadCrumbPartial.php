<div id="cliensummaryinfo" class="js-breadCrumbPanelbar">
    <div class="panel">
        <div class="header">
            <h2 class="name">
                <span class="show-for-print">Client: </span>
                Cicio Smith
            </h2>
            <span class="p-auto-width">
                <span class="p-label">Age: </span><span class="p-data-element">65</span>
            </span>
            <span class="p-auto-width">
                <span id="cs-id"><span class="p-label">ID: </span><span class="p-data-element">234863516846314</span></span>
                <span id="cs-dob"><span class="p-label">DOB: </span><span class="p-data-element">01/01/1950</span></span>
            </span>
        </div>
        <div class="body" style="display:none">
            <div class="panelbar-content">
                <span class="p-left">
                    <div class="row">
                        <span class="label">MA #</span>
                        <span class="data-element">68434684684</span>
                    </div>
                    <div class="row">
                        <span class="label">Primary Langugage:</span>
                        <span class="data-element">English</span>
                    </div>
                    <div class="row">
                        <span class="label">Phone #</span>
                        <span class="data-element">(123) 456-7890</span>
                    </div>
                </span>
                <span class="p-right">
                    <div class="row">
                        <span class="label">Facility Name:</span>
                        <span class="data-element">N/A</span>
                    </div>
                    <div class="row">
                        <span class="label">Jurisdiction/County:</span>
                        <span class="data-element">Baltimore</span>
                    </div>
                    <div class="row">
                        <span class="label">Address:</span>
                        <span class="data-element">123 Main Way<br/>Baltimore, MD 20010</span>
                    </div>
                </span>
            </div>
        </div>
    </div>
</div>        
<script>
	$(document).ready(function () {
		$('.js-breadCrumbPanelbar').panelBar();
		ltssPanelBar.collapseAll('.js-breadCrumbPanelbar');
	});
</script>
