
<?php
  session_start();
  if(isset($_SESSION['Email']))
  include('connection.php');
  $query = "select * from speaker3";
  $query_run = mysqli_query($con,$query);
$sn = 0;
  echo "<center><h4><u>Speaker Members</u></h4></center><br>";
  echo "<table class='table'>
    <tr>
      
      <th>First Name</th>
      <th>Last Name</th>
      <th>USN</th>
      <th>Email</th>
      <th>Mobile</th>
      <th>Gender</th>
      <th>Branch</th>
      <th>Semester</th>
      
      <th>Action</th>
    </tr>";
  while($row = mysqli_fetch_assoc($query_run))
  {
    $sn = $sn + 1;
   $id = $row['id'];
    echo "
      <tr>
        <td>$row[FirstName]</td>
         <td>$row[LastName]</td>
         <td>$row[USN]</td>
         <td>$row[Email]</td>
         <td>$row[Mobile]</td>
         <td>$row[Gender]</td>
         <td>$row[Branch]</td>
         <td>$row[Semester]</td>
        <td><a href='delspk.php?id=$id'>Delete</a></td>
      </tr>
    ";
  }
  echo "</table>";
  //header('location:login.php');
?>