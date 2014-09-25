<?php
require '../project/connections/Guitar1Connection.php'; 
global $guitar1; //Database connection 
global $dbname; // Database name


    // Code for Query #1
    // Assign query to a variable named $query
    $query = 'SELECT productName 
              FROM products';
    //Here we prepare our query to be executed by the execute() statement
    $statement = $guitar1->prepare($query);
    // Execute the Query
    $statement->execute();
    // put all row in result set into an array, assign $products to that array
    $products = $statement->fetchAll();
    // This is how I printed the array which I learned through reading pg 614-615 in the book.
    foreach ($products as $product) {
     echo $product['productName'] . '<br />';    
    }


        

    // Same steps as #1
    $query2 = 'SELECT productName, listPrice
               FROM products 
               WHERE listPrice > 1000';
    $statement2 = $guitar1->prepare($query2);
    $statement2->execute();
    $products2 = $statement2->fetchAll();
    $statement2->closeCursor();
    foreach ($products2 as $product2) {
        echo $product2['productName'] . ' ' . $product2['listPrice'] . '<br />';
    }
    
?>