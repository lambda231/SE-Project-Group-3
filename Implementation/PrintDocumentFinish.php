<!DOCTYPE html>
<html>
<head>
<title>PrintPal</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>

form{
	font-family: "Times New Roman", Times, serif;
	border: 1px solid #000000;
	background: #fffcfc;
	line-height: 25px;
	position: relative;
	z-index: 1;
	top: 190px;
	left: 30%;
	width: 40%;
	height: 337px;
	padding: 10px;
}

miniform{
	font-family: "Times New Roman", Times, serif;
	border: 1px solid #000000;
	background: #fdfdff;
	position: absolute;
	left: 5%;
	padding: 0px 10px;
	line-height: 20px;
	text-align: center;
}

bo{
	font-family: "Times New Roman", Times, serif;
	border: 1px solid #000000;
	background: #fdfdff;
	position: absolute;
	left: 5%;
	width: 90%;
	padding: 10px 10px 10px 10px;
	line-height: 20px;
}

bi{
	font-family: "Times New Roman", Times, serif;
	position: absolute;
	top: 150px;
	left: 20%;
	width: 60%;
	padding: 0px 10px;
	line-height: 20px;
	text-align: center;
}

bu{
	font-family: "Times New Roman", Times, serif;
	position: absolute;
	top: 85px;
	left: 60%;
	padding: 0px 10px;
	line-height: 20px;
	text-align: left;
}

be{
	font-family: "Times New Roman", Times, serif;
	position: absolute;
	top: 85px;
	left: 80%;
	padding: 0px 10px;
	line-height: 20px;
	text-align: left;
}

feature{
	font-family: "Times New Roman", Times, serif;
	border: 1px solid #000000;
	background: #fdfdff;
	position: absolute;
	top: 185px;
	left: 15px;
	padding: 0px 10px;
	line-height: 20px;
	text-align: center;
}

featurebo{
	font-family: "Times New Roman", Times, serif;
	border: 1px solid #000000;
	background: #fdfdff;
	position: absolute;
	top: 210px;
	left: 15px;
	padding: 10px 10px 10px 10px;
	line-height: 20px;
}

table {
  border-collapse: collapse;
  width: 60%;
  position: fixed;
  z-index: 0;
  top: 190px;
  left: 20%;
  font-family: "Times New Roman", Times, serif;
}

th {
  background-color: #d9d9d9;
  border: 2px solid #000000;
  text-align: center;
  padding: 8px;
}

td {
  background-color: #fffcfc;
  border: 2px solid #bbbbbb;
  text-align: center;
  padding: 8px;
}

tablepagelist{
	font-family: "Times New Roman", Times, serif;
	font-size: 17px;
	position: fixed;
	top: 550px;
	left: 50%;
	text-align: center;
}

pagebut{
	position: relative;
	left: 10px;
}


line {
	position: absolute;
	top: 22%;
	background: #3042E0;
	width: 100%;
	height: 1px;
}

displayinfobox{
	font-family: "Times New Roman", Times, serif;
	font-size: 25px;
	border: 1px solid #000000;
	background: #fff9f9;
	line-height: 25px;
	position: absolute;
	top: -70px;
	left: 20px;
	width: 300px;
	height: 70px;
	padding: 10px 10px;
}

displayinfo{
	font-family: "Times New Roman", Times, serif;
	font-size: 25px;
	background: rgba(1,1,1,0);
	line-height: 25px;
	position: absolute;
	top: -60px;
	left: 30px;
	width: 300px;
	height: 60px;
	padding: 10px 10px;
}

displaybuybox{
	font-family: "Times New Roman", Times, serif;
	font-size: 25px;
	border: 1px solid #000000;
	background: #fff9f9;
	line-height: 25px;
	position: absolute;
	top: -70px;
	left: 990px;
	width: 200px;
	height: 70px;
	padding: 10px 10px;
}

displaybuy{
	font-family: "Times New Roman", Times, serif;
	font-size: 25px;
	background: rgba(1,1,1,0);
	line-height: 25px;
	position: absolute;
	top: -60px;
	left: 1000px;
	width: 150px;
	height: 60px;
	padding: 10px 10px;
}

displaypagebox{
	font-family: "Times New Roman", Times, serif;
	font-size: 25px;
	border: 1px solid #000000;
	background: #fff9f9;
	line-height: 25px;
	position: absolute;
	top: -70px;
	left: 590px;
	width: 250px;
	height: 70px;
	padding: 10px 10px;
}

displaypage{
	font-family: "Times New Roman", Times, serif;
	font-size: 25px;
	background: rgba(1,1,1,0);
	line-height: 25px;
	position: absolute;
	top: -60px;
	left: 600px;
	width: 250px;
	height: 60px;
	padding: 10px 10px;
}

done{
	font-family: "Times New Roman", Times, serif;
	z-index: 2;
	font-size: 15px;
    background-color: rgba(0, 0, 0, 0.5);
	line-height: 25px;
	position: absolute;
	top: 0px;
	left: 0x;
	width: 100%;
	height: 100%;
	padding: 10px 10px;
}

doneline{
	position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fefefe;
            padding: 20px;
            border: 1px solid #888;
            text-align: center;
} 
buttonstyle {
    padding: 10px 20px;
    background-color: #f2f2f2;
    border: none;
    text-decoration: none;
    color: black;
    display: inline-block;
    margin-right: 10px;
}

</style>
</head>

<body style="background-color: rgba(0,0,0,0.5)">

<doneline>
	<h2><b>Hoàn thành</b></h2>
	<a button name="button" type="button" onclick="backtoMain()">Trở lại</button></a>
</doneline>

<script>
	function backtoMain(){
		var parent_page = window.parent.document;
		parent_page.getElementById('finishNotify').width = "0%";
		parent_page.getElementById('finishNotify').height = "0%";
		window.parent.back();
	}
</script>

</body>
</html>