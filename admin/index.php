<?php include('../admin/partials/menu.php') ?>
    <!-- main content -->
    <div class="main-content">
    <div class="wrapper">
            <h1>DASHBOARD</h1>

            <?php 
            if(isset($_SESSION['login']))
            {
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            }
        ?>

            <div class="col-4 text-center">
                <h1>5</h1>
                <br>
                Categories
            </div>
            <div class="col-4 text-center">
                <h1>5</h1>
                <br>
                Categories
            </div>
            <div class="col-4 text-center">
                <h1>5</h1>
                <br>
                Categories
            </div>
            <div class="col-4 text-center">
                <h1>5</h1>
                <br>
                Categories
            </div>
           <div class="clearfix"></div>

        </div>
    </div>
<?php include('../admin/partials/footer.php') ?>