<?php
require_once "settings.php";

$dbconn = @mysqli_connect($host, $user, $pwd, $sql_db);

if ($dbconn) {

    $query = "SELECT * FROM cars";
    $result = mysqli_query($dbconn, $query);

    if ($result) {

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<p>" . $row['car_id'] . " - " . $row['make'] . "</p>";
        }

    } else {
        echo "<p>Query failed.</p>";
    }

    mysqli_close($dbconn);

} else {
    echo "<p>Unable to connect to the DB.</p>";
}
?>