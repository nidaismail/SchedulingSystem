@extends('layouts.app')
@push('styles')
<link rel="stylesheet" href="fonts/icomoon/style.css">
<link rel="stylesheet" href="css/classic.css">
<link rel="stylesheet" href="css/classic.date.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/alert.css">
<link href="images/favicon.png" rel="icon" type="image/png"> 
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="./js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
    <link href="./js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
@endpush

@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>

<script>

// $('#selected_Location').on('change', function() {
//     var selectedValue = $(this).val();
//     var dateFrom = $('#input_from').val();
//     var dateTo = $('#input_to').val();
//     var timeFrom = $('#from_time').val();
//     var timeTo = $('#to_time').val();
//     alert(timeFrom);
//     // console.log(you are here);
//     $.ajax({
//         url: '/location-Check',
//         type: 'POST',
//         data: {
//                'location_id': selectedValue,
//                'dateFrom': dateFrom,
//                'dateTo': dateTo,
//                'timeFrom': timeFrom,
//                'timeTo': timeTo
//             },
//         success: function(response) {
//             if(response == 'exists') {
//                 $('#selected_Location').tooltip({
                     
//                     content: "This Location is already booked on this Date and Time",
//                     position: {my: "center top", at: "center bottom"}
                    
//                 });
//             }
//         }
//     });
//     }); 
$(document).ready(function() {
$('#selected_Location').change(function() {
  var selectedLocation = $(this).val();
  var selectedFrom = $('#from_time').val();
  var selectedTo = $('#to_time').val();
  $.ajax({
    url: '/check-schedule',
    method: 'GET',
    data: {
      location: selectedLocation,
      timeFrom: selectedFrom,
      timeTo: selectedTo
    },
    success: function(response) {
      if (response.available) {
        // Allow submission of form
        alert('Location is free at this time.');
      } else {
        // Display popup message
        alert('Location is already booked at this time.');
      }
    }
  });
});
});

function validate() {
    var valid = false;
    if (document.getElementById("dow1").checked) {
        valid = true;
    } else if (document.getElementById("dow2").checked) {
        valid = true;
    } else if (document.getElementById("dow3").checked) {
        valid = true;
    } else if (document.getElementById("dow4").checked) {
        valid = true;
    } else if (document.getElementById("dow5").checked) {
        valid = true;
    } else if (document.getElementById("dow6").checked) {
        valid = true;
    } else if (document.getElementById("dow7").checked) {
        valid = true;
    }
    if (valid) {
        console.log("done");
    } else {
        document.getElementById("alert").style.display = "block";
        return false;
    }
}

// This is for removing the div tag after a schedule is added ahh its a pop up actually or a better an alert. 
setTimeout(function() {
    $('#successMessage').fadeOut('fast');
}, 4000);
// $('#alert').fadeOut('fast');
// }, 4000);

</script>
@endpush


@section('content')

