<?php

    function connectDB ($DB_NAME, $HOST) {
        $DSN = "mysql:dbname={$DB_NAME};host={$HOST}";
        $USER_NAME = "root";
        $PASSWORD = "root";
        $OPTION = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET `utf8`");
        $pdo = new PDO($DSN, $USER_NAME, $PASSWORD, $OPTION);
        
        if ($pdo) {
            return $pdo;
        } else {
            echo "<script>window.alert('データベース接続に失敗しました。')</script>";
            return false;
        }

    }

    function getPost($post_name) {
        return $_POST[$post_name];
    }



?>