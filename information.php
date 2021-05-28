
<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
    *{

    margin: 0%; padding: 0%; font-family:sans-serif;
    
    }
    body{
        background-color: antiquewhite;
    }
    .container{
     width:100%;
        height: 140vh;
        margin-bottom: 1rem;
    }
    body {
  /* Set "my-sec-counter" to 0 */
  counter-reset: my-sec-counter;
}
   
    #detail{
     
    
      overflow-x: hidden;    
      overflow: scroll;
         height:100vh;
     }
   .container .rw2 {
     width: 150%;
   
     }
     #sno::before {
  /* Increment "my-sec-counter" by 1 */
  counter-increment: my-sec-counter;
  content: " " counter(my-sec-counter) ". ";
}
   
    
  
   
</style>
</head>
<body>

    <section class="container  shadow-lg bg-primary">


    
        <h1 class="text-center text-capitalize">Student information </h1> 
     
     <div class="row bg-light  pl-lg-5 pl-md-0" >
             
            <form class="form-inline m-2 align-items-center ml-lg-5" action="index.php" method="POST">  
                   
                        <div class="input-group  m-2 ">
                            <div class="input-group m-2 mr-lg-3">
                              <label class="text-capitalize ">Search by:</label>
                            </div>
               <select class="custom-select mr-lg-1" >
           
                                               
                              <option >  Department</option>
                              <option >Course</option>
                              <option >Year</option>
                              <option >Semester</option>
                              <option >Student_id</option>
                              <option >Student Name</option>
                              <option >Class Division</option>
                              <option >Roll no.</option>
                              <option >Gender</option>
                              <option >D.O.B</option>
                              <option >Email</option>
                              <option  >Phone no.</option>
                              <option  >Address</option>
                              <option  >Teacher</option>
    
                            </select>
                        </div>
                        
                       
                  
    
                        <div class="input-group m-2 mr-lg-5">
                            <div class="input-group ">
                              <label class=""></label>
                            </div>
                              <div>
                          <input type="text" id="search" placeholder="student_detail"  class="form-control" >
                           
                            
                         
                      </div>
                           
                            </select>
                     
                        
                       
                      </div>
    
                      <div class="mr-lg-5 ">
                        <button type="submit" class=" btn btn-primary m-2 text-uppercase">Search</button>
                      </div>
                      <div class=" ">
                        <button type="submit" name="submit" class="btn btn-primary m-2 text-uppercase">show all</button>
                      </div>
                     

                     
                      <div class=" " >
                        <button  nam3="exit" oclick="index.php" type="submit"  class="btn btn-primary m-2 text-uppercase">Exit</button>
                      </div>
                  

                    </div>
                  </form> <br> <br>
                  </div>
                  
  <!------------------------------->


  <div class="row   bg-white"  id="detail">
    <form  id="fline" method="POST" >
        <div class="rw2">

        <table  class="table table-bordered"  id="table-data">
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
      <?php 

$con= mysqli_connect('localhost','root','');
$var=  mysqli_select_db($con,'management');

$sql = "select * from information ";
$query =mysqli_query($con,$sql);
$num= mysqli_num_rows($query);

while ($result=mysqli_fetch_array($query)) {
  # code...



?>
      <tbody id="mytable" >
        <tr>
          <td id="sno"></td>
          <td><?php echo $result['department'] ;   ?></td>
          <td> <?php echo $result['course'] ; ?>  </td>
          <td> <?php echo $result['year'] ;   ?> </td>
          <td><?php echo $result['semester'] ;   ?></td>
          <td> <?php echo $result['stid'] ;   ?></td>
          <td> <?php echo $result['name'] ;   ?></td>
          <td> <?php echo $result['division'] ;   ?></td>
          <td><?php echo $result['rollno'] ;   ?></td>
          <td><?php echo $result['gender'] ;   ?></td>
          <td> <?php echo $result['birth'] ;   ?> </td>
          <td> <?php echo $result['email'] ;   ?></td>
          <td> <?php echo $result['contact'] ;   ?></td>
          <td><?php echo $result['address'] ;   ?></td>
          <td><?php echo $result['teacher'] ;   ?></td>
         
        </tr>
      </tbody>

      <?php
}
      ?>
    </table>



        </div>
    </form>
</div>
   
<script>
  $(document).ready(function(){
    $("#search").keyup(function(){
      var sear =$(this).val();
      $.ajax({
        url:'search.php',
        method:'POST',
        data:{query:sear},
        success:function(response){
          $("#table-data").html(response);
        }
      });
    });
  });
</script>
      
    </section>
    <section >

        <div class="text-center">
         <label>© 2021 . All rights reserved , site designed and developed by </label> <a href="https://varun4709.github.io/" > Varun maletha</a>
        </div>
      </section>
    
</body>
</html>
