<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Manager</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../bower/admin-lte/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../bower/admin-lte/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="../bower/morris.js/morris.css">
    <link rel="stylesheet" href="../bower/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="../bower/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="../bower/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="../bower/toastr/toastr.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    {{-- Table --}}
    <link rel="stylesheet" href="../bower/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bower/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../bower/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../bower/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="../bower/admin-lte/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../bower/admin-lte/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="../bower/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="../css/admin/home.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper" id="admin1" >
        @include('admin.component.init_ui')
        @include('admin.component.manager_users')
        @include('admin.component.manager_foods')
        @include('admin.component.manager_drinks')
        @include('admin.component.manager_orders')
        <div class="content-wrapper" id="dashboard">
            <section class="content-header">
                <h1>
                    Manager User
                    <small>Show User</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Manager User</li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h1 class="create-new btn btn-3"> Create User</h1>
                            </div>
                            <div class="box-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th class="text-center" colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Trung</td>
                                            <td>0123456789</td>
                                            <td>nguyenvantrung2015@gmail.com</td>
                                            <td>Phuong Mai, Dong Da, Ha Noi</td>
                                            <td class="text-center"><a href="" title="">Edit</a></td>
                                            <td class="text-center"><a href="" title="">Delete</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <aside class="control-sidebar control-sidebar-dark">
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" id="control-sidebar-home-tab">
                        <h3 class="control-sidebar-heading">Recent Activity</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                        <p>Will be 23 on April 24th</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-user bg-yellow"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                                        <p>New phone +1(800)555-1234</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                                        <p>nora@example.com</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-file-code-o bg-green"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                                        <p>Execution time 5 seconds</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <h3 class="control-sidebar-heading">Tasks Progress</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Custom Template Design
                                        <span class="label label-danger pull-right">70%</span>
                                    </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Update Resume
                                        <span class="label label-success pull-right">95%</span>
                                    </h4>

                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Laravel Integration
                                        <span class="label label-warning pull-right">50%</span>
                                    </h4>

                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Back End Framework
                                        <span class="label label-primary pull-right">68%</span>
                                    </h4>

                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <div class="tab-pane" id="control-sidebar-settings-tab">
                        <form method="post">
                            <h3 class="control-sidebar-heading">General Settings</h3>
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Report panel usage
                                    <input type="checkbox" class="pull-right" checked>
                                </label>
                                <p>
                                    Some information about this general settings option
                                </p>
                            </div>
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Allow mail redirect
                                    <input type="checkbox" class="pull-right" checked>
                                </label>
                                <p>
                                    Other sets of options are available
                                </p>
                            </div>
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Expose author name in posts
                                    <input type="checkbox" class="pull-right" checked>
                                </label>

                                <p>
                                    Allow the user to show his name in blog posts
                                </p>
                            </div>
                            <!-- /.form-group -->

                            <h3 class="control-sidebar-heading">Chat Settings</h3>

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Show me as online
                                    <input type="checkbox" class="pull-right" checked>
                                </label>
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Turn off notifications
                                    <input type="checkbox" class="pull-right">
                                </label>
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Delete chat history
                                    <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </aside>
            <div class="control-sidebar-bg"></div>
        </div>
    </div>
    <script src="../bower/vue/dist/vue.js"></script>    
    <script src="../bower/axios/dist/axios.min.js"></script>    
    <script src="../bower/jquery/dist/jquery.min.js"></script>
    <script src="../bower/jquery-ui/jquery-ui.min.js"></script>
    <script src="../bower/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../bower/raphael/raphael.min.js"></script>
    <script src="../bower/morris.js/morris.min.js"></script>
    <script src="../bower/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <script src="../bower/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../bower/admin-lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../bower/jquery-knob/dist/jquery.knob.min.js"></script>
    <script src="../bower/moment/min/moment.min.js"></script>
    <script src="../bower/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="../bower/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="../bower/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script src="../bower/admin-lte/dist/js/adminlte.min.js"></script>
    <script src="../bower/admin-lte/dist/js/demo.js"></script>
    <script src="../bower/toastr/toastr.min.js"></script>
  {{--   table --}}

    <script src="../bower/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../bower/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../bower/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../bower/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../bower/fastclick/lib/fastclick.js"></script>
    <script src="../bower/admin-lte/dist/js/adminlte.min.js"></script>
    <script src="../bower/admin-lte/dist/js/demo.js"></script>
    <script src="../js/admin/home.js"></script>
    <script>
        $(function () {
        $('#example_food').DataTable(
          {'paging'      : true,
          'lengthChange': true,
          'searching'   : true,
          'ordering'    : false,
          'info'        : false,
          'autoWidth'   : true});
        $('#example_drink').DataTable({
          'paging'      : true,
          'lengthChange': true,
          'searching'   : true,
          'ordering'    : true,
          'info'        : false,
          'autoWidth'   : true
        })
      })
    </script>
</body>
</html>



