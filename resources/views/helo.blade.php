<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.15/vue.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>

</head>
<body>
    <div class="container">
        {{--<form action="/charging" method="POST">--}}
        {{--{{csrf_field()}}--}}
        {{--<script--}}
        {{--src="https://checkout.stripe.com/checkout.js" class="stripe-button"--}}
        {{--data-key="pk_test_j8RzazkDnk8i4oaguikkv4gO"--}}
        {{--data-amount="20000"--}}
        {{--data-name="Payment for Food"--}}
        {{--data-description="2 widgets ($40.00)"--}}
        {{--data-image="/128x128.png"--}}
        {{--data-locale="auto">--}}
        {{--</script>--}}
        {{--</form>--}}
        <h2>Hi welcome to the Patches website</h2>
        <p>Choose your patch</p>
        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="3WHY4WRMB43SC">
            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>

        @if(!Auth::check())

            <a href="/login">Login Here</a>
        @endif


        @if(Auth::check())
            <p>You are already logged in {{ Auth::user()->name }}</p>
           <a href="/logout">Logout</a>
        @endif




    </div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/vuecodes.js"></script>
</body>
</html>