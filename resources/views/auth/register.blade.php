<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>LOGIN</title>
    <style>
        html,body { 
    height: 100%; 
}

.global-container{
    height:100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f5f5f5;
}

form{
    padding-top: 10px;
    font-size: 14px;
    margin-top: 30px;
}

.card-title{ font-weight:300; }

.btn{
    font-size: 14px;
    margin-top:20px;
}


.login-form{ 
    width:330px;
    margin:20px;
}

.sign-up{
    text-align:center;
    padding:20px 0 0;
}

.alert{
    margin-bottom:-30px;
    font-size: 13px;
    margin-top:20px;
}
        </style>
</head>
<body>
    <div class="global-container">
        <div class="card login-form">
        <div class="card-body">
            <h3 class="card-title text-center">Log in to AdminPanel</h3>
            <div class="card-text">
                <!--
                <div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <!-- to error: add class "has-danger" -->
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{ old('email') }}" autofocus>

                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="exampleInputPassword1">Password</label>
                        {{-- <a href="#" style="float:right;font-size:12px;">Forgot password?</a> --}}
                        <input type="password" class="form-control form-control-sm" id="exampleInputPassword1" name="password">
                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                    
                    {{-- <div class="sign-up">
                        Don't have an account? <a href="#">Create One</a>
                    </div> --}}
                </form>
            </div>
        </div>
    </div>
    </div>
    
</body>
</html>