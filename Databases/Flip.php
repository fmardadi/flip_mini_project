<?php
  class Flip {
    private static $conn = NULL;
    private static $servername = "localhost";
    private static $username = "root";
    private static $password = "";
    private static $dbname = "flip";

    public static function connectDB() {
      if (!isset(self::$conn)) {
        self::$conn = mysqli_connect(self::$servername, self::$username, self::$password, self::$dbname);
      }
      return self::$conn;
    }
  }
?>