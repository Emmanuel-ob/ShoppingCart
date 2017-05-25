<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
         <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">

        
    </head>
    <body>
        
<!-- 
    @if(Session::has('cart'))
       @foreach(Session::get('cart') as $item)
          {{$item['id']}}
          {{$item['name']}}
          {{$item['quantity']}}
       @endforeach
    @endif
 -->  
         <a href="/cart/view"><button class="btn btn-warning">CART({{ count(\Session::get('product')) }})</button></a><br>

      <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">Products</div>
                <div class="panel-body">

        
        <!-- <section class="container"> -->
        <div class="container">
        <div class="row">
      
            

        <!-- <ul class="list-group"> -->
            @foreach ($items as $item)
                <div class="col-md-4">
                    <h3><a class="header">{{$item->name}}</a></h3>
                    <span style="word-break: break-all;">{{$item->price}}</span>
                    <br>
                    <form method="get" action="/cart/add/{{$item->id}}">
                     {{ csrf_field() }}
                     <select class="form-control" name="quantity" id=""  onchange="" required>
                                                   <option>1</option>
                                                   <option>2</option>
                                                   <option>3 </option>
                                                   <option>4 </option>
                                                   <option>5 </option>
                                                   <option>6 </option>
                                </select>
                    <input type="submit" name="" value="Add to Cart">
                    
                    </form>
                </div>
            @endforeach
        <!-- </ul> -->

        </div>
        </div>
        </div>
    <!-- </section> --> 


             
            </div>
          </div>
          </div>
        </div>
      </div>

        <!-- <div class="content">
           <button><a class="item btn" href="/cart/add/{{$item->id}}">Add to Cart</a></button>
           <div class="row"> 
            <div class="col-md-12 well well-default">  

            </div>  
           
        </div>             
        </div>  --> 
    </body>
</html>
