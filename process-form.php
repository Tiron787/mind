<?php
var_dump($_POST);
if (isset($_POST["client_answer"]) && !empty($_POST["client_answer"])) {
    if($_POST["client_answer"] === $_POST["result"]){
        echo 'Ответ : ' . $_POST["result"];
        echo '<br>';
        echo " ВЕРНО молодец!";
        
    } elseif($_POST["client_answer"] !== $_POST["result"]) {
        echo "НЕ  ВЕРНО";
    }
  } else {
    echo "введите ответ";
  }

?>