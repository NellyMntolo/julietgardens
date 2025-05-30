<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <style type="text/css">
    body {
  background-image: linear-gradient(#fe7763, #fc3a5d);
  background-repeat: no-repeat;
  background-attachment: fixed;
  height: 100%;
  margin: 0;
  display: flex;
  align-items: center;
  color: white;
  font-family: "Montserrat", sans-serif;
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
  color: #fdc654;
}

h2 {
  font-size: 32px;
  margin: 0;
}

h3 {
  color: #d61e2d;
  font-size: 14px;
  line-height: 18px;
  margin: 0;
}

.header {
  margin-bottom: 50px;
}

.logo {
  border-radius: 40px;
  width: 200px;
  height: 200px;
  display: flex;
  justify-content: center;
  margin: 0 auto 16px;
  background: rgba(255, 255, 255, 0.1);
  align-items: center;
}

button {
  background: white;
  display: block;
  color: #d61e2d;
  width: 100%;
  border: none;
  border-radius: 40px;
  padding: 12px 0;
  text-transform: uppercase;
  font-weight: bold;
  margin-bottom: 32px;
  outline: none;
}

.form-field {
  margin-bottom: 16px;
  width: 100%;
  position: relative;
}

.form-field .icon {
  position: absolute;
  background: white;
  color: #d61e2d;
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
  color: #d61e2d;
  transition: all 0.2s;
}

.form-field input:hover::placeholder {
  color: #d61e2d;
}

  </style>
</head>
<body>
  <div class="login-card">
  <div class="login-card-content">
    <div class="header">
      <div class="logo">
        <div>company logo</div>
      </div>
      <h2>Company<span class="highlight">Name</span></h2>
      <h3>company slogan</h3>
    </div>
    <div class="form">
      <div class="form-field username">
        <div class="icon">
          <i class="far fa-user"></i>
        </div>
        <input type="text" placeholder="Username" required>
      </div>
      <div class="form-field password">
        <div class="icon">
          <i class="fas fa-lock"></i>
        </div>
        <input type="password" placeholder="Password" required>
      </div>

      <button type="submit">
        Login
      </button>
      <div>
        Don't have an account? <a href="">Sign Up Now</a>
      </div>
    </div>
  </div>
  <div class="login-card-footer">
    <a href="">Forgot Password?</a>
  </div>
</div>


<script type="text/javascript">
  document.getElementsByTagName("h1")[0].style.fontSize = "80px";
</script>
</body>
</html>