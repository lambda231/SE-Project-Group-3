<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Thêm máy in</title>
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
			top: -60px;
			left: 60px;
			width: 250px;
			height: 60px;
			padding: 10px 10px;
		}
        .content-box {
            border: 1px solid #000; 
            padding: 0px 20px;
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
        input[type=text], input[type=number], input[type=date], select { 
            width: 100%; 
            padding: 5px; 
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
    </style>
</head>
<body style="margin: 0px">
	<iframe src="/PrintPal/pages/SPSOprinterManage/AddPrinter1.php" id="subscreen" allowtransparency=True style="border:none; position:absolute; z-index:1" width=0% height=0% ></iframe>
	
	<line> 
		<displaybox><img src="/PrintPal/image/icon_change_feature.png" width=50 height=50></displaybox>
		<displaybox0><b>THÊM MÁY IN</b></displaybox0>
	</line>

    <div class="content-box">
		<div class="container">
			<h3><b>THÊM MÁY IN</b></h3>
			<div class="form-group">
				<label for="defaultPages">ID máy in</label>
				<input type="number" id="id" name="defaultPages" onchange="check()">
			</div>
			<div class="form-group">
				<label for="defaultPages">Hiệu</label>
				<input type="text" id="brand" name="defaultPages" onchange="check()">
			</div>
			<div class="form-group">
				<label for="defaultPages">Model</label>
				<input type="text" id="model" name="defaultPages" onchange="check()">
			</div>
			<div class="form-group">
				<label for="defaultPages">Vị trí</label>
				<input type="text" id="location" name="defaultPages" onchange="check()">
			</div>
			<a href="/PrintPal/index.php?page=SPSOprinterManage/PManageMenu" class="button-style">Trở lại</a>
			<button type="button" onclick="notify()" id="addbutton" class="button-style" disabled>Thêm</button>
		</div>
	</div>
<script>
	function notify(){
		var info_frame = document.getElementById("subscreen"); 
		info_frame.width = "100%";
		info_frame.height = "100%";
	}
	function check(){
		var id = document.getElementById("id").value;
		var brand = document.getElementById("brand").value;
		var model = document.getElementById("model").value;
		var location = document.getElementById("location").value;
		var button = document.getElementById("addbutton");
		button.disabled = !((id!="")&& (brand!="")&& (model!="")&& (location!=""));
	}
</script>
</body>
</html>
