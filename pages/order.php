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
    <div class="wrapper">
    <!-- Preloader -->
    <?//php include '../layouts/preloader.php'; ?>
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
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="font-weight-bold text-success">Order Detail</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <!-- Order Date -->
                                            <label for="order_date">Order Date <span class="text-danger">*</span></label>
                                            <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                                                <input id="order_date" name="order_date" type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime" />
                                                <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Staff Name -->
                                            <label for="staff_id">Staff Name <span class="text-danger">*</span></label>
                                            <select id="staff_id" name="staff_id" class="form-control select2" style="width: 100%;">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <!-- Customer Name -->
                                            <label for="customer_id">Customer Name <span class="text-danger">*</span></label>
                                            <select id="customer_id" name="customer_id" class="form-control select2" style="width: 100%;"></select>

                                            <!-- Table Name -->
                                            <label for="table_id">Table Name <span class="text-danger">*</span></label>
                                            <select id="table_id" name="table_id"  class="form-control select2" style="width: 100%;"> </select>
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
                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="font-weight-bold text-success">Item Detail</h5>
                                    </div>
                                    <div class="col-6">
                                        <!-- Add Row Button -->
                                        <button type="button" class="btn btn-primary float-right" id="add_new_btn" name="add_new_btn">
                                            <i class="nav-icon fas fa-plus"></i>
                                            Add Row
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body table-responsive p-0">
                                <span id="error"></span>
                                <form id="form_item">
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
                                    
                                    <tbody id="row_item_detail">

                                    </tbody>
                                </table>
                            </form>
                            </div>
                            

                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <span class="pt-2 float-right">Grand Total : </span>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="input-group" style="min-width: 10rem;">
                                                <!-- Grand Total -->
                                                <input id="grand_total" name="grand_total" type="text" class="form-control text-right" disabled>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8"></div>
                                    <div class="col-sm-4">
                                        <div class="form-group  float-right">
                                            <div class="input-group">
                                                <!-- Submit Button -->
                                                <button type="button" name="insert_submit" id="insert_submit" class="btn btn-success">
                                                    Submit
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Model -->
        <div class="modal fade" id="modal-delete">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Delete</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            Do you want to delete?
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
    <!-- /.content -->
    </div>

    <!-- Main Footer -->
    <?php include '../layouts/footer.php'; ?>
    <!-- link script -->
    <?php include '../layouts/link-script.php'; ?>

    <!-- JQuery -->
     <script>
        $(document).ready(function(){
            // Call Function : style
            SelectionStyle();
            SelectDataTimePicker();

            // Call Function :
            LoadDataToBox();
            AddRowItemDetail();

        });

        // Function : Style
        function SelectionStyle(){
            //Initialize Select2 Elements
            $('.select2').select2();

        }

        // Function : Date Time Picker
        function SelectDataTimePicker(){
            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' });
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' });
            //Money Euro
            $('[data-mask]').inputmask();

            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });

            //Date and time picker
            $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

            //Date range picker
            $('#reservation').daterangepicker();
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            locale: {
                format: 'MM/DD/YYYY hh:mm A'
            }
            });
            //Date range as a button
            $('#daterange-btn').daterangepicker(
            {
                ranges   : {
                'Today'       : [moment(), moment()],
                'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate  : moment()
            },

            function (start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }
            );

            //Timepicker
            $('#timepicker').datetimepicker({
            format: 'LT'
            });
        }

        // Function : Load Data To Box Order Detail
        function LoadDataToBox(){
            // staff
            $.ajax({
                url: '../config/select/get_to_box/get_staff_to_box.php',
                type: 'POST',
                success: function(data) {
                    $("#staff_id").html(data);
                },
            });

            // customer
            $.ajax({
                url: '../config/select/get_to_box/get_customer_to_box.php',
                type: 'POST',
                success: function(data) {
                    $("#customer_id").html(data);
                },
            });

            // customer
            $.ajax({
                url: '../config/select/get_to_box/get_table_to_box.php',
                type: 'POST',
                success: function(data) {
                    $("#table_id").html(data);
                },
            });
        }


        // Function : Add New Row Item Detail
        function AddRowItemDetail(){
            var i = 0;
            $(document).on("click", "#add_new_btn", function(){
                $.ajax({
                    url: '../config/select/select_order.php',
                    type: 'POST',
                    success: function(data) {
                        i++;
                        var html = '';
                        html += '<tr id = "row'+i+'">';
                        html += '<td style="min-width: 8rem; width: 30%;">';
                        html += '<select name="item_id[]" class="form-control select2 item_id" style="width: 100%;">' + data + '</select> </td>';
        
                        html += '<td style="min-width: 8rem; width: 20%;">';
                        html += '<input name="quantity[]" type="number" class="form-control quantity"> </td>';
        
                        html += '<td style="min-width: 8rem; width: 20%;"> <div class="input-group">';
                        html += '<input name="price[]" type="text" class="form-control text-right price" value="">';
                        html += '<div class="input-group-prepend"> <span class="input-group-text">$</span> </div> </div> </td>';
        
                        html += '<td style="min-width: 8rem; width: 20%;"> <div class="input-group">';
                        html += '<input name="total[]" type="text" class="form-control text-right total">';
                        html += '<div class="input-group-prepend"> <span class="input-group-text">$</span> </div> </div> </td>';
        
                        html += '<td class="text-right" style="min-width: 8rem; width: 10%;">';
                        html += '<button type="button" name="remove" id="'+ i +'" class="btn btn-danger delete_btn"> <i class="nav-icon fas fa-trash"></i> Delete </button> </td>';
                        html += '</tr>';

                        $("#row_item_detail").append(html);
                        SelectionStyle();
                    }
                });
            });

            

            $(document).on("click", ".delete_btn", function(){
                var btn_id = $(this).attr('id');
                $('#row'+btn_id+'').remove();
                i--;
            });

            
            $('#insert_submit').click(function(){
                var order_date = $("#order_date").val();
                var staff_id = $("#staff_id").val();
                var customer_id = $("#customer_id").val();
                var table_id = $("#table_id").val();


                $.ajax({
                    url: '../config/insert/insert_order.php',
                    type: 'POST',
                    data: {order_date: order_date, staff_id: staff_id, customer_id: customer_id, table_id: table_id},
                    success: function(data) {
                        console.log(data);

                        var form_item = $('#form_item').serialize();

                        $.ajax({
                            url: '../config/insert/insert_order_detail.php',
                            type: 'POST',
                            data: form_item,
                            success: function(data2) {
                                console.log(data2);
                                $("#form_item")[0].reset();
                            },
                        });
                    },
                });

                

                

            });

            
        }


     </script>
