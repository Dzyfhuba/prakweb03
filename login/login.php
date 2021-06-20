<?php
include "../env.php";
include "../config.php";

if (isset($_POST['login'])) {

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username=:username";
    $stmt = $conn->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":username" => $username,
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if ($user) {
        // verifikasi password
        echo password_verify($password, $user['password']);
        if (password_verify($password, $user["password"])) {
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            echo $user;
            // login sukses, alihkan ke halaman timeline
            header("Location: ../about");
        } else {
            header("Location: ../about");
        }
    } else {
        echo "wrong";
    }
}
