@extends('layouts.app')
@section('content')
            <div class="container">
                <div class="row">
                    <div class="col mx-auto">
                        <div class="text-center mb-6">
                            <img src="{{asset('assets/images/brand/logo.png')}}" class="" alt="">
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card-group mb-0">
                                    <div class="card p-4">
                                        <div class="card-body">
                                            <h1>ავტორიზაცია</h1>
                                            <p class="text-muted">გაიარეთ ავტორიზაცია</p>

                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <div class="input-group mb-3">
                                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="{{__('საიდ. ნომერი')}}" required autofocus>
                                                    @if ($errors->has('email'))
                                                        <span class="invalid-feedback" role="alert">
															<strong>{{ $errors->first('email') }}</strong>
														</span>
                                                    @endif
                                                </div>
                                                <div class="input-group mb-4">
                                                    <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
                                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                                    @if ($errors->has('password'))
                                                        <span class="invalid-feedback" role="alert">
															<strong>{{ $errors->first('password') }}</strong>
														</span>
                                                    @endif
                                                </div>
                                                <div class="input-group mb-4">

                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-gradient-primary btn-block">
                                                            {{ __('Login') }}
                                                        </button>
                                                    </div>
                                                    <div class="col-12">
                                                        @if (Route::has('password.request'))
                                                            <a class="btn btn-link box-shadow-0 px-0" href="{{ route('password.request') }}">
                                                                {{ __('Forgot Your Password?') }}
                                                            </a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                    <div class="card text-white bg-primary py-5 d-md-down-none login-transparent">
                                        <div class="card-body text-center justify-content-center ">
                                            <h2>რეგისტრაცია</h2>
                                            <p>შეგიძლიათ დარეგისტრირდეთ, რეგისტრაციის შემდეგ მოხდება თვქნი მომხმარებლის ვალიდაცია, რის შემდეგაც თქვენს მითითებულ ელფოსტაზე მოგივად დასტური. შემდეგ გაივლით ავტორიზაციას შეავსებთ თქვენი ორგანიზაციის ინფორმაციას</p>
                                            <a class="btn btn-gradient-success active mt-3" href="{{ route('register') }}">{{ __('რეგისტრაცია') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection



