<?php
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['id_user'])) {
 header("Location: login.php");
 exit;
}

// Tampilkan informasi user
// echo "<h2>Selamat datang, " . $_SESSION['nama_lengkap'] . "!</h2>";
// echo "<p>Role: " . $_SESSION['role'] . "</p>";
// ?>
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

<body class="bg-white dark:bg-gray-600">

<!-- start navbar -->
<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
<div class="px-3 py-3 lg:px-5 lg:pl-3">
<div class="flex items-center justify-between">
<div class="flex items-center justify-start rtl:justify-end">
<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
aria-controls="logo-sidebar" type="button"
class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
<span class="sr-only">Open sidebar</span>
<svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
xmlns="http://www.w3.org/2000/svg">
<path clip-rule="evenodd" fill-rule="evenodd"
d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
</path>
</svg>
</button>
<a href="https://flowbite.com" class="flex ms-2 md:me-24">
<img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" />
<span
class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Lelang
Bro</span>
</a>
</div>
<div class="flex items-center">
<div class="flex items-center ms-3">
<div>
<button type="button" class="flex text-sm bg-gray-800 rounded-full dark:focus"
aria-expanded="false" data-dropdown-toggle="dropdown-user">
<span class="sr-only">Open user menu</span>
<img class="w-10 h-10 rounded-full"
src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
alt="user photo" />
</button>
</div>
<div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
id="dropdown-user">
<div class="px-4 py-3" role="none">
<p class="text-sm text-gray-900 dark:text-white" role="none">
Ramon Pride
</p>
<p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
xamonxx@gmail.com
</p>
</div>
<ul class="py-1" role="none">
<li>
<a href="#"
class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
role="menuitem">Dashboard</a>
</li>
<li>
<a href="#"
class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
role="menuitem">Settings</a>
</li>
<li>
<a href="#"
class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
role="menuitem">Earnings</a>
</li>
<li>
<a href="logout.php"
class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
role="menuitem">Sign out</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</nav>
<!-- end navbar -->

<!-- start aside -->
<aside id="logo-sidebar"
class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
aria-label="Sidebar">
<div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
<ul class="space-y-2 font-medium">
<li>
<a href="index.php"
class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
<svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
viewBox="0 0 22 21">
<path
d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
<path
d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
</svg>
<span class="ms-3">Dashboard</span>
</a>
</li>
<li>
<a href="data_barang.php"
class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
<svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
viewBox="0 0 18 18">
<path
d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
</svg>
<span class="flex-1 ms-3 whitespace-nowrap">Data Barang</span>
</a>
</li>
<li>
<a href="lelang_aktif.php"
class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
<svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
viewBox="0 0 18 20">
<path
d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
</svg>
<span class="flex-1 ms-3 whitespace-nowrap">Lelang Aktif</span>
</a>
</li>
<li>
<li>
<a href="data_user.php"
class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
<svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
viewBox="0 0 20 18">
<path
d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
</svg>
<span class="flex-1 ms-3 whitespace-nowrap">Data Users</span>
</a>
</li>
<a href="login.php"
class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
<svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
</svg>
<span class="flex-1 ms-3 whitespace-nowrap">Sign In</span>
</a>
</li>
<li>
<a href="register.php"
class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
<svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
viewBox="0 0 20 20">
<path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
<path
d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
<path
d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
</svg>
<span class="flex-1 ms-3 whitespace-nowrap">Sign Up</span>
</a>
</li>
</ul>
</div>
</aside>
<!-- end aside -->


