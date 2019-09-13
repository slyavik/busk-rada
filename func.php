<?php
session_start();

if ($_SESSION['admin'] )
{
    header("location:edit.php");
    exit();
}
if (empty($_POST['login'] && $_POST['pass']))
{
    header("location:novyny.php");
    exit();
}

include 'connect_brrb.php';
$sql_logpass = "SELECT id, login, password  FROM logpass WHERE ID = 1";
$res_logpass = mysqli_query($conn, $sql_logpass);

$row_logpass = mysqli_fetch_assoc($res_logpass);

$admin = $row_logpass['login'];
$pass = $row_logpass['password'];

if ($_POST['logsubmit'])
{
    if ($admin == $_POST['login'] && $pass == md5($_POST['pass']) )
    {
        $_SESSION['admin'] = $admin ;
        header("location: edit.php");
        exit();
    }
    else  $messed1 =  "Логін та/або пароль не правильний!!!.";
          $messed2 = "Ваш IP записаний як IP зловмисника";
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Буська районна рада</title>
    <meta name="description" content="Busk’s district council">
    <meta name="keywords" content="Busk, district, council, Буськ, район, рада">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="images/triz.gif">
    <style type="text/css">
        body {
            background-image: url(images/bg.gif);
        }
    </style>
</head>

<body>

<!--тут був header-->
<table>
    <?php
    include ("parts/header.php");
    ?>

    <tr>
        <td height="100%" valign="top"><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">

                <!--тут був left-->
                <?php
                include ("parts/left.php");
                ?>

                <td valign="top"><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
                        <tr height="20px">
                            <td bgcolor="red" width="100%" bgcolor="#FFFFFF" class="welcome">УВАГА УВАГА.</td>
                            <td width="9"><img src="../../028/HTML/images/spacer.gif" width="1" height="1"><img src="images/spacer.gif" width="9" height="1"></td>
                        </tr>
                        <tr>
                            <td height="1" bgcolor="#FFFFFF" >
                                <table style="padding-left:  30px; padding-right: 30px" width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td height="1" background="images/csep.gif" class="bgx"></td>
                                    </tr>
                                </table>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td bgcolor="red" width="100%" height="400" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td height="219" valign="top" class="base_txt">
                                            <!--Contend-->
                                            <h1><?= $messed1 ?></h1>
                                            <h2><?= $messed2 ?></h2>
                                            <hr>
                                            <a href="novyny.php">Повернутися:</a>

                                            <!--end Contend-->
                                        </td>
                                    </tr>
                                </table></td>
                            <td valign="top">&nbsp;</td>
                        </tr>
                    </table></td>
                </tr>
            </table></td>
    </tr>

    <!--тут був footer-->
    <?php
    include ("parts/footer.php");
    ?>
    <img src="" height="250">
</table>
</body>


</html>


