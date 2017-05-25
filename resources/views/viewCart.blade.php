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

    <div class="container">
        <div class="row">
        <div class="col-md-12">
        

    @if(Session::has('product'))
       @foreach(Session::get('product') as $item)
          
          <div class="col-md-4">
             <h3>Item: {{$item['name']}}</h3>
             <span>price = {{$item['price']}}</span><br>
             <span>quantity {{$item['quantity']}}</span><br>
             <input type="submit" name="" value="Remove">
             <form method="get" action="/cart/add/{{$item['id']}}">
             {{ csrf_field() }}
             <input type="submit" name="" value="Add">
             </form>

          </div>
       @endforeach
    @endif
  
       
       

    </div>


    </div>

       <br>
      <div class="">
     &nbsp;&nbsp;<input type="submit" name="" value="Clear Cart">
      </div> 
    </div> 
    </body>
</html>
