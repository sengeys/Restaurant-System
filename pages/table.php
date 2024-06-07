<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restaurant | table</title>
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
                        <h1 class="m-0">TABLE</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Table</li>
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
                                            <th>Table ID</th>
                                            <th>Table Name</th>
                                            <th style="width: 10%;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="row_table">

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
        <div class="modal fade" id="modal-insert">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Insert Table</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="table_name">Table Name</label>
                                <input type="text" class="form-control" id="table_name" name="table_name" placeholder="Table Name">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="insert_submit">Insert</button>
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
            //SelecDataUpdate();
            //UpdateData();

            // Call Function : Delete Data
            //SelecDataDelete();
            //DeleteData();

            // Call Function : Live Search
            //LiveSearch();
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

        // // open modal
        // $("#add_new_btn").on("click", function(){
        //     $('#modal-insert').modal('show');
        // });
        
        // // Insert item
        // $("#insert_btn").on("click", function(e){
        //     var itemname = $("#itemname").val();
        //     var unitprice = $("#unitprice").val();

        //     $.ajax({
        //         url: '../config/insert/insert_item.php',
        //         method: 'POST',
        //         data: {item_name: itemname, unit_price: unitprice},
        //         success:function(data){
        //             LoadDataToTable();
        //             AlertSubmit(data,"success","Data Inserted Successfully!");
        //         }
        //     });

        //     $('#modal-insert').modal('hide');
        // });

        // // Get Data Update
        // function SelecDataUpdate(){
        //     $(document).on("click", "#edit_btn", function(){
        //         var id = $(this).attr('data-id');

        //         $.ajax({
        //             url: '../config/search/search_item.php',
        //             method: 'POST',
        //             data: {item_id: id},
        //             dataType: 'JSON',
        //             success:function(data){
        //                 $('#modal-update').modal('show');
        //                 $('#edit_itemid').val(data.item_id);
        //                 $('#edit_itemname').val(data.item_name);
        //                 $('#edit_unitprice').val(data.unit_price);
        //             }
        //         });
        //     });
        // }

        // // Update Item
        // function UpdateData(){
        //     $(document).on("click", "#update_btn", function(){
        //         var item_id = $("#edit_itemid").val();
        //         var itemname = $("#edit_itemname").val();
        //         var unitprice = $("#edit_unitprice").val();

        //         $.ajax({
        //             url: '../config/update/update_item.php',
        //             method: 'POST',
        //             data: {item_id: item_id, item_name: itemname, unit_price: unitprice},
        //             success:function(data){
        //                 LoadDataToTable();
        //                 AlertSubmit(data,"success","Data Updated Successfully!");
        //             }
        //         });
        //         $('#modal-update').modal('hide');
        //     });
        // }

        // // Get Data Delete
        // function SelecDataDelete(){
        //     $(document).on("click", "#delete_btn", function(){
        //         var id = $(this).attr('data-id');

        //         $.ajax({
        //             url: '../config/search/search_item.php',
        //             method: 'POST',
        //             data: {item_id: id},
        //             dataType: 'JSON',
        //             success:function(data){
        //                 $('#modal-delete').modal('show');
        //                 $('#delete_itemid').val(data.item_id);
        //             }
        //         });
        //     });
        // }

        // // Delete Item
        // function DeleteData(){
        //     $(document).on("click", "#deletebtn", function(){
        //         var item_id = $("#delete_itemid").val();

        //         $.ajax({
        //             url: '../config/delete/delete_item.php',
        //             method: 'POST',
        //             data: {item_id: item_id},
        //             success:function(data){
        //                 LoadDataToTable();
        //                 AlertSubmit(data,"success","Data Deleted Successfully!");
        //             }
        //         });

        //         $('#modal-delete').modal('hide');
        //     });
        // }

        // // Live Search
        // function LiveSearch(){
        //     $(document).on("keyup","#search",function(){
        //         var search_data = $(this).val();
                
        //         $.ajax({
        //             url: '../config/livesearch/live_search_item.php',
        //             method: 'POST',
        //             data: {search: search_data},
        //             success:function(data){
        //                 $("#row_item").html(data);
        //             }
        //         });
        //     });
        // }

    </script>
</body>

</html>