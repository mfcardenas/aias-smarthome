<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>AIAS - Bologna Onlus</title>

    <?php require_once "section/header.php" ?>

    <link rel="stylesheet" href="https://cdn.plyr.io/3.2.0/plyr.css"/>
    <script src="https://cdn.plyr.io/3.2.0/plyr.js"></script>
    <script>/*<![CDATA[*/const players = Array.from(document.querySelectorAll('.js-player')).map(player => new Plyr(player));/*]]>*/</script>

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="">
        <?php require_once "section/menu.php" ?>
    </div>

    <div class="main-panel">
        <?php require_once "section/nav.php" ?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Video of the garden</h4>
                                <!--<p class="category">Blue Tour of the circuit</p>-->
                            </div>
                            <div class="content">
                                <div class="ct-chart ct-perfect-fourth">
                                    <video class='js-player video' poster="" controls playsinline>
                                        <source src="videos/video_garden_ausilioteca_blue_tour.mp4" type="video/mp4">
                                    </video>
                                </div>

                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Blue Tour of the circuit
                                        <!--<i class="fa fa-circle text-danger"></i> Bounce-->
                                        <!--<i class="fa fa-circle text-warning"></i> Unsubscribe-->
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Video of the garden</h4>
                                <!--<p class="category"></p>-->
                            </div>
                            <div class="content">
                                <div class="ct-chart">
                                    <video class='js-player video' poster="" controls playsinline>
                                        <source src="videos/video_garden_ausilioteca_blue_tour.mp4" type="video/mp4">
                                    </video>
                                </div>
                                <div class="footer">
                                    <div class="legend">
                                        <!--<i class="fa fa-circle text-info"></i> Open-->
                                        <!--<i class="fa fa-circle text-danger"></i>-->
                                        <i class="fa fa-circle text-yellow"></i> Yellow Tour of the circuit
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Video of the garden</h4>
                                <!--<p class="category">Blue Tour of the circuit</p>-->
                            </div>
                            <div class="content">
                                <div class="ct-chart ct-perfect-fourth">
                                    <video class='js-player video' poster="" controls playsinline>
                                        <source src="videos/video_garden_ausilioteca_blue_tour.mp4" type="video/mp4">
                                    </video>
                                </div>

                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-black"></i> Black Tour of the circuit
                                        <!--<i class="fa fa-circle text-danger"></i> Bounce-->
                                        <!--<i class="fa fa-circle text-warning"></i> Unsubscribe-->
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> Updated 1 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">View in Dron mode</h4>
                                <!--<p class="category"></p>-->
                            </div>
                            <div class="content">
                                <div class="ct-chart">
                                    <video class='js-player video' poster="" controls playsinline>
                                        <source src="" type="video/mp4">
                                    </video>
                                </div>
                                <div class="footer">
                                    <div class="legend">
                                        <!--<i class="fa fa-circle text-info"></i> Open-->
                                        <!--<i class="fa fa-circle text-danger"></i>-->
                                        <i class="fa fa-circle text-danger"></i>
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Updated 1 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once "section/footer.php" ?>
    </div>
</div>
</body>
<?php require_once "section/js_footer.php" ?>
</html>
