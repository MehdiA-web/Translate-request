<?php
// Get the current application UID from the ProcessMaker case variable
$app_uid = @@APPLICATION;

// SQL query to select translator information for the current application, where manager A is selected (RAD_MANAGERA = '1')
$translators_a = "
    SELECT `TXT_TRANSLATORNAME`, `DAT_END`, `DRP_TCONTEXT`, `TXT_TPRICE`, `USR_UID`
    FROM `pmt_translator_infor`
    WHERE `HID_SOURCE_APP_UID` = '$app_uid' AND RAD_MANAGERA = '1'
";

// Try executing the query and handle exceptions if the query fails
try {
    $result = executeQuery($translators_a);
} catch(Exception $e) {
    die(json_encode(['result' => false, 'message' => 'خطا در کوئری']));  // Return error message if query fails
}

// ------------------------------------------------------------

// Prepare an empty array to store the processed data
$data = [];
foreach ($result as $key => $item) {
    // Populate the array with relevant fields from the query result
    $data[$key] = [
        'txt_Tname' => $item['TXT_TRANSLATORNAME'],  // Translator's name
        'txt_Tprice' => $item['TXT_TPRICE'],  // Translator's price
        'dat_endT' => $item['DAT_END'],  // End date
        'drp_Tcontext' => $item['DRP_TCONTEXT'],  // Translation context
        'hid_user_uid' => $item['USR_UID'],  // User unique ID
    ];
}

// Assign the processed data to the grid variable in ProcessMaker
@=grd_translatorsC = $data;
