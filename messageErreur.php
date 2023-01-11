<?php



function messageErreur(array $messagesErreur){
 
    echo "<div style = \"color: red\";>";
     foreach($messagesErreur as $message){
        echo '<p> '.$message.' </p>';
     }
    
    echo" </div> ";

   
}



?>