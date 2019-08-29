<?php
function getConnection() {
    $connection_string = 'host=localhost port=5432 dbname=ifmaker user=matheus password=mdccg';
    return pg_connect($connection_string);
}
?>