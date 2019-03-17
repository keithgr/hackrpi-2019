<?
    // Init config data
    $config = parse_ini_file("/opt/lampp/config.ini");

    $host = $config['HOST'];
    $port = $config['PORT'];
    $user = $config['USER'];
    $pass = $config['PASS'];
    $db = $config['DB'];



    function db_connect() {
        // Connect and select project3 database
        // mysqli(host, user, password, database_name)

        // Create and verify connection
        $sql = new mysqli($host.':'.$port, $user, $pass, $db);
        if ($sql->connect_errno) {
           die("Failed to connect to MySQL: ($mysqli->connect_errno) $mysqli->connect_error");
        }
        echo "Connection successful"; //For testing
        return $sql;	
    }
?>
