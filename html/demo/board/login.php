<article class="container center">
	<div class="user both">
<?php
if (check_login()) {
	$user_id = $_SESSION['id'];
?>
		<span><?php echo $user_id; ?></span>
		<form action="logout_process.php" method="post">
			<input type="submit" value="로그아웃">
		</form>
<?php
// login end
} else {
	// not login start
?>
		<form action="login_process.php" method="post">
			<input type="text" name="id" placeholder="이메일">
			<input type="text" name="password" placeholder="비밀번호">
			<input type="submit" value="로그인">
		</form>
		<form action="register_form.php" method="post">
			<input type="submit" value="회원가입">
		</form>
<?php
} // not login end
?>
	</div>
<article>