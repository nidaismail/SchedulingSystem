@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/dashboardstyles.css" rel="stylesheet" />
@endpush

@push('scripts')
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
@endpush
@section('content')
<div class="">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="">
        {{-- <nav class="sb-topnav navbar navbar-expand navbar-dark align">
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav> --}}
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <!-- <div class="sb-sidenav-menu-heading">Core</div> -->
                        <a class="nav-link" href="{{ route('viewdata') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="{{ route('home') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Home
                        </a>
                    </div>
                </div>
                
            </nav>
        </div>
        
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">UserDashboard</h1>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Employees Data
                        </div>
                      
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Day</th>
                                        <th>Time From</th>
                                        <th>Time To</th>
                                        <th>Person</th>
                                        <th>Activity</th>
                                        <th>Class</th>
                                        <th>Location</th>
                                        <th>Remarks</th>
                                        <th>Non-Admissible</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($persondata as $data)
                                    <tr>
                                        
                                        <td>{{$data->date}}</td>
                                        <td>{{$data->day}}</td>
                                        <td>{{$data->time_from}}</td>
                                        <td>{{$data->time_to}}</td>
                                        <td>{{$data->person->Employee_name}} </td>
                                        <td>{{$data->activity->activity_name}} </td>
                                        <td>{{$data->class->class_name}} </td>
                                        <td>{{$data->location->location}} </td>
                                        <td>{{$data->remarks}}</td>
                                        <td>
                                            <!-- Default switch -->
<div class="form-check form-switch">
 <input class="form-check-input" name="toggle" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
 <label class="form-check-label" for="flexSwitchCheckDefault"></label>
</div>

                                          </td> 
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <a href="{{ route('admissible') }}" class=" right-align"> <button  type="submit" class="btn btn-success rounded-3 justify-content-center" id="btn-save">Save
                    </button></a>
                </div>
            </main>
        </div>
    </div>
</div>
</div>
@endsection
@prepend('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script>
         $(document).ready(function() {
            $('#btn-save').on('click', function(e) {
                e.preventDefault();
                const schedule_id = [];
                const persondata_id = [];
                
                $('#flexSwitchCheckDefault').each(function() {
                    if($(this).is(":checked")){
                        schedule_id.push($(this).val();)
                        persondata_id.push($persondata->id);
                    }
                })


                $.ajax({
                    url: '{{ route('admissible') }}',
                    type: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        schedule_id: schedule_id,
                        persondata_id: persondata_id

                    },
                    success:function(reponse) {

                    }
                })
            });
         })

            
    </script>
@endprepend
