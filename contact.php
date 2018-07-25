<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<html lang="en-US">
<title>Jacob Horst Contact</title>
<link rel="stylesheet" href="styles.css">
</head>

<body>

<div class="wrapper">

<?php include 'header.php';?>

<div class="leftSide">
    
    <div class="menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="jacobHorstResume.pdf">Resume PDF</a></li>
            <li><a href="https://github.com/JacobHorst">GitHub</a></li>
        </ul>
    </div>
    
</div>

<div class="contactForm">
    <form>
        First name:<br>
        <input type="text" name="firstname"><br>
        Last name:<br>
        <input type="text" name="lastname"><br>
        Email:<br>
        <input type="text" name="email"><br><br>
        <input type="Submit" value="submit">
    </form>
</div>

<?php include 'footer.php';?>

</div>

</body>