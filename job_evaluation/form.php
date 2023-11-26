<?php
include "conn.php";

if(isset($_POST['register']))
    {
            // $data_id = rand(0,9);
           $MDA = $_POST['MDA'];
           $POST_TITLE = $_POST['POST_TITLE'];
           $POST_NUMBER = 0;
           $KNOWLEDGE_TRAINING = $_POST['KNOWLEDGE_TRAINING'];
           $EXPERIENCE = $_POST['EXPERIENCE'];
           $DIVERSITY = $_POST['DIVERSITY'];
           $COMPLEXITY = $_POST['COMPLEXITY'];
           $CREATIVITY = $_POST['CREATIVITY'];
           $ENGAGEMENT = $_POST['ENGAGEMENT'];
           $NETWORK = $_POST['NETWORK'];
           $TEAM_ROLE_ACCOUNTABILITY = $_POST['TEAM_ROLE_ACCOUNTABILITY'];
           $IMPACT = $_POST['IMPACT'];
           $CONSEQUENCES_OF_ERROR = $_POST['CONSEQUENCES_OF_ERROR'];
           $PHYSICAL = $_POST['PHYSICAL'];
           $MENTAL_EMOTIONAL_DEMANDS= $_POST['MENTAL_EMOTIONAL_DEMANDS'];
           $DATE = date('y-m-d');
           $PF= "";
           $COMMENTS_REMARKS= $_POST['COMMENTS_REMARKS'];
           $CM_1= $_POST['CM_1'];
           $CM_5= $_POST['CM_5'];
           $CM_2= $_POST['CM_2'];
           $CM_3= $_POST['CM_3'];
           $CM_4= $_POST['CM_4'];
            

            // Inserting to database
            $sql = "INSERT INTO `datasheet`(
             `MDA`,
             `Post_Title`,
             `Post_Number`,
             `Knowledge_and_Training`,
             `Experience`,
             `Diversity`,
             `Complexity`,
             `Creativity`,
             `Engagement`,
             `Networks`,
             `Teamrole_and_Accountability`,
             `Impact`,
             `Consequence_of_Error`,
             `Physical`,
             `Mental_and_Emotional_Demands`,
             `Date`,
             `Primary_Focus`,
             `Comments_Remarks`,
             `CM_1`,
             `CM_2`,
             `CM_3`,
             `CM_4`,
             `CM_5`)
              VALUES
             ('$MDA',
             '$POST_TITLE',
             '$POST_NUMBER',
             '$KNOWLEDGE_TRAINING',
             '$EXPERIENCE',
             '$DIVERSITY',
             '$COMPLEXITY',
             '$CREATIVITY',
             '$ENGAGEMENT',
             '$NETWORK',
             '$TEAM_ROLE_ACCOUNTABILITY',
             '$IMPACT',
             '$CONSEQUENCES_OF_ERROR',
             '$PHYSICAL',
             '$MENTAL_EMOTIONAL_DEMANDS',
             '$DATE',
             '$PF',
             '$COMMENTS_REMARKS',
             '$CM_1',
             '$CM_2',
             '$CM_3',
             '$CM_4',
             '$CM_5')";

            $res = mysqli_query($con,$sql);
            $my_id= mysqli_insert_id($con);
            header("location:result.php?id=$my_id");
        }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluation Form </title>

    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">

    </script>
    <style>
    
    body {
    font-family: 'Lato', sans-serif;
 }

h1 {
    margin-bottom: 40px;
}

label {
    color: #333;
}

.btn-send {
    font-weight: 300;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    width: 80%;
    margin-left: 3px;
    }
.help-block.with-errors {
    color: #ff5050;
    margin-top: 5px;

}

.card{
	margin-left: 10px;
	margin-right: 10px;
}

</style>
</head>
<body>
    
