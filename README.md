# WEB182 - PHP Programming
Assignments for the Web 182 PHP Programming class

Referencing examples in Chapter 12, you will:

    Enhance the Chapter 2 Future Value application to demonstrate your knowledge of working with PHP sessions and cookies
    Upload the folder of application files to your WEB182 directory on the wcet.waketech.edu server

Instructions
1. Using the attached example files (same as the textbook files), install the Future Value application described on pp. 80-87 of your textbook. (Remember, this is a complete, working PHP application.)
2. In the file display_results.php, add PHP code to display the following message after the Future Value output: 
"This calculation was done on $date at $time." (Note: the day/time should be EST)
3. Modify this application so it uses a persistent session to save the last values entered by the user for 5 minutes. (1)
3. Upload your future_value folder to the wcet.waketech.edu server
4. Test your application to make sure it is working properly. Include the following for this assignment submission:

    A clickable URL to your PHP file on wcet.waketech.edu (2)

Notes:
(1) The following hints will help you modify this application

    This application is not built using an MVC pattern, so it should be easier to make the few modifications needed.
    In index.php:
        At the top of the file (before the DOCTYPE html line) you will need to add a section of code which checks to see if a session id exists. If it does not, the code you add (which will be similar to the example on page 359) will need to start a session.
        After the above code (and before the DOCTYPE html line) you will need to add a section of code which checks to see if any of the (3) inputs (amount, rate, & years) already exist in $_SESSION[ ]. If they do, you will need to set the initial values for the form fields to those values. 
    In display_results.php:
        At the top of the file you will need to make sure you start the session (see page 358).
        After the input field values (amount, rate, & years) are error checked, you will need to store the values in the session (see pp. 360-361)
        Remember to display the day/time when your calculation was  performed.

(2) Your URL should look similar to this: https://wcet.waketech.edu/your_user_account/web182/lesson8/future_value/index.php.
Grading
This assignment is worth 100 points. Assignments are weighted as 60% of your total grade. To view the grading policy for assignments, follow the Policy & Grading - Assignments, Exams, & Quizzes course link at the bottom of this lesson.
The Standard Application development Rubric will be used to grade your work for this assignment. To view the rubric, click the Assignment - Application link above, then look inside the "Points Possible - 100" box and click the "View Rubric" link. The rubric is also explained in the Policy & Grading - Assignments, Exams, & Quizzes course link at the bottom of this lesson.
Remember

    A grade of zero (0) will be given for submitted web URLs that do not work
    A grade of zero (0) will be given for late work
