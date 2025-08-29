<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/cashier/config/connect.php'; // local
// require_once $_SERVER['DOCUMENT_ROOT'] . '/config/connect.php'; // hosting

// get data post
$username = $_POST['username'];
$password = $_POST['password'];
$register_time = date('Y-m-d H:i:s', strtotime($now));
$timeout = 1200; // default timeout 20 jam

// check if username already exists
$sql = "SELECT * FROM t_auth WHERE c_username = :username";
$stmt = $connect->prepare($sql);
$stmt->bindParam(':username', $username);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

if ($result) {
    echo json_encode(array('status' => 'username_exist'));
} else {
    // Code to handle new user registration
    /// insert new user
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO t_auth (c_username, c_password, c_name, c_datetime, c_timeout) VALUES (:c_username, :c_password, :c_name, :c_datetime, :c_timeout)";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':c_username', $username);
    $stmt->bindParam(':c_password', $hashed_password);
    $stmt->bindParam(':c_name', $username);
    $stmt->bindParam(':c_datetime', $register_time);
    $stmt->bindParam(':c_timeout', $timeout);
    if ($stmt->execute()) {
        echo json_encode(array('status' => 'success'));
    } else {
        echo json_encode(array('status' => 'failed'));
    }
}
