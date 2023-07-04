<?php

function isConnected()
{
    $CI = get_instance();
    if ($CI->session->userdata('id')) {
        return true;
    } else return false;
}
