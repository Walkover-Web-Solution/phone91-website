<?php
include_once 'config.php';

session_destroy();
session_write_close();
session_unset();
session_commit();
unset($_SESSION);;

header('location: http://phone91.com');

?>