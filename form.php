<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $link = $_POST["link"];
    $city = $_POST["indianCities"];
    $experience = $_POST["years"];
    $skills = $_POST["skills"];
    $vedio = $_POST["vedio"];

    // Store the data in a text file (for demonstration purposes)
    $data = "Name: $name\n";
    $data .= "Email: $email\n";
    $data .= "Phone Number: $number\n";
    $data .= "Resume Link: $link\n";
    $data .= "City: $city\n";
    $data .= "Experience: $experience\n";
    $data .= "Skills: $skills\n";
    $data .= "Video: $vedio\n\n";

    // Append the data to a text file
    file_put_contents("form_data.txt", $data, FILE_APPEND);

    // You can perform additional actions here, like sending emails or storing data in a database.

    // Redirect to a thank you page or display a confirmation message
    header("Location: thank_you.html");
    exit();
}
?>
