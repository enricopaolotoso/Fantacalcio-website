<?php
include_once( '/Applications/XAMPP/xamppfiles/htdocs/Fantacalcio-website/frontend/functions/checkLogin.php');
echo dirname(__FILE__). '/frontend/functions/checkLogin.php';
if (!isset($_GET['page']))
{
    $user = checkLogin(); // checkLogin
    if ($user)
    {
        header("Location: index.php?page=1");
    }
    die();
}

$page = $_GET['page'];
switch ($page) {
    case 0:
        include("frontend/pages/f-league.php");
        break;
    case 1:
        include("frontend/pages/f-match.php");
        break;
    case 2:
        include("frontend/pages/f-player.php");
        break;
    case 3:
        include("frontend/pages/f-rosa.php");
        break;
    case 4:
        include("frontend/pages/f-squad.php");
        break;
    default:
        include("frontend/pages/f-user.php");
}
?>