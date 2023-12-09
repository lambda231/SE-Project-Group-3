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
	background-color: #f0f0f0;
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
	background-color: #f0f0f0;
	font-family: "Times New Roman", Times, serif;
	position: absolute;
	top: 90px;
	left: 80%;
	width: 15%;
	padding: 0px 10px;
	line-height: 20px;
	text-align: center;
}

.bu:hover{
	background-color: #ffffff;
}

.be:disabled{
	background-color: #d0d0d0;
}

feature{
	font-family: "Times New Roman", Times, serif;
	border: 1px solid #000000;
	background: #fdfdff;
	position: absolute;
	top: 190px;
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
	top: 215px;
	left: 5%;
	width: 90%;
	padding: 10px 10px 10px 10px;
	line-height: 20px;
}

uploadarea{
	width: 90%;
	font-family: "Times New Roman", Times, serif;
	border: 3px dashed #000000;
	position: absolute;
	top: 150px;
	left: 5%;
}

</style>
</head>

<body style="background-color:rgba(0,0,0,0.2)">

<iframe src="PrintDocumentUpload.php" id="uploadNotify" allowtransparency=True style="border:none; position:absolute; z-index:2" width=0% height=0% ></iframe>
<iframe src="PrintDocumentFinish.php"  id="finishNotify" allowtransparency=True style="border:none; position:absolute; z-index:2" width=0% height=0% ></iframe>

<form method = "post">
	<miniform>Máy in</miniform><br>
	<bo id="DisplayData"></bo>
	
	<uploadarea> 
		<input type="file" id="FileUpload" onchange="check()">
	</uploadarea>
	
	<feature>Hình thức in</feature><br>
	<featurebo>
		Trang <input type="text" id="PagePrint" placeholder="Vd:1,2,3" style="width:100px" pattern="[0-9,]{0,}" onchange="check()">
		Cỡ giấy <select id="PageType" onchange="check()"> 
						<option>A4</option>
						<option>A3</option>
				</select>(A3 = 2 tờ, A4 = 1 tờ)<br>
		Số bản in <input type="number" id="PrintPage" min="0" step="1" style="width:50px" onchange="check()">
		<label id="RemainingPage"></label><label id="PageError" style="color:red"></label><br>
		<input type="radio" id="page" name="page" value="Một mặt" onchange="check()">Một mặt  
		<input type="radio" id="page" name="page" value="Hai mặt" onchange="check()">Hai mặt <br>
		<input type="button" class="bu" value="Trở lại" onclick="back()">
		<input type="button" class="be" id="PrintButton" value="In" onclick="notify('finishNotify')" disabled>
	</featurebo>
</form>

<script>
	var page_necc = 0;
	function check(){
		var check_box = document.querySelectorAll("#page")
		var check_face = false;
		for (let i of check_box){
			if (i.checked == true){
				check_face = true;
				break;
			}
		}
		if (document.getElementById('FileUpload').files.length == 0){
			document.getElementById('PageError').innerHTML = "Chưa chọn file để in!";
			document.getElementById('PrintButton').disabled = true;
		} else if(document.getElementById('PagePrint').value == ""){
			document.getElementById('PageError').innerHTML = "Chưa chọn trang để in!";
			document.getElementById('PrintButton').disabled = true;
		} else if(document.getElementById('PrintPage').value == ""){
			document.getElementById('PageError').innerHTML = "Chưa chọn số bản để in!";
			document.getElementById('PrintButton').disabled = true;
		} else if(check_face == false){
			document.getElementById('PageError').innerHTML = "Chưa chọn số mặt để in!";
			document.getElementById('PrintButton').disabled = true;
		}else {
			page_necc = parseInt(document.getElementById('PrintPage').value);
			var print_pages = document.getElementById('PagePrint').value.trim().split(",");
			page_necc *= print_pages.length;
			if (document.querySelectorAll('#page')[1].checked == true ){
				page_necc = Math.ceil(page_necc/2)
			}
			if (document.getElementById('PageType').value == "A3"){
				page_necc *= 2;
			}
			if (window.parent.remaining_pages < page_necc){
				document.getElementById('PageError').innerHTML = "Không đú giấy để in!";
				document.getElementById('PrintButton').disabled = true;
			}else{
				document.getElementById('PageError').innerHTML = "";
				document.getElementById('PrintButton').disabled = false;
			}
		}
		
	}
	function back(){
		var parent_page = window.parent.document;
		parent_page.getElementById('subscreen').width = "0%";
		parent_page.getElementById('subscreen').height = "0%";
	}
	function notify(idname){
		document.getElementById(idname).width = "100%";
		document.getElementById(idname).height = "100%";
		if (idname == "finishNotify"){
			window.parent.remaining_pages -= page_necc;
			window.parent.displayRemainPage();
			document.getElementById("RemainingPage").innerHTML = "(Số giấy còn lại: " + window.parent.remaining_pages + ")<br>"
		}
	}
	function upload_file(a){
		a.preventDefault();
		fileobj = a.dataTransfer.file[0];
		js_file_upload(fileobj);
	};
</script>


</body>
</html>