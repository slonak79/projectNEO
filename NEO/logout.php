<?php
/**
 * Created by PhpStorm.
 * User: edsan
 * Date: 5/3/15
 * Time: 3:53 PM
 */
session_start();
session_destroy();
header("Location: login.php");

