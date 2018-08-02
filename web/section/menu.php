<!--

    Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
    Tip 2: you can also add an image using data-image tag

-->

<div class="sidebar-wrapper">
    <div class="logo">
        <a href="http://www.aiasbo.it" class="simple-text" target="_blank">
            <img src="assets/img/logo-definitivo.png" alt="AIAS" title="AIAS" width="140" height="50"/>
        </a>
    </div>
    <?php
    $act_class = "1";
    if (isset($_GET['act'])) {
        $act_class = $_GET['act'];
    }
    ?>
    <ul class="nav">
        <li class="<?php if ($act_class == "1") {echo "active";}?>">
            <a href="ausilioteca.php?act=1" title="Ausilioteca Plane">
                <i class="pe-7s-home"></i>
                <p>SmartHome: Main Floor</p>
            </a>
        </li>
        <li class="<?php if ($act_class == "2") {echo "active";}?>">
            <a href="outdoor.php?act=2" title="Outdoor Plane">
                <i class="pe-7s-way"></i>
                <p>Outdoor Circuit</p>
            </a>
        </li>
        <li class="<?php if ($act_class == "3") {echo "active";}?>">
            <a href="videos_ausilioteca.php?act=3" title="Main Floor Videos">
                <i class="pe-7s-video"></i>
                <p>Main floor</p>
            </a>
        </li>
        <li class="<?php if ($act_class == "4") {echo "active";}?>">
            <a href="videos_garden.php?act=4" title="Outdoor Videos">
                <i class="pe-7s-video"></i>
                <p>Outdoor</p>
            </a>
        </li>
    </ul>
</div>