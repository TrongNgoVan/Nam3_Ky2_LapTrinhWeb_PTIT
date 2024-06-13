<script type="text/javascript">


</script>

<!-- Hiển thị khung đăng nhập, đăng ký -->
<div id="login_background">
	<div id="logIn_area" class="row">
	<div class="col-xs-offset-1 col-xs-10 logIn_menu">
             <button class="login logIn_menu_button">ĐĂNG NHẬP</button>
            <button class="login signIn_menu_button">ĐĂNG KÝ</button>
    </div>


		<div class="col-xs-1" style="padding: 0px;">
			<img src="images/close_icon_16.png" class="pull-right close_login_icon">
		</div>

		<form action="index.php" method="POST" onsubmit="return ValidateLogIn()">
			<div class="form-group col-xs-offset-1 col-xs-10">
				<label for="logIn_user_name">Tài khoản:</label>
				<input type="text" class="form-control" id="logIn_user_name" placeholder="Tài khoản" name="logIn_user_name">
			</div>
			<div class="form-group  col-xs-offset-1 col-xs-10">
				<label for="logIn_password">Mật khẩu:</label>
				<input type="password" class="form-control" id="logIn_password" placeholder="Mật khẩu" name="logIn_password">
			</div>
			<div class=" col-xs-offset-1 col-xs-10">
				<span class="error_input" id="error_input_logIn"></span>
			</div>
			<div class="checkbox  col-xs-offset-1 col-xs-10">
				<label><input type="checkbox" name="remember" style="width: 13px;"> Nhớ tài khoản</label>
			</div>
			<div class=" col-xs-offset-1 col-xs-10">
				<button id="submit_logIn_button" type="submit" class="btn btn-success" name="logIn" style="background-color: rgb(175, 0, 0); border-color: rgb(175, 0, 0);">Đăng nhập</button>
			</div>
		</form>
	</div>

	<div id="signIn_area" class="row">
	      <div class="col-xs-offset-1 col-xs-10 logIn_menu">
                    <button class="login logIn_menu_button" >ĐĂNG NHẬP</button>
                    <button class="login signIn_menu_button">ĐĂNG KÝ</button>
         </div>

		<div class="col-xs-1" style="padding: 0px;">
			<img src="images/close_icon_16.png" class="pull-right close_login_icon">
		</div>

		<form action="index.php" method="POST" onsubmit="return validateSignInForm()">
			<div class="form-group col-xs-offset-1 col-xs-10">
				<label for="display_name">Tên tài khoản: </label>
				<input type="text" class="form-control" id="display_name" placeholder="Tên hiển thị" name="display_name" pattern="[A-Za-z0-9_]{6,}"  maxlength="20" title="Từ 6 đến 20 ký tự, bao gồm các ký tự A-Z, a-z, dấu gạch dưới và từ 0-9!">
			</div>
			<div class="form-group  col-xs-offset-1 col-xs-10">
				<label for="signIn_password">Mật khẩu:</label>
				<input type="password" class="form-control" id="signIn_password" placeholder="Mật khẩu" name="signIn_password" pattern="[A-Za-z0-9_!]{6,}" maxlength="30" title="Từ 6 đến 30 ký tự, bao gồm các ký tự A-Z, a-z, dấu gạch dưới, dấu chấm than và từ 0-9!">
			</div>
			<div class="form-group  col-xs-offset-1 col-xs-10">
				<label for="signIn_password_again">Nhập lại mật khẩu:  </label>
				<input type="password" class="form-control" id="signIn_password_again" placeholder="Nhập lại mật khẩu" name="signIn_password_again">
			</div>
			<div class=" col-xs-offset-1 col-xs-10" style="margin-bottom: 20px";>
				<span class="error_input" id="error_input_signIn"></span>
			</div>
			<div class=" col-xs-offset-1 col-xs-10">
				<button id="submit_signIn_button" type="submit" class="btn btn-success" name="signIn" style="background-color: rgb(175, 0, 0); border-color: rgb(175, 0, 0);">Đăng ký</button>
			</div>
		</form>
	</div>
</div>


