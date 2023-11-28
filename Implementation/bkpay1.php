<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment with BKPay</title>
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
<body>
    <div class="header">
        <h2>THANH TOÁN BẰNG BKPAY</h2>
    </div>
    <hr>
    <div class="content-box">
        <div class="container">
            <form action="payment_processor.php" method="post">
                <h3>NHẬP THÔNG TIN THANH TOÁN</h3>
                <div class="form-group">
                    <label for="pageCount">Số trang cần mua</label>
                    <input type="text" id="pageCount" name="pageCount" placeholder="Nhập số trang">
                </div>
                <div class="form-group">
                    <label for="paperType">Chọn loại giấy</label>
                    <select id="paperType" name="paperType">
                        <option value="A4">A4</option>    
                        <option value="A3">A3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="totalCost">Tổng số tiền cần thanh toán</label>
                    <input type="text" id="totalCost" name="totalCost" placeholder="Tính tự động" readonly>
                </div>
                <a href="Logview.php" class="button-style">Trở lại</a>
                <button type="submit" class="button-style">Thanh toán</button>
            </form>
        </div>
    </div>
    <div id="overlay" class="overlay">
        <div class="overlay-content">
            <h2>Hoàn Thành</h2>
            <a href="bkpay.php" class="button-style">Trở lại</a>
        </div>
    </div>
    <script>
    window.onload = function() {
        document.getElementById("overlay").style.display = "block";
    }
</script>
</body>
</html>
