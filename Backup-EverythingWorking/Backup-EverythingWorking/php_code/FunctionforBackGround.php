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
         /*
        //Selecting one attribute;
        $q6 = "SELECT * FROM health_background WHERE heartRate = '50' ";
        $q_result6 = mysqli_query($link, $q6);
        while($row = mysqli_fetch_array($q_result6)) {
        echo $row['hbID'] . " " . $row['drugs'];
}
      
         
       
        
        //Altering value of employye
        $q7 = "UPDATE health_background SET heartRate = '50' WHERE paID = '123456789' ";
        $q_result7 = mysqli_query($link, $q7);
        while($row = mysqli_fetch_array($q_result7)) {
        echo $row['hbID'] . " " . $row['heartRate'];
        }
      */
      //Inserting new data
        function add_health_background_tuple($hbID,$heartRate,$breathingRate,$drugs,$paID) {
        $q8 = "INSERT INTO Patient(hbID,heartRate,breathingRate,drugs,paID)
        VALUES ($hbID,$heartRate,$breathingRate,$drugs,$paID)";
    
         $hb_result_add_tuple = mysqli_query(include'$link', $q8);
    
            return $hb_result_add_tuple;
        }
        
        
        
      //Deleting odd data  
        function delete_health_background_tuple($hbID,$heartRate,$breathingRate,$drugs,$paID) {
        $q9 = "DELETE FROM Patient WHERE $heartRate = '50' ";
        
    
         $hb_result_delete_tuple = mysqli_query(include'$link', $q9);
    
            return $hb_result_delete_tuple;
        }
        ?>
    </body>
</html>
