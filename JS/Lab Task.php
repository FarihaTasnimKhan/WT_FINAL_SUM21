<html>
<head></head>
<body>
<form>
<input id="uname" onkeyup="getVal (this)" type="text" placeholder="Username"><br>
<span id="op"></span> <br>
<input type="password" placeholder="Password"><br>
</form>
<button id="btn_g" onclick="viewGoogle ()">Login with Google</button>
<span onmouseover="viewInfo()" onmouseout="hideInfo()">aiub</span>
<p id="aiub_info" style="display:none;">
American International University-Bangladesh, commonly known by its acronym AIUB, is an accredit
</p>
<form id="g_form" style="display:none;">
<input type="text" placeholder="gmail"><br>
<input type="password" placeholder="gmail password"><br>
</form>
<script src="myjs.js"></script>


var g_status = false;
function getVal (e_uname) {
//var e_uname = get ("uname");
var uname = e_uname.value;
get ("op").innerHTML = uname;
- }
e function get (id) {
return document.getElementById(id);
}
Ffunction viewGoogle () {
var g_f = get ("gform");
var g_b = get ("btn_g");
if(g_status) {
g_f.style.display="none";
btn g.innerHTML = "Login with Google";
g_status = false;
}
else{
g_f.style.display="block";
btn_g.innerHTML = "Hide Google Form";
g_status = true;
}
}
function viewInfo () {
var info = get ("aiub info");
info.style.display="block";
}
function hide Info() {
var info = get ("aiub info")
info.style.display="none";}