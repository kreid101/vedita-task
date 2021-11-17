<?php 
require 'core/bootstrap.php';
require 'public/views/home.php';

if(isset($_GET['row']))
{
    $conn->hideItem($_GET['row']);
}

if(isset($_GET['id']))
{
    $conn->changeQnt($_GET['id'],$_GET['qnt']);
}