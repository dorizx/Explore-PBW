<?php

    $data_json = file_get_contents("testing.json");
    
    //echo $data_json;

    $parsedata = json_decode($data_json);

    //echo  "<pre>"; print_r($parsedata); echo "</pre>";
    

  // echo $parsedata[1]->brand, $parsedata[0]->model;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP JSON</title>
</head>
<body>
     <label>Brand : <?php echo $parsedata[2]->brand?></label> <br>
     <label>Fitur : <?php echo $parsedata[2]->features[1]?></label> <br>
     <label>Fitur Lengkap : <br>
        <?php 
            foreach($parsedata[2]->features as $fitur)
            echo "$fitur <br>"
        ?>
     </label>
</body>
</html>

