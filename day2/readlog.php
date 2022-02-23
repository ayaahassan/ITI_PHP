<?php
session_start();

if(!isset($_SESSION["is_visited"])){
    echo "First Visit, Hello!";
    $_SESSION["is_visited"]=true;

}else{
    $_SESSION["counter"] = isset($_SESSION["counter"]) ? $_SESSION["counter"] + 1 : 2;
    echo "you visited this page ".$_SESSION["counter"]." times<br><br>";

}
if(file_exists("log.txt"))
{
    $imported_content = file("log.txt");
    //var_dump($imported_content);
    foreach($imported_content as $line )
    {
       $datastring=explode(",",$line);
       foreach($datastring as $print)
       { echo "$print<br>";}
       echo"----------------------<br>";
    }
   // var_dump($datastring);
}
?>
