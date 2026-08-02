<?php

function simpanLog($koneksi, $modul, $aktivitas)
{
    $modul = mysqli_real_escape_string($koneksi, $modul);
    $aktivitas = mysqli_real_escape_string($koneksi, $aktivitas);

    mysqli_query(
        $koneksi,
        "INSERT INTO activity_log(modul, aktivitas)
         VALUES('$modul','$aktivitas')"
    );
}