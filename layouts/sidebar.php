<?php
    try{
        // include connection db
        include('../config/database/connection.php');

        $staff_name = "";

        if($_SESSION['user_id']){
            $user_id = $_SESSION['user_id'];

            $sql = "SELECT * FROM tbluser INNER JOIN tblstaff ON tblstaff.staff_id = tbluser.user_id WHERE user_id = " . $user_id;

            $fetch_query = mysqli_query($conn, $sql);

            $row = mysqli_num_rows($fetch_query);

            if ($row > 0){
                $result = mysqli_fetch_array($fetch_query);

                $staff_name = $result['staff_name'];
            }
        }
        
        $conn->close();
    }catch(Exception $ex){

    }
?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../pages/dashboard.php" class="brand-link">
        <img src="../dist/img/RestaurantLogo.png" alt="Restaurant Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">RESTAURANT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="myaccount.php" class="d-block"><?php echo $staff_name;?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="../pages/dashboard.php" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="../pages/customer.php" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Customer
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="../pages/item.php" class="nav-link">
                        <i class="nav-icon fa-brands fa-product-hunt"></i>
                        <p>
                            Item
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="../pages/staff.php" class="nav-link">
                        <i class="nav-icon fas fa-user-group"></i>
                        <p>
                            Staff
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="../pages/table.php" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Table
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="../pages/order.php" class="nav-link">
                        <i class="nav-icon fas fa-cart-arrow-down"></i>
                        <p>
                            Order
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="../pages/payment.php" class="nav-link">
                        <i class="nav-icon fas fa-credit-card"></i>
                        <p>
                            Payment
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-gear"></i>
                        Setting
                        <i class="right fas fa-angle-right"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../pages/myaccount.php" class="nav-link">
                                <i class="nav-icon fas fa-circle-user"></i>
                                <p>My Account</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../pages/logout.php" class="nav-link">
                            <i class="nav-icon fas fa-share-from-square"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>