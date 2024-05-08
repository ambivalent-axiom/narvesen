<?php 
    include 'admin/includes/functions.php';
?>

<?php
    $number = 5000/100; // Example number

    // Format the number as a string with exactly two digits after the decimal point
    $formatted_number = number_format($number, 2, '.', '');
    echo $formatted_number; // Output: 50.00
?>