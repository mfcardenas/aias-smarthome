<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>AIAS - Bologna Onlus</title>

	<?php require_once "section/header.php" ?>
    <script type="text/javascript">
        var homeUrl = "PlantabajaAusilioteca.zip";
    </script>
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
                                <h4 class="title">Main Floor</h4>
                                <p class="category">Virtual tour of the house. The tour can be done in two ways: from an aerial perspective and as a virtual visit.</p>
                                <hr>
                                <div class="legend">
                                    <input id="aerialView" class="viewerComponent" name="cameraType" type="radio" style="visibility: hidden;"/> Aerial View &nbsp;&nbsp;
                                    <input id="virtualVisit" class="viewerComponent" name="cameraType" type="radio" style="visibility: hidden;"/> Virtual visit
                                    <select id="levelsAndCameras" class="viewerComponent" style="visibility: hidden;"></select>
                                </div>
                                <hr>
                                <div id="viewerProgressDiv"
                                     style="width: 100%; position: relative; background-color: rgba(128, 128, 128, 0.7); padding: 20px; border-radius: 25px">
                                    <progress id="viewerProgress" class="viewerComponent" value="0" max="200" style="width: 100%"></progress>
                                    <label id="viewerProgressLabel" class="viewerComponent"
                                           style="margin-top: 2px; display: block; margin-left: 10px"></label>
                                </div>
                            </div>
                            <div id="content" class="content">
                                <canvas id="viewerCanvas" class="viewerComponent" tabIndex="1" width="800" height="400"></canvas>
                            </div>
                            <div class="footer">
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-clock-o"></i> Last visit: two hours ago
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
<?php require_once "section/js.php" ?>
<?php require_once "section/js_sh3d.php" ?>
</html>
