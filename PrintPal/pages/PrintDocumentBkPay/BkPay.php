<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Payment with BKPay</title>
    <style>
		*{
			margin: 1;
			padding: 0;
			box-sizing: border-box;
		}
        body {
            font-family: 'Times New Roman', Times, serif; 
        }
        .header {
            font-family: "Times New Roman", Times, serif;
			font-size: 16px;
			background: rgba(1,1,1,0);
			line-height: 25px;
			position: absolute;
			top: -100px;
			left: 60px;
			width: 250px;
			height: 60px;
			padding: 22px 10px;
        }
		.headerimg {
            font-family: "Times New Roman", Times, serif;
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
        .content-box {
            border: 1px solid #000; 
            width: 50%; 
            max-width: 800px;
			position: absolute;
			top: 25%;
			left: 25%;
        }
        .container { 
            width: 600px; 
            margin: 0px auto; 
			padding: 20px;
        }
		.container0 {
			border: 1px solid #000; 
			width: 200px;
			float: right;
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
            padding: 10px 20px;
            background-color: #d0d0d0;
            border: none;
            text-decoration: none;
            color: black; 
            display: inline-block;
            margin-right: 10px;
		}
    </style>
</head>
<body style="background-color:rgba(255,255,255,1); margin: 0px">
	<iframe src="BkPay1.php" id="subscreen" allowtransparency=True style="border:solid 2px #aaaaaa; position:absolute; z-index:1;" width=0% height=0% ></iframe>
	<line>
		<div class="headerimg">
			<img src="/PrintPal/image/icon_buy.png" width=50 height=50>
		</div>
		<div class="header">
			<h2>THANH TOÁN BẰNG BKPAY</h2>
		</div>
	</line>
    <div class="content-box">
		<div class="container0" id="pageLeft">
			Số giấy còn lại:
		</div>
		<div class="container0" id="moneyLeft">
			Số tiền còn lại:
		</div>
        <div class="container">
			<h3>NHẬP THÔNG TIN THANH TOÁN</h3>
			<div class="form-group">
				<label for="pageCount">Số giấy cần mua</label>
				<input type="number" min="0" step="1" id="pageCount" name="pageCount" placeholder="Nhập số giấy" onchange="notify()">
			</div>
			<div class="form-group">
				<label for="totalCost">Tổng số tiền cần thanh toán(1 tờ: 200đ)</label>
				<input type="text" id="totalCost" name="totalCost" placeholder="Tính tự động" readonly>
			</div>
			<div id="moneyRes" class="form-group" style="color:red"></div>
			<button type="button" onclick="back()" class="button-style">Trở lại</button>
			<button type="button" onclick="pay()" class="button-style" id="Pay" disabled>Thanh toán</button>
        </div>
    </div>
	<script>
	var money_left = 100000;
	var money_need = 0;
	function notify(){
		var page_num = document.getElementById("pageCount").value;
		money_need = 200*page_num;
		if (money_need > money_left){
			document.getElementById('moneyRes').innerHTML = "Không đủ tiền!";
			document.getElementById('Pay').disabled = true;
		}else if (page_num == ""){
			document.getElementById('moneyRes').innerHTML = "";
			document.getElementById('Pay').disabled = true;
		}else{
			document.getElementById('moneyRes').innerHTML = "";
			document.getElementById('Pay').disabled = false;
		}
		document.getElementById('totalCost').value = money_need;
	}
	function back(){
		var parent_page = window.parent.document;
		parent_page.getElementById('subscreenPay').width = "0%";
		parent_page.getElementById('subscreenPay').height = "0%";
	}
	function pay(){
		document.getElementById("subscreen").width = "100%";
		document.getElementById("subscreen").height = "100%";
		var parent_document = window.parent;
		console.log(document.getElementById("pageCount").value);
		parent_document.remaining_pages += parseInt(document.getElementById("pageCount").value);
		console.log(parent_document.remain_page);
		parent_document.displayRemainPage();
		money_left -= money_need;
		document.getElementById('moneyLeft').innerHTML = "Số tiền còn lại: " + money_left;
	}
	document.getElementById('pageLeft').innerHTML = "Số giấy còn lại: " + window.parent.remaining_pages;
	document.getElementById('moneyLeft').innerHTML = "Số tiền còn lại: " + money_left;
	</script>
</body>
</html>
