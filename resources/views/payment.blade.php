<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Store</title>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <div style="display:flex; width: 100%; justify-content: space-between">
        <div>
            <a class="navbar-brand" href="#">Store</a>

        </div>
        <div>
        </div>
    </div>
</nav>
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
<h1 style="text-align: center">Checkout:</h1>
<form method="get" action="{{route('payment.pay')}}" enctype="multipart/form-data">
    @csrf
<div style="display: flex" class="container">
    <div class="" style="flex: 3">
        <div class="" style="padding: 18px; background: #fff; border-radius: 0.37rem; border: 1px solid #e4e4e4; display: flex; width: fit-content">
            <div class="container" style="width: 700px;">
                <div class="form-group">
                    <label for="formGroupExampleInput">Name:</label>
                    <input type="text" name="client_name"  class="form-control" id="formGroupExampleInput" value="{{ old('name') }}">
             </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Address:</label>
                    <input type="text" name="client_address"  class="form-control" id="formGroupExampleInput" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Shipping option:</label>
                    <select class="custom-select" name="shipping_id">
                        <option selected value="0">free standard</option>
                            <option value="1">express 10 EUR</option>
                    </select>
                </div>
                <input type="submit" class="btn btn-save btn-primary" value="BUY NOW" style="margin-top: 10px; float: left">

            </div>
        </div>
    </div>

    <div style=" flex:1" >
        <h3>Order data:</h3>
        <label>Name:</label>
        <input type="text" class="form-control" value="{{$item->name}}" readonly="">
        <br>
        <label>Brand name:</label>
        <input type="text" class="form-control" value="{{$item->brand['name']}}" readonly="">
        <br>
        <label>Price:</label>
        <input type="text" name="total_product_value" class="form-control" value="{{$item->price}}" readonly="">
    </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
