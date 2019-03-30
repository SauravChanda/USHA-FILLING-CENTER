# USHA-FILLING-CENTER

## Contents

1. Installation
1. Introduction
1. Admin
1. View machine details
1. Add employee
1. Employee details
1. View or update employee details
1. Remove employee
1. -Daily sheet
1. View daly sheet
1. Delete a perticular date entry
1. User
1. Daily sheet entry
1. View details
1. Credit
1. Debit
1. Lube Details
1. Lube add or remove
1. Lube stock entry
1. Lube sale entry
1. View and print
1. Daily report
1. Periodic report

## Installation

To access the website we would need any working internet connection and a web browser. 

To open the HTML ,CSS and PHP pages any text editor would be sufficient.

The PHP pages should run in a web server otherwise they won't execute otherwise the HTML and CSS pages can be viewed directly in the browser.

The database needs a MySQL server to run where the database username is “ufs” and the password is “ufspump”.

Otherwise the website can run locally by using software such as XAMPP which is the complete package of a web server and a MySQL server.











## Introduction

The website of Usha Filling station was made with HTML,CSS and Javascript for the frontend and PHP for the backend with MySQL database.




The whole website is divided into two divisions:-
Admin part : To be used by the admin only and has the topmost control on the website.

User part : To be used by other employees to view and update the daily sheet, credit, debit etc.

## Admin

The admin part of the website has the main control of adding or remove employees. The admin can also view all the machine details and view the daily sheet. It is upto him to delete any daily sheet entry if needed.


View machine details
This page can view the machine details (Date,Employee,Shift,Outlet values)of a particular machine. The admin has to select the machine from select machine and click View. Hence, a table will be shown where the latest entries will be shown first. The table can also be printed if needed.



## Add employee
This page is for adding a new employee by providing an username and password. The username is unique for a particular employee hence, there cannot be two employees with same username.The entries like username and password is compulsory to add a new user but other details about the employee can also be added. These user details can be added or updated later.


## Employee details
This page has two options:-

View or update details of an  employee :
The admin should select an employee and click show. A page with the personal details and bank details of that particular employee is shown. Each of those fields can be edited by the admin and when the update details button is pressed the edited fields will be saved as new entries.
Remove employee :
The admin can remove an employee if needed. The name of that particular employee is selected and the remove button is clicked. The selected employee will be removed from the database along with all his details.


## Daily sheet
The admin can also view the daily sheet entry and delete a particular date's entry if needed.

View daily sheet :
This page shows the daily sheet of a particular date. The admin should select a date and just press show. The daily sheet of that particular date is shown and if the daily sheet is not inserted for the particular date then all the values will be shown as 0.

Delete a particular entry:
This page is useful for deleting a particular days entry if needed. The required date needs to be selected and then the delete button is pressed.


_____________________________________


## User
## My details

This page views all the personal details as well as the bank details of a particular user. Personal details such as first, middle, last name, age, address etc and bank details such as account number, branch name etc.










## Daily sheet

This page is used to enter the daily sheet which can be later viewed in daily as well as periodic report. Every entry in the daily sheet is compulsory except the remarks. The daily sheet automatically detects the previous date entry and based on that the information is saved. The database can save daily sheet from 1st june 2018.


## Credit
The credit page is for updating and viewing credit details of that particular employee. In the insert section the number of entry columns should be added first and then submit the entered values. The view section is used to view the credit details by selecting the required values.

## Debit
The debit page works similarly as the credit page but just for the debit data.
Lube details

This section has three options :
Lube add or remove
Lube stock entry
Lube sale entry



Lube add or remove : This page is used for adding or removing a particular lube from the database. When a lube is added the name and the price are the compulsory values as the same product may have different price. The size and quantity of the newly added lube is automatically set to 0 which should be updated in lube stock entry page.

Lube stock entry : This page is used for updating the stock of a particular lube . All the lube can be seen in the right side of the screen which is sorted by the name of the lube in ascending order.





Lube sale entry : This page is used to enter the sale of a particular lube. the sale quantity will be subtracted from the actual quantity which can be viewed on the right side of the screen.




## View and print

Two different types of report can be accessed, one is daily report and the other is periodic report :-


Daily report :

 This report contains all the information of a particular day and it can also be printed by clicking the print button at the bottom left.


Periodic report : This report contains the periodic data in a certain range of date.

__________________
