
Background
For this assignment, we're going to use MySQL WorkBench and your text editor to create a simple Accounts Payable (AP) MySQL database.
Instructions.
1. In Chapter 17, Exercise 17-2 on page 590 of your text book describes how to create a simple Accounts Payable Database. Follow the steps in the book. Remember, you have access to the solutions in the book. Once you have worked on the exercise by yourself for a little bit, download & open the solution. Compare it to your work.
2. From the solution folder you downloaded (ch17_ex2_sol), open the file ap.sql. Copy it to a file named ap-mod.sql. Make the following modifications:

    For the vendors table:
        Comment out the table-level primary key
        Change the VendorIDcolumn to be a column-level primary key
        Add a VendorEmail column to the bottom of the table definition (define the data type for the column as variable character and set it to not exceed 45 characters)
    After the lineItems table, add code to create a table named audit:
        Create the following columns in the audit table
        auditID (integer, nulls not accepted, and make it an auto-incrementing primary key)
        auditorFirstName (nulls not accepted, variable character data type with a max of 45 characters)
        auditorLastName (nulls not accepted, variable character data type with a max of 45 characters)
        auditDate (date data type)
        auditTime (time data type)
        auditExtra (integer, max display size is 8, nulls not accepted)
    At the bottom of the file, create an index for the vendorName column in the vendors file
    Use MySQL comments to add your name, date, and WEB-182 in a comment block at the top of the file
    Use MySQL comments to _clearly_ mark each of the modifications to the ap-mod.sql file (such as /* --- Mod #1 --- */)
    Save your new ap-mod.sql file.

3. As Chapter 16 discussed, download & install MySQL Workbench to your local computer. Start a new model and import your ap-mod.sql file using the Reverse Engineer MySQL Create Script import command. Add a new diagram which displays and arranges the AP tables similar to the figure on page 549 of your book. Make sure all files & connections can be easily viewed (i.e. not stacked on top of one another).
4. Using MySQL WorkBench, change the data type for the auditExtra field in the audit table from integer with a size of 8 to integer with a size of 12. Also change the column name from auditExtra to auditNonsense. Screen snapshot the diagram.
5. Using MySQL Workbench, export -> Forward Engineer SQL CREATE Script your modified data structure to a file named ap-mod-out.sql. 
6. Attach the ap-mod-out.sql file (from Step 5) and your screen snapshot file (from Step 4) to this assignment submission.
Grading
This assignment is worth 100 points. Assignments are weighted as 60% of your total grade. To view the grading policy for assignments, follow the Policy & Grading - Assignments, Exams, & Quizzes course link at the bottom of this lesson.
The Standard Application development Rubric will be used to grade your work for this assignment. To view the rubric, click the Assignment - Application link above, then look inside the "Points Possible - 100" box and click the "View Rubric" link. The rubric is also explained in the Policy & Grading - Assignments, Exams, & Quizzes course link at the bottom of this lesson.
Remember

    A grade of zero (0) will be given for submitted web URLs that do not work
    A grade of zero (0) will be given for late work

