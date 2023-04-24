<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--  -->
    <!-- link font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!--  -->
    <title>AdminMT</title>

    <link rel="stylesheet" href="css/style_adminmt.css">

</head>
<body>
    <h3 class="title_admin">Welcome AdminMT</h3>
    <div class="container">
    <?php
        include("config/connect.php");
        include("modules/header.php");
        include("modules/menu.php");
        include("modules/body.php");
        include("modules/footer.php");
    ?>

    </div>
</body>
</html>