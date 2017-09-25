<?php
error_reporting(E_ALL); ini_set('display_errors', 1) ;
require_once '../php/common.php';


if(isset($_REQUEST['hallos']))
{
    try{
    postHallos($_REQUEST['hallos'],'');
    echo '{"result":"success"}';
    }catch(Exception $e){echo '{"result":$e}';}
}

?>
