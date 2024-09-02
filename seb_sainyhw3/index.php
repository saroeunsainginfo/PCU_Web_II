<?php
if ($_SERVER['REQUEST_URI'] == "/project/PCU_Web_II/seb_sainyhw2/login/") {
    header("Location: http://localhost/project/PCU_Web_II/seb_sainyhw2/views/Auth/login.php");
    exit();
} else if ($_SERVER['REQUEST_URI'] == "/project/PCU_Web_II/seb_sainyhw2/register") {
    header("Location: http://localhost/project/PCU_Web_II/seb_sainyhw2/register.php");
    exit();
}
