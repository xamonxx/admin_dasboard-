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
<div class="w-full lg:max-w-xl p-6 space-y-8 sm:p-8 bg-white rounded-lg shadow-xl dark:bg-gray-800">
<h2 class="text-2xl font-bold text-gray-900 dark:text-white">
Daftar LelangApp
</h2>
<?php
if (isset($_GET['status'])) {
if ($_GET['status'] == 'sukses') {
echo "<p style='color: green;'>Pendaftaran berhasil. Silakan <a href='login.php'>Login</a>.</p>";
} elseif ($_GET['status'] == 'gagal') {
echo "<p style='color: red;'>Pendaftaran gagal: " . htmlspecialchars($_GET['pesan']) . "</p>";
}
}
?>
<form class="max-w-md mx-auto" action="proses_register.php" method="POST">
<div class="relative z-0 w-full mb-5 group">
<input type="text" name="nama_lengkap" id="nama_lengkap" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
<label for="nama_lengkap" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Lengkap</label>
</div>
<div class="relative z-0 w-full mb-5 group">
<input type="text" name="username" id="username" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
<label for="username" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Username</label>
</div>
<div class="relative z-0 w-full mb-5 group">
<input type="password" name="password" id="password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
<label for="password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
</div>
<div class="relative z-0 w-full mb-5 group">
<input type="password" name="password" id="password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
<label for="password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Confirm password</label>
</div>
<div class="relative z-0 w-full mb-5 group">

<input type="tel" name="no_telp" id="no_telp" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />

<label for="no_telp" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">No Telphone</label>
</div>
<div class="relative z-0 w-full mb-5 group">
<label for="role" class="sr-only">Underline select</label>
<select id="role" name="role" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
<option value="Administrator">Admin</option>
<option value="User">User</option>
</select>
</div>

<button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</f>


</div>
</div>
</div>
</section>

</div>

<!-- menu navbar bottom -->
</body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

</html>