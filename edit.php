<?php
session_start();
    if ($_GET['do'] == 'logout')
        {
            unset($_SESSION['admin']);
            session_destroy();
                 }
    if (!$_SESSION['admin'])
        {
            header("location:novyny.php");
            exit();
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
                            <td width="100%" bgcolor="#FFFFFF" class="welcome">Адмінка для надсилання новин та оголошень.</td>
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
                            <td width="100%" height="400" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td height="219" valign="top" class="base_txt">
                                            <!--Contend-->
                                            <div class="contact-form">
                                                <div class="container">
                                                    <?php
                                                    include 'functionedit.php';
                                                    ?>
                                                    <form method="post" action="edit.php">
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-3">
                                                                <h1 style="color: #005cbf">Створення новини</h1>
                                                                <br>
                                                                <a href="edit_novyny.php"><div class="mybutton">Редагування та видалення новин</div></a>
                                                                <a href="edit.php?do=logout"><div class="mybutton">Вихід з адмінки</div></a>
                                                            </div>
                                                            <div class="col-md-12 col-lg-9 right">
                                                                <div class="form-group">
                                                                    <input type="text" name="name" placeholder="Назва" class="form-control form-control-lg">
                                                                </div>
                                                                <div class="form-group row">
                                                                    <lebel for="sel" class="col-lg-3 col-from-label">Виберіть тип новини:</lebel>
                                                                    <div class="col-lg-9 from-select">
                                                                        <select id="sel" name="selection">

                                                                            <option>новина</option>
                                                                            <option>оголошенння</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="mydate" class="col-lg-3 col-form-label">Дата повідомлення</label>
                                                                    <div class=" col-lg-9">
                                                                        <input name="datanew" class="form-control" type="date" id="mydate">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" name="image1" placeholder="Посилання на зображення № 1" class="form-control form-control-lg">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" name="image2" placeholder="Посилання на зображення № 2" class="form-control form-control-lg">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" name="image3" placeholder="Посилання на зображення № 3" class="form-control form-control-lg">
                                                                </div>
                                                                <div class="form-group">
                                                                    <textarea name="temanew" rows="3" class="form-control form-control-lg" placeholder="Тема повідомлення"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <textarea name="textnew" rows="5" class="form-control form-control-lg" placeholder="Текст повідомлення"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="conclusion" type="text" placeholder="Висновок" class="form-control form-control-lg">
                                                                </div>
                                                                <input type="submit" name="submit" class="btn btn-primary btn-block" value="Опублікувати">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
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