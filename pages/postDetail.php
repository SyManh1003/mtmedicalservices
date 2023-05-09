<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/index_style.css">

    <title>Supplies</title>
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--  -->
    <!-- link font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!--  -->
    <link rel="stylesheet" href="../css/home_posts.css">
</head>
<body>
    <?php
        include_once("header.php");
    ?>
    
    <!-- START post details-->
    
    <div class="home-posts post-details sec">
        <div class="container">
            <div class="post-detail-main">
                <?php
                    if(isset($_REQUEST['idpost'])){
                        $id = $_REQUEST['idpost'];
                        include_once("../models/m_posts.php");
                        $p = new posts();
                        $p->load_detail_post($id);

                    }else{
                        echo'Chưa có thông tin sản phẩm <3';
                    }
                ?>
                
            </div>
        </div>
    </div>

    <?php
        include_once("footer.php");
    ?>
    <!-- END -->


</body>
</html>