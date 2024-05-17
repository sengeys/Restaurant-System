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

        <!-- Connection with Database -->


        <!-- Main content -->
        <form action="order.php" method="post" autocomplete="off">
            
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
                                                <label>Order ID <span class="text-danger">*</span></label>
                                                <!-- Order ID -->
                                                <input required name="orderid" type="text" class="form-control" value="">
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

                                                <!-- Staff Name -->
                                                <label>Staff Name <span class="text-danger">*</span></label>
                                                <select required name="staffname" id="select_staff" class="form-control select2" style="width: 100%;"></select>

                                                <!-- Customer Name -->
                                                <label>Customer Name <span class="text-danger">*</span></label>
                                                <select required name="customername" id="select_customer" class="form-control select2" style="width: 100%;"></select>

                                                <!-- Table Name -->
                                                <label>Table Name <span class="text-danger">*</span></label>
                                                <select required name="tablename" id="select_table" class="form-control select2" style="width: 100%;"> </select>
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
                                            <button type="button" class="btn btn-primary float-right" id="btnAddRow">
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
                                        <tbody id="itemrow">
                                            <tr>
                                                <td style="min-width: 8rem; width: 30%;">
                                                    <!-- Item Name -->
                                                    <select required name="itemname[]" id="select_item" class="form-control select2" style="width: 100%;">
                                                        <option value="">Select Item</option>
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

            // list staff to select option
            $.ajax({
                url: '../config/select/select_staff.php',
                type: 'POST',
                dataType: 'json',
                success: function(data) {
                    var select_staff = $('#select_staff');
                    $.each(data, function(index, staff) {
                        var row = 
                        $('<option value=""></option>');
                        $('<option value=""></option>').val(staff.staff_id).appendTo(row);
                        $('<option value=""></option>').text(staff.staff_name).appendTo(row);
                        select_staff.append(row);
                    });
                },
                error: function() {
                    alert('Failed to fetch data.');
                }
            });

            // list customer to select option
            $.ajax({
                url: '../config/select/select_customer.php',
                type: 'POST',
                dataType: 'json',
                success: function(data) {
                    var select_customer = $('#select_customer');
                    $.each(data, function(index, customer) {
                        var row = 
                        $('<option value=""></option>');
                        $('<option value=""></option>').val(customer.customer_id).appendTo(row);
                        $('<option value=""></option>').text(customer.customer_name).appendTo(row);
                        select_customer.append(row);
                    });
                },
                error: function() {
                    alert('Failed to fetch data.');
                }
            });

            // list table to select option
            $.ajax({
                url: '../config/select/select_table.php',
                type: 'POST',
                dataType: 'json',
                success: function(data) {
                    var select_table = $('#select_table');
                    $.each(data, function(index, table) {
                        var row = 
                        $('<option value=""></option>');
                        $('<option value=""></option>').val(table.table_id).appendTo(row);
                        $('<option value=""></option>').text(table.table_name).appendTo(row);
                        select_table.append(row);
                    });
                },
                error: function() {
                    alert('Failed to fetch data.');
                }
            });

            // list Item to select option
            $.ajax({
                url: '../config/select/select_item.php',
                type: 'POST',
                dataType: 'json',
                success: function(data) {
                    var select_item = $('#select_item');
                    $.each(data, function(index, item) {
                        var row = 
                        $('<option value=""></option>');
                        $('<option value=""></option>').val(item.item_id).appendTo(row);
                        $('<option value=""></option>').text(item.item_name).appendTo(row);
                        select_item.append(row);
                    });
                },
                error: function() {
                    alert('Failed to fetch data.');
                }
            });

            // Add row
            $("body").on("click", "#btnAddRow", function (){
                var row = `
                <tr>
                    <td style="min-width: 8rem; width: 30%;">
                        <!-- Item Name -->
                        <select required name="itemname[]" class="form-control select2 itemname" style="width: 100%;">
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

                // document.getElementsByName("grandtotal").value = total;
            }
        });
    </script>

</body>

</html>