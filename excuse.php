<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./excuse_styles.css">
        <link rel="icon" href="./excuse_favicon.png">
        <title>Excuse Generator</title>
    </head>
    <body>
        <form method="get" action="">
            <label>
                <span>Name:</span>
                <input type="text" name="name">
            </label><br>
            <label>
                <span>Gender:</span>
                <label>
                    <span>Girl:</span>
                    <input type="radio" name="gender" value="girl">
                </label>
                <label>
                    <span>Boy:</span>
                    <input type="radio" name="gender" value="boy">
                </label>
            </label><br>
            <label>
                <span>Teacher's Name:</span>
                <input type="text" name="teachersname">
            </label><br>
            <label>
                <span>Reason for the absence:</span>
                <select name="reason">
                    <option value="Illness">Illness</option>
                    <option value="Death of the pet (or a family member)">Death of the pet (or a family member)</option>
                    <option value="Significant extra-curricular activity">Significant extra-curricular activity</option>
                    <option value="Any other excuse of your choice">Any other excuse of your choice</option>
                </select>
            </label><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>

<?php
$name = "Asuna";
$gender = "girl";
$teachers_name = "Arnaud";
$reason = "Illness";

if (isset($_GET["name"])) {
    if (strlen($_GET["name"]) > 0) {
        $name = $_GET["name"];
    }
}

if (isset($_GET["gender"])) {
    $gender = $_GET["gender"];
}

if (isset($_GET["teachersname"])) {
    if (strlen($_GET["teachersname"]) > 0) {
        $teachers_name = $_GET["teachersname"];
    }
}

if (isset($_GET["reason"])) {
    $reason = $_GET["reason"];
}

if ($reason == "Illness") {
    echo "
        <p class='excuse'>
            Dear $teachers_name,<br>
            <br>
            My $gender, named $name, will not be at school today.<br>
            Because, my child is sick.<br>
            <br>
            Thanks for reading,<br>
            Parents of $name.
        </p>
    ";
}
else if ($reason == "Death of the pet (or a family member)") {
    echo "
        <p class='excuse'>
            Dear $teachers_name,<br>
            <br>
            My $gender, named $name, will not be at school today.<br>
            Because, my child is sad about the loss of it's pet (or family member).<br>
            <br>
            Thanks for reading,<br>
            Parents of $name.
        </p>
    ";
}
else if ($reason == "Significant extra-curricular activity") {
    echo "
        <p class='excuse'>
            Dear $teachers_name,<br>
            <br>
            My $gender, named $name, will not be at school today.<br>
            Because, my child is occupied.<br>
            <br>
            Thanks for reading,<br>
            Parents of $name.
        </p>
    ";  
}
else {
    echo "
        <p class='excuse'>
            Dear $teachers_name,<br>
            <br>
            My $gender, named $name, will not be at school today.<br>
            Because, because.<br>
            <br>
            Thanks for reading,<br>
            Parents of $name
        </p>
    ";
}
?>