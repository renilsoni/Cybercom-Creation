<?php

include 'core.inc.php';
session_destroy();

header('Location: '.$http_ref);

?>