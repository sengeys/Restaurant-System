<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- link style -->
    <?php include '../layouts/link-style.php'; ?>

    <style>
        body{
            padding: 50px;
        }
        .wrapper {
            max-width: 600px;
            margin: 0 auto;
        }

        .form-signin {
            max-width: 480px;
            padding: 15px 35px 45px;
            margin: 0 auto;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 6px;
        }

        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 30px;
            margin-top: 30px;
        }

        .form-signin .checkbox {
            font-weight: normal;
        }

        .form-signin .form-control {
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .form-signin .form-control:focus {
            z-index: 2;
        }

        .form-signin input[type="text"] {
            margin-bottom: -1px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 20px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .go {
            color: #2BC48B;
        }

        .hcenter {
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="wrapper">
        <!-- Preloader -->
        <?php include '../layouts/preloader.php'; ?>
        
        <form class="form-signin">

            <h3 class="form-signin-heading hcenter">Please<span class="go"> Register </span>to open system</h3>
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="full_name">Full Name</label>
                <input type="text" id="full_name" class="form-control" placeholder="Full Name" />
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="email">Email address</label>
                <input type="email" id="email" class="form-control" placeholder="Enmail address"/>
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="password">Password</label>
                <input type="password" id="password" class="form-control" placeholder="Password" />
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" class="form-control" placeholder="Confirm Password" />
            </div>

            <h5 class="form-signin-heading hleft">Already have an account? <a href="../index.php"><span class="go">Login now</span></a></h5>

            <!-- Submit button -->
            <a href="pages/dashboard.php">
                <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Register Now</button>
            </a>
        </form>
    </div>


   <!-- link script -->
   <?php include '../layouts/link-script.php'; ?>
</body>

</html>