<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");

   if (isset($_SESSION['id'])) {

      echo template("templates/partials/header.php");
      echo template("templates/partials/nav.php");


      if (isset($_POST['submit'])) {

         var_dump($_POST);

         $hashed_password = password_hash($POST ['password'], PASSWORD_DEFAULT);
      
   
      $sql = "INSERT INTO student (studentid, password, dob, firstname, lastname, house, town, country, postcode)
              VALUES ('30000'), '1234', '12,01,2002', 'tayyib'. 'fazal', '5 godolphin road', 'slough', 'buckinghamshire', 'england', 'SL13DL'),
                     ('30001'), '2234', '17,06,2002', 'andrew'. 'cillian', '10 whitby road', 'slough', 'buckinghamshire', 'england', 'SL13DQ'),
                     ('30002'), '3234', '09,03,2002', 'beth'. 'harmony', '11 woodland avenue', 'slough', 'buckinghamshire', 'england', 'SL14DT'),
                     ('30003'), '4234', '18,04,2002', 'aadil'. 'ahmed', '5 farnham road', 'slough', 'buckinghamshire', 'england', 'SL25TY'),
                     ('30004'), '5234', '13,11,2002', 'david'. 'green', '11 godolphin road', 'slough', 'buckinghamshire', 'england', 'SL13DL'),";
                     echo $sql;
               $result = mysqli_query($conn,$sql);
      
               $data['content'] = "<p>student record has been added</p>";
         
      }
      else {
      $sql = "select + from student wherestudentid='". $_SESSION['id'] . "';";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result);
      $data['content'] = <<<EOD
      <h2> Add a new student </h2>
      <form name="frmdetails" actions="" method="post">
      First Name:
      <input name="firstname" type="text" value="" /><br/>
      Surname:
      <input name="lastname" type="text" value="" /><br/>

      House Number, and Street Name: 
      <input name="house" type="text" value="" /><br/>
      Town: 
      <input name="town" type="text" value="" /><br/>
      County: 
      <input name="county" type="text" value="" /><br/>
      Country:
      <input name="country" type="text" value="" /><br/>
      Postcode: 
      <input name="postcode" type="text" value="" /><br/>
      <input type="submit" value="Save" name="submit" />
      </form>
      
      EOD;
      }

      echo template("templates/default.php", $data);
   } else {
      header("Location: index.php");
   }

   echo template("templates/partials/footer.php")


?>