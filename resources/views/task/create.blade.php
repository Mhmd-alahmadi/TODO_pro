<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Styles -->
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"></a>
                </li>
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }}</a>
                    </li>
            @endforeach

            {{--                    <li class="nav-item">--}}
            {{--                        <a class="nav-link disabled">Disabled</a>--}}
            {{--                    </li>--}}
            {{--                </ul>--}}
            {{--                <form class="d-flex">--}}
            {{--                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">--}}
            {{--                    <button class="btn btn-outline-success" type="submit">Search</button>--}}
            {{--                </form>--}}
        </div>
    </div>
</nav>
<div class="flex-center position-ref full-height">


    <div class="content" >

        <div class="title m-b-md">
            {{__('messages.Add your task')}}
        </div>
        @if(Session::has('success')
)
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
        @endif
        <br>
        <form method="POST" action="{{route('task.store')}}" enctype="multipart/form-data" > {{-- enctype ???? ???????? ???????? ???????? ??????????????--}}
            @csrf
            {{--                    <input name="_token" value="{{csrf_token()}}">--}}



            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">{{__('messages.Task Name')}}</label>
                <input type="text" class="form-control" name="name" placeholder="{{__('messages.Enter Offer Name')}}">
                @error('name')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>



            <button type="submit" class="btn btn-primary">{{__('messages.Save task')}}</button>
        </form>

    </div>
</div>
</body>
</html>
