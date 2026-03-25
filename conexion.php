<?php
    function conexion(){
        $host = "host=dpg-d71v6phr0fns738t5c10-a.oregon-postgres.render.com/test_xpec";
        $port = "port=5432";
        $dbname = "test_xpec";
        $user = "test_xpec_user";
        $password = "iQyQwsfWRjaOQt4q6QKhF3RXWIAQOmkc";

        $db = pg_connect("$host $port $dbname $user $password");

        return $db;
    }
?>
