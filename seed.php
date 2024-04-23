<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");

   if (isset($_SESSION['id'])) {
   
   $sql = "INSERT INTO student (studentid, password, dob, firstname, lastname, house, town, county, country, postcode)
            VALUES ('30000', '1234', '2002-01-12', 'Tayyib', 'Fazal', '5 Godolphin road', 'Slough', 'Buckinghamshire', 'England', 'SL13DL'),
                   ('30001', '2234', '2002-06-17', 'Andrew', 'Cillian', '10 Whitby road', 'Slough', 'Buckinghamshire', 'England', 'SL13DQ'),
                   ('30002', '3234', '2002-08-09', 'Beth', 'Harmony', '11 Woodland avenue', 'Slough', 'Buckinghamshire', 'England', 'SL14DT'),
                   ('30003', '4234', '2002-04-19', 'Aadil', 'Ahmed', '5 Farnham road', 'Slough', 'Buckinghamshire', 'England', 'SL25TY'),
                   ('30004', '5234', '2002-11-13', 'David', 'Green', '11 Godolphin road', 'Slough', 'Buckinghamshire', 'England', 'SL13DL')";
      echo $sql;
      $result = mysqli_query($conn,$sql);
      
         
   }
?>