<!-- Phần menu -->
	<!-- <nav class="navbar navbar-default navbar-inverse" role="navigation" id="menu" style="margin-bottom: 0px;"> -->
	<nav class="navbar navbar-default navbar-inverse" role="navigation" id="menu" style=" ">
    <!-- Các thành phần khác của navbar -->


		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php" style="padding: 9px 15px;"><img src="images/house.png"></a>
				

			</div>
    
      



			
			<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
        <li>
            <a href="./LoaiPhong.php?action=Phòng+trọ" style="color: white; text-decoration: none;" onmouseover="this.style.color='blue'" onmouseout="this.style.color='white'">
                <b>PHÒNG TRỌ</b>
            </a>
        </li>
        <li>
            <a href="./LoaiPhong.php?action=Nhà+nguyên+căn" style="color: white; text-decoration: none;" onmouseover="this.style.color='blue'" onmouseout="this.style.color='white'">
                <b>NHÀ NGUYÊN CĂN</b>
            </a>
        </li>
        <li>
            <a href="./LoaiPhong.php?action=Kí+túc+xá" style="color: white; text-decoration: none;" onmouseover="this.style.color='blue'" onmouseout="this.style.color='white'">
                <b>KÍ TÚC XÁ</b>
            </a>
        </li>
        <li>
            <a onclick="checkLogIn1()" href="javascript:;" style="color: white; text-decoration: none;" onmouseover="this.style.color='blue'" onmouseout="this.style.color='white'">
                <b>ĐĂNG TIN NHANH</b>
				<script>
					        function checkLogIn1(){
					            <?php 
					            	if(isset($_SESSION['user_name'])) { ?>
					            		
					            		location.assign("DangTinNhanh.php");
					          <?php } else { ?>
					          			$("#login_background").css("display", "block");
										$("#logIn_area").css("display", "block");
										$("#signIn_area").css("display", "none");
										$(".logIn_menu_button").css("color", "blue");
										$(".signIn_menu_button").css("color", "black");
					          <?php }
					            ?>
					        }
					    </script>
            </a>
        </li>
		<li>
            <a onclick="checkLogIn2()" href="javascript:;" style="color: white; text-decoration: none;" onmouseover="this.style.color='blue'" onmouseout="this.style.color='white'">
                <b>QUẢN LÝ PHÒNG</b>
				<script>
					        function checkLogIn2(){
					            <?php 
					            	if(isset($_SESSION['user_name'])) { ?>
					            		
					            		location.assign("Quanlyphong.php");
					          <?php } else { ?>
					          			$("#login_background").css("display", "block");
										$("#logIn_area").css("display", "block");
										$("#signIn_area").css("display", "none");
										$(".logIn_menu_button").css("color", "blue");
										$(".signIn_menu_button").css("color", "black");
					          <?php }
					            ?>
					        }
					    </script>
            </a>
        </li>
    </ul>
</div>
		</div>
	</nav>
