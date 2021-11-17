<?php 
require 'app/Cproduct.php';
$config=require 'config.php';

$conn=new Cproduct($config['database']);
$items=$conn->GetItems(3);
?>