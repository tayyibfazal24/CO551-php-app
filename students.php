<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");


   // check logged in
   if (isset($_SESSION['id'])) {

      echo template("templates/partials/header.php");
      echo template("templates/partials/nav.php");

      // Build SQL statment that selects a student's modules
      $sql = "select * from student;";

      $result = mysqli_query($conn,$sql);

      //TODO: wrap table in a form
         //form will POST to deletestudent.php

         $data['content'] .="<form action='deletestudents.php' method='POST'>";

      // prepare page content
      $data['content'] .= "<table border='1'>";
      $data['content'] .= "<tr><th>studentid</th>
                           <th>password</th>
                           <th>firstname</th>
                           <th>lastname</th>
                           <th>dob</th>
                           <th>house</th>
                           <th>town</th>
                           <th>county</th>
                           <th>country</th>
                           <th>postcode</th></tr>";

      // Display the modules within the html table
      while($row = mysqli_fetch_array($result)) {
         $data['content'] .="<tr>";
         $data['content'] .="<td> $row[studentid] </td>";
         $data['content'] .="<td> $row[password] </td>";
         $data['content'] .="<td> $row[firstname] </td>";
         $data['content'] .="<td> $row[lastname] </td>";
         $data['content'] .="<td> $row[dob] </td>";
         $data['content'] .="<td> $row[house] </td>";
         $data['content'] .="<td> $row[town] </td>";
         $data['content'] .="<td> $row[county] </td>";
         $data['content'] .="<td> $row[country] </td>";
         $data['content'] .="<td> $row[postcode] </td>";
         $data['content'] .="<td> <input type='checkbox' name='students[]'
         value= '$row[studentid]'/> </td>";
         $data['content'] .="</tr>";

      }

      $data['content'] .="</table>";

      //Delte Button
      $data['content'] .= "<input type='submit'name='deletion'
      value='Delete' />";

      // render the template
      echo template("templates/default.php", $data);

   } else {
      header("Location: index.php");
   }

   echo template("templates/partials/footer.php");

?>