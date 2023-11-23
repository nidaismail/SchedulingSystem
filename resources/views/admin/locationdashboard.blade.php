<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
      Dashboard
    </title>
    <!-- Favicon -->
    <link href="./images/favicon.png" rel="icon" type="image/png"> 
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="./js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
    <link href="./js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="./css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />
    
    {{-- {{-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
</head>
<script>
  
/*
Please consider that the JS part isn't production ready at all, I just code it to show the concept of merging filters and titles together !
*/
$(document).ready(function() {

  $('input[type=date]').change(function () {
    this.form.submit();
  });

    $('.filterable .btn-filter').click(function() {
        var $panel = $(this).parents('.filterable'),
            $filters = $panel.find('.filters input'),
            $tbody = $panel.find('.table tbody');
        if ($filters.prop('disabled') == true) {
            $filters.prop('disabled', false);
            $filters.first().focus();
        } else {
            $filters.val('').prop('disabled', true);
            $tbody.find('.no-result').remove();
            $tbody.find('tr').show();
        }
    });
    $('.filterable .filters input').keyup(function(e) {
        /* Ignore tab key */
        var code = e.keyCode || e.which;
        if (code == '9') return;
        /* Useful DOM data and selectors */
        var $input = $(this),
            inputContent = $input.val().toLowerCase(),
            $panel = $input.parents('.filterable'),
            column = $panel.find('.filters th').index($input.parents('th')),
            $table = $panel.find('.table'),
            $rows = $table.find('tbody tr');
        /* Dirtiest filter function ever ;) */
        var $filteredRows = $rows.filter(function() {
            var value = $(this).find('td').eq(column).text().toLowerCase();
            return value.indexOf(inputContent) === -1;
        });
        /* Clean previous no-result if exist */
        $table.find('tbody .no-result').remove();
        /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
        $rows.show();
        $filteredRows.hide();
        /* Prepend no-result row if all rows are filtered */
        if ($filteredRows.length === $rows.length) {
            $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="' + $table
                .find('.filters th').length + '">No result found</td></tr>'));
        }
    });
});
</script>

<body class="">
  <style>
    /* CSS to set the text color based on background color */
    td[data-color="red"] {
        background-color: red;
        color: white; /* Text color for red cells */
    }

    td[data-color="green"] {
        background-color: green;
        color: black; /* Text color for green cells */
    }
</style>
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
                aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand pt-0" href="https://www.anth.pk/" target="_blank" >
                <img src="./images/brand/CIRS.png" class="navbar-brand-img" alt="...">
            </a>
            <!-- User -->
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Collapse header -->
                <div class="navbar-collapse-header d-md-none">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="https://www.anth.pk/" target="_blank">
                                <img src="./images/brand/CIRS.png">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false"
                                aria-label="Toggle sidenav">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav">
                  <li class="nav-item">
                        <a class="nav-link" href="{{url('/admin')}}" target="_self">
                            <i class="ni ni-key-25 text-info"></i> Person Activity 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/classadmin')}}" target="_self">
                            <i class="ni ni-key-25 text-info"></i> Class Activity
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/locationadmin')}}" target="_self">
                            <i class="ni ni-key-25 text-info"></i> Location Activity 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{url('/home')}}">
                            <i class="ni ni-single-02 text-yellow"></i> Home
                        </a>
                    </li>
                </ul>
            </div>
        </div>
      </nav>
      <div class="main-content">
        <!-- Navbar -->
        <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
            <div class="container-fluid">
                <!-- Brand -->
                <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block"
                    href="{{url('/admin')}}">Dashboard</a>
            </div>
        </nav>
        <!-- End Navbar -->
        <!-- Header -->
        <div class="header bg-gradient-primary pb-1 pt-5 pt-md-8">
            <div class="container-fluid">
               
            </div>
        </div>
        <div class="container-fluid mt--7">
            <div class="row mt-5">
                <div class="col-xl-12 mb-5 mb-xl-0">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-md-12 text-center">
                                <div class="divs">
                                    <form method="GET" id="filter_form">
                                      @php
                                        // $formattedDate =;
                                        // dd($formattedDate);
                                      @endphp
                                    
                                        <input type="date" id="filter_date" name="userdate" value="<?php echo date('Y-m-d', strtotime($currentdate)); ?>"/>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                           
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="panel panel-primary filterable">
                                <div class="panel-heading">
                                    <div class="col pull-right text-right">
                                        <button class="btn btn-primary btn-sm btn-filter"><span
                                                class="glyphicon glyphicon-filter"></span> Filter</button>
                                    </div>
                                    <div class="col pull-right text-left">
                                        <span
                                                class="glyphicon glyphicon-filter"></span>  <div class="form-group">
                                                    <div class="dropdown">
                                                        <button class="form-control dropdown-toggle" type="button" id="classDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Select Class
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="classDropdown">
                                                            <input type="text" id="classSearch" class="form-control" placeholder="Search...">
                                                            <div class="dropdown-divider"></div>
                                                            @foreach($clas as $cl)
                                                                <a class="dropdown-item class-item" href="#" data-value="{{$cl->id}}">{{$cl->class_name}}</a>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                    </div>
                                    
                                    
                                    <h3 class="mb-10 panel-title"></h3>
                                </div>
                                <table class="table table-bordered table-responsive">
                                  <thead>
                                      <tr>
                                          <th>Location</th>
                                          <th>Specifications</th>
                                          @foreach ($timeIntervals as $interval)
                                              <th>{{ $interval }}</th>
                                          @endforeach
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($allLocations as $location)
                                          <tr>
                                              <td>{{ $location->location }}</td>
                                              <td><div style="display: block">Seating Capacity: {{$location->capacity}}</div>
                                                
                                                <div style="display: block">Sound System: {{$location->soundSystem}}</div>
                                                <div style="display: block">Projector : {{$location->projector}}</div>
                                            </td>
                                              @foreach ($timeIntervals as $interval)
                                              @php
                                              $cellData = $occupancyData[$location->id][$interval];
                                              $tooltipContent = $cellData['details']; // Person's name and class
                                          @endphp
                                                  <td style="background-color: {{ $cellData['color'] }}" data-toggle="tooltip" title="{{ $tooltipContent }}">
                                                    <!-- If the cell is occupied (red), display a tooltip -->
                                                    <!-- Tooltip will show the person's name and class -->
                                                </td>
                                              @endforeach
                                          </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--   Core   -->
    <script src="./js/plugins/jquery/dist/jquery.min.js"></script>
    <script src="./js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!--   Optional JS   -->
    <script src="./js/plugins/chart.js/dist/Chart.min.js"></script>
    <script src="./js/plugins/chart.js/dist/Chart.extension.js"></script>
    <!--   Argon JS   -->
    <script src="./js/argon-dashboard.min.js?v=1.1.2"></script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script>
        // Initialize Bootstrap tooltips
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

    <script>
    $(document).ready(function() {
        $('#filter_date').change(function() {
            $('#filter_form').submit();
        })
       
    })
    window.TrackJS &&
        TrackJS.install({
            token: "ee6fab19c5a04ac1a32a645abde4613a",
            application: "argon-dashboard-free"
        });
       
                 

                          
                      
    </script>
</body>

</html>