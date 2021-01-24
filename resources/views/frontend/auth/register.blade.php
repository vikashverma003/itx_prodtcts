@extends('frontend.layouts.app')

@section('content')
 <main id="inner-body-content" class="padd-t-142 padd-b-60">
          <section class="page-title">
          <div class="container-1265">
             <div class="inner-page-title">
               <h2>Create an Account</h2>
             </div>
          </div>
          </section>
          <section class="form-section creat-account-section">
            <div class="container">
              <div class="form-box-inner max-555">
                <form method="post" action="{{url('register_user/store')}}">
                   @csrf
                  <div class="form-grouph input-design">
                    <input type="text" placeholder="First Name" name="first_name" required>
                  </div>
                  <div class="form-grouph input-design">
                    <input type="text" placeholder="Last Name" name="last_name" required>
                  </div>
                  <div class="form-flex">
                    <div class="form-grouph input-design">
                      <input type="number" placeholder="Zip Code" name="zipcode" required>
                    </div>
                    <div class="form-grouph input-design">
                      <input type="text" placeholder="School" name="school" required>
                    </div>
                  </div>
                  <div class="form-grouph input-design">
                    <input type="email" placeholder="Email" name="email" required>
                  </div>
                  <div class="form-grouph input-design">
                    <input type="number" placeholder="Phone Number" name="phone_number" required>
                  </div>
                  <div class="form-grouph input-design">
                    <input type="password" placeholder="Password" name="password" required>
                  </div>
                  <div class="form-grouph input-design">
                    <input type="password" placeholder="Confirm Password" name="confirm_password" required>
                  
                    <span id='message'></span>

                  </div>
                  <div class="form-grouph checkbox-design">
                    <input type="checkbox">
                    <label>By checking this box and creating an account you agree to all Terms and Conditions by Public Domain Marching. </label>
                  </div>
                  <div class="form-grouph submit-design">
                    <input class="submit-btn" type="submit" name="submit"  id="submit"   value="CREATE ACCOUNT">
                  </div>
                  <div class="form-grouph signup-txt text-center">
                    <p>Already have an account. <a href="">Login</a></p>
                  </div>
                </form>
              </div>
            </div>
          </section>
      </main>

@endsection
