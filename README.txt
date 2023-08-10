1.1 Purpose
The Software Design Document(SDD) will provide a detailed description
of the requirements for the NITC Room Booking Website.The clear
understanding of the NITC Room Booking System and its functionality
will allow for the correct software to be developed for the end user and
will be used for the development of the future stages of the project.This
SDD will provide the foundation for the project.This document contains
the functional,behavioral and non-functional requirements of the project.
1.2 Scope
Basically,NITC Room Booking Website is updating the manual room
booking into an internet based application so that the students can
know the details of availability of rooms.
The project is specifically designed for the use of students and
faculty.The project will work as a complete user interface for room
booking procedure The system should be user appropriate, easy to
use.This can be used by any educational institution in order to provide
rooms for their students.
1.3 End Users
The people who will be actually using the system.
1.4 References
• NITC Room Booking System Software Requirements
Specifications(SRS).
• Fundamentals of database systems by Ramez Elmasri and
Shamkant B. Navathe.
2 System Overview
NITC Room Booking website enables user to book a guest room online at
any place and at any time.
3 System Architecture
3.1 Architectural Design
The application follows client server architectural model. The student
makes requests for booking and served by the server end of the
application. The server program runs on a remote machine accessible via
the Internet. The server has access to a student database and keeps in
track of records related to guest room booking. Everything is cross
checked with database.
4 Data Organisation
4.1 Entity Relationship Diagram
4.2 Relational Database Design
4.2.1 ADMIN Table
The attributes are:-
➢ username/userid - stores the unique information of admin.
➢ passwd - stores admin password.
➢ name - stores the name of the admin.
4.2.2 STUDENT Table
The attributes are:-
➢ userid - stores the unique user_id of the student.
➢ passwd - stores his/her password.
➢ nam -stores the name of the student.
➢ rollno -stores the registration number of the student.
➢ phoneno - stores the 10 digit mobile number of the student.
➢ email- stores the email id of the student.
➢ gender -stores the gender of the student.
4.2.3 BOOKING Table
The attributes are:-
➢ Name - stores the name of the booked guest house.
➢ check_in_date - stores the check-in date.
➢ check_out_date - stores the check-out date.
➢ no_of_rooms - stores the number of rooms to be booked.
➢ no_of_persons - stores the number of people going to stay.
➢ resident_phone_no - stores the mobile number of the resident
➢ status - it determines whether the application is rejected/accepted/
waiting.
➢ Sno-Its an auto increment key attribute.
➢ faculty_userid-stores the uesrid of the faculty.
➢ student_userid-stores the userid of the student.
4.2.4 FACULTY Table
The attributes are:-
➢ userid - stores the username of the faculty.
➢ passwd - stores his/her password.
➢ nam - stores the name of the faculty.
➢ phoneno- stores the mobile number of the faculty.
5. Human Interface Design
5.1 Overview of User Interface
This interface provides functionality for users to book thier rooms online.
Our application provides a hyperlink to get the permission from faculty.
Users will have an option to view the number of vacant rooms. The
request for approval of rooms will be achieved by the acceptance of the
faculty.
5.2 Login Interface
This interface provides functionality for admins to login to the system
using the right credentials. This functionality will be achieved using a
form to collect login credentials.
5.3 Admin Interface
This interface provides functionality that enables admin to execute
administrative tasks such as add/remove admins and modify contents of
the database of the students and faculty.
