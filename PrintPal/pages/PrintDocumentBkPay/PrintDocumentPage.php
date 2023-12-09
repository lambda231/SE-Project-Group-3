<?php
class Log{
	public $brand;
    public $printerID;
    public $model;
    public $location;
    function __construct($sID, $pID, $fname, $stime){
    	$this->brand = $sID;
        $this->printerID = $pID;
        $this->model = $fname;
        $this->location = $stime;
    }
};

$logs = array(new Log("HP", 0, "InkJet", "Cơ sở: 1 - Tòa: B4 - Phòng: 302"),
 			new Log("Canon", 2, "All-in-one", "Cơ sở: 1 - Tòa: B6 - Phòng: 110"),
 			new Log("Panasonic", 4, "All-in-one", "Cơ sở: 1 - Tòa: B6 - Phòng: 112"),
			new Log("XEROR", 6, "Laser", "Cơ sở: 1 - Tòa: B1 - Phòng: 101"),
 			new Log("RICOH", 8, "Inkjet", "Cơ sở: 1 - Tòa: A4 - Phòng: 105"),
 			new Log("Brother", 10, "Photo", "Cơ sở: 1 - Tòa: B3 - Phòng: 201"),
 			new Log("Canon", 12, "All-in-one", "Cơ sở: 1 - Tòa: C5 - Phòng: 101"),
 			new Log("RICOH", 16, "InkJet", "Cơ sở: 1 - Tòa: B3 - Phòng: 201"),
			new Log("IkJet", 16, "HP", "Cơ sở: 1 - Tòa: C4 - Phòng: 110"),
 			new Log("RICOH", 18, "InkJet", "Cơ sở: 1 - Tòa: B3 - Phòng: 201"),
 			new Log("Samsung", 20, "All-in-one", "Cơ sở: 1 - Tòa: B4 - Phòng: 305"),
 			new Log("XEROR", 22, "All-in-one", "Cơ sở: 1 - Tòa: C6 - Phòng: 105"),
 			new Log("OKI", 24, "Laser", "Cơ sở: 1 - Tòa: B5 - Phòng: 110"),
 			);

function notempty($index, $arr) {
	if (array_key_exists($index, $arr)){
		return ($arr[$index] == "0"||$arr[$index]);
	}
    return False;
};

?>

<!DOCTYPE html>
<html>
<head>
<title>PrintPal</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
table {
  border-collapse: collapse;
  width: 60%;
  position: relative;
  top: 190px;
  left: 20%;
  font-family: "Times New Roman", Times, serif;
}

th {
  background-color: #d9d9d9;
  border: 2px solid #000000;
  text-align: left;
  padding: 8px;
}

td {
  background-color: #fffcfc;
  border: 2px solid #bbbbbb;
  text-align: left;
  padding: 8px;
}

tablepagelist{
	position: relative;
	top: 200px;
	left: 20%;
	width: 60%;
	text-align: center;
}

pagebut{
	position: relative;
	left: 10px;
}

form{
	font-family: "Times New Roman", Times, serif;
	line-height: 25px;
	position: relative;
	top: -20px;
	left: 70%;
	width: 30%;
	height: 150px;
	padding: 5px 10px;
}

miniform{
	font-family: "Times New Roman", Times, serif;
	border: 1px solid #000000;
	background: #fdfdff;
	position: absolute;
	left: 15px;
	padding: 0px 10px;
	line-height: 20px;
	text-align: center;
}

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
	top: -70px;
	left: 60px;
	width: 250px;
	height: 60px;
	padding: 22px 10px;
}

but{
	position: fixed;
	top: 90%;
	left: 20px;
	font-family: "Times New Roman", Times, serif;
}

displayinfobox{
	font-family: "Times New Roman", Times, serif;
	font-size: 25px;
	border: 1px solid #000000;
	background: #fff9f9;
	line-height: 25px;
	position: absolute;
	top: -70px;
	left: 60px;
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
	left: 85%;
	width: 15%;
	height: 70px;
	padding: 10px 10px;
}

displaybuy{
	font-family: "Times New Roman", Times, serif;
	font-size: 25px;
	background: rgba(1,1,1,0);
	line-height: 25px;
	position: relative;;
	width: 10%;
	height: 60px;
	padding: 10px 10px;
}

displaypage{
	font-family: "Times New Roman", Times, serif;
	font-size: 20px;
	border: 1px solid #000000;
	background: #fff9f9;
	line-height: 25px;
	position: absolute;
	top: -40px;
	left: 70%;
	width: 15%;
	height: 40px;
	padding: 5px 10px;
}

</style>
</head>

<body>
<iframe src="/PrintPal/pages/PrintDocumentBkPay/PrintDocumentRedirectPage.php" id="subscreen" allowtransparency=True style="border:none; position:absolute; z-index:1" width=0% height=0% ></iframe>
<iframe src="/PrintPal/pages/PrintDocumentBkPay/BkPay.php" id="subscreenPay" allowtransparency=True style="border:none #000; position:absolute; z-index:1" width=0% height=0% ></iframe>

