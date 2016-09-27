<?php // error_code
if (isset($_GET['error_code'])) {
	switch ($_GET['error_code']) {
		case "1": 
			echo "<script>alert('아이디, 비밀번호가 입력되지 않았습니다.');</script>";
			break; 
		case "2":
			echo "<script>alert('중복된 아이디가 있습니다.');</script>";
			break;
		default:
			echo "<script>alert('error');</script>";
			break;			
	}
}