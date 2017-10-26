@extends('layouts.app')

@section('content')

@if (Session::has('flash_message'))
    <div class="alert alert-success fade in alert-dismissable">
      <a href="#" class="close" data-dimiss="alert" aria-label="close" title="close">&times;</a>
        {{ Session::get('flash_message') }}
    </div>
@endif

<div class="container">
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-4 col-sm-5">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>{{ $product->name }}<h3></div>

                <div class="panel-body">  
                    <img src="{{ $product->imgpath }}" height="200px" width="300px" class="img-rounded"> 
                    <p>{{ $product->description }}</p>
                    <p>Price : Php.{{ $product->prise }}</p> 
                    <a href="/home/addtocart/{{ $product->id }}"><button type="submit" class=" btn btn-success">Add to cart</button></a>          
                </div>
            </div>
        </div>
        @endforeach
        <button type="button" class="btn btn-info btn-lg" id="cart" data-toggle="modal" data-target="#myModal">cart</button>
    </div>
</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cart Items</h4>
      </div>
      <table id="table" class="table table-striped">
      
      <div class="modal-body col-md-8">
          <thead>
              <tr>
                  <th>Image</th>
                  <th>Quantity</th>
                  <th>Amount</th>
              </tr>
          </thead>
        @foreach($cart_items as $cart_item)
          <tbody>
              <tr>
                    <td> <img src="{{ $cart_item->imgpath }}" height="100px" width="100px" class="img-rounded">
                    <td> <p>{{ $cart_item->quantity }}</p> </td>
                    <td> <p>Amount : Php.{{ $cart_item->amount }}</p> </td>
                </td>
              </tr>
          </tbody>           
        @endforeach
    </table>
    </div>
      <div class="modal-footer">
        <a href="/checkoutprocess"><button type="button" class="btn btn-success">Checkout</button></div>
      </div>
    </div>

  </div>
</div>
@endsection
