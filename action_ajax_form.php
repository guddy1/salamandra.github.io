<?php

if (isset($_POST["name"]) && isset($_POST["phonenumber"]) ) { 

	// Формируем массив для JSON ответа
    $result = array(
    	'name' => $_POST["user_email"],
        'phonenumber' => $_POST["user_phone"]
        'email' => $_POST["user_name"],
    	
    ); 

    // Переводим массив в JSON
    echo json_encode($result); 
}

?>