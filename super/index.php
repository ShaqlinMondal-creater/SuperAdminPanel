<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="table_cdn/Datatables/dataTables.css">
    <title>Admin Dashboard</title>
</head>

<body>
    
    <nav id="navv">
        <div class="logo">
            <div class="logo-image">
                <img src="logo.png" alt="logo">
            </div>
        </div>
        <div class="menu-items">
            <ul class="navLinks">
                <li class="navList active">
                    <a href="#">
                        <ion-icon name="home-outline"></ion-icon>
                        <span class="links">Dashboard</span>
                    </a>
                </li>
                <li class="navList">
                    <a href="#">
                        <ion-icon name="folder-outline"></ion-icon>
                        <span class="links">Content</span>
                    </a>
                </li>
                <li class="navList">
                    <a href="#">
                        <ion-icon name="analytics-outline"></ion-icon>
                        <span class="links">Analytics</span>
                    </a>
                </li>
                <li class="navList">
                    <a href="#">
                        <ion-icon name="heart-outline"></ion-icon>
                        <span class="links">Likes</span>
                    </a>
                </li>
                <li class="navList">
                    <a href="#">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                        <span class="links">Comments</span>
                    </a>
                </li>
            </ul>
            <ul class="bottom-link">
                <li>
                    <a href="#">
                        <ion-icon name="person-circle-outline"></ion-icon>
                        <span class="links">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="log-out-outline"></ion-icon>
                        <span class="links">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="container">
            <?php include("inc/overview.php"); ?>
            
            <!-- Recent Activities -->
            <div class="data-table activityTable">
                <?php include("inc/recent_activities.php"); ?>
            </div>
            
            <!-- Content -->
            <div style="display:none" class="data-table userDetailsTable">
                <?php include("inc/content.php"); ?>
            </div>

            <!-- Analytics -->
            <div style="display:none" class="data-table EditUserRole">
                <?php include("inc/analytics.php"); ?>
            </div>

            <!--  Likes -->
            <div style="display:none" class="data-table VehicleDetails">
                <?php include("inc/likes.php"); ?>
            </div>

            <!-- Commands section -->
            <div style="display:none" class="data-table downloads">
                <?php include("inc/commands.php"); ?>
            </div>

        </div>
    </section>

    <script src="index.js"></script>
    
    <!-- Sources for icons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    
    <!-- for table -->
    <script src="table_cdn/jquery/jquery-3.7.1.min.js"></script>
    <script src="table_cdn/Datatables/dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
</body>

</html>