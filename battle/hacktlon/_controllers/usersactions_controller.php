-<?php
$users = User::getAllUsers();

if(isset($_GET['id']) && !empty($_GET['id']))
{
    User::bloquerUser($_GET['id']);
    User::debloquerUser($_GET['id']);
    header('Location: usersactions');
    exit();
}

