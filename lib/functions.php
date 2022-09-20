<?php

//Функция принимает на входе строку с телефонным номером в произвольном формате, 
//а возвращает либо телефонный номер в формате +7xxxxxxxxxx, либо false
function validate_russian_phone_number($tel = '')
{
    $tel = trim((string)$tel);
    if (!$tel) return false;
    $tel = preg_replace('#[^0-9+]+#uis', '', $tel);
    if (!preg_match('#^(?:\\+?7|8|)(.*?)$#uis', $tel, $m)) return false;
    $tel = '+7' . preg_replace('#[^0-9]+#uis', '', $m[1]);
    if (!preg_match('#^\\+7[0-9]{10}$#uis', $tel, $m)) return false;
    return $tel;
}
	
	
	
function normalise_phone($phone) {
$resPhone = preg_replace("/[^0-9]/", "", $phone);
if (strlen($resPhone) === 11) {
$resPhone = preg_replace("/^8/", "7", $resPhone);
}
return $resPhone;
}	
	
	
	




?>