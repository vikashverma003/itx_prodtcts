@extends('frontend.layouts.app')

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
              @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('warning'))
                        <div class="alert alert-warning">
                            {{ session('warning') }}
                        </div>
                    @endif
             
             @include('auth.login-module')
            </div>
          </section>
      </main>
@endsection
