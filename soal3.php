<?php

function nilai($n) {
    if ($n<100 && $n>=90) {
        echo "A+";
    }else if ($n>79 && $n <=89) {
        echo "A";

    }else if ($n>69 && $n<=79){
        echo "B";
    } else if ($n>59 && $n<=69) {
        echo "C";
    }else {
        echo "D";
    }
};

echo nilai(96);


?>