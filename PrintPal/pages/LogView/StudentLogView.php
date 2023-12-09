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
	top: 90%;
	left: 20px;
	font-family: "Times New Roman", Times, serif;
}

</style>
</head>

<body>
<?php
class Log{
	public $studentID;
    public $printerID;
    public $filename;
    public $starttime;
    public $endtime;
    public $A3no;
    public $A4no;
    function __construct($sID, $pID, $fname, $stime, $etime, $A3, $A4){
    	$this->studentID = $sID;
        $this->printerID = $pID;
        $this->filename = $fname;
        $this->starttime = $stime;
        $this->endtime = $etime;
        $this->A3no = $A3;
        $this->A4no = $A4;
    }
	function getStudentID(){
		return $this->studentID;
	}
	function getPrinterID(){
		return $this->printerID;
	}
	function getFilename(){
		return $this->filename;
	}
	function getStarttime(){
		return $this->starttime;
	}
	function getEndtime(){
		return $this->endtime;
	}
	function getA3(){
		return $this->A3no;
	}
	function getA4(){
		return $this->A4no;
	}
};

$logs = array(new Log(123540, 2, "file1.txt", date_create("11-10-2023"), date_create("11-10-2023"), 4, 0),
 			new Log(222222, 4, "file2.txt", date_create("12-10-2023"), date_create("13-10-2023"), 2, 0),
            new Log(333333, 0, "file3.txt", date_create("13-10-2023"), date_create("13-10-2023"), 3, 1),
			new Log(123540, 2, "file1.txt", date_create("11-10-2023"), date_create("11-10-2023"), 4, 0),
 			new Log(222222, 4, "file2.txt", date_create("12-10-2023"), date_create("13-10-2023"), 2, 0),
            new Log(333333, 0, "file3.txt", date_create("13-10-2023"), date_create("13-10-2023"), 3, 1),
			new Log(123540, 2, "file1.txt", date_create("11-10-2023"), date_create("11-10-2023"), 4, 0),
 			new Log(222222, 4, "file2.txt", date_create("12-10-2023"), date_create("13-10-2023"), 2, 0),
            new Log(333333, 0, "file3.txt", date_create("13-10-2023"), date_create("13-10-2023"), 3, 1),
			new Log(123540, 2, "file1.txt", date_create("11-10-2023"), date_create("11-10-2023"), 4, 0),
 			new Log(222222, 4, "file2.txt", date_create("12-10-2023"), date_create("13-10-2023"), 2, 0),
            new Log(333333, 0, "file3.txt", date_create("13-10-2023"), date_create("13-10-2023"), 3, 1),
 			);

function notempty($index, $arr) {
	if (array_key_exists($index, $arr)){
		return ($arr[$index] == "0"||$arr[$index]);
	}
    return False;
};

function showtable($inputlogs){
	foreach($inputlogs as $log){
	?>
	  <tr>
		<td><?php echo $log->getStudentID()?></td>
		<td><?php echo $log->getPrinterID()?></td>
		<td><?php echo $log->getFilename()?></td>
		<td><?php echo date_format($log->getStarttime(), "d/m/Y"); echo " - "; echo date_format($log->getEndtime(), "d/m/Y");?></td>
		<td><?php echo "A3:" .$log->getA3(). " A4:" .$log->getA4()."";?></td>
	  </tr>	
	<?php 
	}
};

?>

<line> 
	<displaybox><img src="/PrintPal/image/icon_log.png" width=50 height=50></displaybox>
	<displaybox0><b> LỊCH SỬ SỬ DỤNG THIẾT BỊ </b></displaybox0>
</line>


<table id="mainTable">
	<tr>
		<th>Mã máy in</th>
		<th>Tên tệp</th>
		<th>Thời gian in</th>
		<th>Số trang</th>
	</tr>
</table>

<tablepagelist id="tablepagelist"></tablepagelist>

<but><input type="button" name="back" value="Trở lại" onclick="location.href='/PrintPal/index.php?page=home'"></but>

<script>
var filterlogs = [];
var row_per_page = 5;
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
		var row = document.createElement("tr");
		for (j = 0; j < 4; j++){
			var cell = document.createElement("td");
			var cell_text;
			switch (j){
				case 0:
					cell_text = document.createTextNode(curr.printerID);
					break;
				case 1:
					cell_text = document.createTextNode(curr.filename);
					break;
				case 2:
					cell_text = document.createTextNode(curr.starttime.date + " to " + curr.endtime.date);
					break;
				case 3:
					cell_text = document.createTextNode("A3:" + curr.A3no + " A4:" + curr.A4no);
					break;
				default:
					cell_text = document.createTextNode("");
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

filter();
displayTable(0);
</script>

</body>
</html>