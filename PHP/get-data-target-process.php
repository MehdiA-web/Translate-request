<?php

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

