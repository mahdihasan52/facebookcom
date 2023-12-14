<!-- login_page.php -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Masbook - Log in</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f0f2f5;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    .login-container {
      background-color: #ffffff;
      border: 1px solid #dddfe2;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      width: 400px;
      text-align: center;
      padding: 16px;
    }

    .masbook-logo {
      width: 150px;
      margin-bottom: 20px;
    }

    label {
      font-weight: bold;
      display: block;
      margin-bottom: 8px;
    }

    input {
      width: calc(100% - 20px);
      padding: 10px;
      margin-bottom: 16px;
      box-sizing: border-box;
      border: 1px solid #dddfe2;
      border-radius: 4px;
    }

    button {
      background-color: #1877f2;
      color: #ffffff;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }

    button:hover {
      background-color: #0e62a8;
    }

    .forgot-password {
      color: #1877f2;
      text-decoration: none;
      margin-top: 12px;
      display: inline-block;
    }

    .create-account {
      margin-top: 20px;
      color: #1877f2;
      font-weight: bold;
    }
  </style>
</head>
<body>

  <div class="login-container">
    <img class="masbook-logo" src="https://via.placeholder.com/150" alt="Masbook Logo">
    <h2>Log in to Masbook</h2>
    <form action="process_login.php" method="post">
      <label for="email">Email or Phone:</label>
      <input type="text" id="email" name="email" required>
      <br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <br>
      <button type="submit">Log In</button>
      <br>
      <a class="forgot-password" href="#">Forgot password?</a>
      <div class="create-account">Create New Account</div>
    </form>
  </div>

</body>
</html>
