<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");

   if (isset($_SESSION['id'])) {
   
   $sql = "INSERT INTO student (studentid, password, dob, firstname, lastname, house, town, country, postcode)
            VALUES ('30000'), '1234', '12,01,2002', 'tayyib'. 'fazal', '5 godolphin road', 'slough', 'buckinghamshire', 'england', 'SL13DL'),
                   ('30001'), '2234', '17,06,2002', 'andrew'. 'cillian', '10 whitby road', 'slough', 'buckinghamshire', 'england', 'SL13DQ'),
                   ('30002'), '3234', '09,03,2002', 'beth'. 'harmony', '11 woodland avenue', 'slough', 'buckinghamshire', 'england', 'SL14DT'),
                   ('30003'), '4234', '18,04,2002', 'aadil'. 'ahmed', '5 farnham road', 'slough', 'buckinghamshire', 'england', 'SL25TY'),
                   ('30004'), '5234', '13,11,2002', 'david'. 'green', '11 godolphin road', 'slough', 'buckinghamshire', 'england', 'SL13DL'),";
      $result = mysqli_query($conn,$sql);
      echo $sql;
         
   }
?>