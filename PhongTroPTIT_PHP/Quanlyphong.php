<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel ="icon" href ="images/tieude.png" type="image/x-icon">
    <title id="title_room_page">Quản Lý Phòng</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <script type="text/javascript" src="vendor/bootstrap.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <link rel="stylesheet" href="vendor/bootstrap.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="styles/CSS.css">
    <style type="text/css">
        button {
            margin: 0px 10px;
        }
    </style>

</head>
<body>
    <!-- Khung đăng ký, đăng nhập -->
    <?php 
        include('LogInAndSignIn.php');
    ?>

    <!-- Menu hiển thị ra khi scroll màn hình -->
    <?php
        include('menuScroll.php');
    ?>

    <!-- Header -->
    <?php
        include('header.php');
    ?>

    <!-- Menu chính -->
    <?php
        include('menu.php');
    ?>

    <!-- Phần hiển thị đường dẫn các trang -->
    <div class="container">
        <p id="path">
            <a href="index.php" class="link">Trang chủ / </a>
            <a href="Quanlyphong.php" class="link">Quản Lý Phòng</a>
        </p>
    </div>
   
    <!-- Phần thân để hiển thị filter và chi tiết căn phòng -->
    <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12" style="padding: 0px;">
               <?php
                        include('connectToDatabase.php'); // Đảm bảo rằng bạn đã kết nối đến cơ sở dữ liệu

                       
                            $username = $_SESSION['user_name'];
                        
                            // Truy vấn để lấy fullName dựa trên username, sử dụng prepared statement để an toàn hơn
                            $sql = 'SELECT * FROM user WHERE user_name = ?';
                            $stmt = $conn->prepare($sql);
                
                                $stmt->bind_param('s', $username);
                                $stmt->execute();
                                $result = $stmt->get_result();
                                $row = $result->fetch_assoc();
                                                                                                                                                                                                              
                        
                    ?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-5">
                    <img src="<?php   echo $row['avatar'];   ?>" class="img-thumbnail">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-7" style="font-size: 23px; margin: 10px 0px; color: #9a9999;">
                   <?php echo $row['FullName']; ?>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
               <div class="col-xs-12" style="padding: 0px; font-size: 23px; color: green;">
                  Các căn phòng đã đăng
               </div>

                <?php
                  include('connectToDatabase.php');
        
                 
                   $username = $_SESSION['user_name'];

                   $sql1 = 'SELECT * FROM phong_tro WHERE phong_tro.user_name = ?';
                   $stmt1 = $conn->prepare($sql1);

                   if ($stmt1) {
                        $stmt1->bind_param('s', $username);
                        $stmt1->execute();
                        $result1 = $stmt1->get_result();

                    if ($result1 && $result1->num_rows > 0) {
                        while ($row1 = $result1->fetch_assoc()) {    
                            $phong_tro_id = $row1['IDPhongTro'];
                        // Lấy thông tin ảnh từ bảng hinh_anh_phong_tro
                            $sql2 = 'SELECT DuongDan FROM hinh_anh_phong_tro WHERE IDPhongTro = ? LIMIT 1';
                            $stmt2 = $conn->prepare($sql2);
                            $stmt2->bind_param('i', $phong_tro_id);
                            $stmt2->execute();
                            $result2 = $stmt2->get_result();
                            if($result2 && $result2->num_rows > 0){
                                $row2 = $result2->fetch_assoc();
                                $image_url = $row2['DuongDan'];
                            }else{
                                $image_url = 'images/icon-account.png';
                            }
                            
                           
                     ?>
                        <div class="col-xs-12" style="border: solid 1px #d4d0d0; padding: 10px 0px; margin: 10px 0px; border-radius: 4px; height: 145px;">
                            <div class="row">
                                <div class="col-md-3 col-xs-4">
                                    <img src="<?php echo $image_url?>" style="height: 125px; width: 100%; object-fit: scale-down; margin-left: 10px;">
                                </div>
                                <div class="col-md-9 col-xs-8">
                                    <div class="row">
                                        <div class="col-xs-12" style="font-size: 23px; overflow: hidden; height: 30px;">
                                            <?php echo $row1['TieuDe']; ?>
                                        </div>
                                        <div class="col-xs-12" style="overflow: hidden; height: 60px;">
                                            <?php echo $row1['DiaChi']; ?>
                                        </div>
                                        <div class="col-xs-12 text-right">
                                            <a href="Quanlyphongchitiet.php?id=<?php echo $phong_tro_id; ?>"  class="btn btn-primary" style="background-color: rgb(175, 0, 0);" >Quản lý chi tiết</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                            }
                        } else {
                            echo "<div class='col-xs-12'>Không tìm thấy phòng trọ cho người dùng này.</div>";
                        }

                    } else {
                        echo "<div class='col-xs-12'>Lỗi chuẩn bị truy vấn: " . $conn->error . "</div>";
                    }
                
                ?>
            </div>
        </div>
    </div>

    <!-- Phần chân trang -->
    <?php
        include('footer.php');
    ?>

    <!-- Nhúng file javascript -->
    <script type="text/javascript" src="scripts/JavaScript.js"></script> 

</body>
</html>
