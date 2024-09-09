<?php

// Retrieve the application ID from the current case variable
$hid_source_app_uid = @@hid_source_app_uid;

// SQL query to select requester information based on the application ID
$sql = "
    SELECT `TXT_REQUESTERNAME`, `TXT_REQUESTERLNAME`, `DAT_END`, `DAT_START`, `DRP_CONTEXT`
    FROM `pmt_requester_info`
    WHERE APP_UID = '$hid_source_app_uid'
";

// Execute the SQL query and store the result
$result = executeQuery($sql);

// Assign the returned values from the query to ProcessMaker variables
@@txt_requesterName = $result[1]['TXT_REQUESTERNAME'];  // First name of the requester
@@txt_requesterLname = $result[1]['TXT_REQUESTERLNAME'];  // Last name of the requester
@@dat_end = $result[1]['DAT_END'];  // End date
@@dat_start = $result[1]['DAT_START'];  // Start date
@@drp_context_1=$result[1]['DRP_CONTEXT']; // Context
