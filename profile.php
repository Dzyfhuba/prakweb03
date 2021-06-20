<?php

function hitungUmur($tanggal_lahir)
{
    $bday = new DateTime($tanggal_lahir); // Your date of birth
    $today = new Datetime(date('Y-m-d'));
    $diff = $today->diff($bday);
    return $diff->y . ' tahun, ' . $diff->m . ' bulan, ' . $diff->d . ' hari';
}

$stmt = $conn->prepare("SELECT * FROM users");
$stmt->execute();
$data = $stmt->fetchAll();
