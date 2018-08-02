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
                                <h4 class="title">Drone Mode Path</h4>
                                <p class="category">Drone Mode Path</p>
                            </div>
                            <div class="content">
                                <div id="chartPreferences" class="ct-chart ct-perfect-fourth">
                                    <video class='js-player video' poster="" controls playsinline>
                                        <source src="videos/video_drone_n.mp4" type="video/mp4">
                                    </video>
                                </div>

                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Open
                                        <i class="fa fa-circle text-danger"></i> Bounce
                                        <i class="fa fa-circle text-warning"></i> Unsubscribe
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
                                <h4 class="title">Ground Floor</h4>
                                <p class="category">Ground Floor</p>
                            </div>
                            <div class="content">
                                <div id="chartHours" class="ct-chart">
                                    <video class='js-player video' poster="" controls playsinline>
                                        <source src="videos/video_planta_baja_n.mp4" type="video/mp4">
                                    </video>
                                </div>
                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Open
                                        <i class="fa fa-circle text-danger"></i> Click
                                        <i class="fa fa-circle text-warning"></i> Click Second Time
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
            </div>
        </div>
        <?php require_once "section/footer.php" ?>
    </div>
</div>
</body>
<?php require_once "section/js_footer.php" ?>
</html>
