<?php
// Create connection
// $con=mysqli_connect("localhost","root","","ohmsphp");

// // Check connection
// if (mysqli_connect_errno())
//   {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
//   }
//Initializes MySQLi
$con = mysqli_init();

mysqli_ssl_set($con,NULL,NULL, "./DigiCertGlobalRootCA.crt.pem", NULL, NULL);

// Establish the connection
mysqli_real_connect($con, 'nithishkumarsl.mysql.database.azure.com', 'nithishkumarsl', 'MURUGAbaba786', 'ohmsphp', 3306, NULL, MYSQLI_CLIENT_SSL);

//If connection failed, show the error
if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?>