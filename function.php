
    <?php

    include 'connect_brrb.php';

    $sql = "SELECT id, name, typenew, datanew, image1, image2, image3, temanew, textnew FROM news ORDER by id DESC";
    $res = mysqli_query($conn, $sql);
