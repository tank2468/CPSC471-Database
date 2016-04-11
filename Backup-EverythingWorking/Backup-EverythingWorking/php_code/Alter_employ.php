<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       echo 'hell';
       $link = mysqli_connect("localhost", "root", "", "cpsc471proj", 3306);
        
        if ($link) {
            echo "Connection success!!\n";
        }
        if (!$link) {
            echo "Something is wrong?\n";
        }
        
      /*Testing
        $q1 = "SELECT * FROM Patient";
        $q_result = mysqli_query($link, $q1);
        while($row = mysqli_fetch_array($q_result)) {
        echo $row['id'] . " " . $row['Fname'];
}
       * //Selecting one attribute;
        
       
        //Altering value of employye
        $q2 = "UPDATE patient SET Lname = 'Pink' WHERE Fname = 'John' ";
        $q_result2 = mysqli_query($link, $q2);
        while($row = mysqli_fetch_array($q_result2)) {
        echo $row['Fname'] . " " . $row['Lname'];
        } 
      
        
        
        $q3 = "SELECT * FROM employee WHERE eType = 'teacher' ";
        $q_result3 = mysqli_query($link, $q3);
        while($row = mysqli_fetch_array($q_result3)) {
        echo $row['Ename'] . " " . $row['eType'];
        }
        */
        //Inserting new data
        function add_patient_tuple($Ename,$eid,$eType,$specialty,$labType,$superID) {
        $q4 = "INSERT INTO Patient(Ename,eid,eType,specialty,labType,superID)
        VALUES ($Ename,$eid,$eType,$specialty,$labType,$superID)";
    
         $q_result_add_tuple = mysqli_query(include'$link', $q4);
    
            return $q_result_add_tuple;
        }
        
      //Deleting odd data  
        function delete_patient_tuple($Ename,$eid,$eType,$specialty,$labType,$superID) {
        $q5 = "DELETE FROM Patient WHERE $eType = '50' ";
        
    
         $q_result_delete_tuple = mysqli_query(include'$link', $q5);
    
            return $q_result_delete_tuple;
        }
        
        
        
        
        ?>
    </body>
</html>
