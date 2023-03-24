<?php
echo '<div style="width: 320px;height: 48px;margin: 0 auto;border: 2px grey solid;padding: 4px;font-size: 16px;text-align:center;"><div style="color:blue;text-align:center;">FUNCTIONS</div><div style="color: black;text-align:center;">webazon/functions</div></div><br /><hr /><br />';


require '../vendor/autoload.php';

// Json
$a=array();
$a['operation']='test';
$a['options']['id']=1;
$a['options']['text']='Мой текст';
$a['rnd']=rand(0,99999);
$json = Webazon\Functions\Json::json_encode($a);
echo Webazon\Functions\Json::json_print($a);
echo '<br /><br />';
if (Webazon\Functions\Json::isJson($json)){echo 'TRUE';}else{echo 'FALSE';}
echo ' ';
if (Webazon\Functions\Json::isJson('string')){echo 'TRUE';}else{echo 'FALSE';}

?>