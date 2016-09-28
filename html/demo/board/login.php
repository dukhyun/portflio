<article class="container center">
	<div class="user both">
<?php
start_session();
if (check_login()) {
	// login start
?>
	<div class="pull-right">
		<button type="button" class="btn btn-link"><?php echo $_SESSION['user_email']; ?></button>
		<button type="button" class="btn btn-danger" id="logout-submit">로그아웃</button>
	</div>
	<script>
	$("#logout-submit").click(function(){
		$.ajax({
			type: 'POST',
			url: 'logout_process.php',
			success: function(data){
				window.location.reload();
			},
			error: function (err) {
				alert(JSON.stringify(err));
			}
		});
	});
	</script>
<?php
	// login end
} else {
	// not login start
?>
	<div class="pull-right">
		<!-- Button trigger modal -->
		<button class="btn btn-success" data-toggle="modal" data-target="#modalLogin">로그인</button>
		
		<div class="modal fade" id="modalLogin" role="dialog">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">로그인</h4>
					</div>
					<div class="modal-body">
						<form method="post" id="login-form" role="form">
							<div id="login-error">
							<!-- error will be showen here ! -->
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="이메일">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" id="password" name="password" placeholder="비밀번호">
							</div>
							<button type="submit" class="btn btn-success btn-block" id="login-submit">Sign In</button>
						</form>
					</div>
					<div class="modal-footer bg-info">
						<span class="text-info">demo@email.com</span> /
						<span class="text-info">password</span>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Button trigger modal -->
		<button class="btn btn-primary" data-toggle="modal" data-target="#modalRegister">회원가입</button>
		
		<div class="modal fade" id="modalRegister" role="dialog">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header bg-primary">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">회원가입</h4>
					</div>
					<div class="modal-body">
						<form method="post" id="register-form" role="form">
							<div id="register-error">
							<!-- error will be showen here ! -->
							</div>
							<div class="form-group">
								<label class="sr-only" for="nemail">Email</label>
								<input type="email" class="form-control" id="nemail" name="email" placeholder="이메일">
							</div>
							<div class="form-group">
								<label class="sr-only" for="username">Username</label>
								<input type="text" class="form-control" id="username" name="username" placeholder="이름">
							</div>
							<div class="form-group">
								<label class="sr-only" for="password">Password</label>
								<input type="password" class="form-control" id="npassword" name="password" placeholder="비밀번호">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="비밀번호 확인">
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" form="register-form" class="btn btn-primary" id="register-submit">Create Account</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="validation.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
<?php
	// not login end
}
?>
	</div>
</article>