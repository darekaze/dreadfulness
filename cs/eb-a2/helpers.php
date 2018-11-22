<?php

if (!function_exists('_is_valid')) {
    function _is_valid($var) {
        if(empty($var) || is_null($var) || FALSE === $var)
            return FALSE;
        return TRUE;
    }
}

/// ------------------------------------------------------------------------

if (!function_exists('_log_die')) {
    function _log_die($msg) {
        error_log($msg);
        die($msg);
    }
}