// JavaScript Document
$('document').ready(function () {
	/* validation */
	$("#register-form").validate({
		rules: {
			email: {
				required: true,
				email: true
			},
			username: {
				required: true,
				minlength: 3
			},
			password: {
				required: true,
				minlength: 8,
				maxlength: 15
			},
			cpassword: {
				required: true,
				equalTo: '#npassword'
			},
		},
		messages: {
			email: "please enter a valid email address",
			username: "please enter user name",
			password: {
				required: "please provide a password",
				minlength: "password at least have 8 characters"
			},
			cpassword: {
				required: "please retype your password",
				equalTo: "password doesn't match !"
			}
		},
		submitHandler: submitRegisterForm
	});
	/* validation */

	/* form submit */
	function submitRegisterForm() {
		var data = $("#register-form").serialize();

		$.ajax({
			type: 'POST',
			url: 'register_db.php',
			data: data,
			dataType: "text",
			beforeSend: function () {
				$("#register-error").fadeOut();
				$("#register-submit").html('sending ...');
			},
			success: function (data) {
				if (data == "duplicated") {
					$("#register-error").fadeIn(1000, function () {
						$("#register-error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry email already taken !</div>');
						$("#register-submit").html('Create Account');
					});
				} else if (data == "registered") {
					$("#register-submit").html('<img src="btn-ajax-loader.gif" />&nbsp;Signing Up ...');
					setTimeout('window.location.reload()', 3000);
				} else {
					$("#register-error").fadeIn(1000, function () {
						$("#register-error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; ' + data + ' !</div>');
						$("#register-submit").html('Create Account');
					});
				}
			},
			error: function (err) {
				alert(JSON.stringify(err));
			}
		});
		return false;
	}
	/* form submit */

	/* validation */
	$("#login-form").validate({
		rules: {
			password: {
				required: true,
			},
			email: {
				required: true,
				email: true
			},
		},
		messages: {
			password: {
				required: "please enter your password"
			},
			email: "please enter your email address",
		},
		submitHandler: submitLoginForm
	});
	/* validation */

	/* login submit */
	function submitLoginForm() {
		var data = $("#login-form").serialize();

		$.ajax({
			type: 'POST',
			url: 'login_process.php',
			data: data,
			dataType: "text",
			beforeSend: function () {
				$("#login-error").fadeOut();
				$("#login-submit").html('sending ...');
			},
			success: function (data) {
				if (data == "ok") {
					$("#login-submit").html('<img src="btn-ajax-loader.gif" />&nbsp;Signing In ...');
					setTimeout('window.location.reload()', 3000);
				} else {
					$("#login-error").fadeIn(1000, function () {
						$("#login-error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span>&nbsp;' + data + '</div>');
						$("#login-submit").html('Sign In');
					});
				}
			},
			error: function (err) {
				alert(JSON.stringify(err));
			}
		});
		return false;
	}
	/* login submit */
});
