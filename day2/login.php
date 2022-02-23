<?php
session_start();
require_once 'config.php';
echo "<center>hello php</center>";
$getname=isset($_POST["username"])?$_POST["username"]:"";
$getpass=isset($_POST["pass"])?$_POST["pass"]:"";
$count=0;
if (isset($_POST["send"])){
    if(strlen($getname)>NAME_MAXLENGTH)
    {

        $message[]="******too long name";
        $count++;
    }


    if($count>0)
    {
        foreach($message as $data)
        {
            echo " $data<br>";
        }
    }
    else
    {

        if($getname==="admin"&& $getpass="aya")
        {
            $_SESSION['use']=$getname;
            header("Location:privatepage.php");
            die;
        }
        else
            echo "wrong Data";
    }
}
function getvalue($field)
{
    if(isset($_POST[$field]))
    {
        echo $_POST[$field];
    }
}
?>
<html>
<body>
<form id="usrform"  method="post" >
    Name<input type="text" name="username" value="<?php getvalue("username");?>"><br>
    Password<input type="password" name="pass" value="<?php getvalue("pass")?>"><br>
    <input type="submit" value="send"  name="send">
    <input type="reset" name="clear">

</form>
</body>
</html>
