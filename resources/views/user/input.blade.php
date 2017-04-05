<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
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
        <div class="flex-center position-ref full-height">
            <form action="{{route('user.input')}}" method="POST" class="form">
                {{ csrf_field() }}
                <div class="form-group {{ $errors->has('title') ? 'has-error' :'' }}">
                    @if ($errors->has('title'))
                    <div class="alert alert-danger">
                        <strong>{{ $errors->first('title') }}</strong>
                    </div>
                    @endif
                    <input type="text" name='title' class='form-control' placeholder='Title' value="{{ old('title') }}">
                </div>
                <div class="form-group {{ $errors->has('slug') ? 'has-error' :'' }}">
                    @if ($errors->has('slug'))
                    <div class="alert alert-danger">
                        <strong>{{ $errors->first('slug') }}</strong>
                    </div>
                    @endif
                    <input type="text" name='slug' class='form-control' placeholder='slug' value="{{ old('slug') }}">
                </div>
                <div class="form-group">
                    <input type="submit" value='Submit' class='btn btn-primary'>
                    <a class="btn btn-default" href="{{ route('user.input') }}">Cancel</a>
                </div>
            </form> 
        </div>
    </body>
</html>
