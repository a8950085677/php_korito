<?php

function get_users($db) {
    $sql = "SELECT * FROM umily_database.umily_users";

    $result = mysqli_query($db, $sql);

    $users = mysqli_fetch_all($result, 1);

    return $users;
}

function get_userbyname($db, $username) {
    $sql = "SELECT * FROM umily_database.umily_users WHERE login="."'".$username."'";

    $result = mysqli_query($db, $sql);

    $user = mysqli_fetch_all($result, 1);

    return $user;
}

function add_user($db, $login, $password, $email) {

    $user = get_userbyname($db,$login);
    foreach ($user as $client)
    if ($client['login'] == $login) {
        return "err";
    } else {
        $sql = "INSERT INTO umily_users VALUES ("."'".$login."',"."'".$password."',"."'".$email."')";
        $result = mysqli_query($db, $sql);
        return "1";
    }
}