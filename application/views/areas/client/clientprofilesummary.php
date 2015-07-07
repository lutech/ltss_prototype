
<?php $WorkspaceHeader ='
    <h3>'.$_COOKIE["CommonLabel_Clients_Ownership"].' Profile — Overview</h3>
    <div class="workspace-header-bar">
        <div class="float-right">
            <button id="expandCollapseAll" runat="server">
            </button>
        </div>
    </div>
'?>


<?php $Body ='
<div class="panelbar-formheader-style genericform-style read-only">
    <div class="panel">
        <div class="header">
            <h4>Demographic Information</h4>
            <div class="form-action TaskDetailLink">
                <a href="#">Edit</a>
            </div>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">'.$_COOKIE["CommonLabel_Clients_Ownership"].' Information</legend>
                    <div class="row">
                        <label class="complete-required">Last Name:</label>
                        <input type="text" value="Smith" class="readonly"/>
                    </div>
                    <div class="row">
                        <label class="complete-required">First Name:</label>
                        <input type="text" value="Cicio" class="readonly"/>
                    </div>
                    <div class="row">
                    <label class="complete-required">Middle Name:</label>
                    <input type="text" value="Alfred" class="readonly" />
                </div>
                    <div class="row">
                        <label>Suffix:</label>
                        <input type="text" value="" class="readonly frequency"/>
                    </div>
                    <div class="row">
                        <label class="complete-required">Date of Birth:</label>
                        <input type="text" value="01/01/1950"  class="readonly"/>
                    </div>
                    <div class="row">
                        <label class="complete-required">Gender:</label>
                        <select class="readonly">
                            <option value="0" checked>Male</option>
                            <option value="1" checked>Female</option>
                        </select>
                    </div>
                    <div class="row">
                        <label>Individual identifier:</label>
                        <input type="text" value="Caucasian" readonly/>
                    </div>
                    <div class="row">
                <label class="complete-required">SSN #</label>
                <input type="text" class="readonly" />
            </div>
                </fieldset>
            </div>
        </div>
    </div>

    <div class="panel">
        <div class="header">
            <h4>Phone #</h4>
            <div class="form-action TaskDetailLink">
                <a href="#">Manage</a>
            </div>
        </div>
        <div class="body">
            <table class="inline-dataTable">
                <thead>
                    <tr>
                        <th width="10%">Primary</td>
                        <th width="20%">Phone Type</td>
                        <th width="20%">Phone #</td>
                        <th width="50%">Notes</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Primary</td>
                        <td>Home</td>
                        <td>666-444-3213</td>
                        <td>
                             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="panel">
        <div class="header">
            <h4>Address</h4>
            <div class="form-action TaskDetailLink">
                <a href="'.base_url()."index.php/client/manageAddress".'">Manage</a>
            </div>
        </div>
        <div class="body">
            <table class="inline-dataTable">
                <thead>
                    <tr>
                        <th width="15%">Address Type</td>
                        <th width="20%">Address</td>
                        <th width="15%">County</td>
                        <th width="15%">Township Code</td>
                        <th width="25%">Address Description</td>
                    </tr>
                </thead>
                <tbody>
                    <tr id="addedAddress">
                        <td>Mailing, Current Physical</td>
                        <td>123 ABC Street, Childsburg, IL 00000</td>
                        <td>Adams County</td>
                        <td></td>
                        <td>Sister&#8217;s House</td>
                    </tr>
                    <tr>
                        <td>Current Mailing</td>
                        <td>123 Sesame Street, Childsburg, IL 00000</td>
                        <td>Adams County</td>
                        <td></td>
                        <td></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <div class="panel">
        <div class="header">
            <h4>Email</h4>
            <div class="form-action TaskDetailLink">
                <a href="#">Manage</a>
            </div>
        </div>
        <div class="body">
            <table class="inline-dataTable">
                <thead>
                    <tr>
                        <th width="10%"></td>
                        <th width="20%"></td>
                        <td width="20%"></td>
                        <td width="20%"></td>
                        <td width="50%"></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="panel">
        <div class="header">
            <h4>Additional Information</h4>
            <div class="form-action TaskDetailLink">
                <a href="#">Edit</a>
            </div>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                <fieldset class="fieldset-container-one">
                    <legend class="legend-header-one">'.$_COOKIE["CommonLabel_Clients_Ownership"].' Information</legend>
                    <div class="row">
                        <label class="complete-required">Last Name:</label>
                        <input type="text" value="Smith"/>
                    </div>
                    <div class="row">
                        <label class="complete-required">First Name:</label>
                        <input type="text" value="Cicio"/>
                    </div>
                    <div class="row">
                        <label class="complete-required">Middle Name:</label>
                        <input type="text" value="Alfred"/>
                    </div>
                    <div class="row">
                        <label>Preferred Name:</label>
                        <input type="text" value="Cicio"/>
                    </div>
                    <div class="row">
                        <label >Suffix:</label>
                        <input type="text"/>
                    </div>
                    <div class="row">
                        <label class="complete-required">Date of Birth:</label>
                        <input type="text" value="01/01/1950"/>
                    </div>
                    <div class="row">
                        <label class="complete-required">Gender:</label>
                        <select>
                            <option value="0" checked>Male</option>
                            <option value="1" checked>Female</option>
                        </select>
                    </div>
                    <div class="row">
                        <label>Race:</label>
                        <input type="text" value="Caucasian"/>
                    </div>
                    <div class="row">
                        <label class="complete-required">Please Specify Other Race:</label>
                        <textarea class="comments-textarea"></textarea>
                    </div>
                    <div class="row">
                        <label class="complete-required">Hispanic?</label>
                        <select>
                            <option value="0">Yes</option>
                            <option value="1" checked>No</option>
                        </select>
                    </div>
                    <div class="row">
                        <label class="complete-required">Jurisdiction:</label>
                        <select>
                        	<option value="0" checked>Baltimore</option>
                        </select>
                    </div>
                    <div class="row">
                        <label>Moving to Jurisdiction:</label>
                        <input type="text" value=""/>
                    </div>
                    <div class="row">
                        <label>Specify County:</label>
                        <input type="text"/>
                    </div>
                </fieldset>
                <fieldset class="fieldset-container-one">
                    <legend class="legend-header-one">Additional Information</legend>
                    <div class="row">
                        <label>Client Identifier:</label>
                        <input type="text" value="MD49384JD4830"/>
                    </div>
                    <div class="row">
                        <label class="complete-required">Social Security:</label>
                        <input type="text" value="938-34-9583"/>
                    </div>
                    <div class="row">
                        <label>Medicare #</label>
                        <input type="text" value="68434684684"/>
                    </div>
                    <div class="row">
                        <label>Marital Status:</label>
                        <input type="text" value="Married"/>
                    </div>
                    <div class="row">
                        <label>Primary Language:</label>
                         <select class="readonly">
                        	<option value="0" checked>English</option>
                        </select>
                    </div>
                    <div class="row">
                       <label>Specify Language :</label>
                    	<textarea class="comments-textarea"></textarea>
                    </div>
                    <div class="row">
                        <label>Date of Death:</label>
                        <input type="text"/>
                    </div>
                    <div class="row">
                        <label>Facility Name:</label>
                        <input type="text" value="New Haven"/>
                    </div>
                </fieldset>

            </div>
        </div>
    </div>

