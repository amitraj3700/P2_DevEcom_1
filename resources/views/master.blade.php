<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Project</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<script  src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
{{View::make('header')}}
@yield('content')
{{View::make('footer')}}
</body>
</html>

<style>
.custom-login{
    height:500px;
    padding-top:100px;
}
</style>

<!-- <script>
$(document).ready(function(){

    $("button").click(function(){

        alert("all is well");
    });

});

</script> -->