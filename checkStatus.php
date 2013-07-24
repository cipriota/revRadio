<?php
	$mode = $_GET['mode'];
	
	$pid = shell_exec('pgrep rtl_fm');
	
	if ($mode != null) {
		if ($pid != null) {
			shell_exec('kill -9 ' . $pid);
		}
	}
	
	
	print "{'status': " . $status . "}";
?>