<!--  <div class="panel">
        <div class="header">
            <h4>Representatives</h4>
            <div class="form-action TaskDetailLink">
                <a href="#">Add Representative</a>
            </div>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                    <h5>Representative</h5>
                    <div class="fieldset-container-one">
                        <nav class="header-link">
                           <a href="#">Edit</a>
                           <a href="#">Delete</a>
                        </nav>
                        <div class="row">
                        <div class="column-left">
                            <p class="row summary">
                                <span class="label">Name:</span>
                                <span class="data-element">John Doe</span>
                            </p>
                            <p class="row summary">
                                <span class="label">Relationship:</span>
                                
                                <span class="data-element">Name:</span>Guardian
                            </p>
                            <p class="row summary">
                                <span class="label">Primary Phone #</span>
                                <span class="data-element"(456) 487-8592</span>
                            </p>
                            <p class="row summary">
                                <span class="label">Address:</span>
                                <span class="data-element">
                                	456 Ivy Way<br/>
                                    Baltimore, MD 20010
                                </span>
                            </p>

                            <p class="row summary">
                                <span class="label">Guardian of Person:</span>
                                <span class="data-element">Yes</span>
                            </p>
                            <p class="row summary">
                                <span class="label">Guardian of Property:</span>
                                <span class="data-element">Yes</span>
                            </p>

                            <p class="row summary">
                                <span class="label">Surrogate:</span>
                                <span class="data-element">No</span>
                            </p>

                            <p class="row summary">
                                <span class="label">Current Representative Payee:</span>
                                <span class="data-element">Yes</span>
                            </p>

                            <p class="row summary">
                                <span class="label">Current Power of Attorney Contact:</span>
                                <span class="data-element">Yes</span
                            </p>
                        </div>
                            <div class="column-right">
                                <p class="row summary">
                                    <span class="label">Current Durable Power of Attorney Contact:</span>
                                    <span class="data-element">No</span>
                                </p>
                                <p class="row summary">
                                    <span class="label">Current Casemanager or Service Coordinator Contact:</span>
                                    <span class="data-element">No</span>
                                </p>

                                <p class="row summary">
                                    <span class="label">Current Physician:</span>
                                    <span class="data-element">No</span>
                                </p>

                                <p class="row summary">
                                    <span class="label">Current Emergency Contact:</span>
                                    <span class="data-element">Yes</span>
                                </p>
                                <p class="row summary">
                                    <span class="label">Receive copies of all letters about my eligibility and discuss my eligibility:</span>
                                    <span class="data-element">Yes</span>
                                </p>
                                <div class="row summary">
                                    <span class="label">Receive and complete my annual application form for me:</span>
                                    <span class="data-element">Yes</span>
                                </div>
                                <p class="row summary">
                                    <span class="label">Receive a Medicaid Card on my behalf:</span>
                                    <span class="data-element">Yes</span>
                                </p>
                            </div>
                        </div>
                        <div class="row">                        
                            <label>Notes:</label>
                            <textarea class="comments-textarea"readonly="readonly" class="readonly"></textarea>
                        </div>
                    </div>
            </div>
        </div>
    </div> -->
