<?php
echo "hello hawou";
echo "this is committed from my computer";
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:appt.database.windows.net,1433; Database = hawou", "eughami", "Imam0607");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "eughami", "pwd" => "Imam0607", "Database" => "hawou", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:appt.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
