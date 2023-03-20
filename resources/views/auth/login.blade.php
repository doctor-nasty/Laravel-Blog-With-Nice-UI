@extends('layouts.master', ['title' => 'Login'])




@section("content")
<section class="section-padding privacy-policy-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="privacy-policy-content">
                    <div class="section-title">
                        <h5 class="title">Login</h5>
                    </div>
                    @if(session('message'))
                    <span class="text-success">{{ session('message') }}</span><br><br>
                    @endif

                    @if($errors->any())
                    @foreach ($errors->all() as $error)
                    <span class="text-danger">{{ $error }}</span><br><br>
                    @endforeach
                    @endif
                    @if (Auth::check())
                    <p>You are logged In</p>
                    <a href="{{ url('logout') }}">Logout</a>
                    @else
                    <form method="post" action="{{ route('login.perform') }}">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        {{-- <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57"> --}}

                        <h1 class="h3 mb-3 fw-normal">Login</h1>


                        <div class="form-group form-floating mb-3">
                            <input type="text" class="form-control" name="username" value="{{ old('username') }}" required="required" autofocus>
                            <label for="floatingName">Email or Username</label>
                            @if ($errors->has('username'))
                                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                            @endif
                        </div>

                        <div class="form-group form-floating mb-3">
                            <input type="password" class="form-control" name="password" value="{{ old('password') }}" required="required">
                            <label for="floatingPassword">Password</label>
                            @if ($errors->has('password'))
                                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
