<?php

session_start();

session_destroy();


session_unset();


header("refresh:1;url=login.php");
