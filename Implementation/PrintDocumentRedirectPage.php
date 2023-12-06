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
	position: absolute;
	z-index: 1;
	top: 22%;
	left: 30%;
	width: 40%;
	height: 340px;
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

.bu{
	font-family: "Times New Roman", Times, serif;
	position: absolute;
	top: 90px;
	left: 60%;
	width: 15%;
	padding: 0px 10px;
	line-height: 20px;
	text-align: center;
}

.be{
	font-family: "Times New Roman", Times, serif;
	position: absolute;
	top: 90px;
	left: 80%;
	width: 15%;
	padding: 0px 10px;
	line-height: 20px;
	text-align: center;
}

feature{
	font-family: "Times New Roman", Times, serif;
	border: 1px solid #000000;
	background: #fdfdff;
	position: absolute;
	top: 175px;
	left: 5%;
	padding: 0px 10px;
	line-height: 20px;
	text-align: center;
}

featurebo{
	font-family: "Times New Roman", Times, serif;
	border: 1px solid #000000;
	background: #fdfdff;
	position: absolute;
	top: 200px;
	left: 5%;
	width: 90%;
	padding: 10px 10px 10px 10px;
	line-height: 20px;
}


</style>
</head>

<body style="background-color:rgba(0,0,0,0.2)">

<iframe src="PrintDocumentUpload.php" id="uploadNotify" allowtransparency=True style="border:none; border: 1px solid #000000; position:absolute; z-index:2" width=0% height=0% >
</iframe>
<iframe src="PrintDocumentFinish.php"  id="finishNotify" allowtransparency=True style="border:none; border: 1px solid #000000; position:absolute; z-index:2" width=0% height=0% >
</iframe>

<form method = "post">
	<miniform>Máy in</miniform><br>
	<bo id="DisplayData"></bo>
	<bi><button type="button" onclick='notify("uploadNotify")'><b>TẢI FILE TẠI ĐÂY</b></button> </bi><br>
	
	<feature>Hình thức in</feature><br>
	<featurebo>
		Trang <input type="text" style="width:50px" pattern="[0-9,]{0,}">
		Cỡ giấy <select> <option>A4</option>
						<option>A3</option>
				</select>
		
		Số bản in <input type="number" id="PrintPage" min="0" style="width:50px"><div id="RemainingPage"></div>
		
		<input type="radio" id="page" name="page" value="Một mặt"/>Một mặt  
		<input type="radio" id="page" name="page" value="Hai mặt"/>Hai mặt <br>
		
		<input type="button" class="bu" value="Trở lại" onclick="back()">
		<input type="button" class="be" value="In" onclick="notify('finishNotify')">
	</featurebo>
</form>

<script>
	function back(){
		var parent_page = window.parent.document;
		parent_page.getElementById('subscreen').width = "0%";
		parent_page.getElementById('subscreen').height = "0%";
	}
	function notify(idname){
		document.getElementById(idname).width = "100%";
		document.getElementById(idname).height = "100%";
		if (idname == "finishNotify"){
			window.parent.remaining_pages -= document.getElementById('PrintPage').value;
			window.parent.displayRemainPage();
			document.getElementById("RemainingPage").innerHTML = "(Số trang còn lại: " + window.parent.remaining_pages + ")<br>"
		}
	}
	
</script>


</body>
</html>