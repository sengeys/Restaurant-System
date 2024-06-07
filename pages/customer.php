<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restaurant | customer</title>
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
                        <h1 class="m-0">CUSTOMER</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Customer</li>
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
                                    <div class="p-2">
                                        <button type="button" class="btn btn-primary" id="add_new_btn" style="min-width: 105px;">
                                            <i class="nav-icon fas fa-plus"></i>
                                            Add New
                                        </button>
                                    </div>

                                    <div class="p-2 ml-auto">
                                        <div class="input-group input-group-sm-3" style="min-width: 200px;">
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
                                            <th>Customer ID</th>
                                            <th>Customer Name</th>
                                            <th>Contact</th>
                                            <th style="width: 10%;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="row_customer">
                                       
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

        <!-- Model -->
        <!-- Model Insert -->
        <div class="modal fade" id="modal-insert">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Insert Customer</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="customer_name">Customer Name</label>
                                <input type="text" class="form-control" id="customer_name" required name="customer_name" placeholder="Customer Name">
                            </div>

                            <div class="form-group">
                                <label for="contact">Contact</label>
                                <input type="text" class="form-control" id="contact" required name="contact" placeholder="Contact">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="insert_btn">Insert</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal-->

        <!-- Model Update -->
        <div class="modal fade" id="modal-update">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Customer</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="customer_id">Customer ID</label>
                                <input type="text" class="form-control" id="edit_customer_id" required name="edit_customer_id" placeholder="Customer ID" disabled>
                            </div>

                            <div class="form-group">
                                <label for="customer_name">Customer Name</label>
                                <input type="text" class="form-control" id="edit_customer_name" required name="edit_customer_name" placeholder="Customer Name">
                            </div>

                            <div class="form-group">
                                <label for="contact">Contact</label>
                                <input type="text" class="form-control" id="edit_contact" required name="edit_contact" placeholder="Contact">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="update_btn">Update</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal-->

        
        <!-- Model Delete -->
        <div class="modal fade" id="modal-delete">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Customer</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <h4 class="text-center">Do you want to delete?</h4>
                            <input type="hidden" class="form-control" id="delete_customer_id" required name="delete_customer_id" placeholder="Customer ID" disabled>

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
        <!-- /.modal-->
        
    </div>

    <!-- Main Footer -->
    <?php include '../layouts/footer.php'; ?>
    <!-- link script -->
    <?php include '../layouts/link-script.php'; ?>

    <!-- JQuery -->
    <script>
        $(document).ready(function(){
            // Call Function : Loat Data To Table
            LoadDataToTable();
            
            // Call Function : Update Data
            SelecDataUpdate();
            UpdateData();

            //Call Function : Delete Data
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
                url: '../config/select/select_customer.php',
                type: 'POST',
                success: function(data) {
                    $("#row_customer").html(data);
                },
            });
        }

        // open modal
        $("#add_new_btn").on("click", function(){
            $('#modal-insert').modal('show');
        });

        
        // Insert item
        $("#insert_btn").on("click", function(e){
            var customer_name = $("#customer_name").val();
            var contact = $("#contact").val();

            $.ajax({
                url: '../config/insert/insert_customer.php',
                method: 'POST',
                data: {customer_name: customer_name, contact: contact},
                success:function(data){
                    LoadDataToTable();
                    AlertSubmit(data,"success","Data Inserted Successfully!");
                }
            });
            $('#modal-insert').modal('hide');
        });

        // Get Data Update
        function SelecDataUpdate(){
            $(document).on("click", "#edit_btn", function(){
                var id = $(this).attr('data-id');

                $.ajax({
                    url: '../config/search/search_customer.php',
                    method: 'POST',
                    data: {customer_id: id},
                    dataType: 'JSON',
                    success:function(data){
                        $('#modal-update').modal('show');
                        $('#edit_customer_id').val(data.customer_id);
                        $('#edit_customer_name').val(data.customer_name);
                        $('#edit_contact').val(data.contact);
                    }
                });
            });
        }

        // Update Item
        function UpdateData(){
            $(document).on("click", "#update_btn", function(){
                var customer_id = $("#edit_customer_id").val();
                var customer_name = $("#edit_customer_name").val();
                var contact = $("#edit_contact").val();

                $.ajax({
                    url: '../config/update/update_customer.php',
                    method: 'POST',
                    data: {customer_id: customer_id, customer_name: customer_name, contact: contact},
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
                    url: '../config/search/search_customer.php',
                    method: 'POST',
                    data: {customer_id: id},
                    dataType: 'JSON',
                    success:function(data){
                        $('#modal-delete').modal('show');
                        $('#delete_customer_id').val(data.customer_id);
                    }
                });
            });
        }

        // Delete Item
        function DeleteData(){
            $(document).on("click", "#delete_submit", function(){
                var customer_id = $("#delete_customer_id").val();

                $.ajax({
                    url: '../config/delete/delete_customer.php',
                    method: 'POST',
                    data: {customer_id: customer_id},
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
                    url: '../config/livesearch/live_search_customer.php',
                    method: 'POST',
                    data: {search: search_data},
                    success:function(data){
                        $("#row_customer").html(data);
                    }
                });
            });
        }

    </script>
</body>
</html>