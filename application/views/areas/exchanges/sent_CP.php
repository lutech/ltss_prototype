<?php $WorkspaceHeader = '
    <h3>Sent</h3>
    <div class="workspace-header-bar">
        <div class="float-right">
            <a href="#" class="button-style" onclick="newMessage()">New Message</a>
        </div>
    </div>
'?>
<?php $Body = '
    <div class="js-workarea-panel">
    <form action="submit">
    <fieldset class="fieldset-container-searcharea">
        <legend>Filter By</legend>
        <div class="row stacked">
        <label for="">Sent:</label>
        <select>
            <option>Today</option>
            <option>Yesterday</option>
            <option>Within last 7 days</option>
            <option>Within last week</option>
        </select>
        </div>
        <div class="row stacked">
        <label for="">To:</label>
        <input type="text"></input>
        </div>
        <div class="searchspace-footer-bar">
            <div class="float-left">
                <button id="submit" type="button">Apply</button>
            </div>
        </div>
    </fieldset>

    </form>
</div>
<div class="LeftNav-Fixed-Workarea">
    <table id="CaseProgramSummaryGrid" class="dataTable">
        <thead>
            <tr>
                <th>
                    To
                </th>
                <th>
                    Subject
                </th>
                <th>
                    Attachments
                </th>
                <th>
                    DIRECT Exchanges
                </th>
                <th>
                    Date Sent
                </th>
                <th class="action">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    Casey Manajer
                </td>
                <td>
                    Here is my latest CAHPS survey.
                </td>
                <td>

                </td>
                <td>
                    <a href="'.base_url('/index.php/cahpssurvey/details').'" target="_blank">ECHO MCO v3.0</a>
                </td>
                <td>
                    Today
                </td>
                <td class="action">
                    <a href="#">View</a>
                </td>
            </tr>
            <tr>
                <td>
                    Dr. Graham
                </td>
                <td>
                    Dr. Graham, I wanted to get your thoughts on this lab report. What do you think?
                </td>
                <td>
                    <a href="'.base_url('/application/content/files/Lab_Report.pdf').'" target="_blank">Lab_Report.PDF</a>
                </td>
                <td>

                </td>
                <td>
                    Today
                </td>
                <td class="action">
                    <a href="#">View</a>
                </td>
            </tr>
            <tr>
                <td>
                    Casey Manajer
                </td>
                <td>
                    Casey, here is a PDF version of my Plan of Service.
                </td>
                <td>
                    <a href="'.base_url('/application/content/files/POS.pdf').'" target="_blank">POS.PDF</a>
                </td>
                <td>

                </td>
                <td>
                    Today
                </td>
                <td class="action">
                    <a href="#">View</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

'
?>
<?php $Script='
    <script type="text/javascript">
    </script>
'?>

