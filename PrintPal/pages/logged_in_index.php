<?php
    include ('/header/head.php');
    session_start();
    if(!isset($_SESSION['user_id'])){
        header("Location: index.php");
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>PrintPal</title>
  </head>
  <body>
    <div class="container-fluid text-center text-white" style="background-image: linear-gradient(to right, rgba(39,32,87,255),#62c9d7);">
        <div class="row mx-5 second-class">
            <div class="col-xxl-auto first-class align-self-center">
                <h1>PrintPal</h1>
            </div>
            <div class="col-xxl-8 align-self-center">
                <div class="row justify-content-center">
                    <div class="col-xxl-auto align-self-center">
                        <a href="index.php?page=home.php">
                            Trang chủ
                        </a>
                    </div>
                    <div class="col-xxl-auto align-self-center">
                        <a href="index.php?page=products.php">
                            Cửa hàng
                        </a>
                    </div>
                    <div class="col-xxl-auto align-self-center">
                    <a href="index.php?page=register.php">
                            Hướng dẫn
                        </a>
                    </div>
                    <div class="col-xxl-auto align-self-center">
                    <a href="index.php?page=register.php">
                            Thông tin thêm
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-auto ms-auto align-self-center">
                <?php
                    if(isset($_SESSION['username']) && isset($_SESSION['user_level'])){
                        $username = $_SESSION['username'];
                        $level = $_SESSION['user_level'];
                        echo 'User Name: ' . $username . ' | User Level: ' . $level;
                    }
                ?>
            </div>
            <div class="col-xxl-auto ms-auto align-self-center">
                <?php
                    if(isset($_SESSION['user_id'])){ echo
                        '<a href="index.php?page=logout.php">
                            <button type="button" class="button">
                            Đăng xuất
                            </button>
                        </a>';
                        } else{ echo
                        '<a href="index.php?page=login.php">
                            <button type="button" class="button">
                            Đăng nhập
                            </button>
                        </a>';
                        }
                ?>
            </div>
        </div>
    </div>
    <div class="container-fluid second-class">
        <div class="row">
            <div class="col-xxl-auto align-self-center">
                <a href="index.php?page=home.php">
                    Trang chủ
                </a>
            </div>
            <div class="col-xxl-auto align-self-center">
                <a href="index.php?page=products.php">
                    Products
                </a>
            </div>
            <div class="col-xxl-auto align-self-center">
                <?php
                    if(isset($_SESSION['user_id'])){ echo
                        '<a href="index.php?page=logout.php">
                            Logout
                        </a>';
                        } else{ echo
                        '<a href="index.php?page=login.php">
                            Login
                        </a>';
                        }
                ?>
            </div>
            <div class="col-xxl-auto align-self-center">
            <a href="index.php?page=register.php">
                    Register
                </a>
            </div>
            <div class="col-xxl-auto ms-auto align-self-center">
                <?php
                    if(isset($_SESSION['username']) && isset($_SESSION['user_level'])){
                        $username = $_SESSION['username'];
                        $level = $_SESSION['user_level'];
                        echo 'User Name: ' . $username . ' | User Level: ' . $level;
                    }
                ?>
            </div>
        </div>
    </div><div class="container-fluid">
        <div class="row">

        </div>
    </div>
    <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            if (file_exists($page)) {
                if ($page=="login.php"){
                    header("Location: $page");
                    exit;
                } else{
                    include $page;
                }
            } else {
                echo "Page not found.";
            }
        }
    ?>
    <p></p>
</body>
</html>