<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Merchant</title>
</head>
<body>
<div class="container" style="margin-top: 100px;">
    <div style="float: left">
    <form method="post" action="{{route('merchant')}}" enctype="multipart/form-data">
        @csrf
    <h1 style="">Merchant</h1>
        @if($errors->any())
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&#10006</span>
                        </button>
                        {{$errors->first() }}
                    </div>
                </div>
            </div>
        @endif
    <div style="width: 350px;height: 185px; border: solid 1px rgba(0, 0, 0, 0.06); padding: 40px 36px 0 34px; border-radius: 14px;background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.01), rgba(0, 0, 0, 0.04)), linear-gradient(#ffffff, #ffffff);">
        <div>
            <input type="text" name="number" class="form-control name_update" placeholder="Number cart" style="">
        </div>
        <div style="margin-top: 30px;">
            <input type="text" name="month" class="form-control name_update" placeholder="Month" style="width: 75px; float: left">
            <input type="text" name="year" class="form-control name_update" placeholder="Year" style="width: 75px; float: left">
            <input type="text" name="cvv" class="form-control name_update" placeholder="CVV" style="width: 100px; float: right">
        </div>

    </div>
        <input type="submit" class="btn btn-save btn-primary" value="Pay {{$item->total_shipping_value}}" style="margin-top: 10px; float: left; width: 100px;">
    </div>
    <div style="float: right">
        <div style=" flex:1" >
            <h3>Order data:</h3>
            <label>Client name:</label>
            <input type="text" name="client_name" class="form-control" value="{{$item->client_name}}" readonly="">
            <br>
            <label>Address:</label>
            <input type="text" name="client_address" class="form-control" value="{{$item->client_address}}" readonly="">
            <br>
            <label>Total product value:</label>
            <input type="text" name="total_product_value" class="form-control" value="{{$item->total_product_value}}" readonly="">
            <br>
            <label>Total shipping value:</label>
            <input type="text" name="total_shipping_value" class="form-control" value="{{$item->total_shipping_value}}" readonly="">
        </div>
    </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