</body>
</html>

<!-- 
<script>
$(document).ready(function(){
 
 $(document).on('click', '.add', function(){
  var html = '';
  html += '<tr>';
  html += '<td><input type="text" name="item_name[]" class="form-control item_name" /></td>';
  html += '<td><input type="text" name="item_quantity[]" class="form-control item_quantity" /></td>';
  html += '<td><select name="item_unit[]" class="form-control item_unit"><option value="">Select Unit</option><?php //echo fill_unit_select_box($connect); ?></select></td>';
  html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
  $('#item_table').append(html);
 });
 
 $(document).on('click', '.remove', function(){
  $(this).closest('tr').remove();
 });
 
 $('#insert_form').on('submit', function(event){
  event.preventDefault();
  var error = '';
  $('.item_name').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter Item Name at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  
  $('.item_quantity').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter Item Quantity at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  
  $('.item_unit').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Select Unit at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  var form_data = $(this).serialize();
  if(error == '')
  {
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     if(data == 'ok')
     {
      $('#item_table').find("tr:gt(0)").remove();
      $('#error').html('<div class="alert alert-success">Item Details Saved</div>');
     }
    }
   });
  }
  else
  {
   $('#error').html('<div class="alert alert-danger">'+error+'</div>');
  }
 });
 
});
</script> -->