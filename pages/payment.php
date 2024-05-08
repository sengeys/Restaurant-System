<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>
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
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                                <h3 class="card-title">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#modal-default">
                                        <i class="nav-icon fas fa-plus"></i>
                                        Add New
                                    </button>
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
                                            <th>Customer ID</th>
                                            <th>Customer Name</th>
                                            <th>Contact</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>183</td>
                                            <td>John Doe</td>
                                            <td>012 222 423</td>
                                            <td>
                                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                                    data-target="#modal-default">
                                                    <i class="nav-icon fas fa-edit"></i>
                                                    Edit
                                                </button>

                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                    data-target="#modal-default">
                                                    <i class="nav-icon fas fa-trash"></i>
                                                    Delete
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>219</td>
                                            <td>Alexander Pierce</td>
                                            <td>011 234 765</td>
                                            <td>
                                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                                    data-target="#modal-default">
                                                    <i class="nav-icon fas fa-edit"></i>
                                                    Edit
                                                </button>

                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                    data-target="#modal-default">
                                                    <i class="nav-icon fas fa-trash"></i>
                                                    Delete
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>657</td>
                                            <td>Bob Doe</td>
                                            <td>087 456 875</td>
                                            <td>
                                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                                    data-target="#modal-default">
                                                    <i class="nav-icon fas fa-edit"></i>
                                                    Edit
                                                </button>

                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                    data-target="#modal-default">
                                                    <i class="nav-icon fas fa-trash"></i>
                                                    Delete
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>175</td>
                                            <td>Mike Doe</td>
                                            <td>017 324 445</td>
                                            <td>
                                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                                    data-target="#modal-default">
                                                    <i class="nav-icon fas fa-edit"></i>
                                                    Edit
                                                </button>

                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                    data-target="#modal-default">
                                                    <i class="nav-icon fas fa-trash"></i>
                                                    Delete
                                                </button>
                                            </td>
                                        </tr>
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
                        <h4 class="modal-title">Default Modal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="">
                        <div class="modal-body">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputCustomerName">Customer Name</label>
                                    <input type="text" class="form-control" id="inputCustomerName"
                                        placeholder="Customer Name">
                                </div>

                                <div class="form-group">
                                    <label for="inputContact">Contact</label>
                                    <input type="text" class="form-control" id="inputContact" placeholder="Contact">
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
</body>

</html>