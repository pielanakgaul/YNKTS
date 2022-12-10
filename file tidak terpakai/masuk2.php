<?php

require_once "functions.php";

if (isset($_SESSION['login'])) {
	header('Location: index.php');
	exit;
}

if (isset($_POST['login'])) {

	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
	$result = mysqli_query($koneksi, $query);

	if (mysqli_num_rows($result) === 1) {
		$row = mysqli_fetch_assoc($result);
		session_start();
		$_SESSION['id'] = $row['id'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['username'] = $row['username'];
		$_SESSION['login'] = true;
		header("Location: index.php");
		exit;
	} else {
		header('location:masuk.php?pesan=Username salah!');
	}
}


?>

<?php

require 'functions.php';

if (isset($_POST["registrasi"])) {
	if (registrasi($_POST) > 0) {
		echo "<script>
				alert('User berhasil ditambahkan!');
				window.location.href='masuk.php';
			</script>";
	} else {
		echo mysqli_error($koneksi);
	}
}

?>

<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Halaman Login</title>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="public/assets/css/tailwind.output.css" />
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
	<script src="public/assets/js/init-alpine.js"></script>
</head>

<body>
	<div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
		<div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
			<div class="flex flex-col overflow-y-auto md:flex-row">
				<div class="h-32 md:h-auto md:w-1/2">
					<img aria-hidden="true" class="object-cover w-full h-full dark:hidden" src="public/assets/img/login-office-dark.jpeg" alt="Office" />
					<img aria-hidden="true" class="hidden object-cover w-full h-full dark:block" src="public/assets/img/login-office-dark.jpeg" alt="Office" />
				</div>
				<div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
					<div class="w-full">
						<h3 class="mb-4 mt-5 text-xl font-semibold text-gray-900 dark:text-gray-200 text-center">
							AnoaLand
						</h3>
						<h1 class="mb-4 mt-5 text-xxl font-semibold text-gray-700 dark:text-gray-200 ">
							Silahkan Masuk!
						</h1>

						<label class="block text-sm">
							<span class="text-gray-700 dark:text-gray-400">Email</span>
							<input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="abcd@gmail.com" type="email" name="email" id="email" />
						</label>
						<label class="block mt-4 text-sm">
							<span class="text-gray-700 dark:text-gray-400">Password</span>
							<input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="***************" type="password" name="password" id="password" />
						</label>

						<button type="submit" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" name="login">
							Masuk
						</button>

						<hr class="my-8" />
						<p class="mt-4">
							<a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline" href="forgot-password.php">
								Lupa kata sandi?
							</a>
						</p>
						<p class="mt-1">
							<a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline" href="registrasi.php">
								Belum punya akun? Daftar
							</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>