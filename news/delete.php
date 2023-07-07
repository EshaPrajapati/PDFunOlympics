<?php
session_start();
if (isset($_SESSION['SESSION_ADMIN'])) {
    if (!$_SESSION['SESSION_ADMIN']) {
        header("Location: /pd_esha/home");
        die();
    }
}

if (isset($_GET['id']) && !empty($_GET['id'])) {
    require "../config.php";

    //prepare an sql statement
    $sql = "DELETE FROM news WHERE id = ?";
    $id = $_GET['id'];

    if ($statement = $conn->prepare($sql)) {
        $statement->bind_param("i", $c_id);
        $c_id = $id;
        if ($statement->execute()) {
            $conn->close();
            header("location: news-d.php");
        }
    }
}
?>