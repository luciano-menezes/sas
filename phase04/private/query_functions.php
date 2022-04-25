<?php

function find_all_salamanders()
{
    global $db;
    $sql = "SELECT * FROM salamander ";
    $sql .= "ORDER BY name ASC";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result, $sql);
    return $result;
}

function insert_salamander($salamander)
{
    global $db;

    $sql = "INSERT INTO salamander ";
    $sql .= "(name, habitat, description) ";
    $sql .= "VALUES(";
    $sql .= "'" . $salamander['name'] . "', ";
    $sql .= "'" . $salamander['habitat'] . "', ";
    $sql .= "'" . $salamander['description'] . "'";
    $sql .= ")";
    $result = mysqli_query($db, $sql);

    if ($result) {
        return true;
    } else {

        echo mysqli_error($db);
        db_disconnect($db);
        exit();
    }
}
