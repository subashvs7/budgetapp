@extends('layouts.app')

@section('content')
    
        <div >
            <h2 >Create an Account</h2>
            <form method="POST" action="{{ route('api.register') }}">
                @csrf

                <div >
                    <label for="name" >Full Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}"
                          
                           required autofocus> 
                </div>
                <div >
                    <label for="email" >Email Address</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}"     
                           required>
                </div>
                <div >
                    <label for="mobile" >Mobile Number</label>
                    <input type="tel" name="mobile" id="mobile" value="{{ old('mobile') }}" 
                           required>
                </div>
                <div >
                    <label for="password" >Password</label>
                    <input type="password" name="password" id="password"
                           
                           required>
                  
                </div> 
                <div >
                    <label for="password_confirmation" >Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        
                           required>
                </div> 
                <div >
                    <button type="submit"
                            >
                        Register
                    </button>
                    <a href="{{ route('login') }}" >
                        Already have an account? Login
                    </a>
                </div>
            </form>
        </div>
 
@endsection