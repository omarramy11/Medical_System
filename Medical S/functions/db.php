<?php

$server = "localhost";
$username = "OMARRAMY";
$password = "OMARRAMY1234";
$dbname = "midecal_servi";

// connection to database
$connection = mysqli_connect($server, $username, $password, $dbname);

// check if not connect
if(!$connection)
{
    die("Error in connection : " . mysqli_connect_error()); // message
}

// insert databse
function db_insert($sql)
{
    global $connection;

    $result = mysqli_query($connection, $sql);

    if($result)
    {
        return "Added Success";
    }
    return false;
}

// Get row for database

// Login DB
// getrow function() : three object

function getRow($table, $field, $value)
{
    global $connection;
    // DB
    $sql = "SELECT * FROM `$table` WHERE `$field`='$value'";
    $result = mysqli_query($connection, $sql);

    if($result)
    {
        $rows = [];

        if(mysqli_num_rows($result) > 0) // عند وصول البيانات صحيحه
        {
            $rows[] = mysqli_fetch_assoc($result); // احضرها علي شكل مصفوفه assoc
            return $rows[0]; // ارجاع القيمه 
        }
    }
    return false;
}
