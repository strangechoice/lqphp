<?
    $pghost = "localhost";
    $pguser = "www-data";
    $pgdb   = "liquid_playground";

    $pgstring = "dbname=$pgdb";

    if ( pg_connect($pgstring) ) {
        echo "Connected\n";
    } else {
        die("No connection\n");
    }
?>
