<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/app.css">
        <title>CarsDB</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
   <div class="container-box">
   @foreach ($cars as $car)

       <div class="box-car">
         <div class="container-img">
           <img src="{{$car->linkImg}}" class="img-resize" alt="">
         </div>
         <div class="info-box">
           <span>{{$car->model}}</span>
           <span>{{$car->brand}}</span>
           <span>{{$car->type}}</span>
         </div>
       </div>

   @endforeach
    </div>

</html>
