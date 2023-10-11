<!DOCTYPE html>
<html>
<head>
    <title>String Tester</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <main>
        <h1>String Tester</h1>
        <form action="." method="post">
        <input type="hidden" name="action" value="process_data">

        <label>Name:</label>
        <input type="text" name="name" 
               value="<?php echo htmlspecialchars($name); ?>">
        <br>

        <label>E-Mail:</label>
        <input type="text" name="email" 
               value="<?php echo htmlspecialchars($email); ?>">
        <br>

        <label>Phone Number:</label>
        <input type="text" name="phone" 
               value="<?php echo htmlspecialchars($phone); ?>">
        <br>

        <label>Street:</label>
        <input type="text" name="street" 
               value="<?php echo htmlspecialchars($street); ?>">
        <br>

        <label>City:</label>
        <input type="text" name="city" 
               value="<?php echo htmlspecialchars($city); ?>">
        <br>

        <label>State (2 Character Abbreviation):</label>
        <input type="text" name="state" 
               value="<?php echo htmlspecialchars($state); ?>">
        <br>

        <label>Zip:</label>
        <input type="text" name="zip" 
               value="<?php echo htmlspecialchars($zip); ?>">
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Submit">
        <br>

        </form>

        <h2>Message:</h2>
        <p><?php echo nl2br(htmlspecialchars($message)); ?></p>

        <h2>Second Message:</h2>
        <p><?php echo nl2br(htmlspecialchars($secondMessage)); ?></p>

        <h2>Third Message:</h2>
        <p><?php echo nl2br(htmlspecialchars($thirdMessage)); ?></p>

    </main>
</body>
</html>