<!-- pembukus content img Carousel  -->
<div class="container lg:max-w-[80%] lg:ml-64 mt-[65px]">
<!-- img Carousel start  -->
<div id="default-carousel" class="relative w-full" data-carousel="slide">
<!-- Carousel wrapper -->
<div class="relative shadow-lg h-56 overflow-hidden md:h-96">
<!-- Item 1 -->
<div class="hidden duration-700 ease-in-out" data-carousel-item>
<img src="./img/carousel(1).jpg"
class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
</div>
<!-- Item 2 -->
<div class="hidden duration-700 ease-in-out" data-carousel-item>
<img src="./img/carousel(2).jpg"
class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
</div>
<!-- Item 3 -->
<div class="hidden duration-700 ease-in-out" data-carousel-item>
<img src="./img/carousel(3).jpg"
class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
</div>
<!-- Item 4 -->
<div class="hidden duration-700 ease-in-out" data-carousel-item>
<img src="./img/carousel(4).jpg"
class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
</div>
<!-- Item 5 -->
<div class="hidden duration-700 ease-in-out" data-carousel-item>
<img src="./img/carousel(2).jpg"
class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
</div>
</div>
<!-- Slider indicators -->
<div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
<button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
data-carousel-slide-to="0"></button>
<button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
data-carousel-slide-to="1"></button>
<button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
data-carousel-slide-to="2"></button>
<button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
data-carousel-slide-to="3"></button>
<button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
data-carousel-slide-to="4"></button>
</div>
<!-- Slider controls -->
<button type="button"
class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
data-carousel-prev>
<span
class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
<svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M5 1 1 5l4 4" />
</svg>
<span class="sr-only">Previous</span>
</span>
</button>
<button type="button"
class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
data-carousel-next>
<span
class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
<svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="m1 9 4-4-4-4" />
</svg>
<span class="sr-only">Next</span>
</span>
</button>
</div>
</div>

<!-- pembukus content -->
<div class="container lg:max-w-[74%] lg:ml-72 px-4 mt-4">
<div class="w-full mx-auto bg-gray-700 mx-4 ">
<div class="grid grid-cols-4 gap-4">
<img src="https://via.placeholder.com/40" alt="Pulsa & Data" class="mb-2">
<span class="text-sm text-gray-700">Pulsa & Data</span>
</div>

<!-- A+ Rewards -->
<div class="flex flex-col items-center">
<img src="https://via.placeholder.com/40" alt="A+ Rewards" class="mb-2">
<span class="text-sm text-gray-700">A+ Rewards</span>
</div>

<!-- Hemat s.d Rp60Rb -->
<div class="flex flex-col items-center">
<img src="https://via.placeholder.com/40" alt="Hemat s.d Rp60Rb" class="mb-2">
<span class="text-sm text-gray-700">Hemat s.d Rp60Rb</span>
</div>

<!-- Halodoc -->
<div class="flex flex-col items-center">
<img src="https://via.placeholder.com/40" alt="Halodoc" class="mb-2">
<span class="text-sm text-gray-700">Halodoc</span>
</div>

<!-- Tipu Online -->
<div class="flex flex-col items-center">
<img src="https://via.placeholder.com/40" alt="Tipu Online" class="mb-2">
<span class="text-sm text-gray-700">Tipu Online</span>
</div>

<!-- Google Play Zone -->
<div class="flex flex-col items-center">
<img src="https://via.placeholder.com/40" alt="Google Play Zone" class="mb-2">
<span class="text-sm text-gray-700">Google Play Zone</span>
</div>

<!-- Reksa Dana -->
<div class="flex flex-col items-center">
<img src="https://via.placeholder.com/40" alt="Reksa Dana" class="mb-2">
<span class="text-sm text-gray-700">Reksa Dana</span>
</div>

<!-- Lihat Semua -->
<div class="flex flex-col items-center">
<img src="https://via.placeholder.com/40" alt="Lihat Semua" class="mb-2">
<span class="text-sm text-gray-700">Lihat Semua</span>
</div>

</div>
<h1 class="text-4xl text-white font-bold uppercase underline">Dashboard</h1>
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 my-4">
<div class="p-4 bg-gray-800 text-white shadow rounded flex justify-between items-center">
<div>
<h3 class="text-2xl font-bold">720</h3>
<p class="text-lg">
Products
</p>
</div>
<i class="fas fa-gift text-4xl text-primary border rounded-full bg-gray-700 p-3"></i>
</div>

