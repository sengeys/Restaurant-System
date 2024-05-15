<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restaurant | order</title>
    <!-- link style -->
    <?php include '../layouts/link-style.php'; ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Preloader -->
    <?php include '../layouts/preloader.php'; ?>
    <!-- Navbar -->
    <?php include '../layouts/navbar.php'; ?>
    <!-- Main Sidebar Container -->
    <?php include '../layouts/sidebar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">ORDER</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                            <li class="breadcrumb-item active">Order</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-header -->

        <!-- Connection with Database -->
        <?php include '../config/connection.php';?>


        <!-- Main content -->
        <form action="order.php" method="post" autocomplete="off">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="font-weight-bold text-success">Order Detail</h5>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Order ID <span class="text-danger">*</span></label>
                                                <!-- Order ID -->
                                                <?php
                                                    $sql = "SELECT ordid FROM tblorder ORDER BY ordid DESC LIMIT 1";
                                                    $result = mysqli_query($conn, $sql);
                                                    if ($result) {
                                                        while ($row = mysqli_fetch_array($result)) 
                                                            $id = $row["ordid"];
                                                ?>
                                                    <input required name="orderid" type="text" class="form-control" value="<?php echo $id + 1?>">
                                                <?php
                                                        
                                                    } else {
                                                        echo "Connection Faild";
                                                    }
                                                ?>
                                                


                                                <label>Order Date <span class="text-danger">*</span></label>
                                                <div class="input-group date" id="reservationdatetime"
                                                    data-target-input="nearest">
                                                    <!-- Order Date -->
                                                    <input required name="orderdate" type="text"
                                                        class="form-control datetimepicker-input"
                                                        data-target="#reservationdatetime" />
                                                    <div class="input-group-append" data-target="#reservationdatetime"
                                                        data-toggle="datetimepicker">
                                                        <div class="input-group-text">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Customer Name <span class="text-danger">*</span></label>
                                                <!-- Customer Name -->
                                                <select required name="customername" class="form-control select2" style="width: 100%;">
                                                    <?php
                                                        $sql = "SELECT * FROM tblcustomer";
                                                        $result = mysqli_query($conn, $sql);
                                                        if ($result) {
                                                            while ($row = mysqli_fetch_array($result)) {
                                                                $id = $row["cusid"];
                                                                $name = $row["cusname"];
                                                    ?>
                                                        <option value="<?php echo $id?>"> <?php echo $name?></option>
                                                    <?php
                                                            }
                                                        } else {
                                                            echo "Connection Faild";
                                                        }
                                                    ?>
                                                </select>

                                                <label>Staff Name <span class="text-danger">*</span></label>
                                                <!-- Staff Name -->
                                                <select required name="staffname" class="form-control select2" style="width: 100%;">
                                                    <?php
                                                        $sql = "SELECT * FROM tblstaff";
                                                        $result = mysqli_query($conn, $sql);
                                                        if ($result) {
                                                            while ($row = mysqli_fetch_array($result)) {
                                                                $id = $row["stid"];
                                                                $name = $row["stname"];
                                                    ?>
                                                        <option value="<?php echo $id?>"> <?php echo $name?></option>
                                                    <?php
                                                            }
                                                        } else {
                                                            echo "Connection Faild";
                                                        }
                                                    ?>
                                                </select>

                                                <label>Table Name <span class="text-danger">*</span></label>
                                                <!-- Table Name -->
                                                <select required name="tablename" class="form-control select2" style="width: 100%;">
                                                    <?php
                                                        $sql = "SELECT * FROM tbltable";
                                                        $result = mysqli_query($conn, $sql);
                                                        if ($result) {
                                                            while ($row = mysqli_fetch_array($result)) {
                                                                $id = $row["tblid"];
                                                                $name = $row["tblname"];
                                                    ?>
                                                        <option value="<?php echo $id?>"> <?php echo $name?></option>
                                                    <?php
                                                            }
                                                        } else {
                                                            echo "Connection Faild";
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <!-- Add Row Button -->
                                    <button type="button" class="btn btn-primary float-right" id="btnAddRow">
                                        <i class="nav-icon fas fa-plus"></i>
                                        Add Row
                                    </button>
                                </div>
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Item Name</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="itemrow">
                                            <tr>
                                                <td style="min-width: 8rem; width: 30%;">
                                                    <!-- Item Name -->
                                                    <select required name="itemname[]" class="form-control select2" style="width: 100%;">
                                                        <?php
                                                            $sql = "SELECT * FROM tblitem";
                                                            $result = mysqli_query($conn, $sql);
                                                            if ($result) {
                                                                while ($row = mysqli_fetch_array($result)) {
                                                                    $itemid = $row["itemid"];
                                                                    $itemname = $row["itemname"];
                                                        ?>
                                                            <option value="<?php echo $itemid?>"> <?php echo $itemname?></option>
                                                        <?php
                                                                }
                                                            } else {
                                                                echo "Connection Faild";
                                                            }
                                                        ?>
                                                    </select>
                                                </td>
                                                <td style="min-width: 8rem; width: 20%;">
                                                    <!-- Quantity -->
                                                    <input required name="quantity[]" type="text" class="form-control quantity">
                                                </td>
                                                <td style="min-width: 8rem; width: 20%;">
                                                    <div class="input-group">
                                                        <!-- Price -->
                                                        <input required name="price[]" type="text" class="form-control text-right price" value="">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">$</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td style="min-width: 8rem; width: 20%;">
                                                    <div class="input-group">
                                                        <!-- Total -->
                                                        <input required name="total[]" type="text" class="form-control text-right total" disabled>
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">$</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-right" style="min-width: 8rem; width: 10%;">
                                                    <!-- Delete Button -->
                                                    <button type="button" class="btn btn-danger" id="btnremoverow">
                                                        <i class="nav-icon fas fa-trash"></i>
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <span class="pt-2 float-right">Grand Total : </span>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="input-group" style="min-width: 10rem;">
                                                    
                                                    <!-- Grand Total -->
                                                    <input required name="grandtotal" type="text" class="form-control text-right" disabled>
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">$</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8"></div>
                                        <div class="col-sm-4">
                                            <div class="form-group  float-right">
                                                <div class="input-group">
                                                    <!-- Submit Button -->
                                                    <button  name="submit" type="submit" class="btn btn-success">
                                                        Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Model -->
            <div class="modal fade" id="modal-remove">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Delete</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="">
                            <div class="modal-body">
                                <div class="row">
                                    Do you want to delete?
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Delete</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
        </form>
        <!-- /.content -->
    </div>

    <!-- Main Footer -->
    <?php include '../layouts/footer.php'; ?>
    <!-- link script -->
    <?php include '../layouts/link-script.php'; ?>

    <!-- Script Add Row -->
    <script>

        $(document).ready(function () {
            // Style Add Row
            function selectaddrow () {
                //Initialize Select2 Elements
                $('.select2').select2();
                
                //Initialize Select2 Elements
                $('.select2bs4').select2({
                theme: 'bootstrap4'
                }); 
            }

            // Add row
            $("body").on("click", "#btnAddRow", function (){
                var row = `
                <tr>
                    <td style="min-width: 8rem; width: 30%;">
                        <!-- Item Name -->
                        <select required name="itemname[]" class="form-control select2 itemname" style="width: 100%;">
                            <?php
                                $sql = "SELECT * FROM tblitem";
                                $result = mysqli_query($conn, $sql);
                                if ($result) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        $itemid = $row["itemid"];
                                        $itemname = $row["itemname"];
                            ?>
                                <option value="<?php echo $itemid?>"> <?php echo $itemname?></option>
                            <?php
                                    }
                                } else {
                                    echo "Connection Faild";
                                }
                            ?>
                        </select>
                    </td>
                    <td style="min-width: 8rem; width: 20%;">
                        <!-- Quantity -->
                        <input required name="quantity[]" type="text" class="form-control quantity">
                    </td>
                    <td style="min-width: 8rem; width: 20%;">
                        <div class="input-group">
                            <!-- Price -->
                            <input required name="price[]" type="text" class="form-control text-right price" value="">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                        </div>
                    </td>
                    <td style="min-width: 8rem; width: 20%;">
                        <div class="input-group">
                            <!-- Total -->
                            <input required name="total[]" type="text" class="form-control text-right total" disabled>
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                        </div>
                    </td>
                    <td class="text-right" style="min-width: 8rem; width: 10%;">
                        <!-- Delete Button -->
                        <button type="button" class="btn btn-danger" id="btnremoverow">
                            <i class="nav-icon fas fa-trash"></i>
                            Delete
                        </button>
                    </td>
                </tr>
                `;
                $("#itemrow").append(row);
                GrandTotal();
                selectaddrow ();
            });

            // Remove Row
            $("body").on("click", "#btnremoverow", function () {
                $(this).closest("tr").remove();
                GrandTotal();
            });

            // Input Quantity
            $("body").on("keyup", ".quantity", function () {
                var quantity = Number($(this).val());
                var price    = Number($(this).closest("tr").find(".price").val());
                $(this).closest("tr").find(".total").val(price * quantity);
                GrandTotal();
            });

            // Input Price
            $("body").on("keyup", ".price", function () {
                var price    = Number($(this).val());
                var quantity = Number($(this).closest("tr").find(".quantity").val());
                $(this).closest("tr").find(".total").val(price * quantity);
                GrandTotal();
            });

            // Grand Total
            function GrandTotal(){
                var total = 0;

                $(".total").each(function(){
                    total += Number($(this).val());
                });

                document.getElementsByName("grandtotal")[0].value = total;
            }
        });
    </script>

</body>

</html>