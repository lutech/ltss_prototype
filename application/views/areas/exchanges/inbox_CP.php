<?php $WorkspaceHeader = '
    <h3>Inbox</h3>
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
        <label for="">Received:</label>
        <select>
            <option>Today</option>
            <option>Yesterday</option>
            <option>Within last 7 days</option>
            <option>Within last week</option>
        </select>
        </div>
        <div class="row stacked">
        <label for="">Sent From:</label>
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
                    Sent From
                </th>
                <th>
                    Subject
                </th>
                <th>
                    Attachments
                </th>
                <th>
                    Date Received
                </th>
                <th class="action">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    Cicio Smith
                </td>
                <td>
                    Here is my CAHPS Survey.
                </td>
                <td>
                    <a href="#">CAHPS_Survey.PDF</a>
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
'?>
<?php $Script='
    <script type="text/javascript">
    </script>
'?>

