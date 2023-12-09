<!DOCTYPE html>
<html>
<head>
<title>PrintPal</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>


line {
	position: absolute;
	top: 22%;
	background: #3042E0;
	width: 100%;
	height: 1px;
}

displaybox{
	font-family: "Times New Roman", Times, serif;
	font-size: 25px;
	border: 1px solid #1B23DB;
	background: #fff9f9;
	line-height: 25px;
	position: absolute;
	top: -70px;
	left: 0px;
	width: 300px;
	height: 70px;
	padding: 10px 10px;
}

displaybox0{
	font-family: "Times New Roman", Times, serif;
	font-size: 25px;
	background: rgba(1,1,1,0);
	line-height: 25px;
	position: absolute;
	top: -60px;
	left: 60px;
	width: 250px;
	height: 60px;
	padding: 10px 10px;
}

label{
	font-family: "Times New Roman", Times, serif;
	font-size: 25px;
	text-align: center;
	overflow: clip;
	position: relative;
	top: -40px;
	left: -1px;
	width: 25%;
	height: 40px;
	box-sizing: border-box
	background: #f2f2f2;
	border: 1px solid #000000;
}

main-box{
	position: absolute;
	left: 25%;
	top: 30%;
	width: 50%;
	height: 50%;
	background: #fefbfb;
	border: 1px solid #000000;
}

button-box{
	width: 30%;
	height: 100px;
	overflow: clip;
	padding: 35px 0px;
	text-align: center;
	background: #f9f9f9;
	border: 1px solid #000000;
	color: black;
}

button-box:hover{;
	background: #f0f0f0;
}

but{
	position: fixed;
	top: 90%;
	left: 20px;
	font-family: "Times New Roman", Times, serif;
}

</style>
</head>

<body>
<line> 
	<displaybox><img src="/PrintPal/image/icon_change_feature.png" width=50 height=50></displaybox>
	<displaybox0><b> QUẢN LÝ MÁY IN </b></displaybox0>
</line>

<main-box>
	<label>
		<b>Chọn tính năng</b>
	</label>
	<button-box type="button" style="position:absolute; top: 30%; left: 10%" onclick='location.href="/PrintPal/index.php?page=SPSOprinterManage/AddPrinter"'>
		Thêm máy in
	</button-box>
	<button-box type="button" style="position:absolute; top: 30%; left: 60%" onclick='location.href="/PrintPal/index.php?page=SPSOprinterManage/DisableEnablePrinter"'>
		Trao quyền máy in
	</button-box>
</main-box>>

<but><input type="button" name="back" value="Trở lại" onclick="location.href='/PrintPal/index.php?page=home'"></but>


<div class="but" href="">
</div>
	

                                  


</body>
</html>