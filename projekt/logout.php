<?php
session_start();
if(session_destroy()) // Prekida sve sesije
{
header("Location: sign-in.php"); // Vraća na početnu stranicu
}
?>
