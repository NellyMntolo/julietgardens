<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mntolo Platforms</title>
  <style type="text/css">
    body {
  /*background-image: linear-gradient(#fe7763, #fc3a5d);*/
  background-image: linear-gradient(#89c2ff, #004c9d);
  background-repeat: no-repeat;
  background-attachment: fixed;
  height: 100%;
  margin: 0;
  display: flex;
  align-items: center;
  color: white;
  ffont-family:  'Playfair Display', serif;
  font-size: 14px;
  justify-content: center;
}

a {
  color: white;
  text-decoration: none;
  font-weight: bold;
  outline: none;
  transition: all 0.2s;
}

a:hover,
a:focus {
  color: #fdc654;
  transition: all 0.2s;
}

html {
  height: 100%;
}

.login-card {
  padding: 32px 32px 0;
  box-sizing: border-box;
  text-align: center;
  width: 100%;
  display: flex;
  height: 100%;
  max-height: 740px;
  max-width: 350px;
  flex-direction: column;
}

.login-card-content {
  flex-grow: 2;
  justify-content: center;
  display: flex;
  flex-direction: column;
}

.login-card-footer {
  padding: 32px 0;
}

h2 .highlight {
  color: white;
}

h2 {
  font-size: 32px;
  margin: 0;
}

h3 {
  color: #000000;
  font-size: 14px;
  line-height: 18px;
  margin: 0;
}

.header {
  margin-bottom: 50px;
}

.logo {
  /*border-radius: 40px;*/
  border-radius: 0px;
  width: 200px;
  height: 200px;
  display: flex;
  justify-content: center;
  margin: 0 auto 16px;
  background: rgba(255, 255, 255, 0.1);
  align-items: center;
}

.logo img {
  /*border-radius: 40px;*/
  border-radius: 0px;
  width: 200px;
  height: 200px;
}

button {
  background: white;
  display: block;
  color: #000000;
  width: 100%;
  border: none;
  /*border-radius: 40px;*/
  border-radius: 0px;
  padding: 12px 0;
  text-transform: uppercase;
  font-weight: bold;
  /*margin-bottom: 32px;*/
  margin-bottom: 22px;
  outline: none;
}

button:hover {
  cursor: pointer;
  box-shadow: 0px 5px 6px rgba(255, 255, 255, 0.6);
}

.form-field {
  margin-bottom: 16px;
  width: 100%;
  position: relative;
}

.form-field .icon {
  position: absolute;
  background: white;
  color: #004c9d;
  left: 0;
  top: 0;
  display: flex;
  align-items: center;
  height: 100%;
  width: 40px;
  height: 40px;
  justify-content: center;
  border-radius: 20px;
}

.form-field .icon:after {
  content: "";
  display: block;
  width: 0;
  height: 0;
  border: 12px solid transparent;
  border-left: 12px solid white;
  position: absolute;
  top: 8px;
  right: -20px;
}

.form-field input {
  border: 1px solid rgba(255, 255, 255, 0.2);
  text-align: center;
  width: 100%;
  border-radius: 16px;
  height: 36px;
  background: rgba(255, 255, 255, 0.1);
  color: white;
  outline: none;
  transition: all 0.2s;
}

.form-field input::placeholder {
  color: white;
}

.form-field input:hover,
.form-field input:focus {
  background: white;
  color: #000000;
  transition: all 0.2s;
}

.form-field input:hover::placeholder {
  color: #000000;
}

  </style>
  <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body>
  <div class="login-card">
  <div class="login-card-content">
    <div class="header">
      <div class="logo">
        <img src="https://picsum.photos/200/200">
        <!-- <div>company logo</div> -->
      </div>
      <h2>Juliet<span class="highlight">Gardens</span></h2>
      <h3>Best Farming</h3>
    </div>
    <div class="form">
      <form method="POST" action="{{ route('login') }}">
      @csrf


      <!-- <div class="form-field username">
        <div class="icon">
          <i class="fas fa-fw fa-user"></i>
        </div>
        <input type="text" placeholder="Username" required>
      </div> -->

      <!-- <div class="form-field username">
        <div class="icon">
          <i class="fas fa-fw fa-user"></i>
        </div>
        <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
      </div> -->



      <div class="form-field username">
          <div class="icon">
            <i class="fa fa-envelope"></i>
          </div>
          <div class=""><!-- col-md-6 -->
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>

      <!-- <div class="form-field password">
        <div class="icon">
          <i class="fas fa-lock"></i>
        </div>
        <input type="password" placeholder="Password" required>
      </div> -->


      <div class="form-field password">
        <div class="icon">
          <i class="fa fa-lock"></i>
        </div>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>

      <div class="form-group row">
          <div class="col-md-6 offset-md-4">
              <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                  <label class="form-check-label" for="remember">
                      {{ __('Remember Me') }}
                  </label>
              </div>
          </div>
      </div>


      <!-- <button type="submit">
        Login
      </button> -->
      <!-- <div>
        Don't have an account? <a href="">Sign Up Now</a>
      </div> -->
    <!-- </div>
  </div> -->
  <!-- <div class="login-card-footer">
    <a href="">Forgot Password?</a>
  </div> -->


  <div class="form-group row mb-0 login-card-footer">
      <div class="col-md-8 offset-md-4">
          <button type="submit" class="btn btn-primary">
              {{ __('Login') }}
          </button>

          @if (Route::has('password.request'))
              <a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('Forgot Your Password?') }}
              </a>
          @endif
      </div>
  </div>


  </form>
</div>


<script type="text/javascript">
  // document.getElementsByTagName("h1")[0].style.fontSize = "80px";
</script>
</body>
</html>
