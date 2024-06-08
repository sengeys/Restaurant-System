<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restaurant | payment</title>
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
                        <h1 class="m-0">PAYMENT</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                            <li class="breadcrumb-item active">Payment</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small table (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex flex-wrap">
                                    
                                    <div class="pt-2 flex-fill">
                                        <div class="d-flex">
                                            <label for="filter_gender" class="pt-2 pr-2 d-flex"> <i class="nav-icon fas fa-filter pt-1"></i> Gender</label>
                                            <select id="filter_gender" name="filter_gender" class="form-control select2" style="width: 175px;">
                                                <option value="" selected>All</option>
                                                <option value="No Paid">No Paid</option>
                                                <option value="Paided">Paided</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="p-2">
                                        <div class="input-group input-group-sm-3 ml-auto"  style="min-width: 150px;">
                                            <input type="text" name="search" id="search" class="form-control float-right" placeholder="Search">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Payment ID</th>
                                            <th>Payment Date</th>
                                            <th>Customer Name</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th style="text-align: center; width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="row_payment">
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->

        <!-- Model Update -->
        <div class="modal fade" id="modal-update">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Payment</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Payment ID</label>
                                    <input type="text" class="form-control" id="edit_payment_id" disabled>

                                    <label>Customer Name</label>
                                    <input type="text" class="form-control" id="edit_customer_name" disabled>

                                    <label>Status</label>
                                    <select class="form-control select2" id="edit_status" style="width: 100%;">
                                        <option vlaue="No Paid">No Paid</option>
                                        <option value="Paided">Paided</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Payment Date</label>
                                    <input type="text" class="form-control" id="edit_payment_date" disabled>

                                    <label>Amount</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control text-right"id="edit_amount" disabled>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="update_submit">Update</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <!-- Model Delete -->
        <div class="modal fade" id="modal-delete">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Payment</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <h4 class="text-center">Do you want to delete?</h4>
                            <input type="hidden" class="form-control" id="delete_payment_id" name="delete_payment_id">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="delete_submit">Delete</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

    </div>

    <!-- Main Footer -->
    <?php include '../layouts/footer.php'; ?>
    <!-- link script -->
    <?php include '../layouts/link-script.php'; ?>

    <!-- Query -->
    <script>
        $(document).ready(function () {
            //Initialize Select2 Elements
            $('.select2').select2();

            // Call Function : Loat Data To Table
            LoadDataToTable();
            
            // Call Function : Update Data
            SelecDataUpdate();
            UpdateData();

            // Call Function : Delete Data
            SelecDataDelete();
            DeleteData();

            // Call Function : Live Search
            LiveSearch();
        });

        

        //Alert
        function AlertSubmit(status, icon, title){
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            if (status == 1){
                Toast.fire({
                icon: icon,
                title: title
                });
            }
            else{
                Toast.fire({
                icon: 'error',
                title: 'Error'
                });
            }
        }

        // Load Data To Table
        function LoadDataToTable(){
            $.ajax({
                url: '../config/select/select_payment.php',
                type: 'POST',
                success: function(data) {
                    $("#row_payment").html(data);
                },
            });
        }

        // Get Data Update
        function SelecDataUpdate(){
            $(document).on("click", "#edit_btn", function(){
                var id = $(this).attr('data-id');

                $.ajax({
                    url: '../config/search/search_payment.php',
                    method: 'POST',
                    data: {payment_id: id},
                    dataType: 'JSON',
                    success:function(data){
                        $('#modal-update').modal('show');
                        $('#edit_payment_id').val(data.order_id);
                        $('#edit_payment_date').val(data.date_created);
                        $('#edit_customer_name').val(data.customer_name);
                        $('#edit_amount').val(data.total);
                        $('#edit_status').val(data.status).change();
                    }
                });
            });
        }

        // Update Data
        function UpdateData(){
            $(document).on("click", "#update_submit", function(){
                var payment_id = $("#edit_payment_id").val();
                var status = $("#edit_status").val();

                $.ajax({
                    url: '../config/update/update_payment.php',
                    method: 'POST',
                    data: {payment_id: payment_id, status: status},
                    success:function(data){
                        LoadDataToTable();
                        AlertSubmit(data,"success","Data Updated Successfully!");
                    }
                });
                $('#modal-update').modal('hide');
            });
        }

        // Get Data Delete
        function SelecDataDelete(){
            $(document).on("click", "#delete_btn", function(){
                var id = $(this).attr('data-id');

                $.ajax({
                    url: '../config/search/search_payment.php',
                    method: 'POST',
                    data: {payment_id: id},
                    dataType: 'JSON',
                    success:function(data){
                        $('#modal-delete').modal('show');
                        $('#delete_payment_id').val(data.order_id);
                    }
                });
            });
        }

        // Delete Item
        function DeleteData(){
            $(document).on("click", "#delete_submit", function(){
                var payment_id = $("#delete_payment_id").val();

                $.ajax({
                    url: '../config/delete/delete_payment.php',
                    method: 'POST',
                    data: {payment_id: payment_id},
                    success:function(data){
                        LoadDataToTable();
                        AlertSubmit(data,"success","Data Deleted Successfully!");
                    }
                });

                $('#modal-delete').modal('hide');
            });
        }

        // Live Search
        function LiveSearch(){
            $(document).on("keyup","#search",function(){
                var search_data = $(this).val();
                
                $.ajax({
                    url: '../config/livesearch/live_search_payment.php',
                    method: 'POST',
                    data: {search: search_data},
                    success:function(data){
                        $("#row_payment").html(data);
                    }
                });
            });
        }


    </script>
    
</body>

</html>