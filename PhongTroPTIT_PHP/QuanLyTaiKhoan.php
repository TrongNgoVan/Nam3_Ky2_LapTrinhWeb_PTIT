<?php
session_start();
include('connectToDatabase.php');

$username = $_SESSION['user_name'];
$sql = 'SELECT * FROM user WHERE user_name = ?';
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "User not found!";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Handle form submission for updating user details
    $full_name = $_POST['FullName'];
    $new_password = $_POST['password'];
    $dob = $_POST['dob'];
    $cccd = $_POST['cccd'];

    // Handle avatar upload
    $avatar = $user['avatar']; // Default to current avatar
    if (!empty($_FILES['avatar']['name'])) {
        $target_dir = "uploads/avatars/";
        $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
        if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
            $avatar = $target_file;
        }
    } else {
        if (empty($avatar)) {
            $avatar = "images/icon-account";
        }
    }

	$update_sql = 'UPDATE user SET password = ? , avatar = ? , dob = ? , cccd = ? , FullName = ?  WHERE user_name = ?';
    $update_stmt = $conn->prepare($update_sql);
    $update_stmt->bind_param('ssssss', $new_password, $avatar, $dob, $cccd, $full_name, $username);

	
    if ($update_stmt->execute()) {
        echo "User information updated successfully!";
        header('Location: QuanLyTaiKhoan.php');
        exit();
    } else {
        echo "Error updating user information: " . $conn->error;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="icon" href="images/tieude.png" type="image/x-icon">
    <title>Quản Lý Tài Khoản</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
            <a href="QuanLyTaiKhoan.php" class="link">Quản Lý Tài Khoản</a>
        </p>
    </div>

    <!-- Phần thân để hiển thị filter và chi tiết căn phòng -->
    <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12" style="padding: 0px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-5">
                    <img src="<?php echo htmlspecialchars($user['avatar']); ?>" class="img-thumbnail" alt="User Avatar">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-7" style="font-size: 23px; margin: 10px 0px; color: #9a9999;">
                    <?php echo htmlspecialchars($user['user_name']); ?>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                <div class="col-xs-12" style="padding: 0px; font-size: 23px; color: green;">
                    Thông tin cơ bản
                </div>

                <form action="QuanLyTaiKhoan.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="FullName">Họ và Tên:</label>
                        <input type="text" class="form-control" id="FullName" name="FullName" value="<?php echo htmlspecialchars($user['FullName']); ?>">
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu:</label>
                        <input type="password" class="form-control" id="password" name="password" value="<?php echo htmlspecialchars($user['password']); ?>">
                    </div>
                    <div class="form-group">
                        <label for="dob">Ngày sinh:</label>
                        <input type="date" class="form-control" id="dob" name="dob" value="<?php echo htmlspecialchars($user['dob']); ?>">
                    </div>
                    <div class="form-group">
                        <label for="cccd">CCCD:</label>
                        <input type="text" class="form-control" id="cccd" name="cccd" value="<?php echo htmlspecialchars($user['cccd']); ?>">
                    </div>
                    <div class="form-group">
                        <label for="avatar">Ảnh đại diện:</label>
                        <input type="file" class="form-control" id="avatar" name="avatar">
                    </div>
                    <button type="submit" class="btn btn-primary"style="background-color: rgb(175, 0, 0);">Cập nhật</button>
                </form>
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
