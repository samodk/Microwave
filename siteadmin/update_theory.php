<?php
require_once("../includes/startup.php");
require_once("authenticate.php");
$id=$_REQUEST['id'];
loadEntity("theory");
loadEntity("experiment");
$data = theory::getARow($id);
NTemplate::assign('data',$data);
NTemplate::assign('id',$id);
NTemplate::assign("IS_EDITOR",true);
NTemplate::assign("getMsg",getMsgSmarty('error'));
NTemplate::display('update_theory.tpl');
?>
