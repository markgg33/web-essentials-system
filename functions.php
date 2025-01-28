<?php

// Check if the function is already declared
if (!function_exists('getUserCount')) {
    // TO COUNT THE DATA INSIDE THE TABLE GIVEN BY THE USER
    function getUserCount($tableName)
    {
        global $conn;
        $sql = "SELECT COUNT(*) as count FROM $tableName";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            return $row['count'];
        } else {
            return 0;
        }
    }
}


function getuserData()
{
    global $conn;

    $sql = "SELECT * FROM web_users";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = [
                'first_name' => $row['first_name'],
                'middle_name' => $row['middle_name'],
                'surname' => $row['surname'],
                'username' => $row['username'],
                'dob' => $row['dob'],
                'gender' => $row['gender'],
                'usertype' => $row['usertype'],
            ];
        }
        return $data;
    } else {
        return [];
    }
}

?>
