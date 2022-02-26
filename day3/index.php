<?php
session_start();
require_once("vendor/autoload.php");
if(!isset ($_SESSION["is_visited"]))
{
    $visitor=new Visitor("user1","12345");
    $_SESSION["is_visited"]=false;
    Counter::increasecount();
}
else
{
    $_SESSION["is_visited"]=true;

}
$count=Counter::getcount();
echo "counted unique visit =".$count;




