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
	padding: 10px 10px;
}

but{
	position: fixed;
	/* top: 90%; */
	bottom: 5vh;
	left: 20px;
	font-family: "Times New Roman", Times, serif;
}

confbut {
 position: relative; 
background-color: #4CAF50;
color: white;
border: none;
text-align: center;
text-decoration: none;
 display: inline-block; 
 /* right: 50%; */
margin-left: 200px;
font-size: 16px;
cursor: pointer;
border-radius: 5px; 
}

confirm-button:hover {
background-color: #45a049;
}

</style>
</head>

<body>
<?php

class Machine {
	public $index;
	public $printerID;
	public $brand;
	public $model;
	public $position;
	public $situation;
	function __construct($i, $pID, $br, $ml, $pos, $sit){
	$this->index = $i;
	$this->printerID = $pID;
	$this->brand = $br;
	$this->model = $ml;
	$this->position = $pos;
	$this->situation = $sit;
	}
	function getIndex(){
	return $this->index;
	}
	function getPrinterID(){
	return $this->printerID;
	}
	function getBrand(){
	return $this->brand;
	}
	function getModel(){
	return $this->model;
	}
	function getPosition(){
	return $this->position;
	}
	function getSituation(){
	return $this->situation;
	}
};

$logs = array(new Machine(1, 123456, "CANON", "BJ-100", "Libary", 1),
 			new Machine(2, 135236, "CANON", "BJ-100", "B4-301", 1),
            new Machine(3, 215523, "CANON", "BJ-100", "B1-303", 0),
			new Machine(4, 323513, "CANON", "BJC-250ex", "B5-201", 0),
 			new Machine(5, 808342, "DELL", "M5200", "C4-501", 1),
            new Machine(6, 978356, "DELL", "S2500", "OSIP", 0),
			new Machine(7, 459093, "Apollo", "P-1200", "Libary", 0),
 			new Machine(8, 764829, "Citizen", "Projet II", "Libary", 1 ),
 			);

function notempty($index, $arr) {
	if (array_key_exists($index, $arr)){
		return ($arr[$index] == "0"||$arr[$index]);
	}
    return False;
};

?>

<line> 
	<displaybox><img src="change_feature_icon.png" width=50 height=50></displaybox>
	<displaybox0><b> TRAO QUYỀN MÁY IN </b></displaybox0>
</line>


<table id="mainTable">
	<tr>
		<th>STT</th>
		<th>ID</th>
		<th>Hiệu</th>
		<th>Model</th>
		<th>Vị trí</th>
		<th>Trang thái</th>
	</tr>
</table>

<tablepagelist id="tablepagelist"></tablepagelist>

<but><input type="button" class="confbut" name="back" value="Trở lại" onclick="location.href='LogView(SPSO).php'">
<button class="confbut" onclick="confirmAction()">Confirm</button></but>
<script>
var filterlogs = [];
var row_per_page = 5;
var old_part = 0;

function toggleSituation(index) {
filterlogs[index].situation = filterlogs[index].situation === 1 ? 0 : 1;
displayTable(old_part);
}

function confirmAction() {
alert("Changing the state of printers");
}

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
		var row = document.createElement("tr");
		for (j = 0; j < 6; j++){
			var cell = document.createElement("td");
			var cell_text;
			switch (j){
				case 0:
					cell_text = document.createTextNode(curr.index);
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
					cell_text = document.createTextNode(curr.position);
					break;
				default:
				var situationButton = document.createElement("button");
				situationButton.textContent = filterlogs[i].situation === 1 ? "Cho phép" : "vô hiệu hóa";
				situationButton.style.cursor = "pointer";
				situationButton.onclick = (function(index) {
				return function() {
				toggleSituation(index);};
				})(i);
				cell.appendChild(situationButton);
				row.appendChild(cell);
			
			}
			if(j<5){
			cell.appendChild(cell_text);
			row.appendChild(cell);}
		}
		table.appendChild(row);
	}
	document.getElementById("page" + old_part).style.fontWeight = "";
	document.getElementById("page" + part).style.fontWeight = "bold";
	old_part = part;
};

filter();
displayTable(0);
</script>

</body>
</html>