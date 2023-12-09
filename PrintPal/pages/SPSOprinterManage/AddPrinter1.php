<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Configuration Management</title>
    <style>
        * {
            margin: 1;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Times New Roman', Times, serif; 
        }
        .header { 
            border: 1px solid #000;
            padding: 5px;
            font-size: 16px;
            background: #f2f2f2; 
            display: inline-block; 
            margin-bottom: 10px;
        }
        .content-box {
            border: 1px solid #000; 
            padding: 20px; 
            margin: 20px auto; 
            width: 50%; 
            max-width: 800px;
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
        input[type=text], input[type=date], select { 
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
        hr {
            border: none;
            height: 2px;
            background-color: blue; 
            margin-top: 0; 
            margin-bottom: 50px; 
        }
        .button-style {
            padding: 10px 20px;
            background-color: #f2f2f2;
            border: none;
            text-decoration: none;
            color: black;
            display: inline-block;
            margin-right: 10px;
        }   
        .overlay {
            display: none;
            position: fixed; 
            z-index: 1; 
            left: 0;
            top: 0;
            width: 100%; 
            height: 100%; 
            background-color: rgba(0, 0, 0, 0.5); 
        }

        .overlay-content {
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

<body style="background-color:rgba(0,0,0,0.5); margin: 0px">
	<div class="overlay-content">
		<h2>Hoàn Thành</h2>
		<a onclick="back()" class="button-style">Trở lại</a>
	</div>
    <script>
	function back(){
		var parent_page = window.parent.document;
		parent_page.getElementById('subscreen').width = "0%";
		parent_page.getElementById('subscreen').height = "0%";
	}
	</script>
</body>
</html>
