@extends('layouts.app')

@section('content')
<b-container>
    <b-row class="justify-content-center">
        <b-col cols="2"></b-col>
        <b-col cols="8">
            <b-card title="{{ __('Login') }}">
            <b-alert variant="success" show>Por favor ingresa tuss datos: </b-alert>                  
              
            <b-form method="POST" action="{{ route('login') }}">
                @csrf

                <b-form-group                           
                    label="{{ __('E-Mail Address') }}:"
                    label-for="email"                            
                    description="Nunca compartiremos tus datos. Estan seguros con nosotros">
                      
                    <b-form-input
                        id="email"                            
                        type="email"                                                
                        name="email"
                        value="{{ old('email') }}" 
                        placeholder="Enter email">
                        required autocomplete="email" autofocus                             
                    </b-form-input>
                </b-form-group>                        
                  
                <b-form-group                           
                    label="{{ __('Password') }}:"
                    label-for="password">                                                        
                      
                    <b-form-input
                        id="password"                            
                        type="password"                                                
                        name="password"
                        value="{{ old('password') }}">                                                                 
                    </b-form-input>
                </b-form-group>                        
                
                <b-form-group>
                    <b-form-checkbox name="remember" 
                        {{ old('remember') ? 'checked' : '' }}> 
                        {{ __('Remember Me') }}
                    </b-form-checkbox>
                </b-form-group>                  
                  
                <b-button type="submit" variant="primary">
                    {{ __('Login') }}
                </b-button>
                          
                <b-button href="{{ route('password.request') }}" variant="link">
                    {{ __('Forgot Your Password?') }}
                </b-button>                

              </b-form>
          </b-card>                      
        </b-col>
        <b-col cols="2"></b-col>
    </b-row>
</b-container>
@endsection
