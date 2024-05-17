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
                                <h3 class="card-title font-weight-bold text-success">
                                    Payment
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
                                            <th>Payment ID</th>
                                            <th>Payment Date</th>
                                            <th>Staff Name</th>
                                            <th>Customer Name</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Action</th>
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

        <!-- Model -->
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Payment</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Customer Name</label>
                                        <input type="text" class="form-control" disabled>

                                        <label>Status</label>
                                        <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">No Paid</option>
                                            <option>Paided</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Payment Date</label>
                                        <input type="text" class="form-control" disabled>

                                        <label>Amount</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control text-right" value="10" disabled>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                        </div>
                                    </div>
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
                url: '../config/select/select_payment.php',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    var row_payment = $('#row_payment');
                    $.each(data, function(index, payment) {
                        var row = $('<tr>');
                        $('<td class="pt-3">').text(payment.order_id).appendTo(row);
                        $('<td class="pt-3">').text(payment.date_created).appendTo(row);
                        $('<td class="pt-3">').text(payment.staff_name).appendTo(row);
                        $('<td class="pt-3">').text(payment.customer_name).appendTo(row);
                        $('<td class="pt-3">').text(payment.total).appendTo(row);

                        if (payment.status == "Paided"){
                            $('<td class="pt-3">').html(`<span class="p-1 pl-2 pr-2 rounded bg-success">${payment.status}</span>`).appendTo(row);
                        }else{
                            $('<td class="pt-3">').html(`<span class="p-1 pl-2 pr-2 rounded bg-danger">${payment.status}</span>`).appendTo(row);
                        }

                        $('<td>').html(`
                            <button type="submit" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default">
                                <i class="nav-icon fas fa-edit"></i>
                                Edit
                            </button>
                            <button type="submit" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-default">
                                <i class="nav-icon fas fa-trash"></i>
                                Delete
                            </button>
                        `).appendTo(row);
                        row_payment.append(row);
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