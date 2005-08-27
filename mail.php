<style type="text/css">
<!--
body,td,th {
	color: #FFFFFF;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
body {
	background-color: #ae0000;
}
h1 { font-family: verdana, arial, sans-serif; font-size: 14pt; color: #000000 }
a:link {
	color: #FFFFFF;
}
a:visited {
	color: #FFFFFF;
}
a:hover {
	color: #999999;
}
a:active {
	color: #999999;
}
-->
</style>
<?php
 $to="vector@uw.hu";
 if (!isset($_POST["send"])){
?>
<h1 align="center">E-Mail</h1>
<form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
<table border="0" align="center">
<tr>
<td align="right"><b>Név:</b></td><td><input type="text" name="sender" maxlength="64" size="28" /><br /></td>
</tr>
<tr>
<td align="right"><b>E-Mail:</b></td><td><input type="text" name="subject" maxlength="255" size="28" /><br /></td>
</tr>
<tr>
<td valign="top" align="right"><b>Üzenet:<br>+<br>+<br>+<br>+<br>+<br>+<br>+<br>+</b></td><td><textarea name="message" rows="7" cols="32"></textarea><br /></td>
</tr>
<tr>
<td valign="top"><input type="submit" name="send" value="Küldés" /></td>
<td>+++++++++++++++++++++++++++++++</td>
</tr>
</table>
</form>
<? 
 }else{
   $from=$_POST['sender'];
   if (mail($to,$_POST['subject'],$_POST['message'],"From: $from\n")){
     echo "Az üzenet el lett küldve a $to címre.
";
 }else{
    echo "Az üzenetet nem sikerült elküldeni!
";
   }
 }
 ?>