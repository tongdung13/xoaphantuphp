<?php

$arr = array(3,4,6,7,9,8,1);
        var_dump($arr);
        unset($arr[2]);
        $arr = array_values($arr);
        echo '<br>';
        var_dump($arr);
