<?php
    if (!isset($_SESSION['user_id'])){
        echo '
        <script>
        alert("You need to log in!");
        window.location.href = "/PrintPal/pages/login.php";
        </script>
        ';
    }
?>
<!DOCTYPE	html>
<html>
    <head>
        <title>home</title>
    </head>
    <body>
        <div class="container-fluid my-3">
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="card">
                        <div class="card-header" style="color: #00b36b;">
                            <h3 class="my-3">TRANG CHỦ</h3>
                        </div>
                        <div class="card-body">
                            <?php
                                if(isset($_SESSION['user_level']) && $_SESSION['user_level'] == 1){ echo
                                '
                                <div class="row my-5 mx-5 justify-content-center">
                                    <div class="col-xxl-auto">
                                        <a href="index.php?page=LogView/SPSOLogView">
                                            <button type="button" class="button-home">
                                                <div class="row justify-content-center">
                                                    <div class="col-xxl-auto">
                                                        <img src="/PrintPal/image/icon_log.png" alt="User Image" id="UserImage" class="" width="50" height="50">
                                                    </div>
                                                    <div class="col-xxl-auto align-self-center">
                                                        Xem lịch sử in ấn
                                                    </div>
                                                </div>
                                            </button>
                                        </a>
                                    </div>
                                    <div class="col-xxl-1"></div>
                                    <div class="col-xxl-auto">
                                        <a href="index.php?page=SPSOconfig/SPSOconfig">
                                            <button type="button" class="button-home">
                                                <div class="row justify-content-center">
                                                    <div class="col-xxl-auto">
                                                        <img src="/PrintPal/image/icon_change_config.png" alt="User Image" id="UserImage" class="" width="50" height="50">
                                                    </div>
                                                    <div class="col-xxl-auto align-self-center">
                                                        Quản lí cấu hình
                                                    </div>
                                                </div>
                                            </button>
                                        </a>
                                    </div>
                                </div>
								<div class="row my-5 mx-5 justify-content-center">
									<div class="col-xxl-auto">
                                        <a href="index.php?page=SPSOprinterManage/PManageMenu">
                                            <button type="button" class="button-home">
                                                <div class="row justify-content-center">
                                                    <div class="col-xxl-auto">
                                                        <img src="/PrintPal/image/icon_change_feature.png" alt="User Image" id="UserImage" class="" width="50" height="50">
                                                    </div>
                                                    <div class="col-xxl-auto align-self-center">
                                                        Quản lí tính năng
                                                    </div>
                                                </div>
                                            </button>
                                        </a>
                                    </div>
									<div class="col-xxl-1"></div>
									<div class="col-xxl-auto">
                                        <a href="index.php?page=SPSOReportView">
                                            <button type="button" class="button-home">
                                                <div class="row justify-content-center">
                                                    <div class="col-xxl-auto">
                                                        <img src="/PrintPal/image/icon_view_report.png" alt="User Image" id="UserImage" class="" width="50" height="50">
                                                    </div>
                                                    <div class="col-xxl-auto align-self-center">
                                                        Xem báo cáo in ấn
                                                    </div>
                                                </div>
                                            </button>
                                        </a>
                                    </div>
								</div>
                                ';
                                }
                                else{ echo
                                '
                                <div class="row my-5 mx-5 justify-content-center">
                                    <div class="col-xxl-auto">
                                        <a href="index.php?page=PrintDocumentBkPay/PrintDocumentPage">
                                            <button type="button" class="button-home" style="padding: 40px 58px;">
                                                <div class="row justify-content-center">
                                                    <div class="col-xxl-auto">
                                                        <img src="/PrintPal/image/icon_print.png" alt="User Image" id="UserImage" class="" width="50" height="50">
                                                    </div>
                                                    <div class="col-xxl-auto align-self-center">
                                                        In tài liệu
                                                    </div>
                                                </div>
                                            </button>
                                        </a>
                                    </div>
                                    <div class="col-xxl-3"></div>
                                    <div class="col-xxl-auto">
                                        <a href="index.php?page=LogView/StudentLogView">
                                            <button type="button" class="button-home">
                                                <div class="row justify-content-center">
                                                    <div class="col-xxl-auto">
                                                        <img src="/PrintPal/image/icon_log.png" alt="User Image" id="UserImage" class="" width="50" height="50">
                                                    </div>
                                                    <div class="col-xxl-auto align-self-center">
                                                        Xem lịch sử in ấn
                                                    </div>
                                                </div>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                ';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>