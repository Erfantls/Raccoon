<?php

error_reporting(E_ERROR);

if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    http_response_code(403);
    die('403');
}
return [
    "panel_url" => "https://panel.com:2020/",
    "panel_user" => "admin",
    "panel_pass" => "admin",
    "type" => "sanaei", // choose type between  [sanaei,alireza,xpanel]
    "api-key" => '', // for xpanel only
    "crisp" => "Your ID"
];
