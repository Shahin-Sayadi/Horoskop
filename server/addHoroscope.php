<?php 


try{
    
    session_start();
    require("./horoscopeCalc.php");

    if(isset($_SERVER["REQUEST_METHOD"])) {

        if($_SERVER["REQUEST_METHOD"] === "POST") {
            

            if(isset($_SESSION["horoscope"])){
                echo json_encode(false);
                exit;
                
            }else{
                if(isset($_POST["month"]) && isset($_POST["day"])){
                    $month = $_POST["month"];
                    $day = $_POST["day"];

                    $dates = findHoroscope($month, $day);
                    
                    
                    
                    
                    $_SESSION["horoscope"] = serialize($dates);
                    echo json_encode(true);
                    exit;
                    
                }else{
                    echo json_encode(false);
                    exit;
                }
                
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