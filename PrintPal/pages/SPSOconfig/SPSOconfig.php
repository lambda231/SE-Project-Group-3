<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Configuration Management</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Times New Roman', Times, serif; 
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
			top: -70px;
			left: 60px;
			width: 250px;
			height: 60px;
			padding: 10px 10px;
		}
        .content-box {
            border: 1px solid #000; 
            padding: 20px;
            margin: 20px auto; 
            width: 50%; 
            max-width: 800px; 
			position: absolute;
			top: 25%;
			left: 25%;
        }
        .container { 
            width: 600px; 
            margin: 50px auto; 
        }
        .form-group { 
            margin-bottom: 10px; 
        }
        label { 
            display: block; 
            margin-bottom: 5px; 
        }
        input[type=text], input[type=date], input[type=number], select { 
            width: 100%; 
            padding: 8px; 
        }
        input[type=submit], button { 
            padding: 10px 20px; 
            margin-right: 10px; 
        }
        button { 
            background-color: #f2f2f2; 
        }
        line {
			position: absolute;
			top: 22%;
			background: #3042E0;
			width: 100%;
			height: 1px;
        }
        .button-style {
			cursor: pointer;
            padding: 10px 20px;
            background-color: #f2f2f2;
            border: none;
            text-decoration: none;
            color: black; 
            display: inline-block;
            margin-right: 10px;
		}
		.button-style:disabled {
			cursor: default;
            background-color: #d0d0d0;
		}
		.button-style:hover:enabled{
			cursor: pointer;
            background-color: #e5e5e5;
		}
    </style>
</head>
<body style="margin: 0px">
	<iframe src="/PrintPal/pages/SPSOconfig/SPSOconfig1.php" id="subscreen" allowtransparency=True style="border:none; position:absolute; z-index:1" width=0% height=0% ></iframe>
	
	<line> 
		<displaybox><img src="/PrintPal/image/icon_change_config.png" width=50 height=50></displaybox>
		<displaybox0><b> QUẢN LÝ CẤU HÌNH </b></displaybox0>
	</line>

    <div class="content-box">
		<div class="container">
			<h3><b>NHẬP VÀO CẤU HÌNH</b></h3>
			<div class="form-group">
				<label id="defaultPagesLabel" for="defaultPages">Số trang mặc định(Hiện tại: )</label>
				<input type="number" min="0" step="1" id="defaultPages" name="defaultPages" onchange="check()">
			</div>
			<div class="form-group">
				<label id="effectiveDateLabel" for="effectiveDate">Ngày áp dụng cập nhật</label>
				<input type="date" id="effectiveDate" name="effectiveDate" onchange="check()">
			</div>
			<div class="form-group">
				<label id="fileTypeLabel" for="fileType">Loại tệp cho phép</label>
				<checkboxlist id="fileType" name="fileType" onchange="check()">
					<input type="checkbox" id="check" value="PDF">PDF</input>
					<input type="checkbox" id="check" value="DOC">DOC</input>
					<input type="checkbox" id="check" value="XLS">XLS</input>
				</checkboxlist>
			</div>
			<button type="button" onclick='location.href="/PrintPal/index.php?page=home"' class="button-style">Trở lại</button>
			<button type="button" onclick="notify()" id="applyButton" class="button-style" disabled>Áp dụng</button>
		</div>
	</div>
<script>
	var page = 20;
	var da = "2023-05-03";
	var fi = "PDF"
	function notify(){
		var info_frame = document.getElementById("subscreen"); 
		info_frame.width = "100%";
		info_frame.height = "100%";
		page = parseInt(document.getElementById("defaultPages").value);
		da = document.getElementById("effectiveDate").value;
		var filet = document.querySelectorAll("#check");
		var checked_filet = [];
		fi = "";
		for (let i = 0; i < filet.length; i++){
			if (filet[i].checked){
				checked_filet.push(filet[i]);
			}
		}
		console.log(checked_filet);
		for (let i = 0; i < checked_filet.length; i++){
			fi += checked_filet[i].value;
			if (i != checked_filet.length - 1){
				fi += ", ";
			}
		}
		displayCurr();
	}
	function check(){
		var defaultPages = document.getElementById("defaultPages").value;
		var effectiveDate = document.getElementById("effectiveDate").value;
		var filet = document.querySelectorAll("#check");
		var button = document.getElementById("applyButton");
		var filetcheck = false;
		for (let i = 0; filet[i]; i++){
			if (filet[i].checked){
				filetcheck = true;
				break;
			}
		}
		button.disabled = !((defaultPages!="")&& (effectiveDate!="")&& (filetcheck));
	}
	function displayCurr(){
		document.getElementById("defaultPagesLabel").innerHTML = "Số trang mặc định (Hiện tại:" + page + " )";
		document.getElementById("effectiveDateLabel").innerHTML = "Ngày áp dụng cập nhật (Hiện tại:" + da + " )";
		document.getElementById("fileTypeLabel").innerHTML = "Loại tệp cho phép (Hiện tại:" + fi + " )";
	}
	displayCurr();
</script>
</body>
</html>
