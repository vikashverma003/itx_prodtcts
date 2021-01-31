@extends('frontend.layouts.app')
@section('title', 'Login-Page')

@section('content')
 <main id="inner-body-content" class="padd-t-142 padd-b-60">
          <section class="page-title">
          <div class="container-1265">
             <div class="inner-page-title">
               <h2>Login</h2>
             </div>
          </div>
          </section>
          <section class="form-section login-section">
            <div class="container">
              <div class="form-box-inner max-555">
                <form method="post" action="{{url('login_user/check')}}">
                    @csrf
                  <div class="form-grouph input-design">
                    <input type="email" placeholder="Email" name="email" >
                  </div>
                  <div class="form-grouph input-design">
                    <input type="password" placeholder="Password" name="password" required>
                  </div>
                  <div class="form-grouph forget-password text-right">
                    <a href="#">Forgot Password?</a>
                  </div>
                  <div class="form-grouph submit-design">
                    <input class="submit-btn" type="submit" value="LOGIN">
                  </div>
                  <div class="form-grouph signup-txt text-center">
                    <p>New to Public Domain Marching? <a href="">Sign Up</a></p>
                  </div>
                </form>
              </div>
            </div>
          </section>
      </main>
@endsection
