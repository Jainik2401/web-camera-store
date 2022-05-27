    <!-- Right Panel -->
    
    <?php include "connection.php"; ?>
    <style type="text/css">
        
        .error{
            color: red;
        }

        .success{
            color: green;
        }

        .warning{
            color: orange;
        }

        #pp{
            margin-left: 18px;
            margin-top: 10px;
            margin-bottom: 0;
            font-size: 20px;
        }

        #err{
            margin-left: 18px;
            margin-top: 10px;
            margin-bottom: 15px;
            font-size: 20px;
        }

    </style>
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        
                        <div class="form-inline">
                            
                        </div>

                        <div class="dropdown for-notification">
                            
                        </div>

                        <div style="margin: -20px;">
                            
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    
                    <div class="user-area dropdown float-right">
                        
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
        <?php 
        // echo "<pre>";
        // print_r($_SESSION);
         ?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Welcome <?php echo $_SESSION['fname']; ?> <?php echo $_SESSION['lname']; ?></h1>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                       
                    </div>
                </div>
            </div>
                   </div>
    <!-- Right Panel -->