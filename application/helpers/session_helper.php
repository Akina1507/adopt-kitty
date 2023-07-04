<?php

function isConnected()
{
    $CI = get_instance();
    if ($CI->session->userdata('sid')) {
        return true;
    } else return false;
}
