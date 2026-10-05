# CSE 472 – Lab 06

## PHP Foundations and Form Processing

This project is part of the **CSE 472 – Web and Internet Programming Lab** course.

The project demonstrates basic PHP foundations, HTML form processing, server-side validation, and handling form data using the PHP `$_POST` array.

## Project Title

**Student Workshop Registration System**

## Lab Objective

The main objective of this laboratory is to learn how to:

* Create an HTML registration form.
* Submit form data using the HTTP POST method.
* Receive form data using PHP `$_POST`.
* Perform server-side validation.
* Clean and safely display user input.
* Connect an HTML form with a PHP processing file.
* Run a PHP project using XAMPP and Apache.

## Technologies Used

* HTML5
* CSS3
* PHP
* XAMPP
* Apache
* Visual Studio Code
* Git
* GitHub

## Project Structure

```text
lab-06-php/
│
├── index.html
├── process.php
├── README.md
│
└── css/
    └── style.css
```

## Features

The registration form contains the following fields:

* Full Name
* Student ID
* Email Address
* Workshop Selection
* Learning Expectations

The system performs server-side validation for the required fields.

## Form Processing

The HTML form sends the submitted information to `process.php` using the POST method.

```html
<form action="process.php" method="post">
```

The PHP file receives the submitted information using the `$_POST` array.

Example:

```php
$studentName = clean_input($_POST["studentName"] ?? "");
```

The submitted data is cleaned using the `clean_input()` function before displaying it.

## Validation

The system checks whether the following required information has been provided:

* Full Name
* Student ID
* Email Address
* Workshop

If any required information is missing, an appropriate error message is displayed.

If all required information is provided, the registration details are displayed successfully.

## How to Run

1. Install and open **XAMPP**.
2. Start the **Apache** server.
3. Copy the `lab-06-php` folder into the XAMPP `htdocs` directory.

Example:

```text
C:\xampp\htdocs\cse472-web-lab\lab-06-php\
```

4. Open a web browser.
5. Visit:

```text
http://localhost/cse472-web-lab/lab-06-php/
```

6. Fill in the registration form.
7. Click the **Register** button.
8. Check the registration result.

## Testing

The system was tested with:

* Valid registration information.
* Missing Full Name.
* Missing Student ID.
* Missing Email Address.
* Missing Workshop selection.
* Input containing extra spaces.

All required test cases were successfully completed.

## Author

**Durjoy Datta Mretonjoy**

CSE Student
Southeast University

## Course

**CSE 472 – Web and Internet Programming Lab**

**Lab 06: PHP Foundations and Form Processing**
