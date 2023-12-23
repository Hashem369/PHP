<?php
    function ABA($letter) {
        if (strtoupper($letter) === "A") {
            return $letter;
        } else {
            $prev = ABA(chr(ord($letter) -1));
            return $prev.$letter.$prev;
        }
        
    }
    echo ABA('B'); // ABA
?>
