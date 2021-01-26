<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <!-- Import CSS from public folder -->
    <link rel="stylesheet" href=<?= base_url("css/style.css") ?>>
    <link rel="stylesheet" href=<?= base_url("css/bootstrap.css") ?>>
</head>

<body class="bg-grey">

    <!-- Include Header Nav Bar -->
    <?= $this->include("layout/header"); ?>
    <!-- End Nav Bar -->

    <!-- Render Section -->
    <?= $this->renderSection("content") ?>
    <!-- End Section -->

    <!-- Include Footer -->
    <?= $this->include("layout/footer"); ?>
    <!-- End Footer -->


    <!-- Import Script -->
    <script src=<?= base_url("js/jquery351.js") ?>></script>
    <script src=<?= base_url("js/bootstrap.js") ?>></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

</body>

</html>