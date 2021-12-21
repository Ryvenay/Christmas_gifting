<?php 

function insertSubmission($username) {
    $query = "INSERT INTO users (name) VALUES (:name)";
    $params = [
        ':name' => $_POST['name']
    ];

    require_once DATABASE_CONTROLLER;

    $success = executeDML($query, $params);
    if($success > 0) {
        $_SESSION['id'] = $success;
    }
    return $success;
}


function getUserById($id) {
    $query = "SELECT * FROM users WHERE id = :id";
    $params = [
        ':id' => $id
    ];

    require_once DATABASE_CONTROLLER;
    $record = getRecord($query, $params);

    return $record;
}

function pullUser($uid) {
    $query = "SELECT * FROM users WHERE id NOT IN (SELECT huzott_id FROM huzasok) AND id != :id";
    $params = [
        ":id" => $uid
    ];
    require_once DATABASE_CONTROLLER;

    $users = getList($query);

    if(count($users) == 0) {
        return false;
    }

    $pulledUser = $users[rand(0, count($users))];

    $query = "INSERT INTO huzasok (huzo_id, huzott_id) VALUES (:huzo_id, :huzott_id)";
    $params = [
        ":huzo_id" => $uid,
        ":huzott_id" => $pulledUser['id']
    ];

    $success = executeDML($query, $params);

    return $success;
}

function pullUserWithoutId() {
    $query = "SELECT * FROM users WHERE id NOT IN (SELECT huzott_id FROM huzasok)";
    require_once DATABASE_CONTROLLER;

    $users = getList($query);

    if(count($users) == 0) {
        return false;
    }

    $pulledUser = $users[rand(0, count($users)-1)];

    $query = "INSERT INTO huzasok (huzott_id) VALUES (:huzott_id)";
    $params = [
        ":huzott_id" => $pulledUser['id']
    ];

    $success = executeDML($query, $params);

    return $success;
}