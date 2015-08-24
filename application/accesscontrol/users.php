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
//DHMH Administrator
else if ($username == 1) {
    setcookie('role', 'dhmhadmin', time()+36000000, '/');
    setcookie('username', 'DHMH Administrator', time()+36000000, '/');
    setcookie('organization', 'Division of Medicaid', time()+36000000, '/');
    setcookie('loginname', $username, time()+36000000, '/');
    setcookie('gender', 'Male', time()+36000000, '/');
    setcookie('suffix', 'Jr.', time()+36000000, '/');
    setcookie('userid', '84918569', time()+36000000, '/');
}
//DDA Director
else if ($username == 2) {
    setcookie('role', 'ddadirector', time()+36000000, '/');
    setcookie('username', 'DDA Director', time()+36000000, '/');
    setcookie('organization', 'DDA Agency', time()+36000000, '/');
    setcookie('loginname', $username, time()+36000000, '/');
    setcookie('gender', 'Male', time()+36000000, '/');
    setcookie('suffix', 'Jr.', time()+36000000, '/');
    setcookie('userid', '84918569', time()+36000000, '/');
}
//CCS Coordinator
else if ($username == 3) {
    setcookie('role', 'ccscoordinator', time()+36000000, '/');
    setcookie('username', 'CCS Coordinator', time()+36000000, '/');
    setcookie('organization', 'CCS Provider Agency of Baltimore', time()+36000000, '/');
    setcookie('loginname', $username, time()+36000000, '/');
    setcookie('gender', 'Male', time()+36000000, '/');
    setcookie('suffix', '', time()+36000000, '/');
    setcookie('userid', '84918569', time()+36000000, '/');
}
//Regional Director
else if ($username == 4) {
    setcookie('role', 'regionaldirector', time()+36000000, '/');
    setcookie('username', 'Regional Director', time()+36000000, '/');
    setcookie('organization', 'Responsible Region of Baltimore', time()+36000000, '/');
    setcookie('loginname', $username, time()+36000000, '/');
    setcookie('gender', 'Male', time()+36000000, '/');
    setcookie('suffix', '', time()+36000000, '/');
    setcookie('userid', '84918569', time()+36000000, '/');
}
//Regional Staff
else if ($username == 5) {
    setcookie('role', 'regionalstaff', time()+36000000, '/');
    setcookie('username', 'Regional Staff', time()+36000000, '/');
    setcookie('organization', 'Responsible Region of Baltimore', time()+36000000, '/');
    setcookie('loginname', $username, time()+36000000, '/');
    setcookie('gender', 'Male', time()+36000000, '/');
    setcookie('suffix', '', time()+36000000, '/');
    setcookie('userid', '84918569', time()+36000000, '/');
}
//Regional Supervisor
else if ($username == 6) {
    setcookie('role', 'regionalsupervisor', time()+36000000, '/');
    setcookie('username', 'Regional Supervisor', time()+36000000, '/');
    setcookie('organization', 'Responsible Region of Baltimore', time()+36000000, '/');
    setcookie('loginname', $username, time()+36000000, '/');
    setcookie('gender', 'Male', time()+36000000, '/');
    setcookie('suffix', '', time()+36000000, '/');
    setcookie('userid', '84918569', time()+36000000, '/');
}
//Waiver Unit Staff
else if ($username == 7) {
    setcookie('role', 'waiverunitstaff', time()+36000000, '/');
    setcookie('username', 'Waiver Unit Staff', time()+36000000, '/');
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
