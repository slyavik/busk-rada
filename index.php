<head>
    <meta charset="UTF-8">
    <title>Офіційний сайт Буської районної ради</title>
    <meta name="description" content="Busk’s district council">
    <meta name="keywords" content="Busk, district, council, Буськ, район, рада">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="images/tryzub.gif">
    <style type="text/css">

        body {
            background-image: url(images/bg.gif);
        }
        .стиль1 {font-family: "Times New Roman", Times, serif}
        .стиль3 {
            color: #FF3300;
            font-weight: bold;
        }
        .стиль6 {color: #FF0000}
        .стиль7 {color: #009966}
        .стиль8 {color: #003399}
        .стиль10 {font-family: "Times New Roman", Times, serif; color: #FFFFFF; }

    </style>
    <script type="text/javascript">
        <!--
        function MM_preloadImages() { //v3.0
            var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
                var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
                    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
        }

        function MM_findObj(n, d) { //v4.01
            var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
                d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
            if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
            for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
            if(!x && d.getElementById) x=d.getElementById(n); return x;
        }

        function MM_nbGroup(event, grpName) { //v6.0
            var i,img,nbArr,args=MM_nbGroup.arguments;
            if (event == "init" && args.length > 2) {
                if ((img = MM_findObj(args[2])) != null && !img.MM_init) {
                    img.MM_init = true; img.MM_up = args[3]; img.MM_dn = img.src;
                    if ((nbArr = document[grpName]) == null) nbArr = document[grpName] = new Array();
                    nbArr[nbArr.length] = img;
                    for (i=4; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
                        if (!img.MM_up) img.MM_up = img.src;
                        img.src = img.MM_dn = args[i+1];
                        nbArr[nbArr.length] = img;
                    } }
            } else if (event == "over") {
                document.MM_nbOver = nbArr = new Array();
                for (i=1; i < args.length-1; i+=3) if ((img = MM_findObj(args[i])) != null) {
                    if (!img.MM_up) img.MM_up = img.src;
                    img.src = (img.MM_dn && args[i+2]) ? args[i+2] : ((args[i+1])? args[i+1] : img.MM_up);
                    nbArr[nbArr.length] = img;
                }
            } else if (event == "out" ) {
                for (i=0; i < document.MM_nbOver.length; i++) {
                    img = document.MM_nbOver[i]; img.src = (img.MM_dn) ? img.MM_dn : img.MM_up; }
            } else if (event == "down") {
                nbArr = document[grpName];
                if (nbArr)
                    for (i=0; i < nbArr.length; i++) { img=nbArr[i]; img.src = img.MM_up; img.MM_dn = 0; }
                document[grpName] = nbArr = new Array();
                for (i=2; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
                    if (!img.MM_up) img.MM_up = img.src;
                    img.src = img.MM_dn = (args[i+1])? args[i+1] : img.MM_up;
                    nbArr[nbArr.length] = img;
                } }
        }
        //-->
    </script>
</head>
<body class="стиль3" onLoad="MM_preloadImages('images/booton/rada.gov.ua2.jpg','images/booton/rada.gov.ua.pos2.jpg','images/booton/President2.jpg','images/booton/Portal2.jpg','images/booton/golov-slujba2.jpg','images/booton/lviv-rada2.jpg','images/booton/ODA2.jpg','images/booton/Mindohodiv_baner2.jpg')">

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
                    <tr>
                        <td width="100%" height="1" background="images/body_bg.jpg" bgcolor="#FFFFFF" class="welcome">Ласкаво просимо на наш офіційний сайт! </td>
                        <td width="9"><img src="../../028/HTML/images/spacer.gif" width="1" height="1"><img src="images/spacer.gif" width="9" height="1"></td>
                    </tr>
                    <tr>
                        <td height="1" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td width="1"><img src="images/spacer.gif" width="20" height="1"></td>
                                    <td height="1" background="images/csep.gif" class="bgx"><img src="images/spacer.gif" width="1" height="1"></td>
                                    <td width="1"><img src="images/spacer.gif" width="9" height="1"></td>
                                </tr>
                            </table></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td width="100%" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td width="100%" valign="top" class="base_txt">
                                        <!--<p><span class="cname4 стиль1"><a href="arhiv/archiv_novyn_0.php">Звіт про виконання районного бюджету        за    2014 pік</a></span></p> -->

                                        <!-- <p><strong><a href="proektu/VI/2012/rozp_skl_20.doc"><font color="#FF0000">Розпорядження про скликання 20-ї сесії VІ-го скликання <br>
                                        27 грудня 2012 року</font></a></strong></p>  -->

                                        <p><span class="cname4"><span class="стиль1"><a href="arhiv/archiv_novyn_77.php"><strong>Служба безпеки України закликає громадян бути пильними щодо виявлення вибухових пристроїв</strong></a></p>
                                        <p><span class="cname4"><span class="стиль1"><a href="arhiv/archiv_novyn_61.php"><strong>Служба безпеки України закликає громадян бути пильними</strong></a></p>
                                        <p><span class="cname4"><span class="стиль1"><a href="arhiv/archiv_novyn_70.php"><strong> Увага, шахрайство!!! <br>
	    З приводу офіційного розміщення документів Буської районної ради та висвітлення діяльності її посадових осіб в мережі  INTERNET
 </strong></a></p>
                                        <p><span class="cname4"><span class="стиль1"><a href="arhiv/archiv_novyn_87.php">Незаконне зберігання зброї та засобів ураження – це злочин, за який законодавством передбачено кримінальну відповідальність</a></span></span></p>

                                        <p><span class="cname4"><span class="стиль1"><a href="arhiv/archiv_novyn_48.php">Про запровадження пілотного проекту у сфері державної реєстрації громадських формувань</a></span></span>

                                        <p><span class="cname4"><span class="стиль1"><a href="arhiv/archiv_novyn_55.php">Графік прийому громадян керівництвом Львівської обласної ради, депутатськими фракціями Львівської обласної ради VII скликання </a></span></span></p>

                                        <p><span class="cname4"><span class="стиль1"><a href="arhiv/archiv_novyn_67.php">Фінансова звітність закладів та установ освіти  </a></span></span></p>

                                        <p><span class="cname4"><span class="стиль10"><a href="arhiv/archiv_novyn_82.php">Реєстр лікарських засобів, вартість яких підлягає відшкодуванню <em>(по програмі "Доступні ліки)</em></a></span></span></p>

                                        <p class="стиль1"><a href="arhiv/archiv_novyn_68.php" class="стиль8">ЗВІТ голови Буської районної ради Богдана Глови за рік роботи (2017) на 21-й сесії VІІ-го скликання</a></p>

                                        <p class="стиль1"><a href="../novyny/zvit.pdf" class="стиль6">ЗВІТ голови Буської районної ради Богдана Глови за рік роботи (2018) на 29-й сесії VІІ-го скликання</a></p>

                                        <p class="стиль1"><a href="arhiv/archiv_novyn_0.php" class="стиль7">ОГОЛОШЕННЯ про проведення конкурсу на зайняття вакантної посади керівника КНП «Буська ЦРЛ»</a></p>


                                        <hr>
                                        <p align="center"><strong><em>Шановні земляки !<br>Мешканці славного Надбужжя!<br>
                                                    Вітаю Вас на офіційній інтернет-сторінці Буської  районної ради.</em></strong></p>
                                        <p style="font-size:15px"><img src="images/busik.jpg" alt="Лелека" width="200" height="158" align="left" hspace="5">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Ласкаво прошу відвідати наш чудовий лелечий  край, де Вас гостинно зустрінуть мої талановиті і працьовиті краяни &ndash; люди  відкритого серця, незламного українського духу, котрі своєю активною  громадянською позицією, конкретними справами утверджують незалежність молодої української Держави.<br>
                                            &nbsp;&nbsp;&nbsp; &laquo;Хто не знає минулого, той не вартий  майбутнього&raquo;, писав <img src="images/cerkva.jpg" alt="церква" width="200" height="151" align="right" hspace="5"> український поет М.Рильський. Іншими словами, кожна людина,  котра себе поважає, повинна знати історію свого народу, краю, в якому  народилася, походження роду. Тому велика увага в районі приділяється  духовності, відродженню національної культури, вивченню історичної спадщини.<br>
                                            <img src="images/petrushevych.jpg" alt="Петрушевич" width="100" height="170" align="left" hspace="5">&nbsp;&nbsp;&nbsp; Бузецька земля дала Україні видатних  політиків, громадських, культурних, духовних діячів. <br>
                                            &nbsp;&nbsp;&nbsp; Історія Бущини налічує понад півтора  тисячоліття. Вже в 1411 році Буськ одним з перших в Галичині, отримав  Магдебурзьке право. Невід'ємним атрибутом міського  самоуправління, став герб міста, на якому зображено бузька &ndash; лелеку.<br>
                                            &nbsp;&nbsp;&nbsp; Буськ має членство в асоціації міст України  та Львівщини, а також у Міжнародній неурядовій організації міст &ndash; ESKO, на  гербі яких зображено Лелеку, який є незмінним елементом не лише символіки  району, але й його символом. Саме тому разом  з відродженням <img src="images/gimnasiya.jpg" alt="Гімназія" width="200" height="150" align="right" hspace="5"> історичної пам`яті, чільне місце в районі приділяється  створенню належних умов для навчання та виховання молодого покоління - майбутнього  української нації.</p>
                                        <p style="font-size:15px">&nbsp;&nbsp; &nbsp;Отож, зичу усім міцного здоров`я, добрих звершень, миру, злагоди і достатку, успіхів на шляху розбудови  незалежної України!</p>
                                        <p>&nbsp;</p>
                                        <p>&nbsp;</p>
                                        <p>&nbsp;</p>
                                        <p>&nbsp;</p>
                                        <p>&nbsp;</p>
                                        <p>&nbsp;</p>
                                        <p>&nbsp;</p>
                                        <p> </p></td>
                                    <td valign="top"><table width="220" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td height="1"><img src="images/spacer.gif" width="1" height="15"></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td bgcolor="#F6DF9F" style="padding:10px"><img src="images/glova2.jpg" width="200" height="255">
                                                    <p align="center" class="welcome1">Голова <br>
                                                        Буської районної ради <br>
                                                        Богдан Глова </p>
                                                    <hr>
                                                    <table border="0" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td><a href="novyny.php"><img src="http://busk.com.ua/volya_narodu.files/journal.gif" width="50" height="50" border="0" ></a><a href="novyny.php" onClick="MM_nbGroup('down','group1','novyny','',1)" onMouseOver="MM_nbGroup('over','novyny','images/booton/novyny2.jpg','',1)" onMouseOut="MM_nbGroup('out')"><img src="images/booton/novyny.jpg" alt="Новини та діяльність голови районної ради" name="novyny" width="150" height="50" border="0" onload=""></a>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <hr>
                                                    <p align="center" class="cname1" >Державні<br>
                                                        веб-ресурси</p>
                                                    <table border="0" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td><a href="http://www.rada.gov.ua" target="_blank" onClick="MM_nbGroup('down','group1','rada_gov_ua','',1)" onMouseOver="MM_nbGroup('over','rada_gov_ua','images/booton/rada.gov.ua2.jpg','',1)" onMouseOut="MM_nbGroup('out')"><img src="images/booton/rada.gov.ua.jpg" alt="Верховна Рада України" name="rada_gov_ua" width="200" height="30" border="0" onload=""></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="http://zakon1.rada.gov.ua/cgi-bin/laws/main.cgi?user=a#Find" target="_blank" onClick="MM_nbGroup('down','group1','posuk_rada_go_ua','',1)" onMouseOver="MM_nbGroup('over','posuk_rada_go_ua','images/booton/rada.gov.ua.pos2.jpg','',1)" onMouseOut="MM_nbGroup('out')"><img src="images/booton/rada.gov.ua.pos.jpg" alt="Пошук Законодавства" name="posuk_rada_go_ua" width="200" height="30" border="0" onload=""></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="http://www.president.gov.ua" target="_blank" onClick="MM_nbGroup('down','group1','Prezydent','',1)" onMouseOver="MM_nbGroup('over','Prezydent','images/booton/President2.jpg','',1)" onMouseOut="MM_nbGroup('out')"><img src="images/booton/President.jpg" alt="Президент України" name="Prezydent" width="200" height="30" border="0" onload=""></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="http://www.kmu.gov.ua" target="_blank" onClick="MM_nbGroup('down','group1','Uryadovy_portal','',1)" onMouseOver="MM_nbGroup('over','Uryadovy_portal','images/booton/Portal2.jpg','',1)" onMouseOut="MM_nbGroup('out')"><img src="images/booton/Portal.jpg" alt="Урядовий Портал" name="Uryadovy_portal" width="200" height="30" border="0" onload=""></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="http://www.guds.gov.ua" target="_blank" onClick="MM_nbGroup('down','group1','Golov_derj_slujba','',1)" onMouseOver="MM_nbGroup('over','Golov_derj_slujba','images/booton/golov-slujba2.jpg','',1)" onMouseOut="MM_nbGroup('out')"><img src="images/booton/golov-slujba.jpg" alt="Головне управління державної служби України" name="Golov_derj_slujba" width="200" height="30" border="0" onload=""></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="http://www.oblrada.lviv.ua" target="_blank" onClick="MM_nbGroup('down','group1','Lviv_obl_rada','',1)" onMouseOver="MM_nbGroup('over','Lviv_obl_rada','images/booton/lviv-rada2.jpg','',1)" onMouseOut="MM_nbGroup('out')"><img src="images/booton/lviv-rada.jpg" alt="Львівська обласна рада" name="Lviv_obl_rada" width="200" height="30" border="0" onload=""></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="http://www.loda.gov.ua" target="_blank" onClick="MM_nbGroup('down','group1','Lviv_administraciya','',1)" onMouseOver="MM_nbGroup('over','Lviv_administraciya','images/booton/ODA2.jpg','',1)" onMouseOut="MM_nbGroup('out')"><img src="images/booton/ODA.jpg" alt="Львівська обласна державна адміністрація" name="Lviv_administraciya" width="200" height="30" border="0" onload=""></a></td>
                                                        </tr>
                                                        <tr>
                                                        <tr>
                                                            <td><a href="http://www.busk-rda.gov.ua" target="_blank" onClick="MM_nbGroup('down','group1','Busk_RDA','',1)" onMouseOver="MM_nbGroup('over','Busk_RDA','images/booton/RDA2.jpg','',1)" onMouseOut="MM_nbGroup('out')"><img src="images/booton/RDA.jpg" alt="Буська районна державна адміністрація" name="Busk_RDA" width="200" height="30" border="0" onload=""></a></td>
                                                        </tr>
                                                        <td><a href="http://www.busk-mistorada.gov.ua" target="_blank" onClick="MM_nbGroup('down','group1','Busk_mrada','',1)" onMouseOver="MM_nbGroup('over','Busk_mrada','images/booton/mistorada2.jpg','',1)" onMouseOut="MM_nbGroup('out')"><img src="images/booton/mistorada.jpg" alt="Буська міська рада" name="Busk_mrada" width="200" height="30" border="0" onload=""></a></td>
                                                        </tr>
                                                    </table><hr>
                                                    <a href="http://minrd.gov.ua/" target="_blank" onClick="MM_nbGroup('down','group1','Mindohodiv_baner','',1)" onMouseOver="MM_nbGroup('over','Mindohodiv_baner','images/booton/Mindohodiv_baner2.jpg','',1)" onMouseOut="MM_nbGroup('out')"><img src="images/booton/Mindohodiv_baner.jpg" alt="Міністерство доходів і зборів України" name="Mindohodiv_baner" width="200" border="0" onload=""></a>
                                                    <hr>
                                                    <a href="http://ato.lviv.ua/" target="_blank" ><img src="images/ato.png" width="200"></a>

                                                    <p></p>
                                                    <hr>
                                                    <p align="center" class="welcome1">Можливості Веб - порталу Ресурсного Центру зі  сталого місцевого розвитку </span><span style="font-family:'Times New Roman'; font-size:14.0pt; "><a href="http://rozvytok.in.ua">http://rozvytok.in.ua</a></span></p>
                                                    <hr>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p> </p>
                                                    <p> </p>
                                                    <p> </p>
                                                    <p> </p></td>
                                                <!--<td width="1"><img src="images/spacer.gif" width="9" height="1"></td>-->
                                            </tr>
                                        </table></td>
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

</body>


</html>