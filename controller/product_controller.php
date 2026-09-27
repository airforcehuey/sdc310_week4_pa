<?php

require_once("../model/product_db.php");

// Get all products and organize the data for the view
function get_products()
{
    $product_rows = get_all_products();
    $products = array();

    if ($product_rows)
    {
        $index = 0;

        while ($row = mysqli_fetch_array($product_rows))
        {
            $products[$index]["ProductNo"] = $row["ProductNo"];
            $products[$index]["Name"] = $row["Name"];
            $products[$index]["Type"] = $row["Type"];

            $index++;
        }
    }

    return $products;
}

?>