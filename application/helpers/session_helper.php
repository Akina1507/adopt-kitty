<?php
session_start();

function isConnected()
{
    if (isset($_SESSION["pseudo"])) {
        return true;
    } else return false;
}
