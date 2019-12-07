<?php


    function vide ( $tableau ) {
        $i = 0;
        foreach ($tableau as $key => $value) {
            if( empty($value) == TRUE) {
                $i++;
            }
        }
        if($i == 0) { return $tableau; } else { return NULL; }
    }