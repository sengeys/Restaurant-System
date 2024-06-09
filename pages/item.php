<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restaurant | Item</title>
    <!-- link style -->
    <?php include '../layouts/link-style.php'; ?>
    <?php include("../config/connection.php");?>
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
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#modal-add-new">
                                        <i class="nav-icon fas fa-plus"></i>
                                        Add New
                                    </button>
                                    <a href=""></a>
                                </h3>
                                <div class="card-tools">
                                    <div class="input-group input-group-sm-3" style="width: 200px;">
                                        <input type="text" name="table_search" class="form-control float-right"
                                            placeholder="Search">

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

        <!-- Model Add New-->
        <div class="modal fade" id="modal-add-new">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add New Item</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="">
                        <div class="modal-body">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputItemName">Item Name</label>
                                    <input type="text" class="form-control" id="inputItemName"
                                        placeholder="Item Name">
                                </div>

                                <div class="form-group">
                                    <label for="inputUnitPrice">Unit Price</label>
                                    <input type="text" class="form-control" id="inputUnitPrice" placeholder="Unit Price">
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

    </div>

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
                    <form action="">
                        <div class="modal-body">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="inputItemID">Item ID</label>
                                    <input type="text" class="form-control" id="inputItemID" placeholder="Item ID" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="inputItemName">Item Name</label>
                                    <input type="text" class="form-control" id="inputItemName" placeholder="Item Name">
                                </div>

                                <div class="form-group">
                                    <label for="inputUnitPrice">Unit Price</label>
                                    <input type="text" class="form-control" id="inputUnitPrice" placeholder="Unit Price">
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div>
    <!-- Model Update -->
    <div class="modal fade" id="modal-delete">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Item</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="">
                        <div class="modal-body">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="ItemDelete">Do you want to delete this item?</label>
                                </div>

                                
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
    </div>

    <!-- Main Footer -->
    <?php include '../layouts/footer.php'; ?>
    <!-- link script -->
    <?php include '../layouts/link-script.php'; ?>

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

            $.ajax({
                url: '../config/select/select_item.php',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    var row_item = $('#row_item');
                    $.each(data, function(index, item) {
                        var row = $('<tr>');
                        $('<td>').text(item.item_id).appendTo(row);
                        $('<td>').text(item.item_name).appendTo(row);
                        $('<td>').text(item.unit_price).appendTo(row);
                        $('<td>').html(`
                            <button type="submit" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-update">
                                <i class="nav-icon fas fa-edit"></i>
                                Edit
                            </button>
                            <button type="submit" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-default">
                                <i class="nav-icon fas fa-trash"></i>
                                Delete
                            </button>
                        `).appendTo(row);
                        row_item.append(row);
                    });
                },
                error: function() {
                    alert('Failed to fetch data.');
                }
            });
        });
    </script>
</body>

</html>