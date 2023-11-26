<?php
    include_once("config.php");
    include_once ($PHP_PATH . '/header_css/head.php');
    session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>PrintPal</title>
  </head>
  <body>
    <div class="container-fluid text-center" style="background-image: linear-gradient(to right, rgba(39,32,87,255),#62c9d7);">
        <div class="row">
            <div class="col-xxl-2 first-class align-self-center">
                <a href="index.php">
                    <h1>PrintPal</h1>
                </a>
            </div>
            <div class="col-xxl-8 align-self-center">
                <div class="row justify-content-center second-class">
                    <div class="col-xxl-auto align-self-center">
                        <a href="index.php?page=home">
                            Trang chủ
                        </a>
                    </div>
                    <div class="col-xxl-auto align-self-center">
                        <a href="index.php?page=products">
                            Cửa hàng
                        </a>
                    </div>
                    <div class="col-xxl-auto align-self-center">
                    <a href="index.php?page=guide">
                            Hướng dẫn
                        </a>
                    </div>
                    <div class="col-xxl-auto align-self-center">
                    <a href="index.php?page=moreInfo">
                            Thông tin thêm
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-2 align-self-center">
                <div class="row justify-content-center">
                    <?php
                        if(isset($_SESSION['user_id'])){ echo
                            '<div class="col-xxl-auto align-self-center">
                                <a href="/PrintPal/pages/logout.php">
                                    <button type="button" class="button-login">
                                    Đăng xuất
                                    </button>
                                </a>
                            </div>';
                            } else{ echo
                            '
                            <div class="col-xxl-auto align-self-center">
                                <a href="/PrintPal/pages/register.php">
                                    <button type="button" class="button-signup">
                                    Đăng ký
                                    </button>
                                </a>
                            </div>
                            <div class="col-xxl-auto align-self-center">
                                <a href="/PrintPal/pages/login.php">
                                    <button type="button" class="button-login">
                                    Đăng nhập
                                    </button>
                                </a>
                            </div>
                            ';
                            }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php
        
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            if (file_exists($PHP_PATH . "/pages/$page.php")) {
                include_once( $PHP_PATH . "/pages/$page.php");
            } else {
                echo "Page not found.";
            }
        }
    ?>
    <p></p>
</body>
</html>