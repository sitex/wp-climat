<?php
$show_info = false;
if (in_array($_SERVER["REQUEST_URI"], ['', '/'])) {
	$show_info = TEMPLATEPATH . '/info_main.php';
};
if (strpos($_SERVER["REQUEST_URI"], 'uslugi') !== false) {
	$show_info = TEMPLATEPATH . '/info_uslugi.php';
}
// show
if ($show_info) {
	include $show_info;
}