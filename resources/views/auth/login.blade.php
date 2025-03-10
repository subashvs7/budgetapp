@extends('layouts.app')

@section('content')
    
        <div >
            <h2 >Login </h2>
            <form method="POST" action="{{ route('api.login') }}">
                @csrf
                <div class="mb-4">
                    <label for="email" >Email Address</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}"required autofocus>
                <div >
                    <label for="password" >Password</label>
                    <input type="password" name="password" id="password" required>
                   
                </div>
                <div >
                    <button type="submit"
                            >
                        Login
                    </button>
                    
                </div>
                <p >
                    Don't have an account? 
                    <a href="{{ route('register') }}" >Register here</a>
                </p>
            </form>
        </div>
    
@endsection