<line> 
	<displaybox><img src="/PrintPal/image/icon_print.png" width=50 height=50></displaybox>
	<displaybox0><b> SỬ DỤNG MÁY IN</b></displaybox0>
	<displaypage id="RemainingPage"></displaypage>
	<displaybuybox type="button" onclick="openBkpay()">
		<img src="/PrintPal/image/icon_buy.png" width=50 height=50>
		<displaybuy><b> Mua giấy </b></displaybuy>
	</displaybuybox>
</line>

<table id="mainTable">
	<tr>
		<th style="width:5%">STT</th>
		<th style="width:10%">Mã máy in</th>
		<th style="width:15%">Hiệu</th>
		<th style="width:30%">Model</th>
		<th style="width:40%">Vị trí</th>
	</tr>
</table>

<tablepagelist id="tablepagelist"></tablepagelist>

<but><input type="button" name="back" value="Trở lại" onclick="location.href='/PrintPal/index.php?page=home'"></but>

<script>
var filterlogs = [];
var row_per_page = 5;
var remaining_pages = 4;
var old_part = 0;

function filter() {
	var logs = JSON.parse(JSON.stringify(<?php echo json_encode($logs);?>));
	filterlogs = logs;

	var pagebutlist = document.getElementById("tablepagelist");
	while (pagebutlist.hasChildNodes()){
		pagebutlist.removeChild(pagebutlist.lastElementChild);
	}
	var prev_but;
	for (i = 0; i < Math.ceil(filterlogs.length / row_per_page); i++){
		var but_wrapper = document.createElement("pagebut");
		var but = document.createElement("button");
		const temp = i;
		but.addEventListener("click", function() {displayTable(temp);});
		but.innerHTML = "" + (i + 1);
		but.id = "page" + i;
		but.style.backgroundColor = "#ffffff";
		but.style.fontFamily = "Times New Roman, Times, serif";
		but.style.padding = "0px 8px";
		but_wrapper.appendChild(but);
		if (!prev_but){
			pagebutlist.appendChild(but_wrapper);
		} else{
			prev_but.appendChild(but_wrapper);
		}
		prev_but = but_wrapper;
	}
};

function displayTable(part){
	var table = document.getElementById("mainTable");
	while (table.childElementCount > 1){
		table.removeChild(table.lastElementChild);
	}
	for (i = row_per_page*part; i < Math.min(row_per_page*(part+1), filterlogs.length); i++){
		var curr = filterlogs[i];
		const const_curr = curr;
		var row = document.createElement("tr");
		row.addEventListener("click", function(){
			var info_frame = document.getElementById("subscreen"); 
			info_frame.width = "100%";
			info_frame.height = "100%";
			var info_page = info_frame.contentWindow.document;
			var display_ele = info_page.getElementById("DisplayData");
			display_ele.innerHTML = "ID: " + const_curr.printerID + "<br>"
								+ "Hiệu: " + const_curr.brand + "<br>"
								+ "Model: " + const_curr.model + "<br>"
								+ "Vị trí: " + const_curr.location;
			var remainpage_ele = info_page.getElementById("RemainingPage");
			remainpage_ele.innerHTML = "(Số giấy còn lại: " + remaining_pages + ")<br>"
			}
		)
		row.style.cursor = "pointer";
		for (j = 0; j < 5; j++){
			var cell = document.createElement("td");
			var cell_text;
			switch (j){
				case 0:
					cell_text = document.createTextNode(i);
					break;
				case 1:
					cell_text = document.createTextNode(curr.printerID);
					break;
				case 2:
					cell_text = document.createTextNode(curr.brand);
					break;
				case 3:
					cell_text = document.createTextNode(curr.model);
					break;
				case 4:
					cell_text = document.createTextNode(curr.location);
					break;
			}
			cell.appendChild(cell_text);
			row.appendChild(cell);
		}
		table.appendChild(row);
	}
	document.getElementById("page" + old_part).style.fontWeight = "";
	document.getElementById("page" + part).style.fontWeight = "bold";
	old_part = part;
};

function displayRemainPage(){
	document.getElementById("RemainingPage").innerHTML = "<b>Số giấy còn lại: " + remaining_pages + "</b>";
	document.getElementById("subscreen").contentWindow.document.getElementById("RemainingPage").innerHTML = "(Số giấy còn lại: " + remaining_pages + ")<br>"; 
	document.getElementById("subscreenPay").contentWindow.document.getElementById("pageLeft").innerHTML = "Số giấy còn lại: " + remaining_pages; 
}

function openBkpay(){
	var info_frame = document.getElementById("subscreenPay"); 
	info_frame.width = "100%";
	info_frame.height = "100%";
}

filter();
displayTable(0);
document.getElementById("RemainingPage").innerHTML = "<b>Số giấy còn lại: " + remaining_pages + "</b>";
</script>

</body>
</html>