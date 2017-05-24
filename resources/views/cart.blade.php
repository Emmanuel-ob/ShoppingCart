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
         <a href="/cart/view"><button class="btn btn-warning">CART({{ count(\Session::get('product')) }})</button></a>
        
        <section class="container">

        <ul class="list-group">
            @foreach ($items as $item)
                <li class="list-group-item">
                    <h2><a class="header">{{$item->name}}</a></h1><br>
                    <p style="word-break: break-all;">{{$item->price}}</p>
                    <br/>
                    <form method="get" action="/cart/add/{{$item->id}}">
                     {{ csrf_field() }}
                    <input type="submit" name="" value="Add to Cart">
                    
                    </form>
                </li><br>
            @endforeach
        </ul>

        
    </section> 

        <!-- <div class="content">
           <button><a class="item btn" href="/cart/add/{{$item->id}}">Add to Cart</a></button>
           <div class="row"> 
            <div class="col-md-12 well well-default">  

            </div>  
           
        </div>             
        </div>  --> 
    </body>
</html>
