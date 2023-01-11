<?php



function messageValidation(array $messagesValidation){
 
    echo "<div style = \"color: green\";>";
     foreach($messagesValidation as $message){
        echo '<p> '.$message.' </p>';
     }
    
    echo" </div> ";

   
}



?>

