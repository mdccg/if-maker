<?php
function getConnection() {
    $connection = "host=localhost port=5432 dbname=ifmaker user=matheus password=mdccg";
    return pg_connect($connection);
}
?>