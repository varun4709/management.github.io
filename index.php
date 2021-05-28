
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
    *{

    margin: 0%; padding: 0%; font-family:sans-serif;
    
    }
    .container{
      width: 110%;
        height: 160vh;
        margin-bottom: 1rem;
    }
   
</style>
</head>
<body>
   <section  >
      
    <div class="container  mt-2 pt-2 border border-primary shadow-lg p-4 mb-4 "  >
      
      <div class="lg-text-center text-capitalize font-weight-bolder  ">
        <h3 class="text-center"> Student Mangeent System</h1>
      </div>
        <div class="row  "  >
            <div class="col-lg-5 col-md-6 col-sm-12 d-sm-none d-lg-block d-md-block ">
            <img src="system.jpg"  class="w-100 h-100"  >
            </div>
           
            <div class="col-lg-7 col-md-6 col-sm-12 bg-warning">
            <form  method="POST" action="derail.php" >
  <div class="row"  > 
      <div class="input-group col-lg-6">
        <div class="input-group">
          <label class="" >Department</label>
        </div>
        <select class="custom-select" name="department" >
          <option >Choose your department</option>
          <option >Computer</option>
          <option >IT</option>
       
        </select>
    </div>
        <div class="input-group col-lg-6">
            <div class="input-group">
                <label >Course</label>
              </div>
            <select class="custom-select" name="course" id="inputGroupSelect04">
              <option >Choose your Courser</option>
              <option >Web development</option>
              <option >Pyton</option>
             
            </select>
            
         
      </div>
    </div>
    <br>
    <div class="row" > 
      <div class="input-group col-lg-6">
        <div class="input-group">
          <label class="">Year</label>
        </div>
        <select class="custom-select" name="year">
          <option >Choose...</option>
          <option >1</option>
          <option >2</option>
          <option >3</option>
        </select>
    </div>
        <div class="input-group col-lg-6">
            <div class="input-group">
                <label >  Semester</label>
              </div>
            <select class="custom-select" id="inputGroupSelect04" name="semester">
              <option >Choose your semester</option>
              <option >1</option>
              <option >2</option>
              <option >3</option>
              <option >4</option>
              <option >5</option>
              <option >6</option>
            </select>
            
         
      </div>
    </div>
     
         
            <br> 
           
  <div class="row" > 
      <div class="input-group col-lg-6">
        <div class="input-group">
          <label class="">Student_id</label>
        </div>
       <input type="text" name="stid" class="form-control" placeholder="Enter your student_id">
       
        </select>
    </div>
        <div class="input-group col-lg-6">
            <div class="input-group">
                <label >Student Name</label>
              </div>
          <input type="text" name="name"  placeholder="Enter your name" class="form-control" >
           
            
         
      </div>
    </div>
    <br>
    <div class="row" > 
      <div class="input-group col-lg-6">
        <div class="input-group">
          <label class="">Class Division</label>
        </div>
        <select class="custom-select" name="division" >
          <option selected>Choose Your</option>
          <option >A</option>
          <option >B</option>
          <option >C</option>
        </select>
    </div>
        <div class="input-group col-lg-6">
            <div class="input-group">
                <label >Student Roll NO.  </label>
              </div>
              <input type="text" name="rollno" placeholder="Enter your Roll no." class="form-control" >
           
            
         
      </div>
    </div>
     
         
            <br> <br>
            <!-------------------------other detAIl-------------->

                <div class="row" > 
                    <div class="input-group col-lg-6">
                      <div class="input-group">
                        <label class="">Gender</label>
                      </div>
                      <select class="custom-select" name="gender" >
                        <option >Choose your Gender</option>
                        <option >Male</option>
                        <option >Female</option>
                     
                      </select>
                  </div>
                      <div class="input-group col-lg-6">
                          <div class="input-group">
                              <label >D.O.B</label>
                            </div>
                            <input type="date" name="birth" placeholder="Enter your name" class="form-control" >
           
                           
                        
                       
                    </div>
                  </div>
                  <br>
                  <div class="row" > 
                    <div class="input-group col-lg-6">
                      <div class="input-group">
                        <label class="">Email Address</label>
                      </div>
                      <input type="email" name="email" required placeholder="Enter your email" class="form-control" >
           
                  </div>
                      <div class="input-group col-lg-6">
                          <div class="input-group">
                              <label > Phone No.</label>
                            </div>
                          
                            <input type="text" name="contact" placeholder="Enter your phone no." class="form-control" >
           
                    </div>
                  </div>
                  
                   
                        
                          <br> <br>
                         
                            <div class="row" > 
                                <div class="input-group col-lg-6">
                                  <div class="input-group">
                                    <label class="">Address</label>
                                  </div>
                                  <input type="text" name="address" placeholder="Enter your Address" class="form-control" >
           
                              </div>
                                  <div class="input-group col-lg-6">
                                      <div class="input-group">
                                          <label > Teacher</label>
                                        </div>
                                        <input type="text" name="teacher" placeholder="Teacherr name" class="form-control" >
           
                                      
                                   
                                </div>
                              </div>
                               

                         
                          <br> <br>
                          <!---button------------------->
                          
                            <div class="row text-uppercase" >
                              <div class="col-lg-3 col-md-3 col-sm-3 pt-2">
  <button type="submit" name="save1" class="btn btn-primary btn-block text-uppercase" data-toggle="modal" data-target="">Save</button>
                              </div>
          
              
         
                              <div class="col-lg-3 col-md-3 col-sm-3 pt-2" name="save" >
   <button type="submit" name="update" class="btn btn-primary btn-block text-uppercase"  >Update</button>
                              </div>
                             
                              <div class="col-lg-3 col-md-3 col-sm-3 pt-2 ">
           
                  <button type="submit" name="delete" class="btn btn-primary btn-block text-uppercase">Delete</button>
                              
                            </div>
                              <div class="col-lg-3 col-md-12 col-sm-3 pt-2">
                                <button type="reset" name="reset" class="btn btn-primary btn-block text-up">Reset</button>
                              </div>
                              </div>
                              
                          </form> <br> <br>
</div>                             <!-- The Modal -->
</div>
       </div>
   </section>
   <section >
     <div class="text-center">
       
      <label>© 2021 . All rights reserved , site designed and developed by </label> <a href="https://varun4709.github.io/" > Varun maletha</a>
     </div>
   </section>
</body>
</html>

