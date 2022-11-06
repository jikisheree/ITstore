@extends('layouts.auth-master')
@section('content')
<form method="post" action="{{ route('register.perform') }}"  class="h-100 bg-dark">
<input type="hidden" name="_token" value="{{ csrf_token() }}" />
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <!-- background image -->
            <div class="col-xl-6 d-none d-xl-block">
              <img src="/assets/image/background/linus-mimietz-01hQvBUC7rI-unsplash.jpg"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            <!-- input form section -->
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase"> Registration </h3>


                <!-- First Last Name -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                  <input type="text" class="form-control" name="contactFirstName" value="{{ old('contactFirstName') }}" placeholder="contactFirstName" required="required" autofocus>
                  <label for="floatingName">contactFirstName</label>
                  @if ($errors->has('contactFirstName'))
                  <span class="text-danger text-left">{{ $errors->first('contactFirstName') }}</span>
                  @endif
                  </div>

                  <div class="col-md-6 mb-4">
                    <input type="text" class="form-control" name="contactLastName" value="{{ old('contactLastName') }}" placeholder="contactLastName" required="required" autofocus>
                    <label for="floatingName">contactLastName</label>
                    @if ($errors->has('contactLastName'))
                    <span class="text-danger text-left">{{ $errors->first('contactLastName') }}</span>
                    @endif
                  </div>
                </div>
                <!-- Email -->
                <div class="form-outline mb-4">
                  <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
                  <label for="floatingEmail">Email address</label>
                  @if ($errors->has('email'))
                  <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                  @endif
                </div>
                <!-- Username -->
                <div class="form-outline mb-4">
                  <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                  <label for="floatingName">Username</label>
                  @if ($errors->has('username'))
                  <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                  @endif
                </div>

                <!-- Password -->
                <div class="form-outline mb-4">
                  <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                  <label for="floatingPassword">Password</label>
                  @if ($errors->has('password'))
                  <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                  @endif
                </div>
                <!-- Confirm Password -->
                <div class="form-outline mb-4">
                  <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
                  <label for="floatingConfirmPassword">Confirm Password</label>
                  @if ($errors->has('password_confirmation'))
                  <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                  @endif
                </div>


                <div class="row">
                  <!-- Phone -->
                  <div class="col-md-6 mb-4">
                    <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="phone" required="required">
                    <label for="floatingPhone">phone</label>
                    @if ($errors->has('phone'))
                    <span class="text-danger text-left">{{ $errors->first('phone') }}</span>
                    @endif
                  </div>

                  <!-- City -->
                  <div class="col-md-6 mb-4">
                    <input type="text" class="form-control" name="city" value="{{ old('city') }}" placeholder="city" required="required">
                    <label for="floatingCity">city</label>
                    @if ($errors->has('city'))
                    <span class="text-danger text-left">{{ $errors->first('city') }}</span>
                    @endif
                  </div>
                </div>


                <div class="row">
                  <!-- state -->
                  <div class="col-md-6 mb-4">
                    <input type="text" class="form-control" name="state" value="{{ old('state') }}" placeholder="state" required="required">
                    <label for="floatingState">state</label>
                    @if ($errors->has('state'))
                    <span class="text-danger text-left">{{ $errors->first('state') }}</span>
                    @endif
                  </div>
                  <!-- PostalCode -->
                  <div class="col-md-6 mb-4">
                   <input type="text" class="form-control" name="postalCode" value="{{ old('postalCode') }}" placeholder="postalCode" required="required">
                   <label for="floatingPostalCode">postalCode</label>
                   @if ($errors->has('postalCode'))
                   <span class="text-danger text-left">{{ $errors->first('postalCode') }}</span>
                   @endif
                  </div>
                </div>
                <div class="row">
                  <!-- country -->
                  <div class="col-md-6 mb-4">
                    <input type="text" class="form-control" name="country" value="{{ old('country') }}" placeholder="country" required="required">
                    <label for="floatingCountry">country</label>
                     @if ($errors->has('country'))
                    <span class="text-danger text-left">{{ $errors->first('country') }}</span>
                    @endif
                   </div>

                  <!-- credit limit -->
                   <div class="col-md-6 mb-4">
                    <input type="text" class="form-control" name="creditLimit" value="{{ old('creditLimit') }}" placeholder="creditLimit" required="required">
                    <label for="floatingCreditLimit">creditLimit</label>
                    @if ($errors->has('creditLimit'))
                    <span class="text-danger text-left">{{ $errors->first('creditLimit') }}</span>
                    @endif
                  </div>
                </div>
                <div class="d-flex justify-content-end pt-3">
                  
                  
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@include('auth.partials.copy')
</form>

@endsection
