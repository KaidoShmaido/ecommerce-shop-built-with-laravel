<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title')  {{config('app.name')}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
      <div class="container">
         @if ($errors->any())
           <div class="alert alert-danger" role="alert">
             <strong>Errors</strong>
                <ul class="list-group">
                     @foreach ($errors->all() as $error)
                         <li class="list-group-item">{{$error}}</li>
                     @endforeach
                </ul>
           </div>
          @endif
      </div>
</body>
</html>
