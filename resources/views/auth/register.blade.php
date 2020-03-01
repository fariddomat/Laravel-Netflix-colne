@extends('layouts.app')
@section('content')

<div class="login">
    <div class="login__bg">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto col-md-6 bg-white mx-auto p-3">
                <h2 class="text-center">Netflix<span class="text-primary">ify</span></h2>
                <hr>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    @method('post')
                    @include('layouts.dashboard._error')

                    <!-- Username -->
                    <div class="form-group">
                        <label for="name">Username</label>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}" id="name" aria-describedby="helpId"
                            placeholder="">

                    </div>
                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email"  value="{{old('email')}}"  id="email" aria-describedby="helpId"
                            placeholder="">
                    </div>
                    <!-- Password -->
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password"
                            aria-describedby="helpId" placeholder="">
                    </div>


                    <!-- Submit -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <p class="text-center">Already have an account <a href="{{ route('login') }}">Login</a></p>
                    <hr>
                    <a href="/login/facebook" class="btn btn-block btn-primary" style="background: #3b5998;"><i
                            class="fab fa-facebook-f"></i> Register with Facebook</a>
                    <a href="/login/google" class="btn btn-block btn-primary" style="background: #ea4335;"><span
                            class="fab fa-google" aria-hidden="true"></span> Register with Gmail</a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection