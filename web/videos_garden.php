<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>AIAS - Bologna Onlus</title>

    <?php require_once "section/header.php" ?>

    <link rel="stylesheet" href="assets/css/plyr.css"/>
    <script src="assets/js/plyr.js"></script>
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Evaluation and training course for driving skills with electromechanical travel controllers</h4>
                            </div>
                        </div>
                        <div class="content">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Driving route</h4>
                                <p class="category">Blue tour of the circuit</p>
                            </div>
                            <div class="content">
                                <video class='js-player video bluet' poster="" controls playsinline>
                                    <source src="videos/video_garden_ausilioteca_blue_tour.mp4" type="video/mp4">
                                </video>

                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i>
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Driving route</h4>
                                <p class="category">Yellow tour of the circuit</p>
                            </div>
                            <div class="content">
                                <video class='js-player video yellowt' poster="" controls playsinline>
                                    <source src="videos/video_garden_ausilioteca_yellow_tour.mp4" type="video/mp4">
                                </video>
                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-yellow"></i>
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
                                <h4 class="title">Driving route</h4>
                                <p class="category">Black tour of the circuit</p>
                            </div>
                            <div class="content">
                                <video class='js-player video blackt' poster="" controls playsinline>
                                    <source src="videos/video_garden_ausilioteca_black_tour.mp4" type="video/mp4">
                                </video>

                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-black"></i>
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
                                <h4 class="title">Aerial view (Drone Mode)</h4>
                                <p class="category">Virtual tour from the air</p>
                            </div>
                            <div class="content">
                                <video class='js-player video greent' poster="" controls playsinline>
                                    <source src="videos/video_garden_dron.mp4" type="video/mp4">
                                </video>
                                <div class="footer">
                                    <div class="legend">
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
</html>
