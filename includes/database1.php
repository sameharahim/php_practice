<?php
 define("SERVAR_NAME","localhost");
 define("USERNAME","root");
 define("PASSWORD","");
 define("DATABASE_NAME","cmpi");



 $database_connect = mysqli_connect(SERVAR_NAME,USERNAME,PASSWORD,DATABASE_NAME);


 if(!$database_connect){

    echo "database connection failed";
 }
?>