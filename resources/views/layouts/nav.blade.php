
<!--Double navigation-->
<header>
    <!-- Sidebar navigation -->
    <ul id="slide-out" class="side-nav custom-scrollbar">
        <!-- Logo -->
        <li>
            <div class="logo-wrapper waves-light">
                <a href="#"><img src="img/gecko.png" class="img-fluid flex-center"></a>
            </div>
            <p class="text-center">Irongecko Productions</p>
        </li>
        <!--/. Logo -->
        <!--Social-->
        <li>
            <ul class="social">
                <li><a class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a></li>
                <li><a class="icons-sm pin-ic"><i class="fa fa-pinterest"> </i></a></li>
                <li><a class="icons-sm gplus-ic"><i class="fa fa-google-plus"> </i></a></li>
                <li><a class="icons-sm tw-ic"><i class="fa fa-twitter"> </i></a></li>
            </ul>
        </li>
        <!--/Social-->
        <!--Search Form-->
<!--        <li>
            <form class="search-form" role="search">
                <div class="form-group waves-light">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </form>
        </li>-->
        <!--/.Search Form-->
        <!-- Side navigation links -->
        <li>
            <ul class="collapsible collapsible-accordion">
                <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-chevron-right"></i> Submit blog<i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="#" class="waves-effect">Submit listing</a>
                            </li>
                            <li><a href="#" class="waves-effect">Registration form</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-hand-pointer-o"></i> Instruction<i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="#" class="waves-effect">For bloggers</a>
                            </li>
                            <li><a href="#" class="waves-effect">For authors</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-eye"></i> About<i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="#" class="waves-effect">Introduction</a>
                            </li>
                            <li><a href="#" class="waves-effect">Monthly meetings</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-envelope-o"></i> Contact me<i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="#" class="waves-effect">FAQ</a>
                            </li>
                            <li><a href="#" class="waves-effect">Write a message</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <!--/. Side navigation links -->
        <div class="sidenav-bg mask-strong"></div>
    </ul>
    <!--/. Sidebar navigation -->
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-dark scrolling-navbar double-nav">
        <!-- SideNav slide-out button -->
        <div class="float-left">
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
        </div>
        <!-- Breadcrumb-->
        <div class="breadcrumb-dn mr-auto">
            <p>Irongecko Productions</p>
        </div>
        <ul class="nav navbar-nav nav-flex-icons ml-auto">
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light" data-toggle="modal" data-target="#modal-contact"><i class="fa fa-envelope"></i> <span class="hidden-sm-down">Contact</span></a>
               
            </li>
            <li class="nav-item">
                <a class="nav-link"><i class="fa fa-comments-o"></i> <span class="hidden-sm-down">Support</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link"><i class="fa fa-user"></i> <span class="hidden-sm-down">Account</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
    </nav>
    <!-- /.Navbar -->
    <!-- Modal Contact -->
        <div class="modal fade modal-ext" id="modal-contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <!--Content-->
                <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Write to us</h4>
                    </div>
                    <!--Body-->
                    <div class="modal-body">
                        <p>We like to receive a messages.</p>
                        <br>
                        <div class="md-form">
                            <i class="fa fa-user prefix"></i>
                            <input type="text" id="form22" class="form-control">
                            <label for="form42">Your name</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-envelope prefix"></i>
                            <input type="text" id="form32" class="form-control">
                            <label for="form34">Your email</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-tag prefix"></i>
                            <input type="text" id="form32" class="form-control">
                            <label for="form34">Subject</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-pencil prefix"></i>
                            <textarea type="text" id="form8" class="md-textarea"></textarea>
                            <label for="form8">Icon Prefix</label>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-primary">Submit</button>

                            <div class="call">
                                <p>Or would you prefer to call? <span class="cf-phone"><i class="fa fa-phone"></i>+01 234 565 280</span></p>
                            </div>
                        </div>
                    </div>
                    <!--Footer-->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>
        <!--/ Modal contact -->
</header>
<!--/.Double navigation-->

