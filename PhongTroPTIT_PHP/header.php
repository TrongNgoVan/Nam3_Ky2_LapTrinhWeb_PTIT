<div class="container" id="header" style="">
    <div class="pull-left">
        <a href="index.php">
            <img src="images/logo.png" alt="">
        </a>
    </div>
    <?php
    include('connectToDatabase.php'); 

    if(isset($_SESSION['user_name'])) {
        $username = $_SESSION['user_name'];
        
        // Truy vấn để lấy fullName dựa trên username, sử dụng prepared statement để an toàn hơn
        $sql = 'SELECT * FROM user WHERE user_name = ?';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $AVATAR = $row['avatar'];
		$NAME = $row['FullName'];
        
        echo '
        <div class="pull-right">
            <img src="' . $AVATAR . '" id="icon_acount" alt="" style="border-radius: 50%; width: 50px; height: 50px; object-fit: cover;">
            <div style="padding-top: 5px; padding-right: 0px; float: right;">
                <b><a class="my_acount_button link" href="QuanLyTaiKhoan.php">' . $username. '</a></b>
                <br>
                <a class="my_acount_button link" id="logOut_button" href="index.php?action=logOut">Đăng xuất</a>
            </div>
        </div>';
    } else {
        echo '<div class="pull-right">
                <img src="images/icon-account.png" id="icon_acount" alt="">
                <div style="padding-top: 5px; padding-right: 0px; float: right;">
                    <b class="logIn_signIn_button" id="logIn_button">Đăng nhập</b>
                    <br>
                    <p class="logIn_signIn_button" id="signIn_button">Đăng ký</p>
                </div>
            </div>';
    }
    ?>
</div>