<div class="">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        
        {{ session('status') }}
    </div>
    @endif

    <form class="myform" method="POST" action="{{ route('save') }}" onsubmit="return validate()">
        @csrf
        <div class="container px-lg-5">
            <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                <div class="content">
                    <div class="container text-left">
                        <div class="row p-4 justify-content-center" id="successMessage">
                            @if(session()->has('success'))
                            <div class="alert alert-success error-msg">
                                <i class="fa fa-check-circle"></i>
                                {{ session()->get('success') }}
                            </div>
                            @endif

                        </div>
                        <div  id="alert" class="error-msg" role="alert">
                            <i class="fa fa-times-close"></i>
                            Please Select a Day.
                          </div>
                        <div class="row justify-content-center given-mar">
                            <div class="col-lg-7">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="input_from">Select</label>
                                            <input type="radio" id="id" value="Class" name="category" class="pad">
                                            <label for="" class="cat">Class</label>
                                            <input type="radio" id="ids" value="Person" name="category" checked="checked">
                                            <label for="" class="cat">Person</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 removed" id="displayPerson">
                                        <div class="form-group">
                                            <select name="person" id="pers" class="form-control person-input">
                                                @role('admin'):
                                                    <option value="" disabled selected>Select Person</option>
                                                    @foreach($person as $per)
                                                        <option  value='{{$per->userID}}'>{{$per->name}}</option>
                                                    @endforeach
                                             
                                                @elserole('supervisor'):
                                                <option value="" disabled selected>Select Person</option>
                                                    @foreach($person as $per)
                                                        @if (Auth::user()->dep_id == $per->dep_id)
                                                            <option value='{{$per->userID}}'>{{$per->name}}</option>
                                                        @endif
                                                    @endforeach
                                                @else
                                                    <option value='{{ Auth::user()->userID}}'>{{ Auth::user()->name }}</option>
                                                @endrole
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 removedClass" id="displayClass">
                                        <div class="form-group">
                                            <select name="class" id="cls" class="form-control class-input">
                                                <option value="" disabled selected>Select  Class</option>
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
                                            <input type="date" data-date="" data-date-format="DD MMMM YYYY" min="0" name="start_date" class="form-control" id="input_from"
                                            placeholder="" required value="<?php echo date('Y-m-d'); ?>">
                                        </div>
                                    </div>
                                    {{-- @php
                                    $today = \Carbon\Carbon::now(); //Current Date and Time
                                   $lastDayofMonth =    \Carbon\Carbon::parse($today)->endOfMonth()->toDateString();
                                   dd($lastDayofMonth);
                                   @endphp --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="input_to">Date To</label>
                                            <input type="date" data-date="" data-date-format="DD MMMM YYYY" name="end_date" class="form-control" id="input_to"
                                                placeholder="End Date" required value="<?php echo date('Y-m-t', strtotime('0 months')); ?>">
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
                                            <input type="time" step="600" name="start_time" class="form-control"
                                                id="from_time" value = "08:00" required >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="input_to">Time To</label>
                                            <input type="time" step="600" name="end_time" class="form-control" id="to_time" value = "16:00"
                                                required>
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
                                            <select name="activity" id="" class="form-control" id="activity" required>
                                                <option value="" disabled selected>Select Activity</option>
                                                @foreach($activities as $act)
                                                <option value='{{$act->id}}'>{{$act->activity_name}}</option>
                                                
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="location">Location</label>
                                            <select name="location" id="selected_Location" class="form-control" required>
                                                <option value="" disabled selected>Select Location</option>
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
                                            <select name="person" id="pers2" class="form-control person-input">
                                                @role('admin')
                                                    <option value="" disabled selected>Select Person</option>
                                                    @foreach($person as $per)
                                                        <option value='{{$per->userID}}'>{{$per->name}}</option>
                                                    @endforeach
                                               
                                                @elserole('supervisor')
                                                <option value="" disabled selected>Select Person</option>
                                                    @foreach($person as $per)
                                                        @if (Auth::user()->department == $per->department)
                                                            <option value='{{$per->userID}}'>{{$per->name}}</option>
                                                        @endif
                                                    @endforeach
                                                @else
                                                    <option value='{{ Auth::user()->userID}}'>{{ Auth::user()->name }}</option>
                                                @endrole
                                               
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 hiddenClass" id="showClass">
                                        <div class="form-group">
                                            <label for="class">Class</label>
                                            <select name="class" id="cls2" class="form-control class-input">
                                                <option value="" disabled selected>Select  Class</option>
                                                @foreach($clas as $cl)
                                                <option value='{{$cl->id}}'>{{$cl->class_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="remarks">Remarks</label>
                                            <input type="text" name="remarks" id="" class="form-control" required>
                                        </div>
                                        {{-- {{url('/')}}/data --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-7 col-md-">
                                <div class="row">
                                    <div style="padding-top: 10px" class="col-md-4 col-sm-12">
                                        <a href="{{ route('save') }}"> <button type="submit"
                                                class="btn btn-success rounded-3 justify-content-center">Submit
                                            </button></a>

                                    </div>
                                    <div style="padding-top: 10px" class="col-md-4 col-sm-12">
                                        <input type="reset" class="btn btn-success rounded-3 justify-content-center "
                                            name="Reset">
                                    </div>
                                    <div style="padding-top: 10px" class="col-md-4 col-sm-12">
                                        <a href="{{ route('viewdata') }}"> <button type="button"
                                                class="btn btn-success rounded-3 justify-content-center">Preview</button></a>
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
    $('.person-input').change(function() {
        $('.person-input').val($(this).val())
    })
    $('.class-input').change(function() {
        $('.class-input').val($(this).val())
    })
    $("div.hidden").hide();
    $("div.removedClass").hide();
    $('#pers').prop('required', true);
    $('#cls').prop('required', false);
    $('#pers2').prop('required', false);
    $('#cls2').prop('required', true);
    // $("#display" + divalue).show();
    //         $("div.removed").not($("#display" + divalue)).hide();
    //         $("#show" + divalue).hide();
    //         $("div.hidden").not($("#show" + divalue)).show();

    $('input:radio[name="category"]').on('change', function() {
        var divalue = $(this).val();
        if (divalue == "") {
            $("div.hidden").hide();
            $("div.removed").hide();
            
        } else if (divalue == "Person") {
            $('#pers').prop('disabled', false);
            $('#cls').prop('disabled', false);
            $("#display" + divalue).show();
            $('#pers').prop('required', true);
            $('#cls').prop('required', false);
            $('#pers2').prop('required', false);
            $('#cls2').prop('required', true);

            // $("#ids").prop( "checked", false );
            $('#cls').prop('disabled', 'disabled');
            $("div.removedClass").not($("#display" + divalue)).hide();
            $("#show" + divalue).hide();
            $("#show" + divalue).prop('disabled', 'disabled');
            $("div.hiddenClass").not($("#show" + divalue)).show();
        } else if (divalue == "Class") {
            $('#pers').prop('disabled', false);
            $('#cls').prop('disabled', false);
            $('#cls').prop('required', true);
            $('#pers').prop('required', false);
            $('#pers2').prop('required', true);
            $('#cls2').prop('required', false);
            $("#display" + divalue).show();
            // $("#id").prop( "checked", false );
            $('#pers').prop('disabled', 'disabled');
            $("div.removed").not($("#display" + divalue)).hide();
            $("#show" + divalue).hide();
            $("div.hidden").not($("#show" + divalue)).show();
        }
    });

    $("input").on("change", function() {
    this.setAttribute(
        "data-date",
        moment(this.value, "YYYY-MM-DD")
        .format( this.getAttribute("data-date-format") )
    )
}).trigger("change")



});
</script>
@endprepend
{{-- $(document).ready(function() {
    $("#myform").validate({
        rules: {
            email: {
                required: true,
                email: true,
                remote: {
                    url: '/check-email',
                    type: 'post',
                    data: {
                        email: function() {
                            return $('#email').val();
                        }
                    }
                }
            },
            // other form fields and validation rules
        },
        messages: {
            email: {
                remote: "Email already exists"
            },
            // other error messages
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
});
// app/Http/Controllers/CheckEmailController.php
class CheckEmailController extends Controller
{
    public function check(Request $request)
    {
        $email = $request->input('email');
        $exists = YourModel::where('email', $email)->exists();
        return response()->json(['valid' => !$exists]);
    }
} --}}