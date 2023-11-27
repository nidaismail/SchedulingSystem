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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
</head>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var locationFilter = document.getElementById('location-filter');
        var applyButton = document.getElementById('applyLocationFilterBtn');

        applyButton.addEventListener('click', function () {
            var selectedLocation = locationFilter.value;
            console.log('Selected Location:', selectedLocation);

            // Hide all rows initially
            var allRows = document.querySelectorAll('.location-row');
            allRows.forEach(function (row) {
                row.style.display = 'none';
            });

            // Show rows based on the selected location
            if (selectedLocation === '') {
                // If 'All Locations' is selected, show all rows
                allRows.forEach(function (row) {
                    row.style.display = '';
                });
            } else {
                // Show rows matching the selected location
                var selectedRows = document.querySelectorAll('.location-row-' + selectedLocation);
                selectedRows.forEach(function (row) {
                    row.style.display = '';
                });
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
    .table-wrapper {
    overflow-x: auto; /* Enable horizontal scrolling */
    max-width: 100%; /* Ensure the table wrapper doesn't overflow */
    max-height: 600px;
    overflow-y: auto;
}

.table {
    border-collapse: collapse;
    width: 100%;
    table-layout: fixed; /* Important for fixed column width */
}

.static-column {
    position: sticky;
    left: 0;
    background-color: white;
    z-index: 1;
    /* Set width for the static columns */
    width: 200px; /* Adjust according to your needs */
    
}
.static-column + .static-column {
    margin-left: -1px; /* Adjust for any gap caused by default spacing */
}

.static-column:nth-child(2) {
    left: calc(200px + 1px); /* Adjust based on the width of the first static column */
   
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
                    <div class="panel-body">
                    <div class="panel-heading">
                        <div class="pull-right">
                            <form id="location-filter-form" class="form-inline">
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="location-filter" style="color: #16A796; font-size: 14px; margin-bottom: -15px; font-weight: bold;">Filter by Location: </label>
                                    <select id="location-filter" class="form-control" style="font-size: 14px; color: #16A796; margin-bottom: 5px; height: 40px; margin-left: 5px; font-weight: bold;">
                                        <option value="">All Locations</option>
                                        @foreach ($allLocations as $location)
                                            <option value="{{ $location->id }}">{{ $location->location }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="button" id="applyLocationFilterBtn" class="btn btn-default" style="color: white; margin-left: 10px; margin-bottom: 5px; background: #16A796; font-size: 12px;">Apply</button>
                            </form>
                        </div>
                    </div>
                </div>

                                    {{-- <div class="col pull-right text-left">
                                        <form action="{{ url('class') }}" method="GET">
                                            <label for="class">Select a Class:</label>
                                            <select name="class" id="class">
                                                <option value="">Show all classes</option>
                                                @foreach($clas as $class)
                                                    <option value="{{ $class->id }}">{{ $class->class_name }}</option>
                                                @endforeach
                                            </select>
                                            <button type="submit">Filter</button>
                                        </form>
                                    </div> --}}
                                    
                                    
                                    <h3 class="mb-10 panel-title"></h3>
                                </div>
                                
                                    <div class="table-wrapper">
                                        <table class="table table-bordered table-responsive">
                                            <thead>
                                                <tr>
                                                    <!-- Static columns -->
                                                    <th class="static-column" style="font-size: 12px; font-weight: bold;">Location</th>
                                                    <th class="static-column" style="font-size: 12px; font-weight: bold;">Specifications</th>
                                                    <!-- Scrollable columns -->
                                                    @foreach ($timeIntervals as $interval)
                                                        <th style="padding-right: 0.1rem; font-size: 12px; font-weight: bold;">{{ $interval }}</th>
                                                    @endforeach
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <tbody>
                                                @foreach ($allLocations as $location)
                                                <tr class="location-row location-row-{{ $location->id }}">
                                                    <!-- Static column content -->
                                                    <td class="static-column">{{ $location->location }}</td>
                                                    <td class="static-column">
                                                        <div>Seating Capacity: {{ $location->capacity }}</div>
                                                        <div>Sound System: {{ $location->soundSystem }}</div>
                                                        <div>Projector: {{ $location->projector }}</div>
                                                    </td>
                                                    <!-- Scrollable columns content -->
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