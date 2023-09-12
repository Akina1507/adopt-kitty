<?php

function isConnected()
{
    $CI = get_instance();
    if ($CI->session->userdata('id') || $CI->session->assos('id')) {
        return true;
    } else return false;
}
