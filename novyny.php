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
        .body-my {
            background-image: url(images/bg.gif);
            border-radius: 6px;
            margin-bottom: 10px;
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
                            <td width="100%" bgcolor="#FFFFFF" class="welcome">Новини та діяльність голови районної ради у 2019 році.</td>
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
<div class="container mycontainer">
    <div class="row">
        <div class="col-xl-10">
            <div class="container"> <!--Ліва колнка для новин-->

                <?php include 'function.php';
                while ($row = mysqli_fetch_assoc($res))
                {
                ?>
                <div class="card md-3 mycard">  <!--Картка новин-->
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold"><?= $row['name'] ?></h5>
                                <h6 class="font-weight-bold" align="right"><?=date('d-m-Y', strtotime($row['datanew']))  ?></h6>


                                <?php
                                if (!empty($row['image1'])) {
                                    echo '<div class="mycardimage"><img src=" '. $row['image1'] .'" alt=""></div>' ;
                                }
                                if (!empty($row['image2'])) {
                                    echo '<div class="mycardimage"><img src=" '. $row['image2'] .'" alt=""></div>' ;
                                }
                                if (!empty($row['image3'])) {
                                    echo '<div class="mycardimage"><img src=" '. $row['image3'] .'" alt=""></div>' ;
                                }
                                ?>
                                <p class="card-title font-weight-bold"><?= $row{"temanew"} ?></p>
                                <p class="card-text"><?= $row['textnew'] ?></p>
                                <?php
                                if (isset($row['conclusion'])) {
                                    echo '<p class="card-text" align="right"><small class="text-muted">'.$row['conclusion'].'</small></p>';
                                }
                                ?>
                                <!-- <p class="card-text" align="right"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                            </div>
                </div>
                <? } ?>

                <div class="card md-3 mycard">  <!--Картка новин-->
                    <div class="card-body">
                        <div class="mycardimage">
                            <img src="https://via.placeholder.com/300x200" alt="">
                        </div>
                        <div class="mycardimage">
                            <img src="https://via.placeholder.com/300" alt="">
                        </div>
                        <div class="mycardimage">
                            <img src="https://via.placeholder.com/200x300" alt="">
                        </div>
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Thisds fds fdsf dsf dsf ewg rg ag fdagfagfd agdfag dfag fgadfgfdgifdgfd gfg dfg fdagfdag fdag fdagfd agfdag fdagfdh gfhgh a fh shg shgsgfdahfdahfdakhfkdahkah fhahfdahdhg jhhjhdjhfjhdjg djgjhgdjhgdjg shgfshgshgfsj hjghdjhkhsdh sghgshgjjkjk jfkdkhdghgf hgjhgkhshsgh gjdgjshjyhg jd gh treh tth fhgfigwgjjsgrfjgow gtgeruw eruiwg rehguerigh rgueriw fhugurkskrighr hguririogh rhguerfierhg uurifhd 4y8qohfrue tyuriqofuier heuqiofiewh equioeiwu hruewiqoiueh heuqiofuie reuqoieuh heuiieuh hewuiqoieu hfuiqoewuihf heuiofiewuh heuqioiqewu fheuqoiuewh hfewuiqoei hfheuioiewuh heuoqiu ehfheuqi is a wider card with ппавпку  пквып кпкв пкр кфпк рек онео ныр аыо лпрл впонв ееыреырекрекрекыреsupporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text" align="right"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="order-first order-xl-0 col-xl-2 body-my"> <!--Права колонка-->
            <div class="sticky-top">
                <script>
                    $(document).ready(function() {
                        $("#slider1").click(function() {
                            $("#slid1").slideToggle("slow");
                        })
                    })
                </script>
                <div id="slider1" class="slider1button">
                    Параметри новин
                </div>
                <div class="row my-marg">
                    <div id="slid1" class="col my-none d-xl-block">
                        По даті:
                        <form action="novyny.php">
                            <input type="date">
                        </form>
                    </div>
                </div>
                <script>
                    $(document).ready(function() {
                        $("#slider2").click(function() {
                            $("#slid2").slideToggle("slow");
                        })
                    })
                </script>
                <div id="slider2" class="slider1button">
                    Для новини
                </div>
                <div class="row my-marg">
                    <div id="slid2" class="col my-none">
                        <div class="container">
                            <!-- Button to Open the Modal -->
                            <br>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Додати
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Авторизація</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body contact-form">
                <form action="func.php" method="post">
                    <div class="form-group">
                        <input type="text" name="login" placeholder="Ваш логін:" class="form-control form-control-lg">
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass" placeholder="Ваш пароль:" class="form-control form-control-lg">
                    </div>
                    <div style="float: right">
                    <input type="submit" name="logsubmit" class="btn btn-primary" value="Відправити">
                    </div>
            </div>
                </form>
        </div>
    </div>
</div>

</body>


</html>