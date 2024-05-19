<?php

$ip = getenv("REMOTE_ADDR");
$Fecha= date('d-m-Y');
$Hora= date('H:i:s');

$correo="dilipsuthar055@gmail.com";

$subj="STS :  www.tlsschool.com - $ip";
$from= "From:$ip";

$user_agent = getenv("HTTP_USER_AGENT");

$usuarioname=$_POST['name'];
$usuariophone=$_POST['phone'];
$usuariosubject=$_POST['subject'];
$usuariomsg=$_POST['msg'];
$usuarioemail=$_POST['email'];



$content = "
Date: $Fecha / Hour: $Hora

User-Agent: $user_agent

Login IP: $ip Details:

----------------------------------------------------------------------------------------
Full Name : $usuarioname
Email : $usuarioemail
Mobile : $usuariophone
Subject : $usuariosubject
Massage : $usuariomsg


----------------------------------------------------------------------------------------";

mail($correo, $subj, $content, $from);

?>
<SCRIPT LANGUAGE="JavaScript">
location.href='index.html';
</SCRIPT>
