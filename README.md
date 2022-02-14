# Hospital Management System

**PROBLEM STATEMENT:**  Handling of hospital details like doctors and patients details in descriptive format is complicated.

**PROJECT DESCRIPTION:**  This is a web app project for hospital management system were the admin, doctors, also patients can log in and make their works my their own. and we use azure mysql database for my backend process.

**Project  URL**

>https://hospitalmanagement.azurewebsites.net

*By this URL we can identify that the project is hosted with the help of AZURE WEB APP.*

>/dbconnection.php
~~~
// Initializes MySQLi
$dbconn = mysqli_init();

mysqli_ssl_set($con,NULL,NULL, "./DigiCertGlobalRootCA.crt.pem", NULL, NULL);

// Establish the connection
mysqli_real_connect($con, 'nithishkumarsl.mysql.database.azure.com', '****', 'ohmsphp', 3306, NULL, MYSQLI_CLIENT_SSL);

//If connection failed, show the error
if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
~~~

*From the above code you can verify that we have used AZURE DATABASE FOR MYSQL.*

![WEBSITE SCREENSHOT](https://i.imgur.com/tH0JfDO.png)

*Here you can login with our website and check the portals of admin, doctors and patients.*
