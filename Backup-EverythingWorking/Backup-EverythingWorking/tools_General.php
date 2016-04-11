<?php

function random_number($length) {

    $rand_num = '';
    for ($i = 0; $i < $length; $i++) {
        $rand_num .= mt_rand(0, 9);
    }

    return $rand_num;
}
//
//function echo_result($q_result) {
//
//
//
//}

?>
