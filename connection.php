<?php 
    class userdata {
        public static function connect() {
            try {
                // replace 
                // your_database_name with dbname=your_database_name
                // your_database_username with your_database_username
                // and replace your_password as your_database_password

                $conn = new PDO("mysql:host=localhost; dbname=your_database_name", "your_database_username","your_password");
                return $conn;

            } catch (PDOException $e1) {
                echo "Connection failed: " . $e1->getMessage();
            } catch (Exception $e2) {
                echo "Generic Error!" . $e2->getMessage();
            }
        }
    }
?>