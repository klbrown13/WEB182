<!-- Kurt Brown 
     WEB 182
     August 27, 2023
     guitar_list.php -->

<?php 
    //Set the categoryID equal to 1 based on our SELECT statement
    $category_id = 1; 

    //Connecting to the database
    $dsn = 'mysql:host=localhost; dbname=web182klbrown13';
    $username = 'klbrown13';
    $password = 'KuBro6832';

    $db = new PDO($dsn, $username, $password); //This creates the PHP Data Object

    //PDO Exception
    try{
        $db = new PDO($dsn, $username, $password);
        echo '<p>You are connected to the database!</p>';
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo '<p> An error occured while connecting to the database: $error_message </p>';
    }

    //Select fields from the gtr_shop1_products table for all items with a categoryID equal to 1
    $query = 'SELECT productID, productCode, productName, listPrice
              FROM gtr_shop1_products
              WHERE categoryID = :category_id;';
    $statement = $db->prepare($query);
    $statement->bindValue(":category_id", $category_id);
    $statement->execute();
    $products = $statement->fetchAll();
    $statement->closeCursor();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing: Guitars</title>
</head>
<body>
    <h1>Product Listing: Guitars</h1>
        <table>
            <tr>
                <th>ProductID</th>
                <th>Product Code</th>
                <th>Product Name</th>
                <th>List Price</th>
            </tr>
            <?php foreach($products as $product){ ?>
            <tr>
                <td><?php echo $product['productID']; ?></td>
                <td><?php echo $product['productCode']; ?></td>
                <td><?php echo $product['productName']; ?></td>
                <td><?php echo $product['listPrice']; ?></td>
            </tr>
            <?php } ?>
        </table>
</body>
</html>