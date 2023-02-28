<?php session_start(); ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>profile</title>
</head>

<body>
<?php
$a = $_SESSION['pic'];
echo ":نام و نام خانوادگی";
echo "<br/>";
echo $_SESSION['first'];
echo " ";
echo $_SESSION['last'];
echo "<br/>";
echo ":کد دانش آموزی";
echo "<br/>";
echo $_SESSION['id'];
echo "<br/>";
echo ":شماره تلفن همراه";
echo "<br/>";
echo $_SESSION['ph'];
echo "<br/>";
echo ":سن";
echo "<br/>";
echo $_SESSION['age'];
echo "<br/>";
echo ":رشته تحصیلی";
echo "<br/>";
echo $_SESSION['sub'];
echo "<br/>";
echo "<img src='pictures/$a' alt='' width='500px' height='500px'/>";
?>
</body>
</html>
