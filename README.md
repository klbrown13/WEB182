
Background
For this assignment, you are going to implement Exercise 19-1 from page 655 in your textbook on your wcet.waketech.edu student account. You will then create (3) lines of code which will break your application according to the instructions below. Once you have created the lines of code, you will comment them out, allowing your application to run error free.
Instructions

    In Chapter 19, Exercise 19-1 on page 667 of your text book describes how to create a PHP application which utilizes a MySQL database. Follow the steps in the book to create the application. Remember, you have access to the solutions in the book. Once you have worked on the exercise by yourself for a little bit, download & open the solution. Compare it to your work. (1) (2) (3) (4)
    Your completed Exercise 19-1 application must:

        Correctly apply the main.css stylesheet so that it looks as intended by the author
        Run correctly as described in Exercise 19-1 without producing any PHP or MySQL errors

    Now, modify the code so that only the following error is displayed: A database error occurred. Error message: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'my_guitar_shop2.product' doesn't exist.

    Your modification should only involve removing one character from one line of code in one file
    Once you have identified where you are breaking your code to create the error:
        Duplicate that line of code, returning it to the original working version
        Comment out your modified line of code so that the application once again runs correctly as in Step 2
        Above your commented line of code, include another line of commented code that contains your name and the phrase ERROR #1.
    Be sure  your comments are correctly coded so that they do not display when the application runs 

    Next, modify the code so that only the following error is displayed: A database error occurred. Error message: SQLSTATE[HY093]: Invalid parameter number: number of bound variables does not match number of tokens.

    Your modification should only involve removing one character from one line of code in one file
    Once you have identified where you are breaking your code to create the error:
        Duplicate that line of code, returning it to the original working version
        Comment out your modified line of code so that the application once again runs correctly as in Step 2
        Above your commented line of code, include another line of commented code that contains your name and the phrase ERROR #2.
    Be sure  your comments are correctly coded so that they do not display when the application runs 

    Finally, modify the code so that NO PHP or MySQL errors are created, but  when the index.php page runs, the resulting output message is displayed: Insert Message: No rows were inserted. In other words, you have introduced an error that logically causes the application to fail & not insert an new guitar into the database - but does NOT cause an error message to be displayed.
        Once you have identified where you are breaking your code to create the error:
            Duplicate that line of code, returning it to the original working version
            Comment out your modified line of code so that the application once again runs correctly as in Step 2
            Above your commented line of code, include another line of commented code that contains your name and the phrase ERROR #3.
        Be sure  your comments are correctly coded so that they do not display when the application runs 

4. Test your application to make sure it is working properly. Include the following for this assignment submission:

    A clickable URL to your PHP file on wcet.waketech.edu (4)

Notes:
(1) You will need to retrieve the file my_guitar_shop2.sql we used earlier this semester and modify it to create your mySQL tables on wcet.waketech.edu using phpMyAdmin. The file can be found in the zipped solution archive you downloaded for the textbook in this folder: htdocs/book_apps/_create_db/create_db.sql.
(2) The wcet server was recently rebuilt and any previous mySQL tables you may have created were deleted. This means for this assignment you will need to recreate your tables by importing the my_guitar_shop2.sql file using phpMyAdmin. Remember:

    You do not have the ability to create databases or grant user access on this server, so you will have to modify my_guitar_shop2.sql to only create tables and load the initial data into your database during the import.
    Your MySQL database for this course will be named web182 + your username. For example, John Q Public's database would be web182jqpublic. Your username and password will be the same as your FTP account on the server. Also, be sure to use "localhost" - NOT the IP address - when referring to the server host_address.

(3) As you did for earlier lessons this semester, will need to modify the model/database.php file to work with your newly imported mySQL database.
(4) Your URL should look similar to this: https://wcet.waketech.edu/your_user_account/web182/lesson12/ch19_ex1_sol/index.php.
Grading
This assignment is worth 100 points. Assignments are weighted as 60% of your total grade. To view the grading policy for assignments, follow the Policy & Grading - Assignments, Exams, & Quizzes course link at the bottom of this lesson.
The Standard Application development Rubric will be used to grade your work for this assignment. To view the rubric, click the Assignment - Application link above, then look inside the "Points Possible - 100" box and click the "View Rubric" link. The rubric is also explained in the Policy & Grading - Assignments, Exams, & Quizzes course link at the bottom of this lesson.
Remember

    A grade of zero (0) will be given for submitted web URLs that do not work
    A grade of zero (0) will be given for late work

