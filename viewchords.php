<?php
  session_start();
  if(isset($_SESSION['Email']))
  {
      include('connection.php');
      $query = "select * from chords3";
      $query_run = mysqli_query($con,$query);
      $sn = 0;
      echo "<center><h4><u>Chord Members</u></h4></center><br>";
      echo "<table class='table'>
        <tr>
          <th>S.No</th>
          <th>FirstName</th>
          <th>LastName</th>
          <th>USN</th>
          <th>Email</th>
          <th>Mobile</th>
          <th>Gender</th>
          <th>Branch</th>
          <th>Semester</th>
          
          <th>Action</th>
        </tr>";
    }
    while($row = mysqli_fetch_assoc($query_run))
    {
      $sn = $sn + 1;
      $id = $row['id'];
      echo "
        <tr>
          <td>$sn</td>
          <td>$row[FirstName]</td>
          <td>$row[LastName]</td>
          <td>$row[USN]</td>
          <td>$row[Email]</td>
          <td>$row[Mobile]</td>
          <td>$row[Gender]</td>
          <td>$row[Branch]</td>
          <td>$row[Semester]</td>
          <td><a href='delchord.php?id=$id'>Delete</a></td>
        </tr>
      ";
    }
  echo "</table>";
  //header('location:mg.php');
?>