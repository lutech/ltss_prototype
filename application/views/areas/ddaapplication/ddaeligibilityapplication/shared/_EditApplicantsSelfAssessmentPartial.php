<?php
$applicantsSelfAssessmentContent = '
        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one submit-required">Please check all disabilities that you have been diagnosed with:</legend>
            <div class="column-left">
                <div class="row">
                    <input id="autism" value="autism" type="checkbox" name="disabilitiesDiagnosedWith"/>
                    <label for="autism">Autism</label>
                </div>
                <div class="row">
                    <input id="behavioralProblems" value="behavioralProblems" type="checkbox" name="disabilitiesDiagnosedWith"/>
                    <label for="behavioralProblems">Behavioral Problems</label>
                </div>
                <div class="row">
                    <input id="blindness" value="blindness" type="checkbox" name="disabilitiesDiagnosedWith"/>
                    <label for="blindness">Blindness/Severe Visual Impairment</label>
                </div>
                <div class="row">
                    <input id="cerebralPalsy" value="cerebralPalsy" type="checkbox" name="disabilitiesDiagnosedWith"/>
                    <label for="cerebralPalsy">Cerebral Palsy</label>
                </div>
                <div class="row">
                    <input id="chemeicalDependency" value="chemeicalDependency" type="checkbox" name="disabilitiesDiagnosedWith"/>
                    <label for="chemeicalDependency">Chemical Dependency (includes alcoholism)</label>
                </div>
                <div class="row">
                    <input id="cysticFibrosis" value="cysticFibrosis" type="checkbox" name="disabilitiesDiagnosedWith"/>
                    <label for="cysticFibrosis">Cystic Fibrosis</label>
                </div>
                <div class="row">
                    <input id="deafness" value="deafness" type="checkbox" name="disabilitiesDiagnosedWith"/>
                    <label for="deafness">Deafness/Severe Hearing Impairment</label>
                </div>
                <div class="row">
                    <input id="epilepsy" value="epilepsy" type="checkbox" name="disabilitiesDiagnosedWith"/>
                    <label for="epilepsy">Epilepsy/Seizure Disorder</label>
                </div>
                <div class="row">
                    <input id="otherNeurologicalImpairment" value="otherNeurologicalImpairment" type="checkbox" name="disabilitiesDiagnosedWith"/>
                    <label for="otherNeurologicalImpairment">Other Neurological Impairment</label>
                    <div class="fieldset-container-three" id="otherNeurologicalImpairmentContainer" style="display:none">
                        <div class="row">
                            <label class="complete-required" for="descrbeOtherNeurologicalImpairments">Explain:</label>
                            <textarea class="required comments-textarea" required="required" id="descrbeOtherNeurologicalImpairments" name="descrbeOtherNeurologicalImpairments"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-left">
                <div class="row">
                    <input id="headInjury" value="headInjury" type="checkbox" name="disabilitiesDiagnosedWith"/>
                    <label for="headInjury">Head Injury</label>
                </div>
                <div class="row">
                    <input id="intellectualDisablility" value="intellectualDisablility" type="checkbox" name="disabilitiesDiagnosedWith"/>
                    <label for="intellectualDisablility">Intellectual Disablity</label>
                </div>
                <div class="row">
                    <input id="multipleSclerosis" value="multipleSclerosis" type="checkbox" name="disabilitiesDiagnosedWith"/>
                    <label for="multipleSclerosis">Multiple Sclerosis</label>
                </div>
                <div class="row">
                    <input id="orthopedicImpairment" value="orthopedicImpairment" type="checkbox" name="disabilitiesDiagnosedWith"/>
                    <label for="orthopedicImpairment">Orthopedic Impairment</label>
                </div>
                <div class="row">
                    <input id="speechImpairment" value="speechImpairment" type="checkbox" name="disabilitiesDiagnosedWith"/>
                    <label for="speechImpairment">Speech/Language Impairment</label>
                </div>
                <div class="row">
                    <input id="spinaBifida" value="spinaBifida" type="checkbox" name="disabilitiesDiagnosedWith"/>
                    <label for="spinaBifida">Spina Bifida</label>
                </div>
                <div class="row">
                    <input id="spinalCordInjury" value="spinalCordInjury" type="checkbox" name="disabilitiesDiagnosedWith"/>
                    <label for="spinalCordInjury">Spinal Cord Injury</label>
                </div>
                <div class="row">
                    <input id="mentalIllness" value="mentalIllness" type="checkbox" name="disabilitiesDiagnosedWith"/>
                    <label for="mentalIllness">Mental Illness</label>
                </div>
            </div>
        </fieldset>
        <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">Please check any statement that tells us about you and the supports you usually need:</legend>
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two submit-required">How do you get around?</legend>
            <div class="column-left">
                 <div class="row">
                    <input id="walkIndependently" value="walkIndependently" type="checkbox" name="mobilityDiagnosis"/>
                    <label for="walkIndependently">I walk independently</label>
                </div>
                <div class="row">
                    <input id="walkWithDifficulty" value="walkWithDifficulty" type="checkbox" name="mobilityDiagnosis"/>
                    <label for="walkWithDifficulty">I can walk unaided, but with difficulty</label>
                </div>
                <div class="row">
                    <input id="walkWithSupportiveDevices" value="walkWithSupportiveDevices" type="checkbox" name="mobilityDiagnosis"/>
                    <label for="walkWithSupportiveDevices">I require supportive devices when I walk</label>
                </div>
                <div class="row">
                    <input id="powerWheelchair" value="powerWheelchair" type="checkbox" name="mobilityDiagnosis"/>
                    <label for="powerWheelchair">I use a power wheelchair</label>
                </div>
                <div class="row">
                    <input id="otherMeansToGetAround" value="otherMeansToGetAround" type="checkbox" name="mobilityDiagnosis"/>
                    <label for="otherMeansToGetAround">Other</label>
                    <div class="fieldset-container-three" id="otherMeansToGetAroundContainer" style="display:none">
                        <div class="row">
                            <label class="complete-required" for="explainOtherMeansToGetAround">Explain:</label>
                            <textarea class="required comments-textarea" required="required" id="explainOtherMeansToGetAround" name="explainOtherMeansToGetAround"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-left">
                <div class="row">
                    <input id="powerWheelchair" value="powerWheelchair" type="checkbox" name="mobilityDiagnosis"/>
                    <label for="powerWheelchair">I use a power wheelchair</label>
                </div>
                 <div class="row">
                    <input id="manualWheelchair" value="manualWheelchair" type="checkbox" name="mobilityDiagnosis"/>
                    <label for="manualWheelchair">I use a manual wheelchair</label>
                </div>
                <div class="row">
                    <input id="scooter" value="scooter" type="checkbox" name="mobilityDiagnosis"/>
                    <label for="scooter">I use a scooter</label>
                </div>
                <div class="row">
                    <input id="unableToMoveIndependently" value="unableToMoveIndependently" type="checkbox" name="mobilityDiagnosis"/>
                    <label for="unableToMoveIndependently">I am unable to move independently</label>
                </div>
            </div>
        </fieldset>
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two submit-required">Do you require assistance?</legend>
            <div class="column-left">
                 <div class="row">
                    <input id="noAssistanceNeeded" value="noAssistanceNeeded" type="checkbox" name="assistanceRequired"/>
                    <label for="noAssistanceNeeded">I do not need assistance</label>
                </div>
                 <div class="row">
                    <input id="occasionalAssistance" value="occasionalAssistance" type="checkbox" name="assistanceRequired"/>
                    <label for="occasionalAssistance">I need occasional assistance. Several hours per day up to 3 days per week</label>
                </div>
                 <div class="row">
                    <input id="minimalAssistance" value="minimalAssistance" type="checkbox" name="assistanceRequired"/>
                    <label for="minimalAssistance">I need minimal daily assistance. 1-2 hours per day</label>
                </div>
                <div class="row">
                    <input id="otherAssistanceRequired" value="otherAssistanceRequired" type="checkbox" name="assistanceRequired"/>
                    <label for="otherAssistanceRequired">Other</label>
                    <div class="fieldset-container-three" id="otherAssistanceRequiredContainer" style="display:none">
                        <div class="row">
                            <label class="complete-required" for="explainOtherAssistanceRequired">Explain:</label>
                            <textarea class="required comments-textarea" required="required" id="explainOtherAssistanceRequired" name="explainOtherAssistanceRequired"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-left">
                 <div class="row">
                    <input id="substantialAssistance" value="substantialAssistance" type="checkbox" name="assistanceRequired"/>
                    <label for="substantialAssistance">I need substantial daily assistance. 8 hours or more per day</label>
                </div>
                 <div class="row">
                    <input id="continuousAssistanceWhileAwake" value="continuousAssistanceWhileAwake" type="checkbox" name="assistanceRequired"/>
                    <label for="continuousAssistanceWhileAwake">I need continuous assistance when I am awake</label>
                </div>
                 <div class="row">
                    <input id="24HourAssistance" value="24HourAssistance" type="checkbox" name="assistanceRequired"/>
                    <label for="24HourAssistance">I need continuous 24 hours per day assistance</label>
                </div>
            </div>
        </fieldset>


        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two submit-required">How do you communicate?</legend>
            <div class="column-left">
                 <div class="row">
                    <input id="clearlyUnderstood" value="clearlyUnderstood" type="checkbox" name="communicationDiagnosis"/>
                    <label for="clearlyUnderstood">I speak clearly and can be understood</label>
                </div>
                 <div class="row">
                    <input id="difficultToUnderstand" value="difficultToUnderstand" type="checkbox" name="communicationDiagnosis"/>
                    <label for="difficultToUnderstand">My speech is difficult to understand</label>
                </div>
                 <div class="row">
                    <input id="gestures" value="gestures" type="checkbox" name="communicationDiagnosis"/>
                    <label for="gestures">I use gestures to communicate</label>
                </div>
                <div class="row">
                    <input id="otherMeansToCommunicate" value="otherMeansToCommunicate" type="checkbox" name="communicationDiagnosis"/>
                    <label for="otherMeansToCommunicate">Other</label>
                    <div class="fieldset-container-three" id="otherMeansToCommunicateContainer" style="display:none">
                        <div class="row">
                            <label class="complete-required" for="explainOtherMeansToCommunicate">Explain:</label>
                            <textarea class="required comments-textarea" required="required" id="explainOtherMeansToCommunicate" name="explainOtherMeansToCommunicate"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-left">
                 <div class="row">
                    <input id="signLanguage" value="signLanguage" type="checkbox" name="communicationDiagnosis"/>
                    <label for="signLanguage">I use sign language to communicate</label>
                </div>
                 <div class="row">
                    <input id="communicationDevice" value="communicationDevice" type="checkbox" name="communicationDiagnosis"/>
                    <label for="communicationDevice">I require a communication device to communicate</label>
                </div>
                 <div class="row">
                    <input id="helpToCommunicate" value="helpToCommunicate" type="checkbox" name="communicationDiagnosis"/>
                    <label for="helpToCommunicate">I need help from others to communicate</label>
                </div>
            </div>
        </fieldset>


        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two submit-required">Do you use any of these services?</legend>
            <div class="column-left">
                 <div class="row">
                    <input id="speechTherapy" value="speechTherapy" type="checkbox" name="servicesInUse"/>
                    <label for="speechTherapy">Speech Therapy</label>
                </div>
                 <div class="row">
                    <input id="occupationalTherapy" value="occupationalTherapy" type="checkbox" name="servicesInUse"/>
                    <label for="occupationalTherapy">Occupational Therapy</label>
                </div>
                 <div class="row">
                    <input id="physicalTherapy" value="physicalTherapy" type="checkbox" name="servicesInUse"/>
                    <label for="physicalTherapy">Physical Therapy</label>
                </div>
                 <div class="row">
                    <input id="specilizedMedicalCare" value="specilizedMedicalCare" type="checkbox" name="servicesInUse"/>
                    <label for="specilizedMedicalCare">Specialized Medical Care</label>
                </div>
            </div>
            <div class="column-left">
                 <div class="row">
                    <input id="behavioralSupportService" value="behavioralSupportService" type="checkbox" name="servicesInUse"/>
                    <label for="behavioralSupportService">Behavioral Support Service</label>
                </div>
                 <div class="row">
                    <input id="counseling" value="counseling" type="checkbox" name="servicesInUse"/>
                    <label for="counseling">Counseling</label>
                </div>
                 <div class="row">
                    <input id="psychiatricTreatment" value="psychiatricTreatment" type="checkbox" name="servicesInUse"/>
                    <label for="psychiatricTreatment">Psychiatric Treatment</label>
                </div>
                <div class="row">
                    <input id="otherServicesInUse" value="otherServicesInUse" type="checkbox" name="servicesInUse"/>
                    <label for="otherServicesInUse">Other</label>
                    <div class="fieldset-container-three" id="otherServicesInUseContainer" style="display:none">
                        <div class="row">
                            <label class="complete-required" for="explainOtherServicesInUse">Explain:</label>
                            <textarea class="required comments-textarea" required="required" id="explainOtherServicesInUse" name="explainOtherServicesInUse"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>

    </fieldset>

        <fieldset class="fieldset-container-one">
            <legend class="legend-header-one">Please select the statement that tells us about you and the supports you usually need:</legend>
            <div class="row">
                <label class="submit-required" for="eating" class="submit-required">Eating:</label>
                <select name="eating" id="eating">
                    <option value=""></option>
                    <option value="completelyIndependent">Completely Independent</option>
                    <option value="needsAssistance">Needs Assistance</option>
                    <option value="completelyDependent">Completely Dependent</option>
                </select>
            </div>
            <div class="row">
                <label class="submit-required" for="dressing" class="submit-required">Dressing:</label>
                <select name="dressing" id="dressing">
                    <option value=""></option>
                    <option value="completelyIndependent">Completely Independent</option>
                    <option value="needsAssistance">Needs Assistance</option>
                    <option value="completelyDependent">Completely Dependent</option>
                </select>
            </div>
            <div class="row">
                <label class="submit-required" for="bathing" class="submit-required">Bathing:</label>
                <select name="bathing" id="bathing">
                    <option value=""></option>
                    <option value="completelyIndependent">Completely Independent</option>
                    <option value="needsAssistance">Needs Assistance</option>
                    <option value="completelyDependent">Completely Dependent</option>
                </select>
            </div>
            <div class="row">
                <label class="submit-required" for="toileting" class="submit-required">Toileting:</label>
                <select name="toileting" id="toileting">
                    <option value=""></option>
                    <option value="completelyIndependent">Completely Independent</option>
                    <option value="needsAssistance">Needs Assistance</option>
                    <option value="completelyDependent">Completely Dependent</option>
                </select>
            </div>
            <div class="row">
                <label class="submit-required" for="grooming" class="submit-required">Grooming:</label>
                <select name="grooming" id="grooming">
                    <option value=""></option>
                    <option value="completelyIndependent">Completely Independent</option>
                    <option value="needsAssistance">Needs Assistance</option>
                    <option value="completelyDependent">Completely Dependent</option>
                </select>
            </div>
            <div class="row">
                <label class="submit-required" for="bedTransfers" class="submit-required">Transfers In/Out of Bed:</label>
                <select name="bedTransfers" id="bedTransfers">
                    <option value=""></option>
                    <option value="completelyIndependent">Completely Independent</option>
                    <option value="needsAssistance">Needs Assistance</option>
                    <option value="completelyDependent">Completely Dependent</option>
                </select>
            </div>
            <div class="row">
                <label class="submit-required" for="foodPrepartion" class="submit-required">Preparing Simple Foods:</label>
                <select name="foodPrepartion" id="foodPrepartion">
                    <option value=""></option>
                    <option value="completelyIndependent">Completely Independent</option>
                    <option value="needsAssistance">Needs Assistance</option>
                    <option value="completelyDependent">Completely Dependent</option>
                </select>
            </div>
            <div class="row">
                <label class="submit-required" for="householdTasks" class="submit-required">Completing Household Tasks:</label>
                <select name="householdTasks" id="householdTasks">
                    <option value=""></option>
                    <option value="completelyIndependent">Completely Independent</option>
                    <option value="needsAssistance">Needs Assistance</option>
                    <option value="completelyDependent">Completely Dependent</option>
                </select>
            </div>
            <div class="row">
                <label class="submit-required" for="publicTransportation" class="submit-required">Using Public Transportation:</label>
                <select name="publicTransportation" id="publicTransportation">
                    <option value=""></option>
                    <option value="completelyIndependent">Completely Independent</option>
                    <option value="needsAssistance">Needs Assistance</option>
                    <option value="completelyDependent">Completely Dependent</option>
                </select>
            </div>
            <div class="row">
                <label class="submit-required" for="telephone" class="submit-required">Using the Telephone:</label>
                <select name="telephone" id="telephone">
                    <option value=""></option>
                    <option value="completelyIndependent">Completely Independent</option>
                    <option value="needsAssistance">Needs Assistance</option>
                    <option value="completelyDependent">Completely Dependent</option>
                </select>
            </div>
            <div class="row">
                <label class="submit-required" for="emergency" class="submit-required">Knowing what to do in an emergency:</label>
                <select name="emergency" id="emergency">
                    <option value=""></option>
                    <option value="completelyIndependent">Completely Independent</option>
                    <option value="needsAssistance">Needs Assistance</option>
                    <option value="completelyDependent">Completely Dependent</option>
                </select>
            </div>
        </fieldset>

    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">Please Identify the other agencies or programs from which  you are currently receiving services or have received services in the past</legend>

        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two">Agency</legend>
            <div class="column-left">
                 <div class="row">
                    <input id="dss" value="dss" type="checkbox" name="agencyServices"/>
                    <label for="dss">Department of Social Services (DSS)</label>
                    <div class="fieldset-container-three" id="dssContainer" style="display:none">
                        <div class="row">
                            <label class="submit-required" for="dssStatus">Status</label>
                            <select name="dssStatus" id="dssStatus">
                                <options value=""></options>
                                <options value="AppliedStatus">Applied</options>
                                <options value="currentlyServedStatus">Currently served</options>
                                <options value="servedInPastStatus">Served in the past</options>
                                <options value="notAppliedStatus">Have not applied</options>
                            </select>
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <input id="boardOfEducation" value="boardOfEducation" type="checkbox" name="agencyServices"/>
                    <label for="boardOfEducation">Board of Education(Local School System)</label>
                    <div class="fieldset-container-three" id="boardOfEducationContainer" style="display:none">
                        <div class="row">
                            <label class="submit-required" for="boardOfEducationStatus">Status</label>
                            <select name="boardOfEducationStatus" id="boardOfEducationStatus">
                                <options value=""></options>
                                <options value="AppliedStatus">Applied</options>
                                <options value="currentlyServedStatus">Currently served</options>
                                <options value="servedInPastStatus">Served in the past</options>
                                <options value="notAppliedStatus">Have not applied</options>
                            </select>
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <input id="localHealthDept" value="localHealthDept" type="checkbox" name="agencyServices"/>
                    <label for="localHealthDept">Local Health Department</label>
                    <div class="fieldset-container-three" id="localHealthDeptContainer" style="display:none">
                        <div class="row">
                            <label class="submit-required" for="localHealthDeptStatus">Status</label>
                            <select name="localHealthDeptStatus" id="localHealthDeptStatus">
                                <options value=""></options>
                                <options value="AppliedStatus">Applied</options>
                                <options value="currentlyServedStatus">Currently served</options>
                                <options value="servedInPastStatus">Served in the past</options>
                                <options value="notAppliedStatus">Have not applied</options>
                            </select>
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <input id="officeOnAging" value="officeOnAging" type="checkbox" name="agencyServices"/>
                    <label for="officeOnAging">Area Office on Aging</label>
                    <div class="fieldset-container-three" id="officeOnAgingContainer" style="display:none">
                        <div class="row">
                            <label class="submit-required" for="officeOnAgingStatus">Status</label>
                            <select name="officeOnAgingStatus" id="officeOnAgingStatus">
                                <options value=""></options>
                                <options value="AppliedStatus">Applied</options>
                                <options value="currentlyServedStatus">Currently served</options>
                                <options value="servedInPastStatus">Served in the past</options>
                                <options value="notAppliedStatus">Have not applied</options>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <input id="otherAgencyServices" value="otherAgencyServices" type="checkbox" name="agencyServices"/>
                    <label for="otherAgencyServices">Other</label>
                    <div class="fieldset-container-three" id="otherAgencyServicesContainer" style="display:none">
                        <div class="row">
                            <label class="complete-required" for="listOtherAgencyServices">Please List:</label>
                            <textarea class="required comments-textarea" required="required" id="listOtherAgencyServices" name="listOtherAgencyServices"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-left">
                 <div class="row">
                    <input id="dors" value="dors" type="checkbox" name="agencyServices"/>
                    <label for="dors">Division of Rehabilitation Services (DORS)</label>
                    <div class="fieldset-container-three" id="dorsContainer" style="display:none">
                        <div class="row">
                            <label class="submit-required" for="dorsStatus">Status</label>
                            <select name="dorsStatus" id="dorsStatus">
                                <options value=""></options>
                                <options value="AppliedStatus">Applied</options>
                                <options value="currentlyServedStatus">Currently served</options>
                                <options value="servedInPastStatus">Served in the past</options>
                                <options value="notAppliedStatus">Have not applied</options>
                            </select>
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <input id="mentalHealthServices" value="mentalHealthServices" type="checkbox" name="agencyServices"/>
                    <label for="mentalHealthServices">Mental Health Services</label>
                    <div class="fieldset-container-three" id="mentalHealthServicesContainer" style="display:none">
                        <div class="row">
                            <label for="mentalHealthServicesStatus">Status</label>
                            <select class="submit-required" name="mentalHealthServicesStatus" id="mentalHealthServicesStatus">
                                <options value=""></options>
                                <options value="AppliedStatus">Applied</options>
                                <options value="currentlyServedStatus">Currently served</options>
                                <options value="servedInPastStatus">Served in the past</options>
                                <options value="notAppliedStatus">Have not applied</options>
                            </select>
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <input id="nursingHomeServices" value="nursingHomeServices" type="checkbox" name="agencyServices"/>
                    <label for="nursingHomeServices">Nursing Home Services</label>
                    <div class="fieldset-container-three" id="nursingHomeServicesContainer" style="display:none">
                        <div class="row">
                            <label class="submit-required" for="nursingHomeServicesStatus">Status</label>
                            <select name="nursingHomeServicesStatus" id="nursingHomeServicesStatus">
                                <options value=""></options>
                                <options value="AppliedStatus">Applied</options>
                                <options value="currentlyServedStatus">Currently served</options>
                                <options value="servedInPastStatus">Served in the past</options>
                                <options value="notAppliedStatus">Have not applied</options>
                            </select>
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <input id="assistedLivingServices" value="assistedLivingServices" type="checkbox" name="agencyServices"/>
                    <label for="assistedLivingServices">Assisted Living Services</label>
                    <div class="fieldset-container-three" id="assistedLivingServicesContainer" style="display: none;">
                        <div class="row">
                            <label class="submit-required" for="assistedLivingServicesStatus">Status</label>
                            <select name="assistedLivingServicesStatus" id="assistedLivingServicesStatus">
                                <options value=""></options>
                                <options value="AppliedStatus">Applied</options>
                                <options value="currentlyServedStatus">Currently served</options>
                                <options value="servedInPastStatus">Served in the past</options>
                                <options value="notAppliedStatus">Have not applied</options>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
    </fieldset>

    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">Please identify any other programs for which you have applied, or services you currently receive or have previously received </legend>

        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two">Programs</legend>
            <div class="column-left">
                 <div class="row">
                    <input id="autismWaiver" value="autismWaiver" type="checkbox" name="programServices"/>
                    <label for="autismWaiver">Autism Waiver</label>
                    <div class="fieldset-container-three" id="autismWaiverContainer" style="display:none">
                        <div class="row">
                            <label class="submit-required" for="autismWaiverStatus">Status</label>
                            <select name="autismWaiverStatus" id="autismWaiverStatus">
                                <options value=""></options>
                                <options value="AppliedStatus">Applied</options>
                                <options value="currentlyServedStatus">Currently served</options>
                                <options value="previouslyServedStatus">Previously served</options>
                            </select>
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <input id="medicaidService" value="medicaidService" type="checkbox" name="programServices"/>
                    <label for="medicaidService">Personal Care (Medicaid Service)</label>
                    <div class="fieldset-container-three" id="medicaidServiceContainer" style="display:none">
                        <div class="row">
                            <label class="submit-required" for="medicaidServiceStatus">Status</label>
                            <select name="medicaidServiceStatus" id="medicaidServiceStatus">
                                <options value=""></options>
                                <options value="AppliedStatus">Applied</options>
                                <options value="currentlyServedStatus">Currently served</options>
                                <options value="previouslyServedStatus">Previously served</options>
                            </select>
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <input id="lahWaiver" value="lahWaiver" type="checkbox" name="programServices"/>
                    <label for="lahWaiver">Living at Home waiver</label>
                    <div class="fieldset-container-three" id="lahWaiverContainer" style="display:none">
                        <div class="row">
                            <label class=submit-required" for="lahWaiverStatus">Status</label>
                            <select name="lahWaiverStatus" id="lahWaiverStatus">
                                <options value=""></options>
                                <options value="AppliedStatus">Applied</options>
                                <options value="currentlyServedStatus">Currently served</options>
                                <options value="previouslyServedStatus">Previously served</options>
                            </select>
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <input id="mdcWaiver" value="mdcWaiver" type="checkbox" name="programServices"/>
                    <label for="mdcWaiver">Medical Day Care Waiver</label>
                    <div class="fieldset-container-three" id="mdcWaiverContainer" style="display:none">
                        <div class="row">
                            <label class="submit-required" for="mdcWaiverStatus">Status</label>
                            <select name="mdcWaiverStatus" id="mdcWaiverStatus">
                                <options value=""></options>
                                <options value="AppliedStatus">Applied</options>
                                <options value="currentlyServedStatus">Currently served</options>
                                <options value="previouslyServedStatus">Previously served</options>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-left">
                 <div class="row">
                    <input id="woaWaiver" value="woaWaiver" type="checkbox" name="programServices"/>
                    <label for="woaWaiver">Waiver for Older Adults</label>
                    <div class="fieldset-container-three" id="woaWaiverContainer" style="display:none">
                        <div class="row">
                            <label class="submit-required" for="woaWaiverStatus">Status</label>
                            <select name="woaWaiverStatus" id="woaWaiverStatus">
                                <options value=""></options>
                                <options value="AppliedStatus">Applied</options>
                                <options value="currentlyServedStatus">Currently served</options>
                                <options value="previouslyServedStatus">Previously served</options>
                            </select>
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <input id="mfcWaiver" value="mfcWaiver" type="checkbox" name="programServices"/>
                    <label for="mfcWaiver">Model Waiver for Medically Fragile Children</label>
                    <div class="fieldset-container-three" id="mfcWaiverContainer" style="display:none">
                        <div class="row">
                            <label class="submit-required" for="mfcWaiverStatus">Status</label>
                            <select name="mfcWaiverStatus" id="mfcWaiverStatus">
                                <options value=""></options>
                                <options value="AppliedStatus">Applied</options>
                                <options value="currentlyServedStatus">Currently served</options>
                                <options value="previouslyServedStatus">Previously served</options>
                            </select>
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <input id="remProgram" value="remProgram" type="checkbox" name="programServices"/>
                    <label for="remProgram">REM (Rare and Expensive Case Management Program)</label>
                    <div class="fieldset-container-three" id="remProgramContainer" style="display:none">
                        <div class="row">
                            <label class="submit-required" for="remProgramStatus">Status</label>
                            <select name="remProgramStatus" id="remProgramStatus">
                                <options value=""></options>
                                <options value="AppliedStatus">Applied</options>
                                <options value="currentlyServedStatus">Currently served</options>
                                <options value="previouslyServedStatus">Previously served</options>
                            </select>
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <input id="tbiWaiver" value="tbiWaiver" type="checkbox" name="programServices"/>
                    <label for="tbiWaiver">Traumatic Brain Injury Waiver</label>
                    <div class="fieldset-container-three" id="tbiWaiverContainer" style="display:none">
                        <div class="row">
                            <label class="submit-required" for="tbiWaiverStatus">Status</label>
                            <select name="tbiWaiverStatus" id=tbiWaiverStatus">
                                <options value=""></options>
                                <options value="AppliedStatus">Applied</options>
                                <options value="currentlyServedStatus">Currently served</options>
                                <options value="previouslyServedStatus">Previously served</options>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
    <fieldset class="fieldset-container-two">
        <legend class="legend-header-two submit-required">Are there any other agencies or programs not listed above that are helping you now, or that have you on a waiting list?</legend>
             <div class="row">
                <input id="otherProgramsOrSerivcesYes" value="yes" type="radio" name="otherProgramsOrSerivces"/>
                <label for="otherProgramsOrSerivcesYes" class="auto-width">Yes</label>
                <input id="otherProgramsOrSerivcesNo" value="no" type="radio" name="otherProgramsOrSerivces"/>
                <label for="otherProgramsOrSerivcesNo" class="auto-width">No</label>
                <div class="fieldset-container-three" id="otherProgramsOrSerivcesContainer" style="display:none">
                    <label class="submit-required" for="listOtherProgramsOrSerivces">Please List the Agencies/Programs:</label>
                    <textarea class="comments-textarea" id="listOtherProgramsOrSerivces" name="listOtherProgramsOrSerivces"></textarea>
                </div>
            </div>
    </fieldset>
</fieldset>

    ' ?>