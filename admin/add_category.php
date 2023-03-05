<?php include "./inc/header.php" ?>
<?php  include "../classes/Category.php"; ?>
<?php
    $inserted_row = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $cat = new Category();
        $inserted_row = $cat->add_category($_POST);
    }


?>

    <!--  Loader Ends -->
    <!--  Main Container Starts  -->
    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>
        <div class="rightbar-overlay"></div>
        <!--  Sidebar Starts  -->
        <?php include "./inc/sidebar.php"; ?>
        <!--  Sidebar Ends  -->
        <!--  Navbar Starts  -->
        <?php include "./inc/header_navbar.php"; ?>
        <!--  Navbar Ends  -->
        <!--  Content Area Starts  -->
        <div id="content" class="main-content">
            <!--  Navbar Starts / Breadcrumb Area  -->
            <div class="sub-header-container">
                <header class="header navbar navbar-expand-sm">
                    <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
                        <i class="las la-bars"></i>
                    </a>
                    <ul class="navbar-nav flex-row">
                        <li>
                            <div class="page-header">
                                <nav class="breadcrumb-one" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><span>Layouts</span></li>
                                    </ol>
                                </nav>
                            </div>
                        </li>
                    </ul>
                </header>
            </div>
            <!--  Navbar Ends / Breadcrumb Area  -->
            <!-- Main Body Starts -->
            <div class="layout-px-spacing">
                <div class="layout-top-spacing mb-2">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="container p-0">
                                <div class="row layout-top-spacing">
                                    <div class="col-lg-12 layout-spacing">
                                        <form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="post" enctype="multipart/form-data">
                                            <div class="statbox widget box box-shadow mb-4">
                                                <div class="widget-header">
                                                    <div class="row">
                                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                            <h4>Add Your Services</h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="widget-content widget-content-area">
                                                    <div class="form-group row">
                                                        <div class="col-md-12">
                                                            <h5><?php echo $inserted_row; ?></h5>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12">

                                                                <div class="form-group mb-2">
                                                                    <label class="col-form-label">Category Name</label>
                                                                    <input type="text" class="form-control" id="category_name" name="category_name" required >
                                                                    <!-- <span class="form-text text-muted">Please enter your full name</span> -->
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-footer text-right">
                                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                                    <button type="reset" class="btn btn-outline-primary">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  Content Area Ends  -->
        <!--  Rightbar Area Starts -->
       <?php include "./inc/right_bar.php" ?>
        <!--  Rightbar Area Ends -->
    </div>
<!-- Main Container Ends -->
<?php include "./inc/footer.php"; ?>

