<!DOCTYPE html>

<html>
<head>
	
	<meta charset="utf-8" />
	
	<title>Hopital</title>
	<link rel="stylesheet" href="{{url('back/css/flexi-background.css')}}" type="text/css" media="screen" />
	<link rel="stylesheet" href="{{url('back/css/styles2.css')}}" type="text/css" media="screen" />

	
</head>
<body>
<!--x-guest-layout-->
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

	<script src="{{url('back/js/flexi-background.js')}}" type="text/javascript" charset="utf-8"></script>
	<div id="box">
		<img src="{{url('back/images/logo.png')}}" class="logo" alt="yourlogo" />
		<h1>Member Login</h1>
          @if (session('status'))
                                        <div class="mb-4 font-medium text-sm text-green-600">
                                            {{ session('status') }}
                                        </div>
                                    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <input id="Username" type="text" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Username':this.value;" value="Username" />
			
        </div>

        <!-- Password -->
        <div class="mt-4">
        <input id="Password" type="password" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Password':this.value;" value="Password">

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div class="form-group">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
                <a class="text-white" href="page-forgot-password.html">Forgot Password?</a>
            </div>
    </form>
    <div class="new-account mt-3">
        <p class="text-white">Don't have an account? <a class="text-white" href="./register">Sign up</a></p>
    </div>
    </div>
<!--/x-guest-layout-->
</body>
</html>






<!----------------------------------------------------->
<div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                <nav class="navbar navbar-expand-lg">
                                    <div class="container" Type="background-color: white;"> <!-- Utilisation d'un conteneur pour centrer le logo -->
                                        <a class="navbar-brand mx-auto mt-2 mt-lg-0" href="/">
                                            <img
                                                src="img/logo/Logo_Food_On_Line.png"
                                                height="200"
                                                alt="Food On Line Logo"
                                                loading="lazy"
                                            />
                                        </a>
                                    </div>
                                </nav>
                         <h4 class="text-center mb-4 text-white">Sign in your account</h4>
                                    @if (session('status'))
                                        <div class="mb-4 font-medium text-sm text-green-600">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Email</strong></label>
                                            <input class="form-control" id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Password</strong></label>
                                            <input class="form-control" id="password" type="password" name="password" required autocomplete="current-password">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                               <div class="custom-control custom-checkbox ml-1 text-white">
													<input type="checkbox" class="custom-control-input" id="basic_checkbox_1" name="remember">
													<label class="custom-control-label" for="basic_checkbox_1">Remember me</label>
												</div>
                                            </div>
                                            <div class="form-group">
                                            @if (Route::has('password.request'))
                                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif
                                                <a class="text-white" href="page-forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-white text-primary btn-block">Sign Me In</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p class="text-white">Don't have an account? <a class="text-white" href="./register">Sign up</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--*******