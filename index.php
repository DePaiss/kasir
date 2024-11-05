<?php
session_start();
include 'config.php';

// Proses login ketika form disubmit
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5(mysqli_real_escape_string($conn, $_POST['password']));

    // Query untuk mencari user dengan email dan password yang cocok
    $query = "SELECT * FROM admins WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // Simpan email admin ke sesi
        $_SESSION['admin_email'] = $email;
        header('Location: dashboard.php'); // Alihkan ke dashboard jika login berhasil
        exit();
    } else {
        $error = "Email atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="container mx-auto mt-10">
        <h2 class="text-center text-3xl font-bold mb-8">Login Admin</h2>
        
        <div class="flex justify-center">
            <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-6">
                <?php if (isset($error)) { ?>
                    <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                        <?= $error; ?>
                    </div>
                <?php } ?>

                <form method="POST" action="">
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                        <input type="email" name="email" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                        <input type="password" name="password" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                    </div>
                    <button type="submit" name="login" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">Login</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
