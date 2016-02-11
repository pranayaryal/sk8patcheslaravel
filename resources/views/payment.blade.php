@extends('layout')



@section('content')



    <form action="/charging" method="POST">
        {{csrf_field()}}
        <script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="pk_test_j8RzazkDnk8i4oaguikkv4gO"
                data-amount="2000"
                data-name="Demo Site"
                data-description="2 widgets ($20.00)"
                data-image="/128x128.png"
                data-locale="auto">
        </script>
    </form>

@endsection