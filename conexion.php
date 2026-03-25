<?php
    function conexion(){
        $host = "host=dpg-d71v6phr0fns738t5c10-a.oregon-postgres.render.com";
        $port = "port=5432";
        $dbname = "dbname=test_xpec";
        $user = "user=test_xpec_user";
        $password = "password=iQyQwsfWRjaOQt4q6QKhF3RXWIAQOmkc";

        $db = pg_connect("$host $port $dbname $user $password");

        return $db;
    }
?>