<?php

session_start();

session_abort();

session_destroy();

header("location:http://localhost/gamingwebsite/index.php");

?>