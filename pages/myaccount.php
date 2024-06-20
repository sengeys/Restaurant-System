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
    <div class="wrapper">    
    <!-- Preloader -->
    <?php include '../layouts/preloader.php'; ?>
    <!-- Navbar -->
    <?php include '../layouts/navbar.php'; ?>
    <!-- Main Sidebar Container -->
    <?php include '../layouts/sidebar.php'; ?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">STAFF</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="../pages/dashboard.php">Home</a></li>
                            <li class="breadcrumb-item active">Staff</li>
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
                                Profile
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->

        <!-- Model Insert -->
        <div class="modal fade" id="modal-insert">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Insert Staff</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="staff_name">Staff Name <span class="text-danger">*</span></label>
                                <input type="text" id="staff_name" name="staff_name" class="form-control" placeholder="Customer Name">
                            </div>

                            <div class="form-group">
                                <label> Gender <span class="text-danger">*</span></label>
                                <select id="gender" name="gender" class="form-control select2" style="width: 100%;">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone <span class="text-danger">*</span></label>
                                <input type="text" id="phone" name="phone" class="form-control"placeholder="Phone Number">
                            </div>

                            <div class="form-group">
                                <label for="address"> Address</span></label>
                                <select id="address" name="address" class="form-control select2" style="width: 100%;">
                                    <option value="Phnom Penh">Phnom Penh</option>
                                    <option value="Banteay Meanchey">Banteay Meanchey</option>
                                    <option value="Kampong Chhnang">Kampong Chhnang</option>
                                    <option value="Kampot">Kampot</option>
                                    <option value="Koh Kong">Koh Kong</option>
                                    <option value="Oddar Meanchey">Oddar Meanchey</option>
                                    <option value="Preah Vihear">Preah Vihear</option>
                                    <option value="Ratanak Kiri">Ratanak Kiri</option>
                                    <option value="Svay Rieng">Svay Rieng</option>
                                    <option value="Battambang">Battambang</option>
                                    <option value="Kampong Speu">Kampong Speu</option>
                                    <option value="Kandal">Kandal</option>
                                    <option value="Kratie">Kratie</option>
                                    <option value="Pailin">Pailin</option>
                                    <option value="Prey Veng">Prey Veng</option>
                                    <option value="Siem Reap">Siem Reap</option>
                                    <option value="Takeo">Takeo</option>
                                    <option value="Kampong Cham">Kampong Cham</option>
                                    <option value="Kampong Thom">Kampong Thom</option>
                                    <option value="Kep">Kep</option>
                                    <option value="Mondul Kiri">Mondul Kiri</option>
                                    <option value="Preah Sihanouk">Preah Sihanouk</option>
                                    <option value="Pursat">Pursat</option>
                                    <option value="Steung Treng">Steung Treng</option>
                                    <option value="Tboung Khmum">Tboung Khmum</option>
                                </select>
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
        <!-- /.modal -->

        <!-- Model Update -->
        <div class="modal fade" id="modal-update">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Staff</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="edit_staff_id">Staff ID</span></label>
                                <input type="text" id="edit_staff_id" name="edit_staff_id" class="form-control" placeholder="Customer Name" disabled>
                            </div>

                            <div class="form-group">
                                <label for="edit_staff_name">Staff Name</span></label>
                                <input type="text" id="edit_staff_name" name="edit_staff_name" class="form-control" placeholder="Customer Name">
                            </div>

                            <div class="form-group">
                                <label> Gender</span></label>
                                <select id="edit_gender" name="edit_gender" class="form-control select2" style="width: 100%;">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="edit_phone">Phone</label>
                                <input type="text" id="edit_phone" name="edit_phone" class="form-control" placeholder="Address">
                            </div>

                            <div class="form-group">
                                <label for="edit_address"> Address</span></label>
                                <select id="edit_address" name="edit_address" class="form-control select2" style="width: 100%;">
                                    <option value="Phnom Penh">Phnom Penh</option>
                                    <option value="Banteay Meanchey">Banteay Meanchey</option>
                                    <option value="Kampong Chhnang">Kampong Chhnang</option>
                                    <option value="Kampot">Kampot</option>
                                    <option value="Koh Kong">Koh Kong</option>
                                    <option value="Oddar Meanchey">Oddar Meanchey</option>
                                    <option value="Preah Vihear">Preah Vihear</option>
                                    <option value="Ratanak Kiri">Ratanak Kiri</option>
                                    <option value="Svay Rieng">Svay Rieng</option>
                                    <option value="Battambang">Battambang</option>
                                    <option value="Kampong Speu">Kampong Speu</option>
                                    <option value="Kandal">Kandal</option>
                                    <option value="Kratie">Kratie</option>
                                    <option value="Pailin">Pailin</option>
                                    <option value="Prey Veng">Prey Veng</option>
                                    <option value="Siem Reap">Siem Reap</option>
                                    <option value="Takeo">Takeo</option>
                                    <option value="Kampong Cham">Kampong Cham</option>
                                    <option value="Kampong Thom">Kampong Thom</option>
                                    <option value="Kep">Kep</option>
                                    <option value="Mondul Kiri">Mondul Kiri</option>
                                    <option value="Preah Sihanouk">Preah Sihanouk</option>
                                    <option value="Pursat">Pursat</option>
                                    <option value="Steung Treng">Steung Treng</option>
                                    <option value="Tboung Khmum">Tboung Khmum</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                        <h4 class="modal-title">Delete Staff</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <h4 class="text-center">Do you want to delete?</h4>
                                <input type="hidden" id="delete_staff_id">
                            </div>
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
        <!-- /.modal -->
    </div>

    <!-- Main Footer -->
    <?php include '../layouts/footer.php'; ?>
    <!-- link script -->
    <?php include '../layouts/link-script.php'; ?>

    <!-- Query -->
   <script>

   </script>
    
</body>

</html>