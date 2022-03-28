@extends('layouts.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
@section('content')

    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                The Task
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Task</th>
                    <th scope="col">operation</th>
                </tr>
                </thead>
                <tbody>
                @if(isset($tasks) && $tasks -> count() > 0)
                    @foreach($tasks as $tasks)
                <tr>
                    <th scope="row">{{$tasks -> id}}</th>
                    <td>{{$tasks-> name}}</td>
                    <td style="display:none">{{$tasks -> type}}</td>
                    <td><a href="{{}}" type="button" class="btn btn-info">update</a>
                        <button type="button" class="btn btn-danger">Delete</button>
                        <button type="button" class="btn btn-warning">State</button>
                </tr>
                    </td>


                @endforeach
                 @endif
                </tbody>
            </table>
            <button type="button" class="btn btn-success">Adding</button>
        </div>
    </div>
    @stop
