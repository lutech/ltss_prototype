<?php

//ADD ALL USERS AND DEFINE USER ROLES HERE.

//Client = Cicio Smith
if ($username == $users.$role) {
    setcookie('role', 'client', time()+36000000, '/');
    setcookie('username', 'Cicio Smith', time()+36000000, '/');
    setcookie('loginname', $username, time()+36000000, '/');
    setcookie('gender', 'Male', time()+36000000, '/');
    setcookie('suffix', ' ', time()+36000000, '/');
    setcookie('userid', '98416818', time()+36000000, '/');
}
//DDA Super User
else if ($username == 'ddasuperuser') {
    setcookie('role', $username, time()+36000000, '/');
    setcookie('username', 'DDA Super User', time()+36000000, '/');
    setcookie('organization', 'Division of Medicaid', time()+36000000, '/');
    setcookie('loginname', $username, time()+36000000, '/');
    setcookie('gender', 'Male', time()+36000000, '/');
    setcookie('suffix', 'Jr.', time()+36000000, '/');
    setcookie('userid', '84918569', time()+36000000, '/');
}
//DDA Director
else if ($username == 'ddadirector') {
    setcookie('role', $username, time()+36000000, '/');
    setcookie('username', 'DDA Director', time()+36000000, '/');
    setcookie('organization', 'DDA Agency', time()+36000000, '/');
    setcookie('loginname', $username, time()+36000000, '/');
    setcookie('gender', 'Male', time()+36000000, '/');
    setcookie('suffix', 'Jr.', time()+36000000, '/');
    setcookie('userid', '84918569', time()+36000000, '/');
}
//CCS Agency Supervisor
else if ($username == 'ccsagencysupervisor') {
    setcookie('role', $username, time()+36000000, '/');
    setcookie('username', 'CCS Agency Supervisor', time()+36000000, '/');
    setcookie('organization', 'CCS Provider Agency of Baltimore', time()+36000000, '/');
    setcookie('loginname', $username, time()+36000000, '/');
    setcookie('gender', 'Male', time()+36000000, '/');
    setcookie('suffix', '', time()+36000000, '/');
    setcookie('userid', '84918569', time()+36000000, '/');
}
//CCS Coordinator
else if ($username == 'ccscoordinator') {
    setcookie('role', $username, time()+36000000, '/');
    setcookie('username', 'CCS Coordinator', time()+36000000, '/');
    setcookie('organization', 'CCS Provider Agency of Baltimore', time()+36000000, '/');
    setcookie('loginname', $username, time()+36000000, '/');
    setcookie('gender', 'Male', time()+36000000, '/');
    setcookie('suffix', '', time()+36000000, '/');
    setcookie('userid', '84918569', time()+36000000, '/');
}
//Regional Director
else if ($username == 'regionaldirector') {
    setcookie('role', $username, time()+36000000, '/');
    setcookie('username', 'Regional Director', time()+36000000, '/');
    setcookie('organization', 'Responsible Region of Baltimore', time()+36000000, '/');
    setcookie('loginname', $username, time()+36000000, '/');
    setcookie('gender', 'Male', time()+36000000, '/');
    setcookie('suffix', '', time()+36000000, '/');
    setcookie('userid', '84918569', time()+36000000, '/');
}
//Regional Eligibility Staff
else if ($username == 'regionaleligibilitystaff') {
    setcookie('role', $username, time()+36000000, '/');
    setcookie('username', 'Regional Eligibility Staff', time()+36000000, '/');
    setcookie('organization', 'Responsible Region of Baltimore', time()+36000000, '/');
    setcookie('loginname', $username, time()+36000000, '/');
    setcookie('gender', 'Male', time()+36000000, '/');
    setcookie('suffix', '', time()+36000000, '/');
    setcookie('userid', '84918569', time()+36000000, '/');
}
//Regional Program Staff
else if ($username == 'regionalprogramstaff') {
    setcookie('role', $username, time()+36000000, '/');
    setcookie('username', 'Regional Program Staff', time()+36000000, '/');
    setcookie('organization', 'Responsible Region of Baltimore', time()+36000000, '/');
    setcookie('loginname', $username, time()+36000000, '/');
    setcookie('gender', 'Male', time()+36000000, '/');
    setcookie('suffix', '', time()+36000000, '/');
    setcookie('userid', '84918569', time()+36000000, '/');
}
//Regional Eligibility Supervisor
else if ($username == 'regionaleligibilitysupervisor') {
    setcookie('role', $username, time()+36000000, '/');
    setcookie('username', 'Regional Eligibility Supervisor', time()+36000000, '/');
    setcookie('organization', 'Responsible Region of Baltimore', time()+36000000, '/');
    setcookie('loginname', $username, time()+36000000, '/');
    setcookie('gender', 'Male', time()+36000000, '/');
    setcookie('suffix', '', time()+36000000, '/');
    setcookie('userid', '84918569', time()+36000000, '/');
}
//Regional Program Supervisor
else if ($username == 'regionalprogramsupervisor') {
    setcookie('role', $username, time()+36000000, '/');
    setcookie('username', 'Regional Program Supervisor', time()+36000000, '/');
    setcookie('organization', 'Responsible Region of Baltimore', time()+36000000, '/');
    setcookie('loginname', $username, time()+36000000, '/');
    setcookie('gender', 'Male', time()+36000000, '/');
    setcookie('suffix', '', time()+36000000, '/');
    setcookie('userid', '84918569', time()+36000000, '/');
}
//Waiver Unit Staff
else if ($username == 'waiverunitstaff') {
    setcookie('role', $username, time()+36000000, '/');
    setcookie('username', 'Waiver Unit Staff', time()+36000000, '/');
    setcookie('organization', 'Waiver Unit Agency', time()+36000000, '/');
    setcookie('loginname', $username, time()+36000000, '/');
    setcookie('gender', 'Male', time()+36000000, '/');
    setcookie('suffix', '', time()+36000000, '/');
    setcookie('userid', '84918569', time()+36000000, '/');
}
//Waiver Unit Supervisor
else if ($username == 'waiverunitsupervisor') {
    setcookie('role', $username, time()+36000000, '/');
    setcookie('username', 'Waiver Unit Supervisor', time()+36000000, '/');
    setcookie('organization', 'Waiver Unit Agency', time()+36000000, '/');
    setcookie('loginname', $username, time()+36000000, '/');
    setcookie('gender', 'Male', time()+36000000, '/');
    setcookie('suffix', '', time()+36000000, '/');
    setcookie('userid', '84918569', time()+36000000, '/');
}
else {
    setcookie('role', '', time()+36000000, '/');
    setcookie('username', '', time()+36000000, '/');
    setcookie('organization', '', time()+36000000, '/');
    setcookie('loginname', ' ', time()+36000000, '/');
    setcookie('gender', ' ', time()+36000000, '/');
    setcookie('suffix', ' ', time()+36000000, '/');
    setcookie('userid', ' ', time()+36000000, '/');
}
