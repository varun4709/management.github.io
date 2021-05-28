
<?php
session_start();
$con= mysqli_connect('localhost','root','');
  mysqli_select_db($con,'management');
$output="";

if(isset($_POST['query'])){
      $sear=$_POST['query'];
     $sql =$con->prepare("select * from information where department like concat('%',?,'%') or course like concat('%',?,'%')
     or  gender like concat('%',?,'%') or  name like concat('%',?,'%') or division like concat('%',?,'%')
     or  teacher like concat('%',?,'%') or contact like concat('%',?,'%') or email like concat('%',?,'%') 
      like concat('%',?,'%')");
$sql->bind_param("sssssssss",$sear,$sear,$sear,$sear,$sear,$sear,$sear,$sear,$sear);

}
else{
  $sql=$con->prepare("select * from information ");
}
$sql->execute();
$row=$sql->get_result();
if($row->num_rows>0){

$output="
<thead>
        <tr>
          <th>Sno.</th>
          <th>Department</th>
          <th>course</th>
          <th>Year</th>
          <th>Semester</th>
          <th>Student_id</th>
          <th>Student_name</th>
          <th>Class Division</th>
          <th>Roll No.</th>
          <th>Gender</th>
          <th>D.O.B</th>
          <th>Email</th>
          <th>Phone No.</th>
          <th>Address</th>
          <th>Teacher name</th>
          
        </tr>
      </thead>
      <tbody  >";

      while($result=$row->fetch_assoc()){
        $output .="
      <tr>
     
      <td id='sno' ></td>
        <td>".$result['department'].  "  </td>
        <td>  ".$result['course']."   </td>
        <td>  ".$result['year']."    </td>
        <td>  ".$result['semester']."  </td>
        <td>  ".$result['stid']."   </td>
        <td>  ".$result['name']."   </td>
        <td>  ".$result['division']."   </td>
        <td>  ".$result['rollno']."   </td>
        <td>  ".$result['gender']."   </td>
        <td>  ".$result['birth']."  </td>
        <td>  ".$result['email']."   </td>
        <td>  ".$result['contact']."   </td>
        <td>  ".$result['address']."   </td>
        <td>   ".$result['teacher']."   </td>
       
      </tr>
      ";
      }
      $output .="</tbody>";

     echo $output;


} else{
  echo "No Record Found";
}
?>