<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restaurant | Staff</title>
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
                        <h1 class="m-0">STAFF</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                                <div class="d-flex flex-wrap">
                                    <div class="p-2">
                                        <button type="button" class="btn btn-primary" id="add_new_btn" style="min-width: 105px;">
                                            <i class="nav-icon fas fa-plus"></i>
                                            Add New
                                        </button>
                                    </div>
                                    <div class="pt-2">
                                        <div class="d-flex mb-2" style="min-width: 220px;">
                                            <label for="filter_gender" class="pt-2 pr-2"> <i class="nav-icon fas fa-filter"></i> Gender</label>
                                            <select id="filter_gender" name="filter_gender" class="form-control select2" style="width: 100px;">
                                                <option value="" selected>All</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="pt-2">
                                        <div class="d-flex mb-2" style="min-width: 295px;">
                                            <label for="filter_address" class="pt-2 pr-2"> <i class="nav-icon fas fa-filter"></i> Address </span></label>
                                            <select id="filter_address" name="filter_address" class="form-control select2" style="width: 180px;">
                                                <option value="" selected>All</option>
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
                                            <th>Staff ID</th>
                                            <th>Staff Name</th>
                                            <th>Gender</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th style="width: 10%;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="row_staff">
                                        
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

    <!-- JQuery -->
    <script>
        $(document).ready(function(){
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

            // Call Function : Filter
            FilterData();
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
                url: '../config/select/select_staff.php',
                type: 'POST',
                success: function(data) {
                    $("#row_staff").html(data);
                },
            });
            
        }

        // open modal
        $("#add_new_btn").on("click", function(){
            $('#modal-insert').modal('show');
        });
        
        // Insert Data
        $("#insert_btn").on("click", function(e){
            var staff_name = $("#staff_name").val();
            var gender = $("#gender").val();
            var phone = $("#phone").val();
            var address = $("#address").val();

            $.ajax({
                url: '../config/insert/insert_staff.php',
                method: 'POST',
                data: {staff_name: staff_name, gender: gender, phone: phone, address: address},
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
                    url: '../config/search/search_staff.php',
                    method: 'POST',
                    data: {staff_id: id},
                    dataType: 'JSON',
                    success:function(data){
                        $('#modal-update').modal('show');
                        $('#edit_staff_id').val(data.staff_id);
                        $('#edit_staff_name').val(data.staff_name);
                        $('#edit_gender').val(data.sex).change();
                        $('#edit_phone').val(data.phone);
                        $('#edit_address').val(data.address).change();
                    }
                });
            });
        }

        // Update Item
        function UpdateData(){
            $(document).on("click", "#update_submit", function(){
                var staff_id   = $('#edit_staff_id').val();
                var staff_name = $("#edit_staff_name").val();
                var gender     = $("#edit_gender").val();
                var phone      = $("#edit_phone").val();
                var address    = $("#edit_address").val();

                $.ajax({
                    url: '../config/update/update_staff.php',
                    method: 'POST',
                    data: {staff_id: staff_id, staff_name: staff_name, gender: gender, phone: phone, address: address},
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
                    url: '../config/search/search_staff.php',
                    method: 'POST',
                    data: {staff_id: id},
                    dataType: 'JSON',
                    success:function(data){
                        $('#modal-delete').modal('show');
                        $('#delete_staff_id').val(data.staff_id);
                    }
                });
            });
        }

        // Delete Item
        function DeleteData(){
            $(document).on("click", "#delete_submit", function(){
                var id = $("#delete_staff_id").val();

                $.ajax({
                    url: '../config/delete/delete_staff.php',
                    method: 'POST',
                    data: {staff_id: id},
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
                    url: '../config/livesearch/live_search_staff.php',
                    method: 'POST',
                    data: {search: search_data},
                    success:function(data){
                        $("#row_staff").html(data);
                    }
                });
            });
        }

        //Function : Filter
        function FilterData(){
            $("#filter_gender , #filter_address").on("change",function(){
                var search_gender = $("#filter_gender").val();
                var search_address = $("#filter_address").val();

                console.log(search_gender + search_address);

                if (search_gender == "" && search_address == ""){
                    LoadDataToTable();
                }else{
                    $.ajax({
                        url: '../config/filter/filter_staff.php',
                        method: 'POST',
                        data: {search_gender: search_gender, search_address: search_address},
                        success:function(data){
                            $("#row_staff").html(data);
                        }
                    });
                }
            });
        }

    </script>
</body>

</html>