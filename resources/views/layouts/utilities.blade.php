<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Findstaff Placement Services</title>

    <!-- Styles -->
    <link rel="icon" href="/images/icon.ico">
    <link href="/css/app.css" rel="stylesheet">
    <link href= "/js/select2/select2.css" rel = "stylesheet">
    <link rel="stylesheet" href="/js/jqueryDatatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="/toaster/toastr.css">
    <link rel="stylesheet" href="/js/jqueryUI/jquery-ui.css">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/sidebar/css/simple-sidebar.css" rel="stylesheet">

    @stack('styles')

    <script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
        ]) !!};
    </script>

    </head>
    <body>
      <body>
        <div id="app">
            <nav class="navbar navbar-default navbar-fixed-top" style = "padding-top: 5px" id="navtop">
                <div class="navbar-header">
                    <!-- Branding Image -->
                    <a class="navbar-brand toggled" id="menu-toggle" href="#menu-toggle">
                        <img src="/images/burger.png">
                    </a>
                    <a class="navbar-brand" style="color: #fff;"><img src="/images/logo.jpg" id="logo"></a>
                    <a class="navbar-brand" style="color: #fff;">Placement Services Management System</a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <li>
                            <form name="clockForm" style="margin-top: 15px; padding-right: 20px;">
                                <input type="button" name="clockButton" style="background-color: transparent; border-style: none;" />
                              </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <br>
        <br>
        <div id="wrapper" id="sidebar" style = "">
            <!-- Sidebar -->
            <div id="sidebar-wrapper" style = "background-color: #2ba54b">

              <ul class="sidebar-nav" >
                    <li  style="height: 100px; border-bottom: 1px solid #8ffdcc; padding-top: 35px; font-size: 10px; background-color: #fff; color: #428bca; text-align: center;">
                      <p style="text-align: left;"><img src ="{{ Auth::user()->emp_pic }}" style="width: 50px; height: 50px; border-radius: 50px;"><i class="fa fa-check-circle"></i> {{ Auth::user()->name }}</p>
                    </li>
                    <li>
                        <a href="{{ route('home.index') }}" class="dashboard"><i class="fa fa-dashboard"></i>&nbsp;&nbsp;Dashboard</a>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#collapse1"><i class="fa fa-exchange"></i>&nbsp;&nbsp;Transactions</a>
                    </li>
                    <div id="collapse1" class="pane;-collapse collapse">
                        <ul class="list-group" style="list-style-type: circle;">
                          <li>
                              <a data-toggle ="collapse" class = "gen-req" href = "#genreqcollapse"><i class="fa fa-check-square-o"></i>&nbsp;&nbsp;General Requirements</a>
                          </li>
                              <div id = "genreqcollapse" class="panel-collapse collapse">
                                  </li>
                                  <li>
                                      <a href = ""  class = "employer">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-user"></i>&nbsp;&nbsp;Employer</a>
                                  </li>
                                  <li>
                                      <a href = ""  class = "job-order">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-file-text-o"></i>&nbsp;&nbsp;Job Order</a>
                                  </li>
                                  <li>
                                      <a href = ""  class = "job-fees">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-list-ul "></i>&nbsp;&nbsp;Job Fees</a>
                                  </li>
                              </div>
                            <li>
                                <a data-toggle ="collapse" class = "app-manage" href = "#appmanagecollapse"><i class="fa fa-server"></i>&nbsp;&nbsp;Application Management</a>
                            </li>
                                <div id = "appmanagecollapse" class="panel-collapse collapse">
                                    </li>
                                    <li>
                                        <a href = ""  class = "applicant">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-users"></i>&nbsp;&nbsp;Applicant</a>
                                    </li>
                                    <li>
                                        <a href = ""  class = "applicant-matching">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-handshake-o"></i>&nbsp;&nbsp;Applicant Matching</a>
                                    </li>
                                    <li>
                                        <a href = ""  class = "init-interview">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle-o"></i>&nbsp;&nbsp;Initial Interview</a>
                                    </li>
                                    <li>
                                        <a href = ""  class = "final-interview">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle"></i>&nbsp;&nbsp;Final Interview</a>
                                    </li>
                                    <li>
                                        <a href = ""  class = "doc-collection">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-files-o"></i>&nbsp;&nbsp;Documents Collection</a>
                                    </li>
                                </div>

                          <li>
                              <a href="" class = "col-mon"><i class="fa fa-money"></i>&nbsp;&nbsp;Collections Monitoring</a>
                          </li>

                        </ul>
                    </div>
                    <li>
                        <a data-toggle="collapse" href="#collapse2" class="maintenance"><i class="fa fa-wrench"></i>&nbsp;&nbsp;Maintenance</a>
                    </li>
                    <div id="collapse2" class="panel-collapse collapse">
                        <ul class="list-group" style="list-style-type: circle;">
                         <li>
                            <a href = ""  class = "country"><i class="fa fa-circle"></i>&nbsp;&nbsp;Country</a>
                        </li>
                        <li>
                            <a data-toggle ="collapse" class = "requirements" href = "#requirementscollapse"><i class="fa fa-circle"></i>&nbsp;&nbsp;General Requirements</a>
                        </li>
                            <div id = "requirementscollapse" class="panel-collapse collapse">
                                </li>
                                <li>
                                    <a href = ""  class = "class-job-cat">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle-o"></i>&nbsp;&nbsp;Job Category</a>
                                </li>
                                <li>
                                    <a href = ""  class = "class-job-type">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle-o"></i>&nbsp;&nbsp;Job Type</a>
                                </li>
                                <li>
                                    <a href = ""  class = "class-job">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle-o"></i>&nbsp;&nbsp;Jobs</a>
                                </li>
                                <li>
                                    <a href = ""  class = "class-fees">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle-o"></i>&nbsp;&nbsp;Fees</a>
                                </li>
                                <li>
                                    <a href = ""  class = "class-skills">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle-o"></i>&nbsp;&nbsp;Skills</a>
                                </li>
                                <li>
                                    <a href = ""  class = "class-documents">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle-o"></i>&nbsp;&nbsp;Documents</a>
                                </li>
                            </div>
                  </div>
            <li>
                <a href=""><i class="fa fa-list"></i>&nbsp;&nbsp;Queries</a>
            </li>
            <li>
                <a data-toggle="collapse" href="#collapse3" class="class-reports"><i class="fa fa-bar-chart"></i>&nbsp;&nbsp;Reports</a>
            </li>
            <div id="collapse3" class="panel-collapse collapse">
                <ul class="list-group" style="list-style-type: circle;">
                    <li>
                        <a href = ""  class = "class-shipment"><i class="fa fa-circle"></i>&nbsp;&nbsp;Application Report</a>
                    </li>
                </ul>
            </div>
            <li>
                <a data-toggle="collapse" href="#collapse4" class="utilities"><i class="fa fa-gear"></i>&nbsp;&nbsp;Utilities</a>
            </li>
            <div id="collapse4" class ="panel-collapse collapse">
                <ul class="list-group" style="list-style-type: circle;">
                    <li>
                        <a href = ""  class = "class-utility-fee"><i class="fa fa-circle"></i>&nbsp;&nbsp;Settings</a>
                    </li>
                    <li>
                        <a data-toggle ="collapse" class = "employee" href = "#employeecollapse"><i class="fa fa-circle"></i>&nbsp;&nbsp;Employee</a>
                    </li>
                        <div id = "employeecollapse" class="panel-collapse collapse">
                            </li>
                            <li>
                                <a href = "{{ route('employee_type.index') }}"  class = "class-employee-type">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle-o"></i>&nbsp;&nbsp;Employee Type</a>
                            </li>
                            <li>
                                <a href = "{{ route('employees.index')}}"  class = "class-employee">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle-o"></i>&nbsp;&nbsp;Employee</a>
                            </li>
                        </div>
                    <li>
                        <a href = ""  class = "class-audit"><i class="fa fa-circle"></i>&nbsp;&nbsp;Audit Trail</a>
                    </li>
                    <li>
                        <a href = ""  class = "class-audit"><i class="fa fa-circle"></i>&nbsp;&nbsp;Back up and Recovery</a>
                    </li>
                </ul>
            </div>
            <br>
            <li>
                <a href=""
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out"></i>&nbsp;&nbsp;Logout
            </a>
            <form id="logout-form" action="{{ url('/logout') }}" style="display: none;">
                {{ csrf_field() }}
            </form>
        </ul>


