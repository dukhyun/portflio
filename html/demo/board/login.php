<article class="container center">
	<div class="user both">
<?php
start_session();
if (check_login()) {
	// login start
?>
	<div class="pull-right">
		<div class="pull-left">
			<span class="text-info"><a class="gn-icon gn-icon-user"><?php echo $_SESSION['user_email']; ?></a></span>
		</div>
		<div class="pull-left">
			<form action="logout_process.php" method="post">
				<button type="submit" class="btn btn-danger">로그아웃</button>
			</form>
		</div>
	</div>
<?php
	// login end
} else {
	// not login start
?>
	<div class="pull-left">
		<span class="text-muted hidden-xs">demo account: </span>
		<span class="text-info">demo@email.com / password</span>
	</div>
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
							<button type="submit" class="btn btn-primary btn-block" id="register-submit">Create Account</button>
						</form>
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