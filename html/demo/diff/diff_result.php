<!DOCTYPE HTML>
<html>
<head>
<?php
$root_path = '../..';
include_once $root_path.'/../assets/meta.php';
?>
<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
<?php
include_once $root_path.'/../assets/nav.php';
include 'diff_function.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$txt_a = $_POST['txt_a'];
	$txt_b = $_POST['txt_b'];
}

// txt array
$diff_a = array();
$diff_a = explode("\r\n", $txt_a);

$diff_b = array();
$diff_b = explode("\r\n", $txt_b);

// match index
$temp = array();
$temp = match_index($diff_a, $diff_b);

$match_index_a = $temp['a'];
$match_index_b = $temp['b'];

// diff_result
$diff_result_a = array();
$diff_result_b = array();
for ($i = 0; $i <= count($match_index_a); $i += 1) {
	if ($i == count($match_index_a)) {
		$index_a = count($diff_a);
		$index_b = count($diff_b);
	} else {
		$index_a = $match_index_a[$i];
		$index_b = $match_index_b[$i];
	}
	
	if ($i == 0) {
		// 첫번째 배열
		$previous_index_a = -1;
		$previous_index_b = -1;
	} else {
		$previous_index_a = $match_index_a[$i - 1];
		$previous_index_b = $match_index_b[$i - 1];
	}
	
	$length_a = $index_a - $previous_index_a;
	$length_b = $index_b - $previous_index_b;
	
	$max_length = max($length_a, $length_b);
	
	$a = $previous_index_a + 1;
	$b = $previous_index_b + 1;
	
	// add, del, blank 관련
	for ($count = 0; $count < $max_length - 1; $count++) {
		if ($a < $index_a) {
			$diff_result_a[] = array('del', $diff_a[$a]);
		} else {
			$diff_result_a[] = array('blank', null);
		}
		
		if ($b < $index_b) {
			$diff_result_b[] = array('add', $diff_b[$b]);
		} else {
			$diff_result_b[] = array('blank', null);
		}
		
		$a += 1;
		$b += 1;
	}
	
	if ($i !== count($match_index_a)) {
		// 매칭된 대상
		$match_char = $diff_a[$index_a]; // = $diff_result[1][$index_b];
		$diff_result_a[] = array('unchanged', $match_char);
		$diff_result_b[] = array('unchanged', $match_char);
	}
}
?>
<div class="contant">
	<div class="diff_content">
		<h1>Diff checker</h1>
		<br>
		<ol class="diff diff_text pull-left" type="1">
		<?php
		foreach ($diff_result_a as $i => $arr) {
			if ($arr[0] == 'blank') {
				printf('<div class="%s">%s</div>', $arr[0], htmlspecialchars($arr[1]));
			} else {
				printf('<li class="%s">%s</li>', $arr[0], htmlspecialchars($arr[1]));
			}
		}
		?>
		</ol>
		<ol class="diff diff_text pull-left" type="1">
		<?php
		foreach ($diff_result_b as $i => $arr) {
			if ($arr[0] == 'blank') {
				printf('<div class="%s">%s</div>', $arr[0], htmlspecialchars($arr[1]));
			} else {
				printf('<li class="%s">%s</li>', $arr[0], htmlspecialchars($arr[1]));
			}
		}
		?>
		</ol>
	</div>
	<br>
	<div class="diff_content">
		<form action="diff.php" method="post">
			<ul>
				<li class="diff_text pull-left">
					<label>Orignal Text</label>
					<textarea name="txt_a"><?php echo $txt_a; ?></textarea>
				</li>
				<li class="diff_text pull-left">
					<label>Changed Text</label>
					<textarea name="txt_b"><?php echo $txt_b; ?></textarea>
				</li>
			</ul>
			<ul>
				<li>
					<input type="submit" value="Diff Go">
				</li>
			</ul>
		</form>
	</div>
</div>

</body>
</html>