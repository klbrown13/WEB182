# WEB182
Referencing examples in Chapters 3 & 4, you will create a web page that uses HTML and PHP code to connect to a MySQL database and display a subset of the data as formatted HTML. This will require you to:

    Use phpMyAdmin to create three tables in your MySQL WEB182 database on the wcet.waketech.edu server
    Create a PHP file to access your MySQL database
    Upload the PHP file (using your FTP application of choice - such as FileZilla) to your WEB182 directory on the wcet.waketech.edu server

Instructions
1. Use phpMyAdmin to create three tables in your MySQL WEB182 database (1)

    Download the attached exercise3-1-create-db.sql file.
    Open phpMyAdmin on the wcet.waketech.edu server (opens in a new window) [Plain text: http://wcet.waketech.edu/phpmyadmin]
    Login to the MySQL server using your database user ID and password.
    After logging in, you should see the database web182 + your key account username in the left panel.  Click on this database to select it.
    Click on the Import tab and follow the instructions from Figure 3-10 (p. 115) of the textbook to import the exercise3-1-create-db.sql file.

2. Create a PHP file to access your MySQL database

    Create a PHP file and save it as guitar_list.php. (2) (3)
    Set the HTML title element for your new page to be Product Listing: Guitars.
    Add an HTML comment at the top of the page which includes your name, WEB182, the date, and the file name.
    Add an HTML level 1 heading ( h1) - Product Listing: Guitars - to the page.
    Using Figure 4-1 from the textbook (p. 127) as a guide, add PHP code to your file which will:
        Connect to your database (1) (4)
    Using Figure 4-2 from the textbook (p. 129) as a guide, add PHP code to your file which will:
        Use a try/catch statement to handle a PDO exception and display an error message.
    Using Figure 4-5 from the textbook (p. 135) as a guide, add PHP code to your file which will:
         Select fields from the gtr_shop1_products table for all items with a categoryID equal to 1. 
        Use a foreach loop to display the following field values in an HTML table (include table headings) (3)

            productID
            productCode
            productName
            listPrice

3. Upload guitar_list.php to the wcet.waketech.edu server
4. Test your page to make sure it is working properly. include the following for this assignment submission:

    A clickable URL to your PHP file on wcet.waketech.edu (5)
    Attach the guitar_list.php file you created to this submission

Notes:
(1) Refer to the Textbook, Software, & Wake Tech Server Access course link at the bottom of this lesson for details on Accessing MySQL on the Wake Tech Student Server.
(2) Make sure your file includes all the standard HTML tags. Refer to the "Simple HTML Document" section at w3schools.com in their HTML Introduction section (opens in a new window) [Plain text: https://www.w3schools.com/html/html_intro.asp]
(3) w3schools is an excellent resource for HTML, CSS, PHP, and MySQL questions. w3schools (opens in a new window) [Plain text: https://www.w3schools.com/]
(4) Your MySQL database for this course will be named web182 + your key account username. For example, John Public's database would be web182jpublic. Also, be sure to use "localhost" - NOT the IP address - when referring to the server host_address.
(5) Your URL should look similar to this: http://wcet.waketech.edu/your_user_account/web182/lesson2/guitar_list.php.
