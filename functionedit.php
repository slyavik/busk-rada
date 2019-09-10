"
    <?php

    include 'connect_brrb.php';

    if (isset($_POST['name']))
    {
         echo "<pre>"; print_r($_POST);
        $name = addslashes($_POST['name']);
        $typenews = addslashes($typenews['selection']);
        $datanew = addslashes($_POST['datanew']);
        $image1 = addslashes($_POST['image1']);
        $image2 = addslashes($_POST['image2']);
        $image3 = addslashes($_POST['image3']);
        $temanew = addslashes($_POST['temanew']);
        $textnew = addslashes($_POST['textnew']);
        $conclusion = addslashes($_POST['conclusion']);

        mysqli_query($conn,
            "INSERT INTO news (ID, name, typenew, datanew, image1, image2, image3, temanew, textnew, conclusion)
                    VALUES (0, '$name', '$typenews', '$datanew', '$image1', '$image2', '$image3', '$temanew', '$textnew', '$conclusion');");
        die("<h2>Запис додано <a href='edit.php'>В адмінку ...</a></h2>");

    }
    ?>
