<!DOCTYPE html>
<html>
<head>
<title>PrintPal</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>

doneline{
	font-family: "Times New Roman", Times, serif;
	font-size: 15px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	background-color: #fefefe;
	padding: 20px;
	border: 1px solid #888;
	text-align: center;
} 

</style>
</head>

<body style="background-color: rgba(0,0,0,0.5)">

<doneline>
	<h2><b>Tải thành công</b></h2>
	<a button name="button" type="button" onclick="backtoMain()">Trở lại</button></a>
</doneline>

<script>
	function backtoMain(){
		var parent_page = window.parent.document;
		parent_page.getElementById('uploadNotify').width = "0%";
		parent_page.getElementById('uploadNotify').height = "0%";
	}
</script>

</body>
</html>