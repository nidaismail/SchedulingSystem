<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Job Portal</title>

    <!-- Icons font CSS-->
    <link href="asset/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="asset/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="asset/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="asset/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="asset/css/main.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="{{ asset('asset/css/main.css') }}">
    <style>
    textarea {
  width: 100%;
  height: 100px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
  color: grey;
  font-family: sans-serif;
}
      table,  td {
  border: 2px solid;
  width: 50%;
  padding: 15px;
  text-align: left;

      }
      #alert{
  display: none;
    }
    .error-msg,
    .warning-msg {
    width: 340px;
    margin: 10px 5px;
    padding: 10px;
    border-radius: 8px 4px 4px 4px;
    }
    .error-msg {
    color: #9F6000;
    background-color: #FEEFB3;
    }
    .warning-msg {
    color: #D8000C;
    background-color: #FFBABA;
    }
      input {
  width: 100%;
  box-sizing: border-box;
  color:"white";
        }
        input[type=text] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        }
        input[type=textarea] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        }
        body
         {background-color: #16A796;
       


  align-content: center;
}
        </style>
       
</head>

<div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Update Post</h2>
                    <form action = "/edit/<?php echo $users[0]->id; ?>" method = "post">
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                        @csrf
                    <div class="row p-4 justify-content-center" id="successMessage">
                            @if(session()->has('success'))
                            <div class="alert alert-success error-msg">
                                <i class="fa fa-check-circle"></i>
                                {{ session()->get('success') }}
                            </div>
                            @endif
                        </div>
                        <div class="input-group">
                        <h5>User Id</h5>
                        <input class="input--style-2" type = 'text' name = 'userID'
                         value = '<?php echo$users[0]->userID; ?>'/> 
                        </div>
                       
                        <div class="row row-space">
                            <div class="col-2"> 
                            </div>
                        </div>
                        <div class="input-group">
                        <h5>Name</H5>
                            <div class="rs-select2 js-select-simple select--no-search">
                            <input class="input--style-2" type = 'text' name = 'name'
                            value = '<?php echo$users[0]->name; ?>'/>
                            </div>
                        </div>
                        <div class="input-group">
                        <h5>email</H5>
                            <div class="rs-select2 js-select-simple select--no-search">
                            <input  class="input--style-2" type = 'text' name = 'email'
                            value = '<?php echo$users[0]->email; ?>'/> 
                            </div>
                        </div>
                        <h5>Designation</H5>
                            <div class="rs-select2 js-select-simple select--no-search">
                            <input  class="input--style-2" type = 'text' name = 'designation'
                            value = '<?php echo$users[0]->designation; ?>'/> 
                            </div>
                        </div>
                        <h5>Department ID</H5>
                            <div class="rs-select2 js-select-simple select--no-search">
                            <input  class="input--style-2" type = 'text' name = 'dep_id'
                            value = '<?php echo$users[0]->dep_id; ?>'/> 
                            </div>
                        </div>
						<!-- <div class="input-group"> -->
                        <!-- <h5>Job Description</H5>
                            <div class="rs-select2 js-select-simple select--no-search">
                            <textarea class="input--style-2" name= 'designation' rows="6" cols="10" style="height: auto; resize: vertical; transition: none;"><?php echo $users[0]->designation; ?></textarea>
                            </div>
                        </div>
                        <div class="input-group">
                        <h5>Eligibilty Criteria</H5>
                            <div class="rs-select2 js-select-simple select--no-search">
                            <textarea class="input--style-2" name= 'dep_id'rows="6" cols="10" style="height: auto; resize: vertical; transition: none;"><?php echo $users[0]->dep_id; ?></textarea>
                           </div>
                        </div>
                        <div > -->
                        <button style="padding: 10px 20px; background-color: #1969b3; color: white; line-height: 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 14px; font-weight: bold; text-decoration: none;"
                    onmouseover="this.style.backgroundColor='white'; this.style.color='#1969b3'; this.style.border='2px solid #1969b3';"
                    onmouseout="this.style.backgroundColor='#1969b3'; this.style.color='white'; this.style.border='none';">
                            Update Post
                        </button>
                        </div><br>
                        <button style="padding: 10px 20px; background-color: #1969b3; color: white; line-height: 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 14px; font-weight: bold; text-decoration: none;"
                    onmouseover="this.style.backgroundColor='white'; this.style.color='#1969b3'; this.style.border='2px solid #1969b3';"
                    onmouseout="this.style.backgroundColor='#1969b3'; this.style.color='white'; this.style.border='none';">
                    <span style="margin-right: 5px; font-size: 12px; line-height: 12px;">&#8592;</span> Go Back
                    </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery JS-->
    <script src="asset/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="asset/vendor/select2/select2.min.js"></script>
    <script src="asset/vendor/datepicker/moment.min.js"></script>
    <script src="asset/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="asset/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->