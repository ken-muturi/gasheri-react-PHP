<?php

function dbConnect($dbName = "gasheri_php")
{
    $dbHost = "localhost";
    $dbUsername = "root";
    $dbPassword = "root";
    try {
        // Create connection
        $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

        // if ($conn->connect_error) {
        //     printr($conn->connect_error);
        //     die();
        // }

        return $conn;
    } catch (Exception $error) {
        error_log($error);
        die("error connecting to database");
    }
}

function dbQuery($conn, $sql)
{
    try {
        $result = $conn->query($sql);
        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    } catch (Exception $error) {
        error_log($error);
        die("Error executing the query.");
    }
}
