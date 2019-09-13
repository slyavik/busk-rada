    <?php

    include 'connect_brrb.php';
    // Видалення
    if (isset($_GET['id_del']))
    {
        $conn -> query('DELETE FROM news WHERE id='.addslashes($_GET['id_del']));
        die("<h2>Видалення виконано <a href='edit_novyny.php'>В адмінку ...</a></h2>");
    }
    // Редагування новини

    if (isset($_GET['id']))
    {
        $id = $_GET['id'];

            $res = mysqli_query($conn,
                "SELECT id, name, typenew, datanew, image1, image2, image3, temanew, textnew, conclusion 
            FROM news WHERE ID = '$id'");
            $row = mysqli_fetch_assoc($res);
    //        echo "<pre>";
    //        print_r ($row);
            //die ($id);
    }

    if (isset($_POST['name']))
    {
                echo "<pre>"; print_r($_POST);
        $id = addslashes($_POST['id']);
        $name = addslashes($_POST['name']);
        $typenews = addslashes($_POST['selection']);
        $datanew = addslashes($_POST['datanew']);
        $image1 = addslashes($_POST['image1']);
        $image2 = addslashes($_POST['image2']);
        $image3 = addslashes($_POST['image3']);
        $temanew = addslashes($_POST['temanew']);
        $textnew = addslashes($_POST['textnew']);
        $conclusion = addslashes($_POST['conclusion']);


         mysqli_query($conn, "UPDATE news
             SET name='$name',
                 typenew='$typenews',
                 datanew='$datanew',
                 image1='$image1',
                 image2='$image2',
                 image3='$image3',
                 temanew='$temanew',
                 textnew='$textnew',
                 conclusion='$conclusion'
                 WHERE id ='$id' ");

        die("<h2>Запис ID: $id змінено <a href='edit_novyny.php'>В адмінку ...</a></h2>");

    }
    ?>


