<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('background1.jpg'); 
            margin: 0;
            padding: 0;
        }

        h1 {
			color  : white;
            text-align: center;
            margin-top: 30px;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .error-message {
            color: red;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <h1>Login</h1>
    <div class="container">
        <form id="login-form" method="post" action="login_data.php" autocomplete="off">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter Your Email"  required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter Your Password"  required>
				
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
		 <span class="from-group">
				 Not registered yet?
				 <a href="index.php">Register</a>
		 </span>
				
		</div>
            <?php if (isset($login_error)) : ?>
                <div class="form-group">
                    <p class="error-message"><?php echo $login_error; ?></p>
                </div>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>
