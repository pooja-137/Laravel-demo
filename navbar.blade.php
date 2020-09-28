    <!-- Logo -->
    <a href="" class="logo">
  
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini" style="  font-weight: 800;
  font-size: 30px;padding: 2%;"><b><i class="fa fa-arrow-right" aria-hidden="true"></i></b></span>
        <!-- logo for regular state and mobile devices -->
       
        <span class="logo-lg">
            <b class="text-white;"> <?php echo "गुरुकृपा सॉफ्टवेअर";?></b>
        <img src="{{asset('img\miniGK.png')}}" class="img-fluid" style="max-height:30px;"  alt="avatar">
</span>

    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('img\profile.jpg')}}" class="user-image" alt="inf">
                        <span class="hidden-xs" ><?php  echo "दत्तराज  सुवार "?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{asset('img\profile.jpg')}}" class="img-circle" alt="inf">

                            <p>
                                <?php // $user['firstname'].' '.$user['lastname']; ?>
                                <small>Member since <?php // date('M. Y', strtotime($user['created_on'])); ?></small>
                            </p>
                        </li>
                        <li class="user-footer m-4">
                            <div class="pull-left">
                                <a href="#profile" data-toggle="modal" class="btn btn-default btn-flat" id="admin_profile"> <b class="text-white;"></b>Update</a>
                            </div>
                            <div class="pull-right">
                                <a href="" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
