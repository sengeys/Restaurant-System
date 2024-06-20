

<!DOCTYPE html>
<html lang="en">

<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restaurant | Dashboard </title>

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
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../pages/dashboard.php">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->     
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3 id="order">150</h3>

                                    <p>Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3 id="staff">53</h3>

                                    <p>Staffs</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3 id="item">44</h3>

                                    <p>Items</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3><span id="sale">65</span><sup style="font-size: 20px">$</sup></h3>

                                    <p>Sales</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex flex-wrap">
                                    <h5 class="font-weight-bold text-success">Order Recently</h5>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Payment ID</th>
                                            <th>Payment Date</th>
                                            <th>Customer Name</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th style="text-align: center; width: 10%">Action</th>
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
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
             <!-- Model Detail -->
        <div class="modal fade" id="modal-detail">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Detail Payment</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <ul class="list-unstyled" id="orderleft">
                                        <li><span class = "text-bold">Date</span>: Dara</li>
                                        <li><span class = "text-bold">Customer Name</span>: Dara</li>
                                        <li><span class = "text-bold">Staff Name</span>: Dara</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <ul class="list-unstyled" id="orderright">
                                        <li class="text-right"><span class = "text-bold">Order No</span>: Dara</li>
                                        <li class="text-right"><span class = "text-bold">Table</span>: Dara</li>
                                        <li class="text-right"><span class = "text-bold">Stutus</span>: Dara</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row card-body table-responsive">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Item</th>
                                        <th>Unit Price</th>
                                        <th>Quantity</th>
                                        <th>SubTotal</th>
                                    </tr>
                                </thead>
                                <tbody id="row_detail">
                                    <tr>
                                        <td>1</td>
                                        <td>soup</td>
                                        <td>$12.00</td>
                                        <td>2</td>
                                        <td>$24.00</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan='4' class="text-right text-bold">Total : </td>
                                        <td id="grand_total">$24.00</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        </div>
        <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <?php include '../layouts/footer.php'; ?>

 <!-- link script -->
 <?php include '../layouts/link-script.php'; ?>

 <!-- Query -->
 <script>
        
        $(document).ready(function () {

            //Initialize Select2 Elements
            $('.select2').select2();

            // Call Function : Loat Data To Table
            LoadDataToTable();

            SelecDataPrint();

            SelecDataDetail();

            SumTotal();
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
                url: '../config/select/select_payment_dashboard.php',
                type: 'POST',
                success: function(data) {
                    $("#row_payment").html(data);
                },
            });
        }



        // Print
        function SelecDataPrint(){
            $(document).on("click", "#print_btn", function(){
                var id = $(this).attr('data-id');
                printPage(id);
                console.log(id);
            });
        }

        function printPage(id) {
            var printWindow = window.open('../report/print_order.php?id='+id+'');
            printWindow.addEventListener('load', function() {
                printWindow.print();
            }, true);
        }

        // Get Data Detail
        function SelecDataDetail(){
            $(document).on("click", "#show_detail_btn", function(){
                var id = $(this).attr('data-id');

                $.ajax({
                    url: '../config/select/select_order_detail.php',
                    type: 'POST',
                    dataType: 'JSON',
                    data: {id:id},
                    success: function(data) {
                        $('#modal-detail').modal('show');
                        try {
                            console.log(data);
                            
                            var orders = JSON.parse(JSON.stringify(data));

                            var orderleft = '';
                            var orderright = '';
                            var orderdetail = '';
                            var ordertotal = '';
                            orders.forEach(order => {

                                orderleft += '<li><span class = "text-bold">Date</span>: '+order.order_date+'</li>';
                                orderleft += '<li><span class = "text-bold">Customer Name</span>:'+order.customer_name+'</li>';
                                orderleft += '<li><span class = "text-bold">Staff Name</span>: '+order.staff_name+'</li>';

                                orderright += '<li class="text-right"><span class = "text-bold">Order No</span>: '+order.order_id+'</li>';
                                orderright += '<li class="text-right"><span class = "text-bold">Table</span>: '+order.table_name+'</li>';
                                orderright += '<li class="text-right"><span class = "text-bold">Stutus</span>: '+order.status+'</li>';

                                ordertotal += order.total;
                                

                                let index = 1;
                                order.details.forEach(detail => {
                                    orderdetail += '<tr>';
                                    orderdetail += '<td>'+index+'</td>';
                                    orderdetail += '<td>'+detail.item_name+'</td>';
                                    orderdetail += '<td>$'+detail.unit_price+'</td>';
                                    orderdetail += '<td>'+detail.quantity+'</td>';
                                    orderdetail += '<td>$'+detail.amount+'</td>';
                                    orderdetail += '</tr>';
                                    index ++;
                                });

                                $('#orderleft').html(orderleft);
                                $('#orderright').html(orderright);
                                $('#row_detail').html(orderdetail);
                                
                               
                                $('#grand_total').text('$' + ordertotal);
                            });

                        } catch (error) {
                            console.error('Error parsing JSON:', error);
                            console.error('Raw response:', data);
                        }
                    }
                });
            });
        }

        function SumTotal(){
            $.ajax({
                url: '../config/total/total_order.php',
                type: 'POST',
                success:function(data){
                    $('#order').text(data);
                }
            });

            $.ajax({
                url: '../config/total/total_item.php',
                type: 'POST',
                success:function(data){
                    $('#item').text(data);
                }
            });

            $.ajax({
                url: '../config/total/total_staff.php',
                type: 'POST',
                success:function(data){
                    $('#staff').text(data);
                }
            });

            $.ajax({
                url: '../config/total/total_sale.php',
                type: 'POST',
                success:function(data){
                    $('#sale').text(data);
                }
            });
        }

    </script>
</body>

</html>