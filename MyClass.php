<?php
class sqlProcess{
    function __construct()
    {
        try {
            $db = new PDO("mysql:host=localhost; dbname=mywebpage; charset=utf8", 'root', '');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


}
?>