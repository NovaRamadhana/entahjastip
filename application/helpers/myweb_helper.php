<?php

    function formatangka($angka){
        $notasi = 'Rp. ';
        return $notasi.number_format($angka, 0, ',', '.').",-";
    }