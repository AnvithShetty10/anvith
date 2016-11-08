<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "music";

// Create connection
$conn = new mysqli($servername, $username, $password , $dbName);

// Check connection
$sql = "SELECT * from songs GROUP BY Album";
$result = $conn->query($sql);
$album_names = array();
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        $n = array();
        $n["Album"] = $row["Album"];
        $n["artPath"] = $row["artPath"];

        array_push($album_names ,$n);
}


echo json_encode($album_names);

}
else {
    echo "0 Res";
}

?>
