<?php
ob_start();
// Set address to select option
function fectch_address()
{
    $array_address = array(
        "Phnom Penh",
        "Banteay Meanchey",
        "Kampong Chhnang",
        "Kampot",
        "Koh Kong",
        "Oddar Meanchey",
        "Preah Vihear",
        "Ratanak Kiri",
        "Svay Rieng",
        "Battambang",
        "Kampong Speu",
        "Kandal",
        "Kratie",
        "Pailin",
        "Prey Veng",
        "Siem Reap",
        "Takeo",
        "Kampong Cham",
        "Kampong Thom",
        "Kep",
        "Mondul Kiri",
        "Preah Sihanouk",
        "Pursat",
        "Steung Treng",
        "Tboung Khmum"
    );

    foreach ($array_address as $value) {
        echo "<option value='" . $value . "'> " . $value . " </option> ";
    }
}
?>

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

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">My Account</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../pages/dashboard.php">Home</a></li>
                                <li class="breadcrumb-item active">My Account</li>
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
                                    <div class="d-flex flex-wrap">
                                        <h5 class="font-weight-bold text-success">Profile Details</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="hidden" id="user_id" name="user_id" class="form-control" />

                                                <label for="full_name">Full Name </label>
                                                <input type="text" id="full_name" name="full_name"
                                                    class="form-control" />

                                                <!-- Gender -->
                                                <label for="gender">Gender</label>
                                                <select id="gender" name="gender" class="form-control select2"
                                                    style="width: 100%;">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>

                                                <!-- Email -->
                                                <label for="email">Email</label>
                                                <input type="text" id="email" name="email" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <!-- Full Name -->
                                                <label for="phone"> Phone Number</label>
                                                <input type="text" id="phone" name="phone" class="form-control" />

                                                <!-- Address -->
                                                <label for="address">Address</label>
                                                <select id="address" name="address" class="form-control select2"
                                                    style="width: 100%;"> <?php fectch_address(); ?> </select>

                                                <!-- Email -->
                                                <label for="password">Password</label>
                                                <input type="password" id="password" name="password"
                                                    class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group  float-right">
                                                <div class="input-group">
                                                    <!-- Save submit -->
                                                    <input type="submit" id="update_submit" name="update_submit"
                                                        value="Update" class="btn btn-success" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>

    <!-- Main Footer -->
    <?php include '../layouts/footer.php'; ?>
    <!-- link script -->
    <?php include '../layouts/link-script.php'; ?>

    <!-- Query -->
    <script>
    $(document).ready(function() {
        // Call Function : style
        SelectionStyle();

        // Call Function : select data to update
        SelecDataUpdate();
        UpdateData();
    });

    // Function : Style
    function SelectionStyle() {
        //Initialize Select2 Elements
        $('.select2').select2();

    }

    //Alert
    function AlertSubmit(status, icon, title) {
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        if (status == 1) {
            Toast.fire({
                icon: icon,
                title: title
            });
        } else {
            Toast.fire({
                icon: 'error',
                title: 'Error'
            });
        }
    }

    // Get Data Update
    function SelecDataUpdate() {
        var id = "<?php echo $_SESSION['user_id']; ?>";
        $.ajax({
            url: '../config/search/search_user.php',
            method: 'POST',
            data: {
                user_id: id
            },
            dataType: 'JSON',
            success: function(data) {
                $('#user_id').val(data.user_id);
                $('#full_name').val(data.staff_name);
                $('#gender').val(data.sex).change();
                $('#phone').val(data.phone);
                $('#email').val(data.email);
                $('#address').val(data.address).change();
            }
        });
    }

    // Update Item
    function UpdateData() {
        $(document).on("click", "#update_submit", function() {
            var user_id = $('#user_id').val();
            var full_name = $("#full_name").val();
            var gender = $("#gender").val();
            var phone = $("#phone").val();
            var email = $("#email").val();
            var address = $("#address").val();
            var password = $("#password").val();

            $.ajax({
                url: '../config/update/update_staff.php',
                method: 'POST',
                data: {
                    user_id: user_id,
                    full_name: full_name,
                    gender: gender,
                    phone: phone,
                    email: email,
                    address: address,
                    password: password
                },
                success: function(data) {
                    AlertSubmit(data, "success", "Data Updated Successfully!");
                }
            });
        });
    }
    </script>

</body>

</html>

<?php
ob_end_flush();
?>