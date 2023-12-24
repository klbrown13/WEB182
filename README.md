For this assignment, you are going to implement the My Guitar Shop eCommerce website from Chapter 23  in your textbook on your wcet.waketech.edu student account. You will then follow the instructions below to demonstrate your site runs correctly without errors.

Instructions

    Chapter 23 of your text book describes the My Guitar Shop eCommerce website which utilizes a MySQL database. As with previous assignments, you have access to download the complete source code and mySQL import file. Install the PHP code and build the necessary MySQL database on your wcet.waketech.edu account.  (1) (2) (3) (4)
    Surprisingly, the author's code has several errors. For example, when you display the home page, a MySQL database error is presented. You will also encounter another MySQL error when trying to submit an order. You will need to thoroughly test all of the application pages AND fix any PHP or MySQL errors that occur.
    Your My Guitar Shop eCommerce website must:

        Correctly apply the main.css stylesheet so that it looks as intended by the author
        Run correctly as described in Chapter 23 without producing ANY PHP or MySQL errors 

3. To demonstrate you understand how the website works, you will need to: (5)

    Add yourself as an administrator (use your Wake Tech email address for both the account email AND password)
    Place a product order (this will require you register as a user - again, use your Wake Tech email address for both the account email AND password)
    Add an item to your cart but DO NOT complete the order

4. Test your application to make sure it is working properly. Include the following for this assignment submission:

    A clickable URL to your PHP file on wcet.waketech.edu (4)
    Project Files

Notes:
(1) You will need to retrieve the file my_guitar_shop2.sql we used earlier this semester and modify it to create your mySQL tables on wcet.waketech.edu using phpMyAdmin. The file can be found in the zipped solution archive you downloaded for the textbook in this folder: htdocs/book_apps/_create_db/.
(2) The wcet server was recently rebuilt and any previous mySQL tables you may have created were deleted. This means for this assignment you will need to recreate your tables by importing the my_guitar_shop2.sql file using phpMyAdmin. Remember:

    You do not have the ability to create databases or grant user access on this server, so you will have to modify my_guitar_shop2.sql to only create tables and load the initial data into your database during the import.
    Your MySQL database for this course will be named web182 + first five letters of your last name. For example, John Public's database would be web182publi. Your username and password will be the same as your FTP account on the server. Also, be sure to use "localhost" - NOT the IP address - when referring to the server host_address.

(3) As you did for earlier lessons this semester, will need to modify the model/database.php file to work with your newly imported mySQL database.
(4) Your URL should look similar to this: https://wcet.waketech.edu/your_user_account/web182/lesson15/ch23_guitar_shop/index.php.
(5) When I grade your assignment, I should be able to:

    go to the URL you submit in Blackboard & enounter no errors,
    be able to see you as one of the site administrators,
    be able to login to your My Account,
    see that you have placed at least one order and have at least one item in your cart pending an order.

Grading
This assignment is worth 100 points. Assignments are weighted as 60% of your total grade. To view the grading policy for assignments, follow the Policy & Grading - Assignments, Exams, & Quizzes course link at the bottom of this lesson.
The Standard Application development Rubric will be used to grade your work for this assignment. To view the rubric, click the Assignment - Application link above, then look inside the "Points Possible - 100" box and click the "View Rubric" link. The rubric is also explained in the Policy & Grading - Assignments, Exams, & Quizzes course link at the bottom of this lesson.
Remember

    A grade of zero (0) will be given for submitted web URLs that do not work
    A grade of zero (0) will be given for late work
