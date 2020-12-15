<?php 


try{
    
    session_start();

    if(isset($_SERVER["REQUEST_METHOD"])) {

        if($_SERVER["REQUEST_METHOD"] === "GET") {

            
             
            if(isset($_SESSION["name"])) {

                echo json_encode(unserialize($_SESSION["name"]));
                exit;
            }else{

                echo json_encode("no name is save");
                exit;
            }

        } else {
            
            throw new Exception("not a valid req method", 405);

        }
    }

}catch(Exception $error) {
    echo json_encode(
        array(
            "Message" => $error -> getMessage(),
            "Status" => $error -> getCode() 

        )
    );

}







?>





