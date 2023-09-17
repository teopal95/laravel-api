<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
       
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
       </head>
       <style>
       .bg{
           background: #fafafa;
       }
       .br5{
       border-radios: 5px;
       }
       .image{
       width:90px;
       height:110px;
       }
       .content{
           width: calc(100% - 90px);
       }
       .fw600{
           font-weight: 600;
       }
       .text-cl{
           color: #e03
       }
       .fw400{
           font-weight: 400;
       }
       .fz90{
           font-size:90%;
       }
       </style>

      <body class="bg">
       
       
       <div class="row p-2 p-2">
       @foreach($games as $game)
       <div class="col-12 shadow -sm bg-white p-2 d-flex mb-2"></div>
       
       <div class="px-2 content">
       <p class="mb-1 fw600">{{ $game->title }}</p>
       <p class="mb-1 text-cl fw400">Description: {{ $game->description }}</p>
       <p class="mb-1 fw400 fz90">Genre: {{ $game->genre }}</p>
       <div>
       <p class="text-success mb-0 fw600 fz90 float-start">Release Date: {{ $game->release_date }}</p>
       </div>
       </div>
       </div>
       @endforeach
       </div>
    </body>
</html>
