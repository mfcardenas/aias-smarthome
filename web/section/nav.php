<nav class="navbar navbar-default navbar-fixed">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Virtual Tour</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-dashboard"></i>
                        <p class="hidden-lg hidden-md"></p>
                    </a>
                </li>
            </ul>
            <?php if (isset($_GET['act']) && ($_GET['act'] == "1" || $_GET['act'] == "2" )) { ?>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <p>
                                <i class="pe-7s-mouse"></i>
                                Navigation Controls
                                <b class="caret"></b>
                            </p>

                      </a>
                      <ul class="dropdown-menu">
                          <li>&nbsp;&nbsp;</li>
                          <li>&nbsp;&nbsp;Use the arrow keys</li>
                          <li>&nbsp;&nbsp;<img src="assets/img/img-key-controls.png" alt="Arrow Keys" title="Arrow Keys" width="125" height="70"/>&nbsp;</li>
                          <li>&nbsp;&nbsp;</li>
                          <li>&nbsp;&nbsp;or equivalent keys</li>
                          <li>&nbsp;&nbsp;</li>
                          <li>&nbsp;&nbsp;<img src="assets/img/img-key-controls-letters.png" alt="Letter Keys" title="Letter Keys" width="125" height="70"/>&nbsp;</li>
                          <li>&nbsp;&nbsp;</li>
                          <li>&nbsp;&nbsp;and the mouse</li>
                          <li>&nbsp;&nbsp;</li>
                          <li>&nbsp;&nbsp;<img src="assets/img/img-control-mouse.png" alt="Mouse Computer" title="Mouse Computer" width="125" height="70"/>&nbsp;</li>
                          <li>&nbsp;&nbsp;</li>
                      </ul>
                </li>
                <li class="separator hidden-lg"></li>
            </ul>
            <?php } ?>
        </div>
    </div>
</nav>