<?php
if (isset($_post['submit'])) {

    $firstname = $_POST['fname'];
    $secondname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['pswd'];
    $conpassword = $_POST['conpwd'];

    if (empty($firstname) || empty($secondname )|| empty($email) || empty($phone) || empty($password) || empty($conpassword))
    {
        header("location: my pro 2.php?submit=empty");
        exit();
    }
    else {
        if (!preg_match("/^[a-zA-Z]*$/", $firstname) || !preg_match("/^[a-zA-Z]*$/", $secondname) || !preg_match("/^[a-zA-Z]*$/", $surname) || !preg_match("/^[a-zA-Z]*$/", $guardiansname) || !preg_match("/^[a-zA-Z]*$/", $guardianstel) || !preg_match("/^[a-zA-Z]*$/", $address) || !preg_match("/^[a-zA-Z]*$/", $dateofbirth))
        header("location: my pro 2.php?submit=charerror");
        exit();
    }
}
