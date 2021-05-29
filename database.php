<?php

session_start();
$con= mysqli_connect('localhost','root','');
  mysqli_select_db($con,'management');

if(isset($_POST['submit2']))
{

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $question=$_POST['question'];
      $answer=$_POST['answer'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    $emailquery="select * from registration where email='$email'";
    $int=mysqli_query($con,$emailquery);
   $emailcount=mysqli_num_rows($int);
    if($emailcount>0){
        ?>
        <script>
            alert("email alraedy exit");
            window.location.href="registration_page.html";
        </script>
           
        <?php
       
    }
    else{ 
   
    $query1="insert into registration(fname,lname,contact,email,question,answer,password,cpassword)values('$fname','$lname','$contact','$email','$question','$answer','$password','$cpassword')";
    
   $res=mysqli_query($con,$query1);
   if($res){
    ?>
    <script>
        alert("data saved");
        window.location.href="index.php";
    </script>
       
    <?php
   
   }else{
    ?>
    <script>
        alert("please try again");
        window.location.href="index.html";
    </script>
       
    <?php
   
   }
}
}
 ?>

<!-------------------------login-------------------------->

<?php 

$con= mysqli_connect('localhost','root','');
  mysqli_select_db($con,'management');

if(isset($_POST['login']))
{
    $email=$_POST['email'];
   
    $password=$_POST['password'];

$query="select * from registration where email='$email' ";
$sql=mysqli_query($con,$query);
$num=mysqli_num_rows($sql);

if( $num>0){

 
    
$query="select * from registration where password='$password' ";
$sql=mysqli_query($con,$query);
$num=mysqli_num_rows($sql);

if( $num>0){


    ?>
    <script>
        alert("login successfull");
       window.location.href="index.php";
    </script>
       
    <?php
}

else{
    ?>
    <script>
        alert("please try again");
        window.location.href="index.html";
    </script>
       
    <?php
}
}

}
?>