<div class="container">
        <div class=" text-center mt-5 ">
            <h1>Job Evaluation</h1>            
        </div>

    
    <div class="row ">
      <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
       
            <div class = "container">
               <form id="contact-form" role="form" method="POST">
    
               <div class="controls">

                <div class="row">
                    
                <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_need">MDA</label>
                            <select name="MDA" class="form-control" required="required" data-error="Please specify your need.">
                                <!-- <option value="" selected disabled>--Select Your Issue--</option> -->
                                <option value="select" disabled>Choose Your MD</option>
                              <?php
                              $sql = "SELECT * from mda";
                                      $res = mysqli_query($con,$sql);
                                      while($row = mysqli_fetch_array($res))
                                      {
                                      ?>  
                                      <option value="<?php 
                                      echo $row['ID']?>"><?php echo $row['MDA']?></option>
                                      <?php 
                                    } 
                                    ?>
                            </select>
                            
                        </div>

                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_need">Post Title</label>
                            <select  name="POST_TITLE" class="form-control" required="required" data-error="Please specify your need.">
                                <!-- <option value="" selected disabled>--Select Your Issue--</option> -->
                    <?php
                      $sql = "SELECT * from job_titles";
                              $res = mysqli_query($con,$sql);
                              while($row = mysqli_fetch_array($res))
                              {
                              ?>  
                              <option value="<?php 
                              echo $row['ID']?>"><?php echo $row['Title']?></option>               
                              <?php 
                            } 
                            ?>
                         </select>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        
                        <div class="form-group">
                            <label for="form_email">Post Number</label>
                            <input  type="email" name="POST_NUMBER" class="form-control" placeholder="" required="required" disabled>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        
                        <!-- <div class="form-group">
                            <label for="form_need">Please specify your need *</label>
                            <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                                <option value="" selected disabled>--Select Your Issue--</option>
                                <option >Request Invoice for order</option>
                                <option >Request order status</option>
                                <option >Haven't received cashback yet</option>
                                <option >Other</option>
                            </select>
                            
                        </div> -->
                    </div>
                </div>



                <h2>Expertise</h2>
                <div class="row">
                    
                <div class="col-md-6">

                        <div class="form-group">
                            <label for="form_need">Knowledge Training</label>
                            <select  name="KNOWLEDGE_TRAINING" class="form-control" required="required" data-error="Please specify your need.">
                                <!-- <option value="" selected disabled>--Select Your Issue--</option> -->
                                <option value="select" disabled>Choose Your MD</option>
                                <?php
                                 $sql = "SELECT * from factor_score_level";
                                 $res = mysqli_query($con,$sql);
                                 while($row = mysqli_fetch_array($res))
                                 {
                                 ?>  
                                 <option value="<?php 
                                 echo $row['ID']?>"><?php echo $row['Finetune']?></option>               
                                 <?php 
                                 } 
                                ?>
        
                            </select>
                            
                        </div>

                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_need">Experience</label>
                            <select  name="EXPERIENCE" class="form-control" required="required" data-error="Please specify your need.">
                                <!-- <option value="" selected disabled>--Select Your Issue--</option> -->
                                <?php
                                       $sql = "SELECT * from factor_score_level LIMIT 13";
                                               $res = mysqli_query($con,$sql);
                                               while($row = mysqli_fetch_array($res))
                                               {
                                               ?>  
                                               <option value="<?php 
                                               echo $row['ID']?>"><?php echo $row['Finetune']?></option>               
                                               <?php 
                                             } 
                                             ?>
                                 </select>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        
                    <div class="form-group">
                            <label for="form_need">Diversity</label>
                            <select  name="DIVERSITY" class="form-control" required="required" data-error="Please specify your need.">
                                <!-- <option value="" selected disabled>--Select Your Issue--</option> -->
                                <?php
                                       $sql = "SELECT * from factor_score_level";
                                               $res = mysqli_query($con,$sql);
                                               while($row = mysqli_fetch_array($res))
                                               {
                                               ?>  
                                               <option value="<?php 
                                               echo $row['ID']?>"><?php echo $row['Finetune']?></option>               
                                               <?php 
                                             } 
                                             ?>
                                 </select>
                            
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                        
                     

                    </div>
                </div>


<!-- new 0 -->



