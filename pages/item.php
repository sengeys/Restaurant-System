<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restaurant | Item</title>
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
                        <h1 class="m-0">ITEM</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Item</li>
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
                                <h3 class="card-title">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-insert">
                                        <i class="nav-icon fas fa-plus"></i>
                                        Add New
                                    </button>
                                </h3>
                                <div class="card-tools">
                                    <div class="input-group input-group-sm-3" style="width: 200px;">
                                        <input type="text" name="search" id="search" class="form-control float-right" placeholder="Search">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Item ID</th>
                                            <th>Item Name</th>
                                            <th>Unit Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="row_item">
                                        
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

        <!-- Model Insert -->
        <div class="modal fade" id="modal-insert">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Insert Item</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="itemname">Item Name</label>
                                <input type="text" class="form-control" id="itemname" placeholder="Item Name" required name="itemname">
                            </div>

                            <div class="form-group">
                                <label for="unitprice">Unit Price</label>
                                <input type="text" class="form-control" id="unitprice" placeholder="Unit Price" required name="unitprice">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="insert_btn" name="insert_btn" data-dismiss="modal">Save</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <!-- Model Update -->
        <div class="modal fade" id="modal-update">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Item</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="itemid">Item ID</label>
                                <input type="text" class="form-control" id="edit_itemid" placeholder="Item ID" disabled>
                            </div>

                            <div class="form-group">
                                <label for="itemname">Item Name</label>
                                <input type="text" class="form-control" id="edit_itemname" placeholder="Item Name">
                            </div>

                            <div class="form-group">
                                <label for="uniprice">Unit Price</label>
                                <input type="text" class="form-control" id="edit_unitprice" placeholder="Unit Price">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="update_btn" name="update_btn"  data-dismiss="modal">Save</button>
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
                        <h4 class="modal-title">Delete Item</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <h4 class="text-center">Do you want to delete?</h4>
                    <input type="hidden" id="delete_itemid">
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="deletebtn" name="deletebtn" data-dismiss="modal">Save</button>
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

    <!-- JQuery -->
    <script>
        $(document).ready(function(){
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
                url: '../config/select/select_item.php',
                type: 'POST',
                success: function(data) {
                    $("#row_item").html(data);
                },
            });
        }

        
        // Insert item
        $("#insert_btn").on("click", function(e){
            var itemname = $("#itemname").val();
            var unitprice = $("#unitprice").val();

            $.ajax({
                url: '../config/insert/insert_item.php',
                method: 'POST',
                data: {item_name: itemname, unit_price: unitprice},
                success:function(data){
                    LoadDataToTable();
                    AlertSubmit(data,"success","Data Inserted Successfully!");
                }
            });
        });

        // Get Data Update
        function SelecDataUpdate(){
            $(document).on("click", "#edti_btn", function(){
                var id = $(this).attr('data-id');

                $.ajax({
                    url: '../config/search/search_item.php',
                    method: 'POST',
                    data: {item_id: id},
                    dataType: 'JSON',
                    success:function(data){
                        $('#modal-update').modal('show');
                        $('#edit_itemid').val(data.item_id);
                        $('#edit_itemname').val(data.item_name);
                        $('#edit_unitprice').val(data.unit_price);
                    }
                });
            });
        }

        // Update Item
        function UpdateData(){
            $(document).on("click", "#update_btn", function(){
                var item_id = $("#edit_itemid").val();
                var itemname = $("#edit_itemname").val();
                var unitprice = $("#edit_unitprice").val();

                $.ajax({
                    url: '../config/update/update_item.php',
                    method: 'POST',
                    data: {item_id: item_id, item_name: itemname, unit_price: unitprice},
                    success:function(data){
                        LoadDataToTable();
                        AlertSubmit(data,"success","Data Updated Successfully!");
                    }
                });
            });
        }

        // Get Data Delete
        function SelecDataDelete(){
            $(document).on("click", "#delete_btn", function(){
                var id = $(this).attr('data-id');

                $.ajax({
                    url: '../config/search/search_item.php',
                    method: 'POST',
                    data: {item_id: id},
                    dataType: 'JSON',
                    success:function(data){
                        $('#modal-delete').modal('show');
                        $('#delete_itemid').val(data.item_id);
                    }
                });
            });
        }

        // Delete Item
        function DeleteData(){
            $(document).on("click", "#deletebtn", function(){
                var item_id = $("#delete_itemid").val();

                $.ajax({
                    url: '../config/delete/delete_item.php',
                    method: 'POST',
                    data: {item_id: item_id},
                    success:function(data){
                        LoadDataToTable();
                        AlertSubmit(data,"success","Data Deleted Successfully!");
                    }
                });
            });
        }

        // Live Search
        function LiveSearch(){
            $(document).on("keyup","#search",function(){
                var search_data = $(this).val();
                
                $.ajax({
                    url: '../config/livesearch/live_search_item.php',
                    method: 'POST',
                    data: {search: search_data},
                    success:function(data){
                        $("#row_item").html(data);
                    }
                });
            });
        }

    </script>
</body>

</html>