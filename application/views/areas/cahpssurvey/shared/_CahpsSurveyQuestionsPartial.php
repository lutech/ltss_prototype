<?php $Body = '
<div class="genericform-style">
    <h4>CAHPS Survey</h4>
    <fieldset class="fieldset-container-one">
        <legend class="legend-header-one">Summary</legend>
        <div class="column-left">
            <div class="row summary">
                <span class="label">Survey Type:</span>
                <span class="data-element">ECHO MCO Version 3.0</span>
            </div>
            <div class="row summary">
                <span class="label">Last Modified Date:</span>
                <span class="data-element">09/10/2014</span>
            </div>
            <div class="row summary">
                <span class="label">Last Modified By:</span>
                <span class="data-element">Casey Manajer</span>
            </div>
        </div>
        <div class="column-right">
            <div class="row summary">
                <span class="label">Status:</span>
                <span class="data-element">In-Progress</span>
            </div>
            <div class="row summary">
                <span class="label">Active/Inactive:</span>
                <span class="data-element">Inactive</span>
            </div>
        </div>
    </fieldset>
    <div class="panelbar-form-style">
    <fieldset class="fieldset-container-one panel">
        <legend class="legend-header-one header">Personal of Family Counseling</legend>
        <div class="body">
            <div class="form-panelbar-content">
                <div class="header-info">
                    <p>NOTE: People can get counseling, treatment or medicine for many different reasons, such as:</p>
                    <ul class="bullet-list">
                        <li>For feeling depressed, anxious, or “stressed out”</li>
                        <li>Personal problems (like when a loved one dies or when there are problems at work)</li>
                        <li>Family problems (like marriage problems or when parents and children have trouble getting
                            along)
                        </li>
                        <li>Needing help with drug or alcohol use</li>
                        <li>For mental or emotional illness</li>
                    </ul>
                </div>
                <div class="iform-fieldset">
                    <fieldset class="fieldset-container-two">
                        <legend class="legend-header-two selection-submit-required">1. In the last 12 months, did you get
                            counseling, treatment or medicine for any of these reasons?
                        </legend>
                        <div class="row">
                            <input type="radio" id="1-yes" name="1" checked/>
                            <label for="1-yes">Yes</label>
                        </div>
                        <div class="row">
                            <input type="radio" id="1-no" name="1"/>
                            <label for="1-no">No</label>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
    </fieldset>
    <fieldset class="fieldset-container-one panel">
    <legend class="legend-header-one header">Your Counseling and Treatment in the Last 12 Months</legend>
    <div class="body">
    <div class="form-panelbar-content">
    <div class="header-info">
        <p>NOTE: The next questions ask about your counseling or treatment. Do not include counseling or treatment during an
            overnight stay or from a self-help group.</p>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">2. In the last 12 months, did you call someone to
                get professional counseling on the phone for yourself?
            </legend>
            <div class="row">
                <input type="radio" id="2-yes" name="2" checked/>
                <label for="2-yes">Yes</label>
            </div>
            <div class="row">
                <input type="radio" id="2-no" name="2"/>
                <label for="2-no">No</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">3. In the last 12 months, how often did you get the
                professional counseling you needed on the phone?
            </legend>
            <div class="row">
                <input type="radio" id="3-never" name="3"/>
                <label for="3-never">Never</label>
            </div>
            <div class="row">
                <input type="radio" id="3-sometimes" name="3" checked/>
                <label for="3-sometimes">Sometimes</label>
            </div>
            <div class="row">
                <input type="radio" id="3-usually" name="3"/>
                <label for="3-usually">Usually</label>
            </div>
            <div class="row">
                <input type="radio" id="3-always" name="3"/>
                <label for="3-always">Always</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">4. In the last 12 months, did you need counseling or
                treatment right away?
            </legend>
            <div class="row">
                <input type="radio" id="4-yes" name="4" checked/>
                <label for="4-yes">Yes</label>
            </div>
            <div class="row">
                <input type="radio" id="4-no" name="4"/>
                <label for="4-no">No</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">5. In the last 12 months, when you needed counseling
                or treatment right away, how often did you see someone as soon as you wanted?
            </legend>
            <div class="row">
                <input type="radio" id="5-never" name="5"/>
                <label for="5-never">Never</label>
            </div>
            <div class="row">
                <input type="radio" id="5-sometimes" name="5"/>
                <label for="5-sometimes">Sometimes</label>
            </div>
            <div class="row">
                <input type="radio" id="5-usually" name="5" checked/>
                <label for="5-usually">Usually</label>
            </div>
            <div class="row">
                <input type="radio" id="5-always" name="5"/>
                <label for="5-always">Always</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">6. In the last 12 months, not counting times you
                needed counseling or treatment right away, did you make any appointments for counseling or treatment?
            </legend>
            <div class="row">
                <input type="radio" id="6-yes" name="6" checked/>
                <label for="6-yes">Yes</label>
            </div>
            <div class="row">
                <input type="radio" id="6-no" name="6"/>
                <label for="6-no">No</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">7. In the last 12 months, not counting times you
                needed counseling or treatment right away, how often did you get an appointment for counseling or treatment
                as soon as you wanted?
            </legend>
            <div class="row">
                <input type="radio" id="7-never" name="7"/>
                <label for="7-never">Never</label>
            </div>
            <div class="row">
                <input type="radio" id="7-sometimes" name="7"/>
                <label for="7-sometimes">Sometimes</label>
            </div>
            <div class="row">
                <input type="radio" id="7-usually" name="7" checked/>
                <label for="7-usually">Usually</label>
            </div>
            <div class="row">
                <input type="radio" id="7-always" name="7"/>
                <label for="7-always">Always</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">8. In the last 12 months, how many times did you go
                to an emergency room or crisis center to get counseling or treatment for yourself?
            </legend>
            <div class="row">
                <input type="radio" id="8-none" name="8"/>
                <label for="8-none">None</label>
            </div>
            <div class="row">
                <input type="radio" id="8-1" name="8"/>
                <label for="8-1">1</label>
            </div>
            <div class="row">
                <input type="radio" id="8-2" name="8"/>
                <label for="8-2">2</label>
            </div>
            <div class="row">
                <input type="radio" id="8-3" name="8" checked/>
                <label for="8-3">3 or more</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">9. In the last 12 months (not counting emergency
                rooms or crisis centers), how many times did you go to an office, clinic, or other treatment program to get
                counseling, treatment or medicine for yourself?
            </legend>
            <div class="row">
                <input type="radio" id="9-none" name="9"/>
                <label for="9-none">None</label>
            </div>
            <div class="row">
                <input type="radio" id="9-1" name="9" checked/>
                <label for="9-1">1 to 10</label>
            </div>
            <div class="row">
                <input type="radio" id="9-2" name="9"/>
                <label for="9-2">11-20</label>
            </div>
            <div class="row">
                <input type="radio" id="9-3" name="9"/>
                <label for="9-3">21 or more</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">10. In the last 12 months, how often were you seen
                within 15 minutes of your appointment?
            </legend>
            <div class="row">
                <input type="radio" id="10-never" name="10" checked/>
                <label for="10-never">Never</label>
            </div>
            <div class="row">
                <input type="radio" id="10-sometimes" name="10"/>
                <label for="10-sometimes">Sometimes</label>
            </div>
            <div class="row">
                <input type="radio" id="10-usually" name="10"/>
                <label for="10-usually">Usually</label>
            </div>
            <div class="row">
                <input type="radio" id="10-always" name="10"/>
                <label for="10-always">Always</label>
            </div>
        </fieldset>
    </div>
    <div class="header-info">
        <p>NOTE: The next questions are about all the counseling or treatment you got in the last 12 months during office,
            clinic, and emergency room visits as well as over the phone. Please do the best you can to include all the
            different people you went to for counseling or treatment in your answers.</p>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">11. In the last 12 months, how often did the people
                you went to for counseling or treatment listen carefully to you?
            </legend>
            <div class="row">
                <input type="radio" id="11-never" name="11"/>
                <label for="11-never">Never</label>
            </div>
            <div class="row">
                <input type="radio" id="11-sometimes" name="11"/>
                <label for="11-sometimes">Sometimes</label>
            </div>
            <div class="row">
                <input type="radio" id="11-usually" name="11" checked/>
                <label for="11-usually">Usually</label>
            </div>
            <div class="row">
                <input type="radio" id="11-always" name="11"/>
                <label for="11-always">Always</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">12. In the last 12 months, how often did the people
                you went to for counseling or treatment explain things in a way you could understand?
            </legend>
            <div class="row">
                <input type="radio" id="12-never" name="12"/>
                <label for="12-never">Never</label>
            </div>
            <div class="row">
                <input type="radio" id="12-sometimes" name="12" checked/>
                <label for="12-sometimes">Sometimes</label>
            </div>
            <div class="row">
                <input type="radio" id="12-usually" name="12"/>
                <label for="12-usually">Usually</label>
            </div>
            <div class="row">
                <input type="radio" id="12-always" name="12"/>
                <label for="12-always">Always</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">13. In the last 12 months, how often did the people
                you went to for counseling or treatment show respect for what you had to say?
            </legend>
            <div class="row">
                <input type="radio" id="13-never" name="13"/>
                <label for="13-never">Never</label>
            </div>
            <div class="row">
                <input type="radio" id="13-sometimes" name="13"/>
                <label for="13-sometimes">Sometimes</label>
            </div>
            <div class="row">
                <input type="radio" id="13-usually" name="13" checked/>
                <label for="13-usually">Usually</label>
            </div>
            <div class="row">
                <input type="radio" id="13-always" name="13"/>
                <label for="13-always">Always</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">14. In the last 12 months, how often did the people
                you went to for counseling or treatment spend enough time with you?
            </legend>
            <div class="row">
                <input type="radio" id="14-never" name="14"/>
                <label for="14-never">Never</label>
            </div>
            <div class="row">
                <input type="radio" id="14-sometimes" name="14"/>
                <label for="14-sometimes">Sometimes</label>
            </div>
            <div class="row">
                <input type="radio" id="14-usually" name="14" checked/>
                <label for="14-usually">Usually</label>
            </div>
            <div class="row">
                <input type="radio" id="14-always" name="14"/>
                <label for="14-always">Always</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">15. In the last 12 months, how often did you feel
                safe when you were with the people you went to for counseling or treatment?
            </legend>
            <div class="row">
                <input type="radio" id="15-never" name="15"/>
                <label for="15-never">Never</label>
            </div>
            <div class="row">
                <input type="radio" id="15-sometimes" name="15"/>
                <label for="15-sometimes">Sometimes</label>
            </div>
            <div class="row">
                <input type="radio" id="15-usually" name="15" checked/>
                <label for="15-usually">Usually</label>
            </div>
            <div class="row">
                <input type="radio" id="15-always" name="15"/>
                <label for="15-always">Always</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">16. In the last 12 months, did you take any
                prescription medicines as part of your treatment?
            </legend>
            <div class="row">
                <input type="radio" id="16-yes" name="16" checked/>
                <label for="16-yes">Yes</label>
            </div>
            <div class="row">
                <input type="radio" id="16-no" name="16"/>
                <label for="16-no">No</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">17. In the last 12 months, were you told what side
                effects of those medicines to watch for?
            </legend>
            <div class="row">
                <input type="radio" id="17-yes" name="17" checked/>
                <label for="17-yes">Yes</label>
            </div>
            <div class="row">
                <input type="radio" id="17-no" name="17"/>
                <label for="17-no">No</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">18. In the last 12 months, how often were you
                involved as much as you wanted in your counseling or treatment?
            </legend>
            <div class="row">
                <input type="radio" id="18-never" name="18"/>
                <label for="18-never">Never</label>
            </div>
            <div class="row">
                <input type="radio" id="18-sometimes" name="18" checked/>
                <label for="18-sometimes">Sometimes</label>
            </div>
            <div class="row">
                <input type="radio" id="18-usually" name="18"/>
                <label for="18-usually">Usually</label>
            </div>
            <div class="row">
                <input type="radio" id="18-always" name="18"/>
                <label for="18-always">Always</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">19. In the last 12 months, did anyone talk to you
                about whether to include your family or friends in your counseling or treatment?
            </legend>
            <div class="row">
                <input type="radio" id="19-yes" name="19"/>
                <label for="19-yes">Yes</label>
            </div>
            <div class="row">
                <input type="radio" id="19-no" name="19" checked/>
                <label for="19-no">No</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">20. In the last 12 months, were you told about
                self-help or support groups, such as consumer-run groups or 12-step programs?
            </legend>
            <div class="row">
                <input type="radio" id="20-yes" name="20" checked/>
                <label for="20-yes">Yes</label>
            </div>
            <div class="row">
                <input type="radio" id="20-no" name="20"/>
                <label for="20-no">No</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">21. In the last 12 months, were you given
                information about different kinds of counseling or treatment that are available?
            </legend>
            <div class="row">
                <input type="radio" id="21-yes" name="21" checked/>
                <label for="21-yes">Yes</label>
            </div>
            <div class="row">
                <input type="radio" id="21-no" name="21"/>
                <label for="21no">No</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">22. In the last 12 months, were you given as much
                information as you wanted about what you could do to manage your condition?
            </legend>
            <div class="row">
                <input type="radio" id="22-yes" name="22"/>
                <label for="22-yes">Yes</label>
            </div>
            <div class="row">
                <input type="radio" id="22-no" name="22" checked/>
                <label for="22-no">No</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">23. In the last 12 months, were you given
                information about your rights as a patient?
            </legend>
            <div class="row">
                <input type="radio" id="23-yes" name="23" checked/>
                <label for="23-yes">Yes</label>
            </div>
            <div class="row">
                <input type="radio" id="23-no" name="23"/>
                <label for="23-no">No</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">24. In the last 12 months, did you feel you could
                refuse a specific type of medicine or treatment?
            </legend>
            <div class="row">
                <input type="radio" id="24-yes" name="24" checked/>
                <label for="24-yes">Yes</label>
            </div>
            <div class="row">
                <input type="radio" id="24-no" name="24"/>
                <label for="24-no">No</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">25. In the last 12 months, as far as you know did
                anyone you went to for counseling or treatment share information with others that should have been kept
                private?
            </legend>
            <div class="row">
                <input type="radio" id="25-yes" name="25"/>
                <label for="25-yes">Yes</label>
            </div>
            <div class="row">
                <input type="radio" id="25-no" name="25" checked/>
                <label for="25-no">No</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">26. Does your language, race, religion, ethnic
                background or culture make any difference in the kind of counseling or treatment you need?
            </legend>
            <div class="row">
                <input type="radio" id="26-yes" name="26"/>
                <label for="26-yes">Yes</label>
            </div>
            <div class="row">
                <input type="radio" id="26-no" name="26" checked/>
                <label for="26-no">No</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">27. In the last 12 months, was the care you received
                responsive to those needs?
            </legend>
            <div class="row">
                <input type="radio" id="27-yes" name="27" checked/>
                <label for="27-yes">Yes</label>
            </div>
            <div class="row">
                <input type="radio" id="27-no" name="27"/>
                <label for="27-no">No</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">28. Using any number from 0 to 10, where 0 is the
                worst counseling or treatment possible and 10 is the best counseling or treatment possible, what number
                would you use to rate all your counseling or treatment in the last 12 months?
            </legend>
            <div class="row">
                <label for="28">Counseling or Treatment Rating (0 - 10):</label>
                <input type="text" id="28" name="28" class="textbox-small" placeholder="#" value="8"/>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">29. In the last 12 months, how much were you helped
                by the counseling or treatment you got?
            </legend>
            <div class="row">
                <input type="radio" id="29-notatall" name="29"/>
                <label for="18-notatall">Not at all</label>
            </div>
            <div class="row">
                <input type="radio" id="29-alittle" name="29"/>
                <label for="29-alittle">A little</label>
            </div>
            <div class="row">
                <input type="radio" id="29-somewhat" name="29" checked/>
                <label for="29-somewhat">Somewhat</label>
            </div>
            <div class="row">
                <input type="radio" id="29-alot" name="29"/>
                <label for="29-alot">A lot</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">30. In general, how would you rate your overall
                mental health now?
            </legend>
            <div class="row">
                <input type="radio" id="30-excellent" name="30"/>
                <label for="30-excellent">Excellent</label>
            </div>
            <div class="row">
                <input type="radio" id="30-verygood" name="30" checked/>
                <label for="30-verygood">Very good</label>
            </div>
            <div class="row">
                <input type="radio" id="30-good" name="30"/>
                <label for="30-good">Good</label>
            </div>
            <div class="row">
                <input type="radio" id="30-fair" name="30"/>
                <label for="30-fair">Fair</label>
            </div>
            <div class="row">
                <input type="radio" id="30-poor" name="30"/>
                <label for="30-poor">Poor</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">31. Compared to 12 months ago, how would you rate
                your ability to deal with daily problems now?
            </legend>
            <div class="row">
                <input type="radio" id="31-muchbetter" name="31"/>
                <label for="31-muchbetter">Much better</label>
            </div>
            <div class="row">
                <input type="radio" id="31-alittlebetter" name="31" checked/>
                <label for="31-alittlebetter">A little better</label>
            </div>
            <div class="row">
                <input type="radio" id="31-aboutthesame" name="31"/>
                <label for="31-aboutthesame">About the same</label>
            </div>
            <div class="row">
                <input type="radio" id="31-alittleworse" name="31"/>
                <label for="31-alittleworse">A little worse</label>
            </div>
            <div class="row">
                <input type="radio" id="31-muchworse" name="31"/>
                <label for="31-muchworse">Much worse</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">32. Compared to 12 months ago, how would you rate
                your ability to deal with social situations now?
            </legend>
            <div class="row">
                <input type="radio" id="32-muchbetter" name="32"/>
                <label for="32-muchbetter">Much better</label>
            </div>
            <div class="row">
                <input type="radio" id="32-alittlebetter" name="32"/>
                <label for="32-alittlebetter">A little better</label>
            </div>
            <div class="row">
                <input type="radio" id="32-aboutthesame" name="32" checked/>
                <label for="32-aboutthesame">About the same</label>
            </div>
            <div class="row">
                <input type="radio" id="32-alittleworse" name="32"/>
                <label for="32-alittleworse">A little worse</label>
            </div>
            <div class="row">
                <input type="radio" id="32-muchworse" name="32"/>
                <label for="32-muchworse">Much worse</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">33. Compared to 12 months ago, how would you rate
                your ability to accomplish the things you want to do now?
            </legend>
            <div class="row">
                <input type="radio" id="33-muchbetter" name="33"/>
                <label for="33-muchbetter">Much better</label>
            </div>
            <div class="row">
                <input type="radio" id="33-alittlebetter" name="33" checked/>
                <label for="33-alittlebetter">A little better</label>
            </div>
            <div class="row">
                <input type="radio" id="33-aboutthesame" name="33"/>
                <label for="33-aboutthesame">About the same</label>
            </div>
            <div class="row">
                <input type="radio" id="33-alittleworse" name="33"/>
                <label for="33-alittleworse">A little worse</label>
            </div>
            <div class="row">
                <input type="radio" id="33-muchworse" name="33"/>
                <label for="33-muchworse">Much worse</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">34. Compared to 12 months ago, how would you rate
                your problems or symptoms now?
            </legend>
            <div class="row">
                <input type="radio" id="34-muchbetter" name="34" checked/>
                <label for="34-muchbetter">Much better</label>
            </div>
            <div class="row">
                <input type="radio" id="34-alittlebetter" name="34"/>
                <label for="34-alittlebetter">A little better</label>
            </div>
            <div class="row">
                <input type="radio" id="34-aboutthesame" name="34"/>
                <label for="34-aboutthesame">About the same</label>
            </div>
            <div class="row">
                <input type="radio" id="34-alittleworse" name="34"/>
                <label for="34-alittleworse">A little worse</label>
            </div>
            <div class="row">
                <input type="radio" id="34-muchworse" name="34"/>
                <label for="34-muchworse">Much worse</label>
            </div>
        </fieldset>
    </div>
    </div>
    </div>
    </fieldset>
    <fieldset class="fieldset-container-one panel">
    <legend class="legend-header-one header">Your Counseling and Treatment in the Last 12 Months</legend>
    <div class="body">
    <div class="form-panelbar-content">
    <div class="header-info">
        <p>NOTE: The next questions ask about your counseling or treatment. Do not include counseling or treatment during an
            overnight stay or from a self-help group.</p>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">35. Our records show that you are now in a Health
                Plan. Is that right?
            </legend>
            <div class="row">
                <input type="radio" id="35-yes" name="35" checked/>
                <label for="35-yes">Yes</label>
            </div>
            <div class="row">
                <input type="radio" id="35-no" name="35"/>
                <label for="35-no">No</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">36. What is the name of your health plan?</legend>
            <div class="row">
                <label for="36">Health Plan Name:</label>
                <input type="text" id="36" value="WOA"/>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">37. How many months or years in a row have you been
                in this health plan?
            </legend>
            <div class="row">
                <input type="radio" id="37-lessthan1" name="37"/>
                <label for="37-lessthan1">Less than 1 year</label>
            </div>
            <div class="row">
                <input type="radio" id="37-atleast1" name="37"/>
                <label for="37-atleast1">At least 1 year but less than 2 years</label>
            </div>
            <div class="row">
                <input type="radio" id="37-atleast2" name="37" checked/>
                <label for="37-atleast2">At least 2 years but less than 5 years</label>
            </div>
            <div class="row">
                <input type="radio" id="37-5ormore" name="37"/>
                <label for="37-5ormore">5 or more years</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">38. How much of the counseling or treatment you got
                in the last 12 months was paid for by your health plan?
            </legend>
            <div class="row">
                <input type="radio" id="38-allpaidfor" name="38" checked/>
                <label for="38-allpaidfor">All of it was paid for</label>
            </div>
            <div class="row">
                <input type="radio" id="38-mostpaidfor" name="38"/>
                <label for="38-mostpaidfor">Most of it was paid for</label>
            </div>
            <div class="row">
                <input type="radio" id="38-somepaidfor" name="38"/>
                <label for="38-somepaidfor">Some of it was paid for</label>
            </div>
            <div class="row">
                <input type="radio" id="38-nonepaidfor" name="38"/>
                <label for="38-nonepaidfor">None of it was paid for</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">39. In the last 12 months, did you use up all your
                benefits for counseling or treatment?
            </legend>
            <div class="row">
                <input type="radio" id="39-yes" name="39" checked/>
                <label for="39-yes">Yes</label>
            </div>
            <div class="row">
                <input type="radio" id="39-no" name="39"/>
                <label for="39-no">No</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">40. At the time benefits were used up, did you think
                you still needed counseling or treatment?
            </legend>
            <div class="row">
                <input type="radio" id="40-yes" name="40" checked/>
                <label for="40-yes">Yes</label>
            </div>
            <div class="row">
                <input type="radio" id="40-no" name="40"/>
                <label for="40-no">No</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">41. Were you told about other ways to get
                counseling, treatment, or medicine?
            </legend>
            <div class="row">
                <input type="radio" id="41-yes" name="41" checked/>
                <label for="41-yes">Yes</label>
            </div>
            <div class="row">
                <input type="radio" id="41-no" name="41"/>
                <label for="41-no">No</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">42. When you joined your health plan or at any time
                since then, did you get someone new for counseling or treatment?
            </legend>
            <div class="row">
                <input type="radio" id="42-yes" name="42"/>
                <label for="42-yes">Yes</label>
            </div>
            <div class="row">
                <input type="radio" id="42-no" name="42" checked/>
                <label for="42-no">No</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">43. Since you joined your health plan, how much of a
                problem, if any, was it to get someone you are happy with?
            </legend>
            <div class="row">
                <input type="radio" id="43-bigproblem" name="43"/>
                <label for="43-bigproblem">A big problem</label>
            </div>
            <div class="row">
                <input type="radio" id="43-smallproblem" name="43" checked/>
                <label for="43-smallproblem">A small problem</label>
            </div>
            <div class="row">
                <input type="radio" id="43-notproblem" name="43"/>
                <label for="43-notproblem">Not a problem</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">44. In the last 12 months, did you need approval for
                any counseling or treatment?
            </legend>
            <div class="row">
                <input type="radio" id="44-yes" name="44" checked/>
                <label for="44-yes">Yes</label>
            </div>
            <div class="row">
                <input type="radio" id="44-no" name="44"/>
                <label for="44-no">No</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">45. In the last 12 months, how much of a problem, if
                any, were delays in counseling or treatment while you waited for approval from your health plan?
            </legend>
            <div class="row">
                <input type="radio" id="45-bigproblem" name="45"/>
                <label for="45-bigproblem">A big problem</label>
            </div>
            <div class="row">
                <input type="radio" id="45smallproblem" name="45" checked/>
                <label for="45-smallproblem">A small problem</label>
            </div>
            <div class="row">
                <input type="radio" id="45-notproblem" name="45"/>
                <label for="45-notproblem">Not a problem</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">46. In the last 12 months, how much of a problem, if
                any, was it to get the counseling or treatment you thought you needed?
            </legend>
            <div class="row">
                <input type="radio" id="46-bigproblem" name="46"/>
                <label for="46-bigproblem">A big problem</label>
            </div>
            <div class="row">
                <input type="radio" id="46-smallproblem" name="46" checked/>
                <label for="46-smallproblem">A small problem</label>
            </div>
            <div class="row">
                <input type="radio" id="46-notproblem" name="46"/>
                <label for="46-notproblem">Not a problem</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">47. In the last 12 months, did you look for any
                information about counseling or treatment from your health plan in written materials or on the Internet?
            </legend>
            <div class="row">
                <input type="radio" id="47-yes" name="47" checked/>
                <label for="47-yes">Yes</label>
            </div>
            <div class="row">
                <input type="radio" id="47-no" name="47"/>
                <label for="47-no">No</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">48. In the last 12 months, how much of a problem, if
                any, was it to find or understand this information?
            </legend>
            <div class="row">
                <input type="radio" id="48-bigproblem" name="48" checked/>
                <label for="48-bigproblem">A big problem</label>
            </div>
            <div class="row">
                <input type="radio" id="48-smallproblem" name="48"/>
                <label for="48-smallproblem">A small problem</label>
            </div>
            <div class="row">
                <input type="radio" id="48-notproblem" name="48"/>
                <label for="48-notproblem">Not a problem</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">49. In the last 12 months, did you call your health
                plan’s customer service to get information or help about counseling or treatment?
            </legend>
            <div class="row">
                <input type="radio" id="49-yes" name="49" checked/>
                <label for="49-yes">Yes</label>
            </div>
            <div class="row">
                <input type="radio" id="49-no" name="49"/>
                <label for="49-no">No</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">50. In the last 12 months, how much of a problem, if
                any, was it to get the help you needed when you called your health plan’s customer service?
            </legend>
            <div class="row">
                <input type="radio" id="50-bigproblem" name="50"/>
                <label for="50-bigproblem">A big problem</label>
            </div>
            <div class="row">
                <input type="radio" id="50-smallproblem" name="50"/>
                <label for="50-smallproblem">A small problem</label>
            </div>
            <div class="row">
                <input type="radio" id="50-notproblem" name="50" checked/>
                <label for="50-notproblem">Not a problem</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">51. In the last 12 months, did you have to fill out
                any paperwork about counseling or treatment for your health plan?
            </legend>
            <div class="row">
                <input type="radio" id="51-yes" name="51" checked/>
                <label for="51-yes">Yes</label>
            </div>
            <div class="row">
                <input type="radio" id="51-no" name="51"/>
                <label for="51-no">No</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">52. In the last 12 months, how much of a problem, if
                any, did you have with paperwork for your health plan?
            </legend>
            <div class="row">
                <input type="radio" id="52-bigproblem" name="52"/>
                <label for="52-bigproblem">A big problem</label>
            </div>
            <div class="row">
                <input type="radio" id="52-smallproblem" name="52"/>
                <label for="52-smallproblem">A small problem</label>
            </div>
            <div class="row">
                <input type="radio" id="52-notproblem" name="52" checked/>
                <label for="52-notproblem">Not a problem</label>
            </div>
        </fieldset>
    </div>
    <div class="iform-fieldset">
        <fieldset class="fieldset-container-two">
            <legend class="legend-header-two selection-submit-required">53. Using any number from 0 to 10, where 0 is the
                worst counseling or treatment possible and 10 is the best counseling or treatment possible, what number
                would you use to rate all your counseling or treatment in the last 12 months?
            </legend>
            <div class="row">
                <label for="53">Health Plan Rating (0 - 10):</label>
                <input type="text" id="53" name="53" class="textbox-small" placeholder="#" value="8"/>
            </div>
        </fieldset>
    </div>
    </div>
    </div>
    </fieldset>
    <fieldset class="fieldset-container-one panel">
        <legend class="legend-header-one header">Reasons for Counseling or Treatment</legend>
        <div class="body">
            <div class="form-panelbar-content">
                <div class="iform-fieldset">
                    <fieldset class="fieldset-container-two">
                        <legend class="legend-header-two selection-submit-required">54. In the last 12 months, was any of
                            your counseling or treatment for personal problems, family problems, emotional illness, or
                            mental illness?
                        </legend>
                        <div class="row">
                            <input type="radio" id="54-yes" name="54" checked/>
                            <label for="54-yes">Yes</label>
                        </div>
                        <div class="row">
                            <input type="radio" id="54-no" name="54"/>
                            <label for="54-no">No</label>
                        </div>
                    </fieldset>
                </div>
                <div class="iform-fieldset">
                    <fieldset class="fieldset-container-two">
                        <legend class="legend-header-two selection-submit-required">55. In the last 12 months, was any of
                            your counseling or treatment for help with alcohol use or drug use?
                        </legend>
                        <div class="row">
                            <input type="radio" id="55-yes" name="55"/>
                            <label for="55-yes">Yes</label>
                        </div>
                        <div class="row">
                            <input type="radio" id="55-no" name="55" checked/>
                            <label for="55-no">No</label>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
    </fieldset>
    <fieldset class="fieldset-container-one panel">
        <legend class="legend-header-one header">About You</legend>
        <div class="body">
            <div class="form-panelbar-content">
                <div class="iform-fieldset">
                    <fieldset class="fieldset-container-two">
                        <legend class="legend-header-two selection-submit-required">56. In general, how would you rate your
                            overall health now?
                        </legend>
                        <div class="row">
                            <input type="radio" id="56-excellent" name="56"/>
                            <label for="56-excellent">Excellent</label>
                        </div>
                        <div class="row">
                            <input type="radio" id="56-verygood" name="56" checked/>
                            <label for="56-verygood">Very good</label>
                        </div>
                        <div class="row">
                            <input type="radio" id="56-good" name="56"/>
                            <label for="56-good">Good</label>
                        </div>
                        <div class="row">
                            <input type="radio" id="56-fair" name="56"/>
                            <label for="56-fair">Fair</label>
                        </div>
                        <div class="row">
                            <input type="radio" id="56-poor" name="56"/>
                            <label for="56-poor">Poor</label>
                        </div>
                    </fieldset>
                </div>
                <div class="iform-fieldset">
                    <fieldset class="fieldset-container-two">
                        <legend class="legend-header-two selection-submit-required">57. What is your age now?</legend>
                        <div class="row">
                            <label for="57">Age:</label>
                            <input type="text" id="57" name="57" class="textbox-small" placeholder="#" value="64"/>
                        </div>
                    </fieldset>
                </div>
                <div class="iform-fieldset">
                    <fieldset class="fieldset-container-two">
                        <legend class="legend-header-two selection-submit-required">58. Are you male or female</legend>
                        <div class="row">
                            <input type="radio" id="58-male" name="58" checked/>
                            <label for="58-male">Male</label>
                        </div>
                        <div class="row">
                            <input type="radio" id="58-female" name="58"/>
                            <label for="58-female">Female</label>
                        </div>
                    </fieldset>
                </div>
                <div class="iform-fieldset">
                    <fieldset class="fieldset-container-two">
                        <legend class="legend-header-two selection-submit-required">59. What is the highest grade or level
                            of school that you have completed?
                        </legend>
                        <div class="row">
                            <input type="radio" id="59-8thgrade" name="59"/>
                            <label for="59-8thgrade">8th grade or less</label>
                        </div>
                        <div class="row">
                            <input type="radio" id="59-somehighschool" name="59"/>
                            <label for="59-somehighschool">Some high school, but did not graduate</label>
                        </div>
                        <div class="row">
                            <input type="radio" id="59-highschooldegree" name="59"/>
                            <label for="59-highschooldegree">High school graduate or GED</label>
                        </div>
                        <div class="row">
                            <input type="radio" id="59-somecollege" name="59"/>
                            <label for="59-somecollege">Some college or 2 year-degree</label>
                        </div>
                        <div class="row">
                            <input type="radio" id="59-4yeardegree" name="59" checked/>
                            <label for="59-4yeardegree">4-year college degree</label>
                        </div>
                        <div class="row">
                            <input type="radio" id="59-morethan4yeardegree" name="59"/>
                            <label for="59-morethan4yeardegree">More than 4-year college degree</label>
                        </div>
                    </fieldset>
                </div>
                <div class="iform-fieldset">
                    <fieldset class="fieldset-container-two">
                        <legend class="legend-header-two selection-submit-required">60. Are you of Hispanic or Latino origin
                            or descent?
                        </legend>
                        <div class="row">
                            <input type="radio" id="60-yes" name="60"/>
                            <label for="60-yes">Yes, Hispanic or Latino</label>
                        </div>
                        <div class="row">
                            <input type="radio" id="60-no" name="60" checked/>
                            <label for="60-no">No, not Hispanic or Latino</label>
                        </div>
                    </fieldset>
                </div>
                <div class="iform-fieldset">
                    <fieldset class="fieldset-container-two">
                        <legend class="legend-header-two selection-submit-required">61. What is your race? Please mark one
                            or more.
                        </legend>
                        <div class="row">
                            <input type="checkbox" id="61-white" name="61" checked/>
                            <label for="61-white">White</label>
                        </div>
                        <div class="row">
                            <input type="checkbox" id="61-black" name="61"/>
                            <label for="61-black">Black or African American</label>
                        </div>
                        <div class="row">
                            <input type="checkbox" id="61-asian" name="61"/>
                            <label for="61-asian">Asian</label>
                        </div>
                        <div class="row">
                            <input type="checkbox" id="61-islander" name="61"/>
                            <label for="61-islander">Native Hawaiian or other Pacific Islander</label>
                        </div>
                        <div class="row">
                            <input type="checkbox" id="61-nativeamerican" name="61"/>
                            <label for="61-nativeamerican">American Indian or Alaska Native</label>
                        </div>
                        <div class="row">
                            <input type="checkbox" id="61-other" name="61"/>
                            <label for="61-other">Other</label>
                        </div>
                    </fieldset>
                </div>
                <div class="iform-fieldset">
                    <fieldset class="fieldset-container-two">
                        <legend class="legend-header-two selection-submit-required">62. Did someone help you complete this
                            survey?
                        </legend>
                        <div class="row">
                            <input type="radio" id="62-yes" name="62"/>
                            <label for="62-yes">Yes</label>
                        </div>
                        <div class="row">
                            <input type="radio" id="62-no" name="62" checked/>
                            <label for="62-no">No</label>
                        </div>
                    </fieldset>
                </div>
                <div class="iform-fieldset">
                    <fieldset class="fieldset-container-two">
                        <legend class="legend-header-two selection-submit-required">63. How did that person help you? Check
                            all that apply.
                        </legend>
                        <div class="row">
                            <input type="checkbox" id="63-readquestions" name="63"/>
                            <label for="63-readquestions">Read the questions to me</label>
                        </div>
                        <div class="row">
                            <input type="checkbox" id="63-wroteanswers" name="63"/>
                            <label for="63-wroteanswers">Wrote down the answers I gave</label>
                        </div>
                        <div class="row">
                            <input type="checkbox" id="63-answeredquestions" name="63"/>
                            <label for="63-answeredquestions">Answered the questions for me</label>
                        </div>
                        <div class="row">
                            <input type="checkbox" id="63-translated" name="63"/>
                            <label for="63-translated">Translated the questions into my language</label>
                        </div>
                        <div class="row">
                            <input type="checkbox" id="63-other" name="63"/>
                            <label for="63-other">Helped in some other way</label>
                            <fieldset class="fieldset-container-three">
                                <legend>Other</legend>
                                <div class="row">
                                    <label for="63-explain">If Other, Explain:</label>
                                    <textarea name="" class="comments-textarea" id="63-explain"></textarea>
                                </div>
                            </fieldset>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
    </fieldset>
    </div>
</div>
'?>