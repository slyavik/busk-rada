
    <?php

    include 'connect_brrb.php';

    $sql = "SELECT id, name, typenew, datanew, image1, image2, image3, temanew, textnew, conclusion FROM news ORDER by datanew DESC";
    $res = mysqli_query($conn, $sql);