<!--
    <div class="panel">
        <div class="header">
            <h4>Advanced Directives</h4>
            <div class="form-action TaskDetailLink">
                <a href="#">Edit</a>
            </div>
        </div>
        <div class="body">
            <div class="form-panelbar-content">
                <fieldset class="fieldset-container-one">
                    <legend class="legend-header-one">Advanced Directives</legend>
                    <div class="row">
                        <fieldset class="grouped-radiobuttons">
                            <legend>DNR:</legend>
                            <input type="radio" id="DnrYes" name="dnr" checked/>
                            <label for="DnrYes" class="grouped-radiobuttons-label">Yes</label>
                            <input type="radio" id="DnrNo" name="dnr"/>
                            <label for="DnrNo" class="grouped-radiobuttons-label">No</label>
                            <input type="radio" id="DnrUnknown" name="dnr"/>
                            <label for="DnrUnknown" class="grouped-radiobuttons-label">Unknown</label>
                        </fieldset>
                    </div>
                    <div class="row">
                        <fieldset class="grouped-radiobuttons">
                            <legend>Living Will:</legend>
                            <input type="radio" id="LivingWillYes" name="LivingWill" checked/>
                            <label for="DnrYes" class="grouped-radiobuttons-label">Yes</label>
                            <input type="radio" id="LivingWillNo" name="LivingWill"/>
                            <label for="DnrNo" class="grouped-radiobuttons-label">No</label>
                            <input type="radio" id="LivingWillUnknown" name="LivingWill"/>
                            <label for="DnrUnknown" class="grouped-radiobuttons-label">Unknown</label>
                        </fieldset>
                    </div>
                    <div class="row">
                        <fieldset class="grouped-radiobuttons">
                            <legend>Medical POA:</legend>
                            <input type="radio" id="PoaYes" name="Poa" checked/>
                            <label for="DnrYes" class="grouped-radiobuttons-label">Yes</label>
                            <input type="radio" id="PoaNo" name="Poa"/>
                            <label for="DnrNo" class="grouped-radiobuttons-label">No</label>
                            <input type="radio" id="PoaUnknown" name="Poa"/>
                            <label for="DnrUnknown" class="grouped-radiobuttons-label">Unknown</label>
                        </fieldset>
                    </div>
                    <div class="row">
                        <fieldset class="grouped-radiobuttons">
                            <legend>Medical POA Durable:</legend>
                            <input type="radio" id="PoadYes" name="Poad"/>
                            <label for="DnrYes" class="grouped-radiobuttons-label">Yes</label>
                            <input type="radio" id="PoadNo" name="Poad"/>
                            <label for="DnrNo" class="grouped-radiobuttons-label">No</label>
                            <input type="radio" id="PoadUnknown" name="Poad" checked/>
                            <label for="DnrUnknown" class="grouped-radiobuttons-label">Unknown</label>
                        </fieldset>
                    </div>
                    <div class="row">
                        <fieldset class="grouped-radiobuttons">
                            <legend>General POA:</legend>
                            <input type="radio" id="GpoaYes" name="Gpoa"/>
                            <label for="DnrYes" class="grouped-radiobuttons-label">Yes</label>
                            <input type="radio" id="GpoaNo" name="Gpoa" checked/>
                            <label for="DnrNo" class="grouped-radiobuttons-label">No</label>
                            <input type="radio" id="GpoaUnknown" name="Gpoa"/>
                            <label for="DnrUnknown" class="grouped-radiobuttons-label">Unknown</label>
                        </fieldset>
                    </div>
                    <div class="row">
                        <fieldset class="grouped-radiobuttons">
                            <legend>General POA Durable:</legend>
                            <input type="radio" id="GpoadYes" name="Gpoad"/>
                            <label for="DnrYes" class="grouped-radiobuttons-label">Yes</label>
                            <input type="radio" id="GpoadNo" name="Gpoad"/>
                            <label for="DnrNo" class="grouped-radiobuttons-label" checked>No</label>
                            <input type="radio" id="GpoadUnknown" name="Gpoad"/>
                            <label for="DnrUnknown" class="grouped-radiobuttons-label">Unknown</label>
                        </fieldset>
                    </div>
                    <div class="row">
                        <fieldset class="grouped-radiobuttons">
                            <legend>Guardian of Person:</legend>
                            <input type="radio" id="GuardianYes" name="Guardian" checked/>
                            <label for="DnrYes" class="grouped-radiobuttons-label">Yes</label>
                            <input type="radio" id="GuardianNo" name="Guardian"/>
                            <label for="DnrNo" class="grouped-radiobuttons-label">No</label>
                            <input type="radio" id="GuardianUnknown" name="Guardian"/>
                            <label for="DnrUnknown" class="grouped-radiobuttons-label">Unknown</label>
                        </fieldset>
                    </div>
                    <div class="row">
                        <fieldset class="grouped-radiobuttons">
                            <legend>Guardian of Property:</legend>
                            <input type="radio" id="GuardianPropertyYes" name="GuardianProperty" checked/>
                            <label for="DnrYes" class="grouped-radiobuttons-label">Yes</label>
                            <input type="radio" id="GuardianPropertyNo" name="GuardianProperty"/>
                            <label for="DnrNo" class="grouped-radiobuttons-label">No</label>
                            <input type="radio" id="GuardianPropertyUnknown" name="GuardianProperty"/>
                            <label for="DnrUnknown" class="grouped-radiobuttons-label">Unknown</label>
                        </fieldset>
                    </div>
                    <div class="row">
                        <fieldset class="grouped-radiobuttons">
                            <legend>Surrogate:</legend>
                            <input type="radio" id="SurrogateYes" name="Surrogate"/>
                            <label for="DnrYes" class="grouped-radiobuttons-label">Yes</label>
                            <input type="radio" id="SurrogateNo" name="Surrogate" checked/>
                            <label for="DnrNo" class="grouped-radiobuttons-label">No</label>
                            <input type="radio" id="SurrogateUnknown" name="Surrogate"/>
                            <label for="DnrUnknown" class="grouped-radiobuttons-label">Unknown</label>
                        </fieldset>
                    </div>
                </fieldset>
            </div>
        </div>
    </div> -->

</div>
'?>

<?php $Script ='
<script type="text/javascript">
    $( document ).ready(function() {
        $("#addedAddress").hide();

        var referrer = document.referrer;
        if (referrer == "http://localhost/ltss_prototype/index.php/client/manageAddress") {
            $("#addedAddress").show();
        }
    });

</script>
'?>