<?php

namespace ZENITH_THEME\Helpers;

function logger($arg1){
echo '<pre>';
print_r($arg1);
wp_die();
}