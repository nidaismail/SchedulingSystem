@extends('layouts.app')
@push('styles')
<link rel="stylesheet" href="fonts/icomoon/style.css">
<link rel="stylesheet" href="css/classic.css">
<link rel="stylesheet" href="css/classic.date.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">  
<link rel="stylesheet" href="css/styles.css">
@endpush

@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@endpush

@section('content')
<div class="">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <form  method="POST" action="{{ route('save') }}">
        @csrf
        <div class="container px-lg-5">
            <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                <div class="content">
                    <div class="container text-left">
                                        <div class="row justify-content-center given-mar">
                                            <div class="col-lg-7">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="input_from">Select</label>
                                                            <input type="radio" value="Class" name="category" class="pad">
                                                            <label for="" class="cat">Class</label>
                                                            <input type="radio" value="Person" name="category">
                                                            <label for="" class="cat">Person</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 removed" id="displayPerson">
                                                        <div class="form-group">
                                                            <select name="person" id="" class="form-control">
                                                                @foreach($person as $per)
                                                                <option value='{{$per->id}}'>{{$per->Employee_name}}</option>
                                                                @endforeach
                                                            </select>   
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 removed" id="displayClass">
                                                        <div class="form-group">
                                                            <select name="class" id="" class="form-control">
                                                                @foreach($clas as $cl)
                                                                <option value='{{$cl->id}}'>{{$cl->class_name}}</option>
                                                                @endforeach
                                                            </select> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="dowPicker">
                                                    <div class="dowPickerOption">
                                                        <input type="checkbox" id="dow1" name="day[]" value="Sunday">
                                                        <label for="dow1">Sun</label>
                                                    </div>
                                                    <div class="dowPickerOption">
                                                        <input type="checkbox" id="dow2" name="day[]" value="Monday">
                                                        <label for="dow2">Mon</label>
                                                    </div>
                                                    <div class="dowPickerOption">
                                                        <input type="checkbox" id="dow3" name="day[]" value="Tuesday">
                                                        <label for="dow3">Tue</label>
                                                    </div>
                                                    <div class="dowPickerOption">
                                                        <input type="checkbox" id="dow4" name="day[]" value="Wednesday">
                                                        <label for="dow4">Wed</label>
                                                    </div>
                                                    <div class="dowPickerOption">
                                                        <input type="checkbox" id="dow5" name="day[]" value="Thursday">
                                                        <label for="dow5">Thur</label>
                                                    </div>
                                                    <div class="dowPickerOption">
                                                        <input type="checkbox" id="dow6" name="day[]" value="Friday">
                                                        <label for="dow6">Fri</label>
                                                    </div>
                                                    <div class="dowPickerOption">
                                                        <input type="checkbox" id="dow7" name="day[]" value="Saturday">
                                                        <label for="dow7">Sat</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center given-mar">
                                            <div class="col-lg-7">
                                                <div action="#" class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="input_from">Date From</label>
                                                            <input type="date" name="start_date" class="form-control" id="input_from"
                                                                placeholder="Start Date">

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="input_to">Date To</label>
                                                            <input type="date" name="end_date" class="form-control" id="input_to"
                                                                placeholder="End Date">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center given-mar">
                                            <div class="col-lg-7">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="input_from">Time From</label>
                                                            <input type="time" step="600" name="start_time" class="form-control" id="from_time">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="input_to">Time To</label>
                                                            <input type="time" step="600" name="end_time" class="form-control" id="time">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center given-mar">
                                            <div class="col-lg-7">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="activity">Activity</label>
                                                            <select name="activity" id="" class="form-control" id="activity">
                                                                @foreach($activities as $act)
                                                                <option value='{{$act->id}}' selected="true">{{$act->activity_name}}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="location">Location</label>
                                                            <select name="location" id="" class="form-control">
                                                                @foreach($locations as $loc)
                                                                <option value='{{$loc->id}}'>{{$loc->location}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <br>
                    
                                                    <div class="col-md-6 hidden" id="showPerson">
                                                        <div class="form-group">
                                                            <label for="person">Person</label>
                                                            <select name="person" id="" class="form-control">
                                                                @foreach($person as $per)
                                                                <option value='{{$per->id}}'>{{$per->Employee_name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 hidden" id="showClass">
                                                        <div class="form-group">
                                                            <label for="class">Class</label>
                                                            <select name="class" id="" class="form-control">
                                                                @foreach($clas as $cl)
                                                                <option value='{{$cl->id}}'>{{$cl->class_name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="remarks">Remarks</label>
                                                            <input type="text" name="remarks" id="" class="form-control">
                                                        </div>
                                                        {{-- {{url('/')}}/data --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-lg-7 col-md-">
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-12">
                                                        <a href="{{ route('save') }}"> <button type="submit" class="btn btn-success rounded-3 justify-content-center">Submit
                                                        </button></a>
                                                        
                                                    </div>
                                                    <div  style="padding-top: 10px" class="col-md-4 col-sm-12">
                                                        <input type="reset" class="btn btn-success rounded-3 justify-content-center " name="Reset">
                                                    </div>
                                                    <div  style="padding-top: 10px" class="col-md-4 col-sm-12">
                                                        <a href="{{ route('viewdata') }}"> <button type="button" class="btn btn-success rounded-3 justify-content-center">Preview</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                       
                                    </div>
                                </div>
                            </div>
                        </div>
    </form>
   
    
</div>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
@prepend('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>   
    <script>
        $(document).ready(function() {
            $("div.hidden").hide();
            $("div.removed").hide();
            $('input:radio[name="category"]').on('change', function() {
                var divalue = $(this).val();
                if (divalue == "") {
                    $("div.hidden").hide();
                    $("div.removed").hide();
                } else if (divalue == "Person") {
                    $("#display" + divalue).show();
                    $("div.removed").not($("#display" + divalue)).remove();
                    $("#show" + divalue).remove();
                    $("div.hidden").not($("#show" + divalue)).show();
                } else if (divalue == "Class") {
                    $("#display" + divalue).show();
                    $("div.removed").not($("#display" + divalue)).remove();
                    $("#show" + divalue).remove();
                    $("div.hidden").not($("#show" + divalue)).show();
                }
            });
        });
    </script>
@endprepend
