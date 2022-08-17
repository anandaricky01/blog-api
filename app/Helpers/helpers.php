<?php

function currency_IDR($value){
    return 'Rp. ' . number_format($value, 0, ',', '.');
}
