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
        <form action="order.php" method="post" autocomplete="off">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="font-weight-bold text-success">Order Detail</h5>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Order ID <span class="text-danger">*</span></label>
                                                <!-- Order ID -->
                                                <input required name="orderid" type="text" class="form-control">

                                                
                                                <label>Order Date <span class="text-danger">*</span></label>
                                                <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                                                    <!-- Order Date -->
                                                    <input required name="orderdate" type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime" />
                                                    <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                                        <div class="input-group-text">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Customer Name <span class="text-danger">*</span></label>
                                                <!-- Customer Name -->
                                                <select required name="customername" class="form-control select2" style="width: 100%;">
                                                    <option selected="selected">Ganeral</option>
                                                    <option>Chenda</option>
                                                    <option>Jiva</option>
                                                </select>

                                                <label>Staff Name <span class="text-danger">*</span></label>
                                                <!-- Staff Name -->
                                                <select required name="staffname" class="form-control select2" style="width: 100%;">
                                                    <option selected="selected">Nita</option>
                                                    <option>Chenda</option>
                                                    <option>Jiva</option>
                                                </select>

                                                <label>Table Name <span class="text-danger">*</span></label>
                                                <!-- Table Name -->
                                                <select required name="tablename" class="form-control select2" style="width: 100%;">
                                                    <option selected="selected">Ganeral</option>
                                                    <option>VIP A01</option>
                                                    <option>VIP A02</option>
                                                    <option>VIP B001</option>
                                                </select>
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
                                    <!-- Add Row Button -->
                                    <button type="button" class="btn btn-primary float-right" id="btnAddRow">
                                        <i class="nav-icon fas fa-plus"></i>
                                        Add Row
                                    </button>
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
                                        <tbody id="itembody">
                                            <tr>
                                                <td style="min-width: 8rem; width: 30%;">
                                                    <!-- Item Name -->
                                                    <select required name="itemname[]" class="form-control select2" style="width: 100%;">
                                                        <option selected="selected">Chickend</option>
                                                        <option>Soup</option>
                                                        <option>Kari</option>
                                                    </select>
                                                </td>
                                                <td style="min-width: 8rem; width: 20%;">
                                                    <!-- Quantity -->
                                                    <input required name="quantity[]" type="text" class="form-control" value="2">
                                                </td>
                                                <td style="min-width: 8rem; width: 20%;">
                                                    <div class="input-group">
                                                        <!-- Price -->
                                                        <input required name="price[]" type="text" class="form-control text-right" value="10.5">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">$</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td style="min-width: 8rem; width: 20%;">
                                                    <div class="input-group">
                                                        <!-- Total -->
                                                        <input required name="total[]" type="text" class="form-control text-right" value="21" disabled>
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">$</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-right" style="min-width: 8rem; width: 10%;">
                                                    <!-- Delete Button -->
                                                    <button type="button" class="btn btn-danger">
                                                        <i class="nav-icon fas fa-trash"></i>
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="card-footer">
                                    <table class="table table-hover text-nowrap">
                                        <tr>
                                            <td class="text-right border-0" style="width: 80%;">
                                                <p class="pt-2 font-weight-bold">Total : </p>
                                            </td>
                                            <td class="text-right border-0" style="width: 20%; min-width: 10rem;">
                                                <div class="input-group">
                                                    <!-- Grand Total -->
                                                    <input required name="grandtotal" type="text" class="form-control text-right" value="21" disabled>
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">$</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="border-0">
                                                <!-- Submit Button -->
                                                <button type="button" class="btn btn-success float-right">
                                                    Submit
                                                </button>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
        <!-- /.content -->
    </div>

    <!-- Main Footer -->
    <?php include '../layouts/footer.php'; ?>
    <!-- link script -->
    <?php include '../layouts/link-script.php'; ?>
    
</body>

</html>