<?php

    $name = readline("Enter your name: ");
    $email = readline("Enter your email: ");
    $password = readline("Enter your password: ");
    
    echo "\nYou entered:\n";
    echo "Name: $name\n";
    echo "Email: $email\n";
    echo "Password: $password\n";

    echo "Enter your name: ";
    // Open the standard input stream
    $name = trim(fgets(STDIN)); // Read a line of input and trim whitespace

    echo "Enter your email: ";
    $email = trim(fgets(STDIN));

    echo "Enter your password: ";
    $password = trim(fgets(STDIN));

    echo "\nYou entered:\n";
    echo "Name: $name\n";
    echo "Email: $email\n";
    echo "Password: $password\n";


?>