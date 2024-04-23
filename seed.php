<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");

   if (isset($_SESSION['id'])) {
   
   $sql = "INSERT INTO student (studentid, password, dob, firstname, lastname, house, town, county, country, postcode)
            VALUES ('30000', '1234', '2002-01-12', 'tayyib'. 'fazal', '5 godolphin road', 'slough', 'buckinghamshire', 'england', 'SL13DL'),
                   ('30001', '2234', '2002-06-17', 'andrew'. 'cillian', '10 whitby road', 'slough', 'buckinghamshire', 'england', 'SL13DQ'),
                   ('30002', '3234', '2002-08-09', 'beth'. 'harmony', '11 woodland avenue', 'slough', 'buckinghamshire', 'england', 'SL14DT'),
                   ('30003', '4234', '2002-04-19', 'aadil'. 'ahmed', '5 farnham road', 'slough', 'buckinghamshire', 'england', 'SL25TY'),
                   ('30004', '5234', '2002-11-13', 'david'. 'green', '11 godolphin road', 'slough', 'buckinghamshire', 'england', 'SL13DL')";
      $result = mysqli_query($conn,$sql);
      echo $sql;
         
   }
?>