<?php

include("admin/global.php");
include 'include/functions.php';
// echo "test";

// Display the list of all file
// and directory


/*
$selr = "select * from ".$tbname."_sharedofficebooking  order by _ID = 100 ";
$rst1 = mysql_query($selr);
$data_s = mysql_fetch_assoc($rst1);

$selr = "select * from ".$tbname."_virtualofficebooking  order by _ID = 100 ";
$rst2 = mysql_query($selr);
$data_v = mysql_fetch_assoc($rst2);

foreach ($data_v as $key => $value) {
  echo $key."<br>";
}
exit;*/

//echo $no_of_days = round((strtotime("05-08-2021")-strtotime("18-07-2021"))/86400);

//echo decrypt("q52uow==",$encrypt);exit;

/*echo Date("Y-m-d H:i:s",1630590560);
exit;*/
//echo strcmp("abc","abc");exit;
//echo Date("Y-m-d",strtotime("-8 day",strtotime($today)));
//echo encrypt("2017",$encrypt);exit;
//echo json_encode(["order_id"=>"22"]);exit;
//$data = json_decode('{"order_id":"22"}',true);
/*echo "<pre>";
print_r($data);
exit;*/

//echo $metadata;exit;
/*$order_id = json_decode($metadata,true);
       echo "<pre>";print_r($order_id);exit;
        $order_id = $order_id["order_id"];
    echo $order_id;exit;*/

/*$row["_DateTimeS"] = "2021-12-01";
//  $d1="3";$d2="6";$d3="9";$d4="12";
 
  $d1="1";$d2="2";$d3="3";$d4="4";
  //echo $date1;exit;
  $date1 = Date("d-M-Y",strtotime("+".$d1." month",strtotime($row["_DateTimeS"])));
  $date2 = Date("d-M-Y",strtotime("+".$d2." month",strtotime($row["_DateTimeS"])));
  $date3 = Date("d-M-Y",strtotime("+".$d3." month",strtotime($row["_DateTimeS"])));
  $date4 = Date("d-M-Y",strtotime("+".$d4." month",strtotime($row["_DateTimeS"])));

  $all_billing_dates = $date1.", ".$date2.", ".$date3.", ".$date4;
  echo $all_billing_dates;exit;*/




/*$upd = "UPDATE ".$tbname."_apicompanyhouse set _Ch_api_response  = 'PENDING' where ( _Ch_api_response = '1') ";
mysql_query($upd);
exit;*/
/*$upd = "UPDATE ".$tbname."_smstoemailbooking set _TotalRate  = '25.87' where ( _ID ='70') ";
mysql_query($upd);*/
//exit;
/*$d="1";
echo Date("Y-m-d",strtotime("-".$d." day",strtotime($today)))."<br>";
echo Date("Y-m-d",strtotime($today))."<br>";
echo Date("Y-m-d",strtotime("+".$d." day",strtotime($today)))."<br>";
exit;
*//*echo decrypt("1950",$encrypt);
exit;*/

//$selr = "select * from ".$tbname."_duebalancepayment  order by _ID DESC ";
$selr = "select * from ".$tbname."_temp_upgradetbl  order by _ID DESC ";
//$selr = "select * from ".$tbname."_temp_duebalance  order by _ID DESC ";
//$selr = "select * from ".$tbname."_virtualofficebooking  order by _ID DESC ";
//$selr = "select * from ".$tbname."_apicompanyhouse  order by _ID DESC ";

$selr = "select * from ".$tbname."_voiplandlinebooking limit 1  ";
$rsr  = mysql_query($selr) or die(mysql_error());
echo "<pre>";
while($row = mysql_fetch_assoc($rsr)){
	print_r($row);
}







?>