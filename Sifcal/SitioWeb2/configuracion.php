<?php
/*Define("ENV", "dev");
Define("HOST", (ENV === "dev")? "localhost" : "");
Define("DB", array(
    "dns" => (ENV === "dev") ? "mysql:host=localhost; sifcalbd=dbpuntoarw" : "",
    "user" => (ENV === "dev") ? "root" : "", 
    "pass" => (ENV === "dev") ? "" : ""));

    protected static function dbConnect()
    {
        //creando y válidando la conexión a la base de datos.
        try {
            $dns = DB["dns"];
            $user = DB["user"];
            $pass = DB["pass"];
            $options = array(
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
            );
            $dbConn = new PDO($dns, $user, $pass, $options);
            $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $dbConn->exec("SET NAMES utf8");
            return $dbConn;
        } catch (PDOException $ex) {
            die("No se ha podido establecer conexión con el servidor, intentelo más tarde " . $ex->getLine() . " " . $ex->getMessage());
            exit();
        }
    }
*/
?>