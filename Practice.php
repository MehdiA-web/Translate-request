<?php
'trigger for newcase to target process ';

/* 
if(@@rad_managerA == '1') {
   $translators = "SELECT * 
   FROM `group_user` 
   WHERE `GRP_UID` = '11268843466b1e3e0644a28042120893'";
   $result = executeQuery($translators);
   //dd($result);
   $Process_uID = '19971936966af6ffb4b8c95079631568';
   $taskUID = '64892882666b073ac4ec112085455511';
   $App_uId = [
      "hid_source_app_uid" => @@APPLICATION,
   ];

   foreach ($result as $translator) {
      $newCase = PMFNewCase($Process_uID, $translator['USR_UID'], $taskUID, $App_uId, "TO_DO");
   }
} 
   */

'trigger to get data from source process ';

/*
$hid_source_app_uid=@@hid_source_app_uid;
$sql="SELECT `TXT_REQUESTERNAME`,`TXT_REQUESTERLNAME`, `DAT_END`, `DAT_START`, `DRP_CONTEXT`
FROM `pmt_requester_info` 
WHERE APP_UID ='$hid_source_app_uid'";

$result=executeQuery($sql);
@@txt_requesterName=$result[1]['TXT_REQUESTERNAME'];
@@txt_requesterLname=$result[1]['TXT_REQUESTERLNAME'];
@@dat_end=$result[1]['DAT_END'];
@@dat_start=$result[1]['DAT_START'];
@@drp_context_1=$result[1]['DRP_CONTEXT'];
*/

'trigger to get data from target process ';

/*
dd(@@grd_translatorsC);
$app_uid = @@APPLICATION;

$translators_a = "SELECT `TXT_TRANSLATORNAME`, `DAT_END`, `DRP_TCONTEXT`, `TXT_TPRICE` FROM `pmt_translators_info` WHERE `HID_SOURCE_APP_UID` = '$app_uid' AND RAD_MANAGERA = '1' ";

try{
   $result = executeQuery($translators_a);
}catch(Exception $e){
   die(json_encode(['result'=>false, 'message'=> 'خطا در کوئری']));
}

$data = [];
foreach ($result as $key => $item){

   $data[$key] = [
      'txt_Tname' => $item['TXT_TRANSLATORNAME'],
      'txt_Tprice' => $item['TXT_TPRICE'],
      'dat_endT' => $item['DAT_END'],
      'drp_Tcontext' => $item['DRP_TCONTEXT'],

   ];
}

@=grd_translatorsC = $data;
*/

'trigger to get translators name ';

/*
$userinfo = userInfo(@@USER_LOGGED);
@@txt_translatorName = $userinfo['firstname']." ".$userinfo['lastname'];
*/

'trigger ro get user uid';

/*
@@USR_UID = @@USER_LOGGED;
/*

