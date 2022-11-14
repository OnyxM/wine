@extends('layouts.app', ['title' => 'Login | '])

@section('content')
    <section class="login-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 p-0">
                    <div class="log-in-bg"></div>
                </div>
                <div class="col-lg-6 col-md-6 p-0">
                    <div class="login-form">
                        <h3>Log In</h3>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Email Address">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-md-6 offset-md-3">
                                    <button type="submit" class="btn default-btn">Login</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
