<?php
	function preserve_qs() {
	    if (empty($_SERVER['QUERY_STRING']) && strpos($_SERVER['REQUEST_URI'], "?") === false) {
	        return "";
	    }
	    return "?" . $_SERVER['QUERY_STRING'];
	}
	header("Status: 301 Moved Permanently");
	header("Location: http://www.psychopy.org/usageQuery.php" . preserve_qs());
    exit;
?>