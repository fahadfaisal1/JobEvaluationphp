<?php

require "conn.php";
// require "header.php";

$id = $_GET['id'];

$com_date= mysqli_query($con,"SELECT ds.date,jt.Title as Post_Title,m.MDA from datasheet as ds JOIN job_titles as jt ON ds.Post_Title = jt.ID JOIN mda as m on ds.MDA=m.ID where ds.ID = $id");
$res_11 = mysqli_fetch_array($com_date);


$com_KNOW= mysqli_query($con, "SELECT d.ID,fsl.Finetune AS Knowledge_and_Training,
fsl.ID AS fsl_id FROM datasheet as d inner JOIN factor_score_level as fsl ON 
d.Knowledge_and_Training = fsl.ID where d.ID = $id");

$com_Experience = mysqli_query($con,"SELECT d.ID,fsl.Finetune AS Experience,fsl.ID AS fsl_id FROM datasheet as d inner JOIN factor_score_level as fsl ON d.Experience = fsl.ID where d.ID = $id");

$com_Diversity= mysqli_query($con,"SELECT d.ID,fsl.Finetune AS Diversity,fsl.ID AS fsl_id FROM datasheet as d inner 
JOIN factor_score_level as fsl ON d.Diversity = fsl.ID where d.ID = $id");

$com_Complexity= mysqli_query($con,"SELECT d.ID,fsl.Finetune AS Complexity,fsl.ID AS fsl_id  FROM datasheet as d inner 
JOIN factor_score_level as fsl ON d.Complexity = fsl.ID  where d.ID = $id");

$com_Creativity =mysqli_query($con,"SELECT d.ID,fsl.Finetune AS Creativity,fsl.ID AS fsl_id  FROM datasheet as d inner JOIN 
factor_score_level as fsl ON d.Creativity = fsl.ID  where d.ID = $id");

$com_Engagement= mysqli_query($con,"SELECT d.ID,fsl.Finetune AS Engagement,fsl.ID AS fsl_id  FROM datasheet as d inner JOIN 
factor_score_level as fsl ON d.Engagement = fsl.ID  where d.ID = $id");

$com_Networks=mysqli_query($con,"SELECT d.ID,fsl.Finetune AS Networks,fsl.ID AS fsl_id  FROM datasheet as d inner JOIN 
factor_score_level as fsl ON d.Networks = fsl.ID  where d.ID = $id");

$com_Teamrole_and_Accountability= mysqli_query($con,"SELECT d.ID,fsl.Finetune AS Teamrole_and_Accountability,fsl.ID AS fsl_id  FROM datasheet as 
d inner JOIN factor_score_level as fsl ON d.Teamrole_and_Accountability = fsl.ID  where d.ID = $id");

$com_Impact= mysqli_query($con,"SELECT d.ID,fsl.Finetune AS Impact,fsl.ID AS fsl_id  FROM datasheet as d inner JOIN factor_score_level 
as fsl ON d.Impact = fsl.ID where d.ID = $id");


$con_Consequence_of_Error=mysqli_query($con,"SELECT d.ID,fsl.Finetune AS Consequence_of_Error ,fsl.ID AS fsl_id FROM datasheet as d inner 
JOIN factor_score_level as fsl ON d.Consequence_of_Error = fsl.ID where d.ID = $id");
 

$con_Physical = mysqli_query($con,"SELECT d.ID,fsl.Finetune AS Physical,fsl.ID AS fsl_id  FROM datasheet as d inner JOIN 
factor_score_level as fsl ON d.Physical = fsl.ID where d.ID = $id;");

$con_Mental_and_Emotional_Demands= mysqli_query($con,"SELECT d.ID,fsl.Finetune AS Mental_and_Emotional_Demands,fsl.ID AS fsl_id FROM datasheet 
as d inner JOIN factor_score_level as fsl ON d.Mental_and_Emotional_Demands = fsl.ID where d.ID = $id;");

$con_CM_1= mysqli_query($con,"SELECT d.ID,cm.Full_Name AS CM_1 FROM datasheet as d inner JOIN committee_member as 
cm ON d.CM_1 = cm.ID where d.ID = $id;
"); 

$con_CM_2= mysqli_query($con,"SELECT d.ID,cm.Full_Name AS CM_2 FROM datasheet as d inner JOIN committee_member as 
cm ON d.CM_2 = cm.ID where d.ID = $id;
"); 
$con_CM_3= mysqli_query($con,"SELECT d.ID,cm.Full_Name AS CM_3 FROM datasheet as d inner JOIN committee_member as 
cm ON d.CM_3 = cm.ID where d.ID = $id;
");
$con_CM_4= mysqli_query($con,"SELECT d.ID,cm.Full_Name AS CM_4 FROM datasheet as d inner JOIN committee_member as 
cm ON d.CM_4 = cm.ID where d.ID = $id;
"); 
$con_CM_5= mysqli_query($con,"SELECT d.ID,cm.Full_Name AS CM_5 FROM datasheet as d inner JOIN committee_member as 
cm ON d.CM_5 = cm.ID where d.ID = $id;
");


?>

<html lang="en">
<head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Classification Evaluation</title>
          
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400" rel="stylesheet" type="text/css">

<!--   CSS for 147 Colors   -->
<link href="http://www.colorname.xyz/style.css" rel="stylesheet" type="text/css"> 
   
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> 

    <!-- bootstrap cdn -->
    /

<!-- external css -->
<link rel="stylesheet" href="./style.css">

<style>
  
/* elements */

</style>
</head>
          
<h1 class="ce">Classification Evaluation</h1>

<div class="container">
    <div class="res">
<!-- section -->
<p>Post No:
<hr>
<p>Post Title:&nbsp&nbsp&nbsp&nbsp&nbsp<?=$res_11['Post_Title'];?>
<hr>
<p>Ministry Department/Division/Unit:&nbsp&nbsp&nbsp&nbsp&nbsp<?=$res_11['MDA'];?>
<hr>
<p>Current Level:
<hr>
<p>Level Accorded:
<hr>
<p>Date:&nbsp&nbsp&nbsp&nbsp&nbsp<?=$res_11['date'];?>
<hr>
<p>Primary Focus: Reclassification
   </div>
<!--  section-->

</div>

<?php

$row_1=    mysqli_fetch_array($com_KNOW);
$row_2=    mysqli_fetch_array($com_Experience);
$row_3=    mysqli_fetch_array($com_Diversity);
$row_4=    mysqli_fetch_array($com_Complexity);
$row_5=    mysqli_fetch_array($com_Creativity);
$row_6=    mysqli_fetch_array($com_Engagement);
$row_7=    mysqli_fetch_array($com_Networks);
$row_8=    mysqli_fetch_array($com_Teamrole_and_Accountability);
$row_9=    mysqli_fetch_array($com_Impact);
$row_10=   mysqli_fetch_array($con_Consequence_of_Error);
$row_11=   mysqli_fetch_array($con_Physical);
$row_12=   mysqli_fetch_array($con_Mental_and_Emotional_Demands);
$row_13=   mysqli_fetch_array($con_CM_1);
$row_14=   mysqli_fetch_array($con_CM_2);
$row_15=   mysqli_fetch_array($con_CM_3);
$row_16=   mysqli_fetch_array($con_CM_4);
$row_17=   mysqli_fetch_array($con_CM_5);
$row_date= mysqli_fetch_array($com_date);


// Scores 

// Knowledge
$k_f_id = $row_1['fsl_id'];
$score_know = mysqli_query($con,"SELECT s.score FROM scores as s WHERE s.CatID = 1 AND s.FacID = 1 AND s.LevelID = $k_f_id");
$row_s_know = mysqli_fetch_array($score_know);

// Expertise
$e_f_id = $row_2['fsl_id'];
$score_exp= mysqli_query($con,"SELECT s.score FROM scores as s WHERE s.CatID = 1 AND s.FacID = 2 AND s.LevelID = $e_f_id");
$row_s_exp = mysqli_fetch_array($score_exp);

// Diversity
$d_f_id = $row_3['fsl_id'];
$score_diversity= mysqli_query($con,"SELECT s.score FROM scores as s WHERE s.CatID = 1 AND s.FacID = 3 AND s.LevelID = $d_f_id");
$row_s_div = mysqli_fetch_array($score_diversity);

// Complexity
$c_f_id = $row_4['fsl_id'];
$score_complexity= mysqli_query($con,"SELECT s.score FROM scores as s WHERE s.CatID = 2 AND s.FacID = 4 AND s.LevelID = $c_f_id");
$row_s_complexity = mysqli_fetch_array($score_complexity);

// Creativity
$cr_f_id = $row_5['fsl_id'];
$score_creativity= mysqli_query($con,"SELECT s.score FROM scores as s WHERE s.CatID = 2 AND s.FacID = 5 AND s.LevelID = $cr_f_id");
$row_s_creativity = mysqli_fetch_array($score_creativity);

// Engagements
$en_f_id = $row_6['fsl_id'];
$score_engagement= mysqli_query($con,"SELECT s.score FROM scores as s WHERE s.CatID = 3 AND s.FacID = 6 AND s.LevelID = $en_f_id");
$row_s_engagement = mysqli_fetch_array($score_engagement);

// Networks
$n_f_id = $row_7['fsl_id'];
$score_networks= mysqli_query($con,"SELECT s.score FROM scores as s WHERE s.CatID = 3 AND s.FacID = 7 AND s.LevelID = $n_f_id");
$row_s_networks = mysqli_fetch_array($score_networks);

// Team Role And Accountability
$tr_f_id = $row_8['fsl_id'];
$score_teamrole= mysqli_query($con,"SELECT s.score FROM scores as s WHERE s.CatID = 4 AND s.FacID = 8 AND s.LevelID = $tr_f_id");
$row_s_teamrole = mysqli_fetch_array($score_teamrole);

// Impact
$im_f_id = $row_9['fsl_id'];
$score_impact= mysqli_query($con,"SELECT s.score FROM scores as s WHERE s.CatID = 4 AND s.FacID = 9 AND s.LevelID = $im_f_id");
$row_s_impact = mysqli_fetch_array($score_impact);

// Concequences of error
$ce_f_id = $row_10['fsl_id'];
$score_ce= mysqli_query($con,"SELECT s.score FROM scores as s WHERE s.CatID = 4 AND s.FacID = 10 AND s.LevelID = $ce_f_id");
$row_s_ce = mysqli_fetch_array($score_ce);

// Physical
$p_f_id = $row_11['fsl_id'];
$score_physical= mysqli_query($con,"SELECT s.score FROM scores as s WHERE s.CatID = 5 AND s.FacID = 11 AND s.LevelID = $p_f_id");
$row_s_physical = mysqli_fetch_array($score_physical);

// Mental
$m_f_id = $row_12['fsl_id'];
$score_mental= mysqli_query($con,"SELECT s.score FROM scores as s WHERE s.CatID = 5 AND s.FacID = 12 AND s.LevelID = $m_f_id");
$row_s_mental = mysqli_fetch_array($score_mental);

// Calculations
// Expertise
$total_1=$row_s_know['score'] + $row_s_exp['score'] + $row_s_div['score'];
// Critical Thinking
$total_2=$row_s_complexity['score'] + $row_s_creativity['score'];
// Communication
$total_3=$row_s_networks['score'] + $row_s_engagement['score'];
// Service Delivery
$total_4 = $row_s_teamrole['score'] + $row_s_impact['score'] + $row_s_ce['score'];
// Working Condition
$total_5 = $row_s_physical['score'] + $row_s_mental['score'];

// Total
$total = $total_1 + $total_2 + $total_3 + $total_4 + $total_5;

?>
<div class="container-fluid inner">
  <table class="tableizer-table">
  <table >
  <tr class="tableizer-firstrow">
    <th>Factor</th>
    <th>Subfactor</th>
    <th>Level</th>
    <th>Score</th>
  </tr>
  <tr>
  <td><h2>Expertise</h2></td>
    <td>Knowledge And training <hr>Experience <hr>Diversity</td>
    <td>
        
            <?php echo $row_1['Knowledge_and_Training']; ?>
        <hr><?php echo $row_2['Experience'];?>
        <hr><?php echo $row_3['Diversity'];?>
    </td>
    <td><?=$total_1?></td>
  </tr>
  <!-- critical Thining -->
  <tr>
    <td><h2>Critical Thinking</h2></td>
    <td>Complexity<hr>Creativity</td>
    <td><?php echo $row_4['Complexity']; ?>
    <hr><?php echo $row_5['Creativity']; ?></td>
    <td><?=$total_2?></td>
  </tr>
  <!-- critical Thining -->
  <!-- Communication -->
  <tr>
    <td><h2>Communication</h2></td>
    <td>Engagements<hr>Networks</td>
    <td><?php echo $row_6['Engagement']; ?>
    <hr><?php echo $row_7['Networks']; ?></td>
    <td><?=$total_3?></td>
  </tr>
  <!-- Communication-->
    <!-- Service Delivery-->
    <tr>
    <td><h2>Service Delivery</h2></td>
    <td>Team Role And Accountability<hr>Impact<hr>Consequences Of Error</td>
    <td><?php echo $row_8['Teamrole_and_Accountability']; ?>
    <hr><?php echo $row_9['Impact']; ?>
    <hr><?php echo $row_10['Consequence_of_Error']; ?></td>
    <td><?=$total_4?></td>
  </tr>
  <!-- Service Delivery-->
  <!-- Working Conditions-->
  <tr>
    <td><h2>Working Conditions</h2></td>
    <td>Physical<hr>Mental</td>

    <td><?php echo $row_11['Physical']; ?>
    <hr><?php echo $row_12['Mental_and_Emotional_Demands']; ?></td>
    
    <td><?=$total_5?></td>
  </tr>
  <!-- Working Conditions-->
    <!-- Score-->
    <tr>
    <td><h2>Total Score</h2></td>
    <td></td>
    <td></td>
    <td><?=$total?></td>
  </tr>
  <!-- Score-->
</table>
</div>

<div class="container">
     <h3>Commitee Member:<?php echo $row_13['CM_1']; ?>
     <hr>
     <h3>Commitee Member:<?php echo $row_14['CM_2']; ?>
     <hr>
     <h3>Commitee Member:<?php echo $row_15['CM_3']; ?>
     <hr>
     <h3>Commitee Member:<?php echo $row_16['CM_4']; ?>
     <hr>
     <h3>Commitee Member:<?php echo $row_17['CM_5']; ?>
</div>





   