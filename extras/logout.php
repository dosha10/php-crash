<?php
session_start(); #start the session

session_destroy(); #destroy the session
header('Location: /php-crash/13_sessions.php');