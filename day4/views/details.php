<?php
//require_once("../index.php");
require_once("../vendor/autoload.php");
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();
$capsule->addConnection([
    "driver" => _driver_,
    "host" => _host_,
    "database" => _database_,
    "username" => _username_,
    "password" => _password_
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();
$index = (isset($_GET["index"]) && is_numeric($_GET["index"]) ) ? (int) $_GET["index"] : 0;
$all_requrds= Capsule::table("items")->skip($index)->take(_Pager_size_)->get();

/*Capsule::table('items')->insert([
    'id' => 1000,
    'PRODUCT_code' => '123',
    'product_name' => 'try',
    'reorder_level' => 25465
]);
*/
echo "<table border='1'>";
//var_dump($all_requrds[0]);
echo "<tr>";

echo "<td>".$all_requrds[$index]->product_name ."</td>";
echo "<td>".$all_requrds[$index]->list_price ."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>".$all_requrds[$index]->CouNtry ."</td>";
//$image="views/".$all_requrds[$index]->Photo;
$image2="views/04.png";
echo $image2;
//imagepng($image);

echo "<td style=\"height:400px ;width:400px\"><img src='".$image2."' /> </td>";

echo "</tr>";

?>