<?php
	// stop command - kill -9 `pidof rtl_fm`
	// start command - nohup rtl_fm -f 96.3e6 -W -s 200000 -r 48000 - 2>/dev/null | aplay -r 48k -f S16_LE 2>/dev/null &
	$service = $_GET['service'];

	switch ($service) {
		case "radio":
			start_radio();
			break;

		default:
			print 0;
			break;
	}

	function start_radio() {

		exec('nohup rtl_fm -f 96.3e6 -W -s 200000 -r 48000 - 2>/dev/null | aplay -r 48k -f S16_LE 2>/dev/null &', $output, $retval);
		
		print $output;
		print 1;
	}

?>
