<?php

require_once("database.php");

// Get all products from the products table
function get_all_products()
{
    $conn = get_db_conn();

    $query = "SELECT * FROM products";

    $result = mysqli_query($conn, $query);

    return $result;
}

?>