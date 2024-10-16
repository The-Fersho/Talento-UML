<?php
require_once('../config/constantes.php');

// Include configuration
include('../config/config.php');

// Crear una cuenta
if (isset($_POST['register'])) {
    // Get form data
    $name = htmlspecialchars(trim($_POST['name']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $email = htmlspecialchars(trim($_POST['email']));
    $pass = htmlspecialchars(trim($_POST['pass']));
    $hash = password_hash($pass, PASSWORD_BCRYPT);

    // Prepare the SQL statement
    $stmt = mysqli_prepare($conn, "INSERT INTO users (name, phone, email, password) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, 'ssss', $name, $phone, $email, $hash);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        //Crear la sesión y redirigir al usuario a la página de inicio
        session_start();
        $_SESSION["loggedin"] = true;
        $_SESSION["id"] = mysqli_insert_id($conn);
        $_SESSION["name"] = $name;
        $_SESSION["phone"] = $phone;
        $_SESSION["email"] = $email;

        header("Location: ". ROOT_URL);
        exit; // Ensure script stops here
    } else {
        echo "Error: " . mysqli_stmt_error($stmt);
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}

// Log in
if (isset($_POST['login'])) {
    // Get form data
    $email = htmlspecialchars(trim($_POST['email']));
    $pass = htmlspecialchars(trim($_POST['password']));

    // Prepare the SQL statement
    $stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE email = ?");
    mysqli_stmt_bind_param($stmt, 's', $email);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        // Bind the result
        mysqli_stmt_bind_result($stmt, $id, $name, $phone, $email, $password);
        mysqli_stmt_fetch($stmt);

        // Check if the password is correct
        if (password_verify($pass, $password)) {
            session_start();
            $_SESSION["loggedin"] = true;
            $_SESSION["id"] = $id;
            $_SESSION["name"] = $name;
            $_SESSION["phone"] = $phone;
            $_SESSION["email"] = $email;

            header("Location: ". ROOT_URL);
            exit; // Ensure script stops here
        } else {
            // Redirect back to login page with error
            header("Location: ". ROOT_URL. "login.php?error=1");
        }
    } else {
        echo "Error: " . mysqli_stmt_error($stmt);
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}


// Close MySQL connection
mysqli_close($conn);

