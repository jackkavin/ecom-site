<!DOCTYPE html>
<html>
    <style>
        ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: Right;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}

.container{
    float: center;
    padding-left:150px;
}
    </style>
    <head>
        <title>laravel Authentication</title>
        <script src="{{ asset('main.js') }}"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <script src=
"https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js">
  </script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav>
            <ul>
                <li>
                    <a class="" href="{{ route('login') }}">Login</a>
                </li>
                <li>
                <a class="" href=#>Register</a>
                </li>
            </ul>
        </nav>
        <div class="container">
            Please Login to Continue...
        </div>
    </body>
</html>