<?php session_start(); ?>
<html>
<head>
    <meta charset="utf-8">
    <title>login</title>
</head>

<body>
<?php
if (isset($_POST['submit'])) {
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $id = $_POST['id'];
    $phone = $_POST['ph'];
    $age = $_POST['age'];
    $subject = $_POST['sub'];
    $_SESSION['first'] = $firstname;
    $_SESSION['last'] = $lastname;
    $_SESSION['id'] = $id;
    $_SESSION['ph'] = $phone;
    $_SESSION['age'] = $age;
    $_SESSION['sub'] = $subject;
    if (isset($_FILES['file1'])) {
        $name = $_FILES['file1']['name'];
        $tmp = $_FILES['file1']['tmp_name'];

        if (move_uploaded_file($tmp, "pictures/$name")) {
            $_SESSION['pic'] = $name;
        }
        header('location: /profile.php');
    }
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <label>:نام خود را وارد کنید</label>
    <br/>
    <input type="text" name="fname">
    <br/>
    <label>:نام خانوادگی خود را وارد کنید</label>
    <br/>
    <input type="text" name="lname">
    <br/>
    <label>:کد دانش آموزی خود را وارد کنید</label>
    <br/>
    <input type="number" name="id">
    <br/>
    <label>:شماره تلفن همراه خود را وارد کنید</label>
    <br/>
    <input type="number" name="ph">
    <br/>
    <label>:سن خود را وارد کنید</label>
    <br/>
    <input type="number" name="age">
    <br/>
    <label>:رشته تحصیلی خود را وارد کنید</label>
    <br/>
    <input type="text" name="sub">
    <br/>
    <label>:عکس خود را وارد کنید</label>
    <br/>
    <input type="file" name="file1">
    <br/>
    <input type="submit" name="submit" value="login">
</form>
</body>
</html>
