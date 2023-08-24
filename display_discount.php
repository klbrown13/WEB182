<?php
    //Using filter_input to get the data from the form
    $product_description = filter_input(INPUT_POST, 'product_description');
    $list_price = filter_input(INPUT_POST, 'list_price', FILTER_VALIDATE_FLOAT);
    $discount_percent = filter_input(INPUT_POST, 'discount_percent', FILTER_VALIDATE_FLOAT);
    
    //Constant variable
    define('SALES_TAX', .08);
    
    //validate data
    $error_message = '';
    
    //validate product description
    if(empty($product_description)){
        $error_message .= 'Product Description is empty. <br>';
    }
    
    //validate list price
   if(!is_numeric($list_price) || $list_price === FALSE){
        $error_message .= 'List Price must be a valid number.<br>';
    } else if($list_price <= 0){
        $error_message .= 'List Price must be greater than 0.<br>';
    }

    //validate discount price
    if(!is_numeric($discount_percent) || $discount_percent === FALSE){
        $error_message .= 'Discount Percent must be a valid number. <br>';
    } else if($discount_percent <= 0){
        $error_message .= 'Discount Percent must be greater than 0. <br>';
    }
    
    //if an error message is displayed, take user back to index.php page
    if ($error_message != ''){
        include('index.php');
        exit();
    }

    //calculations for the discount amount, discount price, and calculated sales tax
    $discount_amount = ($list_price * $discount_percent * .01);
    $discount_price = ($list_price - $discount_amount);
    $calculated_sales_tax = ($discount_price *.08) + $discount_price;
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
    <div id="content">
    <h1>Product Discount Calculator</h1>

    <label>Product Description:</label>
    <span><?php echo htmlspecialchars($product_description); 
    
     ?></span><br>

    <label>List Price:</label>
    <span><?php echo "$" . number_format($list_price, 2) ?></span><br>

    <label>Discount Percent:</label>
    <span><?php echo $discount_percent . "%" ?></span><br>

    <label>Discount Amount:</label>
    <span><?php echo "$" . number_format($discount_amount, 2); ?></span><br>

    <label>Discount Price:</label>
    <span><?php echo "$" . number_format($discount_price, 2); ?></span><br>

    <label>Sales Tax Rate:</label>
    <span><?php echo (SALES_TAX * 100) . "%"; ?></span><br>

    <label>Total Amount:</label>
    <span><?php echo "$" . number_format($calculated_sales_tax, 2); ?></span><br>
    
    <p>&nbsp;</p>
    </div>
</body>
</html>