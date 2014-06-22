<?php
class SQL {
  public static function main() {
    $con = mysqli_connect($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);            
    $q="DROP TABLE IF EXISTS things";
    mysqli_query($con, $q);
    $q="CREATE TABLE things (name varchar(20))";
    mysqli_query($con, $q);
    $q="INSERT INTO things(name) VALUES('Dre')";
    mysqli_query($con, $q);
    $q="SELECT * FROM things";
    return mysqli_query($con, $q);
  }
}
?>

