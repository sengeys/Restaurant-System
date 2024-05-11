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
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                            <li class="breadcrumb-item active">Order</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="font-weight-bold text-success">Order Detail</h5>
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Order ID</label>
                                                <input type="text" class="form-control" placeholder="Order ID">

                                                <label>Order Date</label>
                                                <div class="input-group date" id="reservationdatetime"
                                                    data-target-input="nearest">
                                                    <input type="text" class="form-control datetimepicker-input"
                                                        data-target="#reservationdatetime" />
                                                    <div class="input-group-append" data-target="#reservationdatetime"
                                                        data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Customer Name</label>
                                                <select class="form-control select2" style="width: 100%;">
                                                    <option selected="selected">Ganeral</option>
                                                    <option>Chenda</option>
                                                    <option>Jiva</option>
                                                </select>

                                                <label>Staff Name</label>
                                                <select class="form-control select2" style="width: 100%;">
                                                    <option selected="selected">Nita</option>
                                                    <option>Chenda</option>
                                                    <option>Jiva</option>
                                                </select>

                                                <label>Table Name</label>
                                                <select class="form-control select2" style="width: 100%;">
                                                    <option selected="selected">Ganeral</option>
                                                    <option>VIP A01</option>
                                                    <option>VIP A02</option>
                                                    <option>VIP B001</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <button type="button" class="btn btn-primary">
                                    <i class="nav-icon fas fa-plus"></i>
                                    Add New
                                </button>
                            </div>
                            <!-- /.card-header -->
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
                                    <tbody>
                                        <tr>
                                            <td>
                                                <select class="form-control select2" style="width: 100%;">
                                                    <option selected="selected">Chickend</option>
                                                    <option>Soup</option>
                                                    <option>Kari</option>
                                                </select>
                                            </td>
                                            <td><input type="text" class="form-control" value="2"></td>
                                            <td style="min-width: 8rem;">
                                                <div class="input-group">
                                                    <input type="text" class="form-control text-right" value="10.5">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">$</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="min-width: 8rem;">
                                                <div class="input-group">
                                                    <input type="text" class="form-control text-right" value="21"
                                                        disabled>
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">$</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger">
                                                    <i class="nav-icon fas fa-trash"></i>
                                                    Delete
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="4" class="text-right">
                                                <p class="pt-2 font-weight-bold">Total : </p>
                                            </td>
                                            <td style="min-width: 8rem;">
                                                <div class="input-group">
                                                    <input type="text" class="form-control text-right" value="21"
                                                        disabled>
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">$</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" class="border-0">
                                                <button type="button" class="btn btn-success float-right">
                                                    Submit
                                                </button>
                                            </td>

                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    <!-- Main Footer -->
    <?php include '../layouts/footer.php'; ?>
    <!-- link script -->
    <?php include '../layouts/link-script.php'; ?>
</body>

</html>