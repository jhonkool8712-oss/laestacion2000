<?php
require 'config.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: reservation.php');
    exit;
}

$name = $mysqli->real_escape_string(trim($_POST['name'] ?? ''));
$email = $mysqli->real_escape_string(trim($_POST['email'] ?? ''));\n$date = $mysqli->real_escape_string(trim($_POST['reservation_date'] ?? ''));
$people = intval($_POST['people'] ?? 0);
$notes = $mysqli->real_escape_string(trim($_POST['notes'] ?? ''));

if ($name === '' || $email === '' || $date === '' || $people <= 0) {
    header('Location: reservation.php');
    exit;
}

$stmt = $mysqli->prepare('INSERT INTO reservations (name, email, reservation_date, people, notes) VALUES (?, ?, ?, ?, ?)');
$stmt->bind_param('sssis', $name, $email, $date, $people, $notes);
$stmt->execute();
$stmt->close();

header('Location: reservation.php?status=ok');
exit;
