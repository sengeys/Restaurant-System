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
    <?//php include '../layouts/preloader.php'; ?>
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

        <!-- Main content -->            
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="font-weight-bold text-success">Order Detail</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <!-- Order Date -->
                                            <label>Order Date <span class="text-danger">*</span></label>
                                            <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                                                <input id="order_date" name="order_date" type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime" />
                                                <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Staff Name -->
                                            <label>Staff Name <span class="text-danger">*</span></label>
                                            <select id="staff_id" name="staff_id" class="form-control select2" style="width: 100%;">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <!-- Customer Name -->
                                            <label>Customer Name <span class="text-danger">*</span></label>
                                            <select id="customer_id" name="customer_id" class="form-control select2" style="width: 100%;"></select>

                                            <!-- Table Name -->
                                            <label>Table Name <span class="text-danger">*</span></label>
                                            <select id="table_id" name="table_id"  class="form-control select2" style="width: 100%;"> </select>
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
                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="font-weight-bold text-success">Item Detail</h5>
                                    </div>
                                    <div class="col-6">
                                        <!-- Add Row Button -->
                                        <button type="button" class="btn btn-primary float-right" id="add_new_btn">
                                            <i class="nav-icon fas fa-plus"></i>
                                            Add Row
                                        </button>
                                    </div>
                                </div>
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
                                    <tbody id="row_item_detail">
                                        <tr>
                                            <td style="min-width: 8rem; width: 30%;">
                                                <!-- Item Name -->
                                                <select id="item_id" name="item_id" class="form-control select2" style="width: 100%;">
                                                    <option value="">Select Item</option>
                                                </select>
                                            </td>
                                            <td style="min-width: 8rem; width: 20%;">
                                                <!-- Quantity -->
                                                <input id="quantity" name="quantity" type="text" class="form-control quantity">
                                            </td>
                                            <td style="min-width: 8rem; width: 20%;">
                                                <div class="input-group">
                                                    <!-- Price -->
                                                    <input id="price" name="price" type="text" class="form-control text-right price" value="">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">$</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="min-width: 8rem; width: 20%;">
                                                <div class="input-group">
                                                    <!-- Total -->
                                                    <input id="total" name="total" type="text" class="form-control text-right total" disabled>
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">$</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right" style="min-width: 8rem; width: 10%;">
                                                <!-- Delete Button -->
                                                <button type="button" id="delete_btn" class="btn btn-danger">
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
                                                <input id="grand_total" name="grand_total" type="text" class="form-control text-right" disabled>
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
                                                <button type="submit" id="insert_submit"  name="insert_submit" class="btn btn-success">
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
        <div class="modal fade" id="modal-delete">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Delete</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            Do you want to delete?
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="delete_submit">Delete</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    <!-- /.content -->
    </div>

    <!-- Main Footer -->
    <?php include '../layouts/footer.php'; ?>
    <!-- link script -->
    <?php include '../layouts/link-script.php'; ?>

    <!-- JQuery -->
     <script>
        $(document).ready(function () {
            //Initialize Select2 Elements
            $('.select2').select2();

            // Call Function : Loat Data To Box
            SelectDataToBoxOrderDetail ();
        });

        // Loat Data To Box Order Detail
        function SelectDataToBoxOrderDetail (){
            // staff
            $.ajax({
                url: '../config/order/get_staff_to_box.php',
                type: 'POST',
                success: function(data) {
                    $("#staff_id").html(data);
                },
            });

            // customer
            $.ajax({
                url: '../config/order/get_customer_to_box.php',
                type: 'POST',
                success: function(data) {
                    $("#customer_id").html(data);
                },
            });

            // customer
            $.ajax({
                url: '../config/order/get_table_to_box.php',
                type: 'POST',
                success: function(data) {
                    $("#table_id").html(data);
                },
            });
        }

        // Loat Data To Box Item Detail
        function SelectDataToBoxItemDetail (){
            // Item
            
        }



     </script>
</body>

</html>