# apple-shop

<!-- add home page here -->

Apple Shop is a web-based e-commerce platform with an admin dashboard that sells apple products but is currently limited to iPhones to Apple Accessories. This project will focus on web security and it's implementation to the website.

## Clone
To open this project on your local machine, follow these steps:
1. Run Apache and MySQL on XAMPP
2. Open Command Line Interface
3. Change the current directory to xammp\htdocs.
     ```bash 
     C:\xampp\htdocs
     ```


3. Clone repository. type this on your local machine. <br>
    ```bash
    git clone https://github.com/judiemosinabre/apple-shop.git
    ```

4. Upload the queries.sql to your MySQL Workbench and run it.
5. Open VS Code or type `code` on your command line
6. Navigate to connection.php and replace the following:
    ```bash
    dbname=test_db with dbname=your_database_name
    root with your_database_username
    and replace_this_with_your_password as your_database_password
    ```
7. Lastly, you can now see it running on [`localhost`](#http://localhost/apple-shop/login.php)
