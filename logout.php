<?php
require_once './includes/helpers.php';
session_destroy();
header('Location:index.php');
