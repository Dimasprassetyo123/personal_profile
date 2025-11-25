<?php
// session_start();
// if (isset($_SESSION['admin_logget_in'])) {

//     echo "<script>
//         alert('Anda sudah login');
//         window.location.href='../../pages/dashboard/index.php';
//     </script>";
//     exit();
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../../templates-admin/templates/src/assets/css/styles.min.css">
    <link rel="shortcut icon" href="../../templates-admin/templates/src/assets/images/profile/user-1.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        .login-container {
            max-width: 400px;
            width: 100%;
        }

        .input-icon-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 5;
            /* Higher than input */
            pointer-events: none;
            /* Allows clicks to pass through to input */
            color: #6c757d;
        }

        .form-control {
            padding-left: 40px;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #86b7fe;
        }
    </style>
</head>

<body class="bg-light d-flex justify-content-center align-items-center min-vh-100">
    <div class="login-container">
        <div class="card shadow-sm">
            <div class="card-body p-4">
                <div class="text-center mb-4">
                    <h5 class="card-title">
                        <i class="bi bi-person-lock me-2"></i>Admin Login
                    </h5>
                </div>

                <form action="../../action/auth/login_proses.php" method="POST">

                    <div class="mb-3">
                        <label for="emailInput" class="form-label">Email</label>
                        <div class="input-icon-wrapper">
                            <i class="bi bi-envelope-fill input-icon"></i>
                            <input type="emailk" class="form-control" id="email" name="email" placeholder="Enter email" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="passwordInput" class="form-label">Password</label>
                        <div class="input-icon-wrapper">
                            <i class="bi bi-lock-fill input-icon"></i>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info w-100 mt-3">
                        <i class="bi bi-box-arrow-in-right me-2"></i>Login
                    </button>
                    <p class="text-center mt-3">Belum Punya Akun? <a href="register.php"><u>Registrasi di sini</u></a></p>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>