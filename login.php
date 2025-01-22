<!doctype html>
<html>

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <script src="https://cdn.tailwindcss.com"></script>
 <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
<!-- icon -->
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
</head>

<body class="bg-white dark:bg-gray-900">

<!-- start navbar -->
<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
<div class="px-3 py-3 lg:px-5 lg:pl-3">
<div class="flex items-center justify-between">
<div class="flex items-center justify-start rtl:justify-end">
<a href="https://flowbite.com" class="flex ms-2 md:me-24">
<img src="img/logo/logo-white.svg" class="h-8 me-3" alt="FlowBite Logo" />
</a>
</div>
<div class="flex items-center">
<a href="login.php" class="px-6 py-2 bg-transparent text-white font-semibold rounded-md ring-2 ring-blue-600">Login</a>
<div class="flex items-center ms-3">
<a href="register.php" class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-md">Daftar</a>
</div>
</div>
</div>
</div>
</nav>
<!-- end navbar -->

<!-- start aside -->

<!-- pembukus content img Carousel --

    <!-- pembukus content -->
<div class="container lg:max-w-[90%] lg:ml-10 px-4 mt-24">
<section class="bg-gray-50 dark:bg-gray-900">
<div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 grid lg:grid-cols-2 gap-8 lg:gap-16">
<div class="flex flex-col justify-center">
<h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-3xl dark:text-white">Selamat Datang di LelangApp – Platform Lelang Online Terpercaya</h1>
<p class="mb-6 text-lg font-normal text-gray-500 lg:text-md dark:text-gray-400">
Temukan cara baru untuk membeli dan menjual dengan LelangApp! Bergabunglah dengan ribuan pengguna untuk menawar barang eksklusif, koleksi langka, hingga kebutuhan sehari-hari. Baik Anda penjual yang ingin memamerkan produk atau pembeli yang mencari penawaran terbaik, LelangApp adalah solusi Anda. Dan daftar Sekarang juga !!
</p>
<a href="#" class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">Informasi tentang lelang app kami
<svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
</svg>
</a>
</div>
<div>
<div class="w-full lg:max-w-md p-6 space-y-8 sm:p-8 bg-white rounded-lg shadow-xl dark:bg-gray-800">
<h2 class="text-2xl font-bold text-gray-900 dark:text-white">
Login LelangApp
</h2>
<?php
if (isset($_GET['status'])) {
if ($_GET['status'] == 'gagal') {
echo "<p style='color: red;'>Login gagal: " . htmlspecialchars($_GET['pesan']) . "</p>";
} elseif ($_GET['status'] == 'sukses') {
echo "<p style='color: green;'>Pendaftaran berhasil. Silakan login.</p>";
}
}
?>
<form class="space-y-4 md:space-y-6" action="proses_login.php" method="POST">
<div>
<label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
<input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
</div>
<div>
<label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
<input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
</div>
<div class="flex items-center justify-between">
<div class="flex items-start">
<div class="flex items-center h-5">
<input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
</div>
<div class="ml-3 text-sm">
<label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
</div>
</div>
<a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-primary-500">Forgot password?</a>
</div>
<button type="submit" class="w-full text-white bg-blue-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign in</button>
<p class="text-sm font-light text-gray-500 dark:text-gray-400 font-semibold">
Don’t have an account yet? <a href="#" class="font-medium text-blue-600 hover:underline dark:text-primary-500">Sign up</a>
</p>
</form>



</div>
</div>
</div>
</section>

</div>

<!-- menu navbar bottom -->
</body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

</html>