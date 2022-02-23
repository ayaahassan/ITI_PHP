<?php

require_once 'config.php';
echo "<center>hello php</center>";
$getname=isset($_POST["username"])?$_POST["username"]:"";
$getemail=isset($_POST["email"])?$_POST["email"]:"";
$gettextarea=isset($_POST["comment"])?$_POST["comment"]:"";
$count=0;
if (isset($_POST["send"])){
if(strlen($getname)>NAME_MAXLENGTH)
{

	$message[]="******too long name";
	$count++;
}
if(!empty($getemail)&&(!filter_var($getemail,FILTER_VALIDATE_EMAIL)))
{
	$message[]="*****invalid email";
	$count++;
}
if(strlen($gettextarea)>TEXTAREA_MAXLENGTH)
{
	$message[]="*****too long message";
	$count++;
}

//$_SERVER['REQUEST_METHOD'] !== 'post'

if($count>0)
  {
	foreach($message as $data)
     {
	echo " $data<br>";
      }
  }
  else
  {
      $fp = fopen("log.txt","a+");
      $visitdate=date("F j Y g:i a");
     $display="Date".$visitdate.","."ip". $_SERVER['REMOTE_ADDR'].","."email ".$getemail.","."name".$getname;
      fwrite($fp,$display.PHP_EOL);
      echo SUBMIT_MESG."<br>";
	  echo "**$getname<br>";
	  echo "**$getemail<br>";
	  echo "**$gettextarea";
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
<h3>

</h3>
<form id="usrform"  method="post" action="form.php">
Name<input type="text" name="username" value="<?php getvalue("username");?>"><br>
Email<input type="text" name="email" value="<?php getvalue("email")?>"><br>
<textarea name="comment" form="usrform"><?php getvalue("comment")?></textarea><br>
<input type="submit" value="send"  name="send">
<input type="reset" name="clear">

</form>
</body> 
</html>