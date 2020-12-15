<?php 


try{
    
    session_start();

    if(isset($_SERVER["REQUEST_METHOD"])) {

        if($_SERVER["REQUEST_METHOD"] === "POST") {

            if(isset($_POST["name"])) {

                $_SESSION["name"] = serialize($_POST["name"]);
                echo json_encode(true);
                exit;

            }else{

                throw new Exception("No name was found in body", 500);
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