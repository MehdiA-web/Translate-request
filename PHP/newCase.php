<?php
// Check if the radio button 'rad_managerA' is set to '1'
if (@@rad_managerA == '1') {

    // SQL query to select all users in the group with the given group ID ('11268843466b1e3e0644a28042120893')
    $translators = "
        SELECT * 
        FROM `group_user` 
        WHERE `GRP_UID` = '11268843466b1e3e0644a28042120893'
    ";

    // Execute the query and store the result in $result
    $result = executeQuery($translators);
    // dd($result); // Uncomment this for debugging to dump and die the result

    // Define the Process UID and Task UID for creating a new case
    $Process_uID = '19971936966af6ffb4b8c95079631568'; // Process UID
    $taskUID = '64892882666b073ac4ec112085455511';  // Task UID

    // Create an array with the application UID to be passed as case variables
    $App_uId = [
        "hid_source_app_uid" => @@APPLICATION,  // Application UID
    ];

    // Loop through each translator in the result and create a new case for each user
    foreach ($result as $translator) {
        // Create a new case for each user in the group
        $newCase = PMFNewCase($Process_uID, $translator['USR_UID'], $taskUID, $App_uId, "TO_DO");
    }
}
