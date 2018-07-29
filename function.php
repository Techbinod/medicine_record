

<?php 

function debugger($data, $is_die = false, $dump = false) {
	echo "<pre style='color: #ff0000;'>";
	if ($dump) {
		var_dump($data);
	} else {
		print_r($data);
	}
	echo "</pre>";
	if ($is_die) {
		exit;
	}
}

 ?>
