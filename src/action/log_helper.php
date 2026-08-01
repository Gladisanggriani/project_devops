<?php

function simpanLog($koneksi, $aktivitas)
{
    $aktivitas = mysqli_real_escape_string($koneksi, $aktivitas);

    mysqli_query(
        $koneksi,
        "INSERT INTO activity_log(aktivitas)
         VALUES('$aktivitas')"
    );
}