</div>

<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            @yield('content')
        </div>
    </div>
</div>

<!-- /#page-content-wrapper -->
</div>




<!-- Scripts -->
<script src="/js/app.js"></script>
<script type="text/javascript" src = "/js/jquery.validate.js"></script>
<script type="text/javascript" charset="utf8" src="/js/jqueryDatatable/jquery.dataTables.min.js"></script>
<script  type = "text/javascript" charset = "utf8" src="/js/jqueryValidate/additional-methods.js"></script>
<script type="text/javascript" charset="utf8" src="/toaster/toastr.js"></script>
<script type="text/javascript" charset="utf8" src="/js/jqueryUI/jquery-ui.js"></script>
<script  type = "text/javascript" charset = "utf8" src="/js/inputMask/jquery.inputmask.bundle.js"></script>
<script  type = "text/javascript" charset = "utf8" src="/js/select2/select2.full.js"></script>
<script type="text/javascript" charset="utf8" src="/js/jqueryDatatable/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="/toaster/toastr.js"></script>


<script>
    function clock(){
        var time = new Date()
        var hr = time.getHours()
        var min = time.getMinutes()
        var sec = time.getSeconds()
        var ampm = " PM "
        if (hr < 12){
            ampm = " AM "
        }
        if (hr > 12){
            hr -= 12
        }
        if (hr < 10){
            hr = " " + hr
        }
        if (min < 10){
            min = "0" + min
        }
        if (sec < 10){
            sec = "0" + sec
        }
        document.clockForm.clockButton.value = hr + ":" + min + ":" + sec + ampm
        setTimeout("clock()", 1000)
    }
    window.onload=clock;

    $(document).on('show.bs.modal', '.modal', function () {
        var zIndex = 1040 + (10 * $('.modal:visible').length);
        $(this).css('z-index', zIndex);
        setTimeout(function() {
            $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
        }, 0);
    });
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
  </script>
  @stack('scripts')


</body>
</html>
