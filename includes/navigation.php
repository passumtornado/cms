
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">MPB CAnteen</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-power-off"></i> Logout <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="Admin_interface.php?source=profileView"><i class="fa fa-fw fa-user"></i> myProfile</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="logout.php" name="logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse" id="myitem">
            <ul class="nav navbar-nav side-nav">
                <li class="active">
                    <a href="Admin_interface.php?source=default"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-users"></i> users <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="demo1" class="collapse">
                        <li>
                            <a href="Admin_interface.php?source=view_all_users">View all users</a>
                        </li>
                        <li>
                            <a href="Admin_interface.php?source=add_users">Add users</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo3"><i class="fa fa-fw fa-list"></i> Menu <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="demo3" class="collapse">
                        <li>
                            <a href="Admin_interface.php?source=menu">view menu</a>
                        </li>
                       
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-book"></i> Reports <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="demo" class="collapse">
                        <li>
                            <a href="admin_interface.php?source=report">genarate report</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="admin_interface.php?source=orders"><i class="fa fa-fw fa-shopping-cart"></i> Orders</a>
                </li>
                <li>
                    <a href="admin_interface.php?source=sales"><i class="fa fa-fw fa-briefcase"></i> Sales</a>
                </li>
                <li>
                    <a href="Admin_interface.php?source=inventory"><i class="fa fa-fw fa-file-o"></i> Inventory</a>
                </li>
                 <li>
                    <a href="Admin_interface.php?source=profile"><i class="fa fa-fw fa-edit"></i> Edit Profile</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>