<!-- new 0 -->
<h2>Critical Thinking</h2>
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_need">COMPLEXITY</label>
                            <select  name="COMPLEXITY" class="form-control" required="required" data-error="Please specify your need.">
                                <!-- <option value="" selected disabled>--Select Your Issue--</option> -->
                                <option value="select" disabled>Choose Your MD</option>
                                <?php
                               $sql = "SELECT * from factor_score_level";
                                       $res = mysqli_query($con,$sql);
                                       while($row = mysqli_fetch_array($res))
                                       {
                                       ?>  
                                       <option value="<?php 
                                       echo $row['ID']?>"><?php echo $row['Finetune']?></option>               
                                       <?php 
                                     } 
                                     ?>
             
                            </select>
                            
                        </div>

                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_need">CREATIVITY</label>
                            <select  name="CREATIVITY" class="form-control" required="required" data-error="Please specify your need.">
                                <!-- <option value="" selected disabled>--Select Your Issue--</option> -->
                                <?php
        $sql = "SELECT * from factor_score_level LIMIT 16";
                $res = mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($res))
                {
                ?>  
                <option value="<?php 
                echo $row['ID']?>"><?php echo $row['Finetune']?></option>               
                <?php 
              } 
              ?>
                  </select>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        
                        <div class="form-group">
                            <!-- <label for="form_email">Post Number</label>
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="" required="required" disabled>
                             -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        
                        



                    </div>
                </div>

                <h2>Communication</h2>
                <div class="row">
                    
                <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_need">Engagement</label>
                            <select  name="ENGAGEMENT" class="form-control" required="required" data-error="Please specify your need.">
                                <!-- <option value="" selected disabled>--Select Your Issue--</option> -->
                                <option value="select" disabled>Choose Your MD</option>
                                <?php
                               $sql = "SELECT * from factor_score_level LIMIT 13";
                                       $res = mysqli_query($con,$sql);
                                       while($row = mysqli_fetch_array($res))
                                       {
                                       ?>  
                                       <option value="<?php 
                                       echo $row['ID']?>"><?php echo $row['Finetune']?></option>               
                                       <?php 
                                     } 
                                     ?>
                            </select>
                            
                        </div>

                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_need">Network</label>
                            <select  name="NETWORK" class="form-control" required="required" data-error="Please specify your need.">
                                <!-- <option value="" selected disabled>--Select Your Issue--</option> -->
                                <?php
        $sql = "SELECT * from factor_score_level LIMIT 13";
                $res = mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($res))
                {
                ?>  
                <option value="<?php 
                echo $row['ID']?>"><?php echo $row['Finetune']?></option>               
                <?php 
              } 
              ?>     </select>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        
                        <div class="form-group">
                            <!-- <label for="form_email">Post Number</label>
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="" required="required" disabled> -->
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        
                        <!-- <div class="form-group">
                            <label for="form_need">Please specify your need *</label>
                            <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                                <option value="" selected disabled>--Select Your Issue--</option>
                                <option >Request Invoice for order</option>
                                <option >Request order status</option>
                                <option >Haven't received cashback yet</option>
                                <option >Other</option>
                            </select>
                            
                        </div> -->
                    </div>
                </div>

                 <h2>Service Delivery</h2>
                <div class="row">
                    
                <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_need">Team Role Accountability</label>
                            <select  name="TEAM_ROLE_ACCOUNTABILITY" class="form-control" required="required" data-error="Please specify your need.">
                                <!-- <option value="" selected disabled>--Select Your Issue--</option> -->
                                <!-- <option value="select" disabled>Choose Your MD</option> -->
                                <?php
        $sql = "SELECT * from factor_score_level LIMIT 15";
                $res = mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($res))
                {
                ?>  
                <option value="<?php 
                echo $row['ID']?>"><?php echo $row['Finetune']?></option>               
                <?php 
              } 
              ?>
                            </select>
                            
                        </div>

                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_need">IMPACT</label>
                            <select  name="IMPACT" class="form-control" required="required" data-error="Please specify your need.">
                                <!-- <option value="" selected disabled>--Select Your Issue--</option> -->
                                <?php
        $sql = "SELECT * from factor_score_level LIMIT 15";
                $res = mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($res))
                {
                ?>  
                <option value="<?php 
                echo $row['ID']?>"><?php echo $row['Finetune']?></option>               
                <?php 
              } 
              ?>     
              </select>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        
                    <div class="form-group">
                            <label for="form_need">Consequences Of Error</label>
                            <select  name="CONSEQUENCES_OF_ERROR" class="form-control" required="required" data-error="Please specify your need.">
                                <!-- <option value="" selected disabled>--Select Your Issue--</option> -->
                                <?php
        $sql = "SELECT * from factor_score_level LIMIT 13";
                $res = mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($res))
                {
                ?>  
                <option value="<?php 
                echo $row['ID']?>"><?php echo $row['Finetune']?></option>               
                <?php 
              } 
              ?>
                  
              </select>
                            
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                        
                        <!-- <div class="form-group">
                            <label for="form_need">Please specify your need *</label>
                            <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                                <option value="" selected disabled>--Select Your Issue--</option>
                                <option >Request Invoice for order</option>
                                <option >Request order status</option>
                                <option >Haven't received cashback yet</option>
                                <option >Other</option>
                            </select>
                            
                        </div> -->
                    </div>


                    <h2>Working Enviroment</h2>
                    <div class="row">
                    
                <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_need">Physical</label>
                            <select  name="PHYSICAL" class="form-control" required="required" data-error="Please specify your need.">
                                <!-- <option value="" selected disabled>--Select Your Issue--</option> -->
                                <!-- <option value="select" disabled>Choose Your MD</option> -->
                                <?php
        $sql = "SELECT * from factor_score_level LIMIT 13";
                $res = mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($res))
                {
                ?>  
                <option value="<?php 
                echo $row['ID']?>"><?php echo $row['Finetune']?></option>               
                <?php 
              } 
              ?>
             
                            </select>
                            
                        </div>

                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_need">Mental Eomtional Demands</label>
                            <select  name="MENTAL_EMOTIONAL_DEMANDS" class="form-control" required="required" data-error="Please specify your need.">
                                <!-- <option value="" selected disabled>--Select Your Issue--</option> -->
                                <?php
                               $sql = "SELECT * from factor_score_level LIMIT 10";
                                       $res = mysqli_query($con,$sql);
                                       while($row = mysqli_fetch_array($res))
                                       {
                                       ?>  
                                       <option value="<?php 
                                       echo $row['ID']?>"><?php echo $row['Finetune']?></option>               
                                       <?php 
                                     } 
                                     ?>
             
        </select>
                            
                        </div>
                    </div>
                </div>
                
                    <div class="col-md-6">
                        
                    <label for="exampleFormControlTextarea1">Comments / Remarks</label>
                    <textarea class="form-control" rows="3" name="COMMENTS_REMARKS">

                    </textarea>
                     
    <!-- <div class="form-group">
                            <label for="form_need">Please specify your need *</label>
                            <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                                <option value="" selected disabled>--Select Your Issue--</option>
                                <option >Request Invoice for order</option>
                                <option >Request order status</option>
                                <option >Haven't received cashback yet</option>
                                <option >Other</option>
                            </select>
                            
                        </div> -->

                    </div>


                    <h2 class="mt-5">Commitee Members</h2>

                    <div class="row">
                    
                <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_need">cm1</label>
                            <select  name="CM_1" class="form-control" required="required" data-error="Please specify your need.">
                                <!-- <option value="" selected disabled>--Select Your Issue--</option> -->
                                <!-- <option value="select" disabled>Choose Your MD</option> -->
                                <?php
                                 $sql = "SELECT * from committee_member";
                                         $res = mysqli_query($con,$sql);
                                         while($row = mysqli_fetch_array($res))
                                         {
                                         ?>  
                                         <option value="<?php 
                                         echo $row['ID']?>"><?php echo $row['Full_Name']?></option>               
                                         <?php 
                                       } 
                                       ?>
                            </select>
                            
                        </div>

                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_need">cm2</label>
                            <select  name="CM_2" class="form-control" required="required" data-error="Please specify your need.">
                                <!-- <option value="" selected disabled>--Select Your Issue--</option> -->
                                <?php
                                 $sql = "SELECT * from committee_member";
                                         $res = mysqli_query($con,$sql);
                                         while($row = mysqli_fetch_array($res))
                                         {
                                         ?>  
                                         <option value="<?php 
                                         echo $row['ID']?>"><?php echo $row['Full_Name']?></option>               
                                         <?php 
                                       } 
                                       ?>
              </select>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        
                    <div class="form-group">
                            <label for="form_need">cm3</label>
                            <select  name="CM_3" class="form-control" required="required" data-error="Please specify your need.">
                                <!-- <option value="" selected disabled>--Select Your Issue--</option> -->
                                <?php
                                 $sql = "SELECT * from committee_member";
                                         $res = mysqli_query($con,$sql);
                                         while($row = mysqli_fetch_array($res))
                                         {
                                         ?>  
                                         <option value="<?php 
                                         echo $row['ID']?>"><?php echo $row['Full_Name']?></option>               
                                         <?php 
                                       } 
                                       ?>
                  
              </select>
                            
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                        
                        <!-- <div class="form-group">
                            <label for="form_need">Please specify your need *</label>
                            <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                                <option value="" selected disabled>--Select Your Issue--</option>
                                <option >Request Invoice for order</option>
                                <option >Request order status</option>
                                <option >Haven't received cashback yet</option>
                                <option >Other</option>
                            </select>
                            
                        </div> -->
                    </div>

                    <div class="row">
                    
                    <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_need">cm4</label>
                                <select  name="CM_4" class="form-control" required="required" data-error="Please specify your need.">
                                    <!-- <option value="" selected disabled>--Select Your Issue--</option> -->
                                    <!-- <option value="select" disabled>Choose Your MD</option> -->
                                    <?php
                                 $sql = "SELECT * from committee_member";
                                         $res = mysqli_query($con,$sql);
                                         while($row = mysqli_fetch_array($res))
                                         {
                                         ?>  
                                         <option value="<?php 
                                         echo $row['ID']?>"><?php echo $row['Full_Name']?></option>               
                                         <?php 
                                       } 
                                       ?>
                                </select>
                                
                            </div>
    
                        </div>
    
    
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_need">cm5</label>
                                <select  name="CM_5" class="form-control" required="required" data-error="Please specify your need.">
                                    <!-- <option value="" selected disabled>--Select Your Issue--</option> -->
                                    <?php
                                 $sql = "SELECT * from committee_member";
                                         $res = mysqli_query($con,$sql);
                                         while($row = mysqli_fetch_array($res))
                                         {
                                         ?>  
                                         <option value="<?php 
                                         echo $row['ID']?>"><?php echo $row['Full_Name']?></option>               
                                         <?php 
                                       } 
                                       ?>     </select>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            
                        <!-- <div class="form-group">
                                <label for="form_need">Consequences Of Error</label>
                                <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need."> -->
                                    <!-- <option value="" selected disabled>--Select Your Issue--</option> -->
                                
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                            
                            <!-- <div class="form-group">
                                <label for="form_need">Please specify your need *</label>
                                <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                                    <option value="" selected disabled>--Select Your Issue--</option>
                                    <option >Request Invoice for order</option>
                                    <option >Request order status</option>
                                    <option >Haven't received cashback yet</option>
                                    <option >Other</option>
                                </select>
                                
                            </div> -->
                        </div>


                </div>

                <!-- new -->
                    <div class="col-md-12">
                        
                        <!-- <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Submit" 
                        name"register" > -->
                        <input type="submit" class="btn btn-success" name="register"></input>
                    
                    <!-- </button> -->
                </div>
          
                </div>


        </div>
         </form>
        </div>
            </div>


    </div>
        <!-- /.8 -->

    </div>
    <!-- /.row-->

</div>
</div>


</body>
</html>