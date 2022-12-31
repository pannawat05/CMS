<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;600&display=swap" rel="stylesheet">
</head>
<style type="text/css">
.sidenav{
height: 100%;
width: 0;
position: fixed;
z-index: 1;
top: 0;
left: 0;
background-color:rgb(45,48,58);
overflow-x: hidden;
transition: 0.5s;
padding-top: 60px;
}
.sidenav a{
padding: 8px 8px 8px 32px;
text-decoration: none;
font-size: 30px;
color: #fff;
display: block;
transition: 0.3s;
font-family: 'Prompt', sans-serif;
}
.sidenav a:hover{
background-color: #FDEEEE;
}
.sidenav .closebtn{
position: absolute;
top: 0;
right: 25px;
font-size: 36px;
margin-left: 50px;
}
#main{
transition: margin-left .5s;
padding: 16px;
}
</style>
<body>
<div id="mysidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="font-size: 35px">&times;</a>
<a href="admin.php?p=1">การตั้งค่าทั่วไป</a>
<a href="admin.php?p=2">ตั้งค่าบทความ/คลิป</a>
<a href="#">ความคิดเห็นทั้งหมด</a>
<a href="#">ตั้งค่าข้อมูลผู้พัฒนา</a>
</div>
<div class="main">
<span style="font-size: 30px; cursor: pointer; background-color: rgb(45,48,58); color: #fff; font-family: 'Prompt', sans-serif;" onclick="openNav()">CONSOLE&#9776;</span>
</div>
<script type="text/javascript">

function openNav(){
document.getElementById("mysidenav").style.width = "30%";
document.getElementById("main").style.marginLeft = "30%";
}
function closeNav(){
document.getElementById("mysidenav").style.width = "0";
document.getElementById("main").style.width = "0";


}
</script>
</body>
</html>