<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/main.css">

    <title>Login</title>
</head>

<body class="b-login">
        <div class="iniciar">
        @if ($errors->has('nick'))
        <div id="esconder" class="alertlogin alert-danger alert-dismissible" role="alert">
            <span>
                <strong>{{ $errors->first('nick') }}</strong>
            </span>
            </div>
        @endif

        @if ($errors->has('password'))
        <div id="esconder" class="alertlogin alert-danger alert-dismissible" role="alert">
        <span>
            <strong>{{ $errors->first('password') }}</strong>
        </span>
        </div>
        @endif
            <form  role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <div class="iniciar--title">
                    <h2>SIEMPRE MUJER</h2>
                    <span>Consultorio obstetrico</span>
                </div>
                <br>
                <div class="iniciar--campo{{ $errors->has('nick') ? ' has-error' : '' }}">
                    <label for="nick"> <h5>Nick</h5> </label>
                        <div class="col-md-6">
                        <input id="nick" type="text" class="iniciar--input" name="nick" value="{{ old('nick') }}">
                        
                        </div>
                </div>
                
                <br>
                
                <div class="iniciar--campo{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password"><h5>Password</h5></label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="iniciar--input" name="password">
                    </div>
                </div>
                
                <br>
                
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn-principal">
                            <!-- <i class="fa fa-btn fa-sign-in"></i> --> Login
                        </button>
                    </div>
                </div>

            </form>
        </div>
</body>

</html>
