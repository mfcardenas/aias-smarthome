<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>AIAS - Bologna Onlus</title>

	<?php require_once "section/header.php" ?>

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
                            </div>
                            <div class="content">
                                <div class="footer">
                                    <div class="legend">
                                        <input id="aerialView" class="viewerComponent" name="cameraType" type="radio" style="visibility: hidden;"/> Aerial View &nbsp;&nbsp;
                                        <input id="virtualVisit" class="viewerComponent" name="cameraType" type="radio" style="visibility: hidden;"/> Virtual visit
                                        <select id="levelsAndCameras" class="viewerComponent" style="visibility: hidden;"></select>
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> Last visit: two hours ago
                                    </div>
                                </div>
                                <!-- Copy the following canvas and components in your page, changing their size / texts and other values if needed  -->
                                <div id="viewerProgressDiv"
                                     style="width: 100%; position: relative; background-color: rgba(128, 128, 128, 0.7); padding: 20px; border-radius: 25px">
                                    <progress id="viewerProgress" class="viewerComponent" value="0" max="200" style="width: 100%"></progress>
                                    <label id="viewerProgressLabel" class="viewerComponent"
                                           style="margin-top: 2px; display: block; margin-left: 10px"></label>
                                </div>

                                <canvas id="viewerCanvas" class="viewerComponent" width="600" height="400"  style="background-color: #CCCCCC; border: 1px solid gray; outline:none" tabIndex="1"></canvas>
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
<?php require_once "section/js_sh3d.php" ?>
</html>
