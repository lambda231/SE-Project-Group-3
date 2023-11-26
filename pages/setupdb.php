<!DOCTYPE	html>
<html>
    <head>
        <title>setup database</title>
    </head>
    <body>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $database = "OnlineStore";

            // Create a connection to the MySQL server
            $conn = new mysqli($servername, $username, $password, $database);

            // Check the connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            /*
            // SQL query to create a new database named "OnlineStore"
            $databaseName = "OnlineStore";
            $sql = "CREATE DATABASE IF NOT EXISTS $databaseName";

            if ($conn->query($sql) === TRUE) {
                echo "Database '$databaseName' created successfully";
            } else {
                echo "Error creating database: " . $conn->error;
            }
            */

            /*
            // SQL statement to create a "products" table
            $sql_products = "CREATE TABLE products (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                description TEXT,
                price DECIMAL(10, 2) NOT NULL,
                created_at TIMESTAMP
            )";

            // SQL statement to create a "users" table
            $sql_users = "CREATE TABLE users (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                username VARCHAR(50) NOT NULL,
                email VARCHAR(255) NOT NULL,
                password VARCHAR(255) NOT NULL,
                created_at TIMESTAMP
            )";

            // Execute the SQL statements to create the tables
            if ($conn->query($sql_products) === TRUE && $conn->query($sql_users) === TRUE) {
                echo "Tables 'products' and 'users' created successfully";
            } else {
                echo "Error creating tables: " . $conn->error;
            }
            */

            /*
            // Insert a new product
            $productName = "Knife";  // Replace with the product name
            $description = "va trong bep e e e";
            $price = 2.99;  // Replace with the product price
            
            $sql_insert_product = "INSERT INTO products (name, description, price) VALUES (?, ?, ?)";
            $stmt_product = $conn->prepare($sql_insert_product);
            $stmt_product->bind_param("sss", $productName, $description, $price);
            $stmt_product->execute();
            $stmt_product->close();
            
            // Insert a new user account with a hashed password
            $user_level = 2;
            $username = "Andy";  // Replace with the username
            $email = "andy@email.com";
            $password = "andydydy";  // Replace with the plain-text password
            
            // Function to securely hash a password using the default bcrypt algorithm
            function hashPassword($password) {
                return password_hash($password, PASSWORD_BCRYPT);
            }
            // Hash the password
            $hashedPassword = hashPassword($password);
            
            try {
                $sql_insert_user = "INSERT INTO users (user_level, username, email, password) VALUES (?, ?, ?, ?)";
                $stmt_user = $conn->prepare($sql_insert_user);
                $stmt_user->bind_param("isss", $user_level, $username, $email, $hashedPassword);
                
                if ($stmt_user->execute()) {
                    echo "Record inserted successfully!";
                } else {
                    echo "Error: " . $stmt_user->error;
                }
            
                $stmt_user->close();
            } catch (mysqli_sql_exception $e) {
                echo "Database error: " . $e->getMessage();
            } 
            
            echo "New product and user account inserted successfully.";     
            */
            // Close the MySQL connection
            $conn->close();
        ?>
    </body>
</html>