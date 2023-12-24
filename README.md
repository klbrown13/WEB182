Chapter 20 presents a database-driven website called the Guitar Shop.
For this assignment, you're going to implement - then modify - the Guitar Shop website.
Using what you learned this semester, your challenge is to modify the home page of the website. Currently the home page features three fixed products (a guitar with productID=1, a bass guitar with productID=7, and a drum with productID=9). You are going to change the necessary files to feature ALL bass guitars with a list price greater than or equal to $500.00.
While there are currently only two bass guitars in the database (just one of those two products meet this new criteria), more may be added or deleted. Your code needs to dynamically feature all the selected bass guitars and not depend (as it is presented in the chapter) on three fixed product IDs.

Instructions

    Read Chapter 20 to become comfortable with the operation for all files in the Guitar Shop website example. Similar to our homework for Lesson 12, you have access to code for the examples in the book. Download the code for the Guitar Shop and implement it in your MySQL database & directories on wcet.waketech.edu. (1) (2) (3) (4)
    Your completed Guitar Shop site must:

        Correctly apply the main.css stylesheet so that it looks as intended by the author
        Run correctly on wcet.waketech.edu as described in Chapter 20 without producing any PHP or MySQL errors

    Now, modify the code so that instead of featuring three pre-selected products (a guitar, a bass guitar, and a drum set), you feature ALL bass guitars that have a list price greater than or equal to $500.00. Your code needs to query the database and dynamically select the bass guitars which should be featured and displayed on the home page. Therefore, if a bass is added that lists for $500.01 it is featured. A bass which lists for $499.99 is not featured. 
    Test your application to make sure it is working properly. This means adding and subtracting bass guitars as necessary to verify your selection code is working properly. Include the following for this assignment submission:

        A clickable URL to your PHP file on wcet.waketech.edu (4)
        The project files

Notes:

    You will need to retrieve the file my_guitar_shop2.sql we used earlier this semester and modify it to create your mySQL tables on wcet.waketech.edu using phpMyAdmin. The file can be found in the zipped solution archive you downloaded for the textbook in this folder: htdocs/book_apps/_create_db/create_db.sql.
    The wcet server was recently rebuilt and any previous mySQL tables you may have created were deleted. This means for this assignment you will need to recreate your tables by importing the my_guitar_shop2.sql file using phpMyAdmin. Remember:
    You do not have the ability to create databases or grant user access on this server, so you will have to modify my_guitar_shop2.sql to only create tables and load the initial data into your database during the import.
    Your MySQL database for this course will be named web182 + your username. For example, John Q Public's database would be web182jqpublic. Your username and password will be the same as your FTP account on the server. Also, be sure to use "localhost" - NOT the IP address - when referring to the server host_address.
    As you did for earlier lessons this semester, will need to modify the model/database.php file to work with your newly imported mySQL database.
    Your URL should look similar to this: https://wcet.waketech.edu/your_user_account/web182/lesson13/index.php.

Grading
This assignment is worth 100 points. Assignments are weighted as 60% of your total grade. To view the grading policy for assignments, follow the Policy & Grading - Assignments, Exams, & Quizzes course link at the bottom of this lesson.
The Standard Application development Rubric will be used to grade your work for this assignment. To view the rubric, click the Assignment - Application link above, then look inside the "Points Possible - 100" box and click the "View Rubric" link. The rubric is also explained in the Policy & Grading - Assignments, Exams, & Quizzes course link at the bottom of this lesson.
Remember
A grade of zero (0) will be given for submitted web URLs that do not work
A grade of zero (0) will be given for late work