<div class="p-4 bg-gray-800 text-white shadow rounded flex justify-between items-center">
<div>
<h3 class="text-2xl font-bold">4920</h3>
<p class="text-lg">
Sales
</p>
</div>
<i class="fas fa-hand-holding-usd text-4xl text-primary border rounded-full bg-gray-700 p-3"></i>
</div>

<div class="p-4 bg-gray-800 text-white shadow rounded flex justify-between items-center">
<div>
<h3 class="text-2xl font-bold">3899</h3>
<p class="text-lg">
Delivery
</p>
</div>
<i class="fas fa-truck text-4xl text-primary border rounded-full bg-gray-700 p-3"></i>
</div>

<div class="p-4 bg-gray-800 text-white shadow rounded flex justify-between items-center">
<div>
<h3 class="text-2xl font-bold">25%</h3>
<p class="text-lg">
Increase
</p>
</div>
<i class="fas fa-chart-line text-4xl text-primary border rounded-full bg-gray-700 p-3"></i>
</div>
</div>

<div class="my-10">
<h3 class="text-2xl font-semibold mb-4 text-white">Recent Orders</h3>
<div class="overflow-x-auto">
<table class="min-w-full bg-gray-800 text-white rounded-lg shadow-lg table-auto">
<thead>
<tr class="bg-gray-700 text-left">
<th class="py-3 px-4">#</th>
<th class="py-3 px-4">Product</th>
<th class="py-3 px-4">Customer</th>
<th class="py-3 px-4">Price</th>
</tr>
</thead>
<tbody>
<tr class="border-t border-gray-700">
<td class="py-2 px-4">1</td>
<td class="py-2 px-4">Television</td>
<td class="py-2 px-4">Jonny</td>
<td class="py-2 px-4">$1200</td>
</tr>
<tr class="border-t border-gray-700">
<td class="py-2 px-4">2</td>
<td class="py-2 px-4">Laptop</td>
<td class="py-2 px-4">Kenny</td>
<td class="py-2 px-4">$750</td>
</tr>
<tr class="border-t border-gray-700">
<td class="py-2 px-4">3</td>
<td class="py-2 px-4">Cell Phone</td>
<td class="py-2 px-4">Jenny</td>
<td class="py-2 px-4">$600</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>

<!-- menu navbar bottom -->
<div
class="lg:hidden md:hidden fixed bottom-0 left-0 z-50 w-full h-16 bg-white border-t border-gray-200 dark:bg-gray-700 dark:border-gray-600">
<div class="grid h-full max-w-lg grid-cols-4 mx-auto font-medium">
<button type="button"
class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
<svg class="w-5 h-5 mb-2 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"
aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
<path
d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
</svg>
<span
class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Home</span>
</button>
<button type="button"
class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
<svg class="w-5 h-5 mb-2 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"
aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
<path
d="M11.074 4 8.442.408A.95.95 0 0 0 7.014.254L2.926 4h8.148ZM9 13v-1a4 4 0 0 1 4-4h6V6a1 1 0 0 0-1-1H1a1 1 0 0 0-1 1v13a1 1 0 0 0 1 1h17a1 1 0 0 0 1-1v-2h-6a4 4 0 0 1-4-4Z" />
<path
d="M19 10h-6a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1Zm-4.5 3.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM12.62 4h2.78L12.539.41a1.086 1.086 0 1 0-1.7 1.352L12.62 4Z" />
</svg>
<span
class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Wallet</span>
</button>
<button type="button"
class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
<svg class="w-5 h-5 mb-2 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"
aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M4 12.25V1m0 11.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M4 19v-2.25m6-13.5V1m0 2.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M10 19V7.75m6 4.5V1m0 11.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM16 19v-2" />
</svg>
<span
class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Settings</span>
</button>
<button type="button"
class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
<svg class="w-5 h-5 mb-2 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"
aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
<path
d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
</svg>
<span
class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Profile</span>
</button>
</div>
</div>
<!-- end navbar bottom -->

</body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

</html>