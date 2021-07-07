<?php
include('database.php');

$obj=new query();
$condition_arr=array('name'=>'xyz','email'=>'xyz@gmail.com');

$result=$obj->updateData('user',$condition_arr,'id',2);
?>