<article class="container center">
	<div class="user both">
<?php
if (check_login()) {
	$user_id = $_SESSION['id'];
?>
		<span><a class="gn-icon gn-icon-user"><?php echo $user_id; ?></a></span>
		<form action="logout_process.php" method="post">
			<button type="submit" class="btn btn-danger">로그아웃</button>
		</form>
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
						<form role="form">
							<div class="form-group">
								<label for="inputEmail">Email</label>
								<input type="email" class="form-control" id="inputEmail" name="id" placeholder="이메일">
							</div>
							<div class="form-group">
								<label for="inputPassword">Password</label>
								<input type="password" class="form-control" id="inputPassword" name="password" placeholder="비밀번호">
							</div>
							<button type="submit" class="btn btn-success btn-block">로그인</button>
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
						<form role="form">
							<div class="form-group">
								<label for="inputEmail">Email</label>
								<input type="email" class="form-control" id="inputEmail" name="id" placeholder="이메일">
							</div>
							<div class="form-group">
								<label for="inputPassword">Password</label>
								<input type="password" class="form-control" id="inputPassword" name="password" placeholder="비밀번호">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="password" placeholder="재입력">
							</div>
							<button type="submit" class="btn btn-primary btn-block">회원가입</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
} // not login end
?>
	</div>
</article>