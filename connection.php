<?php 
    class userdata {
        public static function connect() {
            try {
                // replace 
                // dbname=test_db with dbname=your_database_name
                // root with your_database_username
                // and replace_this_with_your_password as your_database_password

                $conn = new PDO("mysql:host=localhost; dbname=test_db", "root","");
                return $conn;

            } catch (PDOException $e1) {
                echo "Connection failed: " . $e1->getMessage();
            } catch (Exception $e2) {
                echo "Generic Error!" . $e2->getMessage();
            }
        }
    }
?>