

<?php
session_start();

$con= mysqli_connect('localhost','root','');
 $var=  mysqli_select_db($con,'management');

if(isset($_POST['save1']))
{
    $department=$_POST['department'];
    $course=$_POST['course'];
    $year=$_POST['year'];
    $semester=$_POST['semester'];
    $stid=$_POST['stid'];
    $name=$_POST['name'];
    $division=$_POST['division'];
    $rollno=$_POST['rollno'];
    $gender=$_POST['gender'];
    $birth=$_POST['birth'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];
    $teacher=$_POST['teacher'];


    $studentquery="select * from information where stid='$stid'";
    $int=mysqli_query($con,$studentquery);
    $studentcount=mysqli_num_rows($int);
    if($studentcount>0){
 echo'<script type="text/javascript" >alert("Student id  already exist")</script>';
 
    }
    else{ 
    
    $query=" insert into information(department,course,year,semester,stid,name,division,rollno,gender,birth,email,contact,address,teacher)values('$department','$course','$year','$semester','$stid','$name','$division','$rollno','$gender','$birth','$email','$contact','$address','$teacher')";
   $ins=mysqli_query($con,$query);
   if($ins==1){
   
    echo'<script type="text/javascript" >alert("data saved")
    
    </script>';
   
    header('location:information.php');
    

    }
    else{
        echo'<script type="text/javascript" >alert("Please Try Again")</script>';
    
    }
 }
 

}
?>

<!-------------------------update----------------------------------->
<?php
$con= mysqli_connect('localhost','root','');
  mysqli_select_db($con,'management');

if(isset($_POST['update']))
{
    $department=$_POST['department'];
    $course=$_POST['course'];
    $year=$_POST['year'];
    $semester=$_POST['semester'];
    $stid=$_POST['stid'];
    $name=$_POST['name'];
    $division=$_POST['division'];
    $rollno=$_POST['rollno'];
    $gender=$_POST['gender'];
    $birth=$_POST['birth'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];
    $teacher=$_POST['teacher'];
    
 
 
  
    $query="update information set department='$department',course='$course',
    year='$year',semester='$semester',stid='$stid',name='$name',
    division='$division',rollno='$rollno',gender='$gender',birth='$birth',
    email='$email',contact='$contact',address='$address',teacher='$teacher'where
     email='$email'";
   $ins=mysqli_query($con,$query);

   if($ins){
   
    echo'<script type="text/javascript" >alert("data updated")
    
    </script>';
   
    header('location:information.php');
    }
    else{
    ?>
    <script  >alert("Please Try again"); </script>
    <?php
     header('location:index.php');
    }

}

?>


<!------------------------DELETE----------------------------------------------->
<?php
$con= mysqli_connect('localhost','root','');
 $var=  mysqli_select_db($con,'management');

if(isset($_POST['delete']))
{
    $department=$_POST['department'];
    $course=$_POST['course'];
    $year=$_POST['year'];
    $semester=$_POST['semester'];
    $stid=$_POST['stid'];
    $name=$_POST['name'];
    $division=$_POST['division'];
    $rollno=$_POST['rollno'];
    $gender=$_POST['gender'];
    $birth=$_POST['birth'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];
    $teacher=$_POST['teacher'];
    
    $query=" delete from information where stid='$stid' ";
   $ins=mysqli_query($con,$query);
   if($ins==1){
    echo'<script type="text/javascript" >alert("data deleted ")
    
    </script>';
    header('location:information.php');
   
    

    }
    else{
        echo'<script type="text/javascript" >alert("please try again")</script>';
    
    }
    header('location:index.php');
 }
 

?>



<!--------------------------exit--------------------------->
<?php











?>