<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png"  href="{{ asset('backend/assets/images/favi-icon-96x96.png') }}">
    

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/global_assets/css/icons/icomoon/styles.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/layout.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/components.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/colors.min.css') }}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{ asset('backend/global_assets/js/main/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/global_assets/js/main/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/global_assets/js/plugins/loaders/blockui.min.js') }}"></script>
    <script src="{{ asset('backend/global_assets/js/plugins/ui/ripple.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ asset('backend/global_assets/js/plugins/forms/styling/uniform.min.js') }}"></script>

    <script src="{{ asset('backend/assets/js/app.js') }}"></script>
    <script src="{{ asset('backend/global_assets/js/demo_pages/login.js') }}"></script>
    <!-- /theme JS files -->
    <style>
       .icon-eye-blocked {
        float: right;
        margin-left: -25px;
        margin-top: -25px;
        position: relative;
        z-index: 2;
        }

        .container{
        padding-top:50px;
        margin: auto;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Register User</h3>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <input type="text" placeholder="Name" id="name" name="name" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <input type="number" placeholder="Phonenumber" id="Phonenumber" name="Phonenumber" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Email" id="email" name="email" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" id="password" name="password" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Confirm password" id="cpassword" name="cpassword" class="form-control"/>
                    </div>
                </form>
            </div> 
        </div>
    </div>
        

</body>

<script>
$(".toggle-password").click(function() {

$(this).toggleClass("icon-eye");
var input = $($(this).attr("toggle"));
if (input.attr("type") == "password") {
  input.attr("type", "text");
} else {
  input.attr("type", "password");
}
});
</script>
</html>




