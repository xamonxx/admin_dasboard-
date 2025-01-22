<?php
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['id_user'])) {
 header("Location: login.php");
 exit;
}
?>
<!doctype html>
<html>
<head>
 <meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
<!-- icon -->
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
</head>

<body class="bg-slate-600">
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
<a href="#"
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

<aside id="logo-sidebar"
class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
aria-label="Sidebar">
<div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
<ul class="space-y-2 font-medium">
<li>
<a href="index.php"
class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
<i class="fi fi-br-home mt-1 mr-1"></i>
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
<a href="data_user.php"
class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
<i class="fi fi-br-member-list mt-1 mr-1 text-slate-400"></i>
<span class="flex-1 ms-3 whitespace-nowrap">Data Users</span>
</a>
</li>
<li>
<a href="logout.php"
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
<a href="logout2.php"
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
<!-- start tambah data -->
<div class="container mx-auto lg:max-w-[73%] lg:ml-72 lg:px-4 lg:mt-16 mt-16 py-5 px-3">
<nav class="flex mb-5 px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700"
aria-label="Breadcrumb">
<ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
<li class="inline-flex items-center">
<a href="#"
class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
<svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
fill="currentColor" viewBox="0 0 20 20">
<path
d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
</svg>
Home
</a>
</li>
<li>
<div class="flex items-center">
<svg class="rtl:rotate-180 block w-3 h-3 mx-1 text-gray-400 " aria-hidden="true"
xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="m1 9 4-4-4-4" />
</svg>
<a href="#"
class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Templates</a>
</div>
</li>
<li aria-current="page">
<div class="flex items-center">
<svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true"
xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="m1 9 4-4-4-4" />
</svg>
<span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Flowbite</span>
</div>
</li>
</ol>
</nav>

<!-- endbar -->
<div class="flex justify-between py-2 ">
<button id="dropdownActionButton" data-dropdown-toggle="dropdownAction"
class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-1 focus:ring-gray-100 font-medium rounded-lg text-sm px-10 lg:px-5 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-blue-500 dark:focus:ring-blue-600"
type="button">
<span class="sr-only">Action button</span>
Action
<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
viewBox="0 0 10 6">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="m1 1 4 4 4-4" />
</svg>
</button>
<!-- Dropdown menu -->
<div id="dropdownAction"
class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
<ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownActionButton">
<li>
<a href="#"
class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Reward</a>
</li>
<li>
<a href="#"
class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Promote</a>
</li>
<li>
<a href="#"
class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Activate
account</a>
</li>
</ul>
<div class="py-1">
<a href="#"
class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-red-500">Delete
User</a>
</div>
</div>
<label for="table-search" class="sr-only">Search</label>
<div class="relative">
<div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
<svg class="w-fu h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
</svg>
</div>
<input type="text" id="table-search-users"
class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-96 lg:w-[600px] bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
placeholder="Search for users">
</div>
</div>
<div class="relative overflow-x-auto sm:rounded-lg">
<div
class="flex items-center justify-between flex-column md:flex-row flex-wrap space-y-4 md:space-y-0 py-5 bg-salet-600 dark:bg-salet-600">
<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
<tr>
<th scope="col" class="p-4">
<div class="flex items-center">
<input id="checkbox-all-search" type="checkbox"
class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
<label for="checkbox-all-search" class="sr-only">checkbox</label>
</div>
</th>
<th scope="col" class="px-6 py-3">
Name
</th>
<th scope="col" class="px-6 py-3">
Role
</th>
<th scope="col" class="px-6 py-3">
Status
</th>
<th scope="col" class="px-6 text-center py-3">
Action
</th>
</tr>
</thead>
<tbody>
<tr
class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
<td class="w-4 p-4">
<div class="flex items-center">
<input id="checkbox-table-search-1" type="checkbox"
class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
<label for="checkbox-table-search-1" class="sr-only">checkbox</label>
</div>
</td>
<th scope="row"
class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
<img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg"
alt="Jese image">
<div class="ps-3">
<div class="text-base font-semibold">
Neil Sims
</div>
<div class="font-normal text-gray-500">
neil.sims@flowbite.com
</div>
</div>
</th>
<td class="px-6 py-4">
Admin
</td>
<td class="px-6 py-4">
<div class="flex items-center">
<div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>
Online
</div>
</td>
<td class="px-6 py-4">
<!-- Modal toggle -->
<a href="#" type="button" data-modal-show="editUserModal"
class="font-medium text-blue-600 dark:text-blue-500 hover:underline px-2">Edit
user</a>
<a href="#" type="button"
class="font-medium text-red-500 dark:text-red-500 hover:underline px-2">Delete
user</a>
</td>
</tr>
<tr
class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
<td class="w-4 p-4">
<div class="flex items-center">
<input id="checkbox-table-search-2" type="checkbox"
class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
<label for="checkbox-table-search-2" class="sr-only">checkbox</label>
</div>
</td>
<th scope="row"
class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
<img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-3.jpg"
alt="Jese image">
<div class="ps-3">
<div class="text-base font-semibold">
Bonnie Green
</div>
<div class="font-normal text-gray-500">
bonnie@flowbite.com
</div>
</div>
</th>
<td class="px-6 py-4">
user
</td>
<td class="px-6 py-4">
<div class="flex items-center">
<div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>
Online
</div>
</td>
<td class="px-6 py-4">
<!-- Modal toggle -->
<a href="#" type="button" data-modal-show="editUserModal"
class="font-medium text-blue-600 dark:text-blue-500 hover:underline px-2">Edit
user</a>
<a href="#" type="button"
class="font-medium text-red-500 dark:text-red-500 hover:underline px-2">Delete
user</a>
</tr>
<tr
class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
<td class="w-4 p-4">
<div class="flex items-center">
<input id="checkbox-table-search-2" type="checkbox"
class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
<label for="checkbox-table-search-2" class="sr-only">checkbox</label>
</div>
</td>
<th scope="row"
class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
<img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-2.jpg"
alt="Jese image">
<div class="ps-3">
<div class="text-base font-semibold">
Jese Leos
</div>
<div class="font-normal text-gray-500">
jese@flowbite.com
</div>
</div>
</th>
<td class="px-6 py-4">
user
</td>
<td class="px-6 py-4">
<div class="flex items-center">
<div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>
Online
</div>
</td>
<td class="px-6 py-4">
<!-- Modal toggle -->
<a href="#" type="button" data-modal-show="editUserModal"
class="font-medium text-blue-600 dark:text-blue-500 hover:underline px-2">Edit
user</a>
<a href="#" type="button"
class="font-medium text-red-500 dark:text-red-500 hover:underline px-2">Delete
user</a>
</td>
</tr>
<tr
class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
<td class="w-4 p-4">
<div class="flex items-center">
<input id="checkbox-table-search-2" type="checkbox"
class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
<label for="checkbox-table-search-2" class="sr-only">checkbox</label>
</div>
</td>
<th scope="row"
class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
<img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-5.jpg"
alt="Jese image">
<div class="ps-3">
<div class="text-base font-semibold">
Thomas Lean
</div>
<div class="font-normal text-gray-500">
thomes@flowbite.com
</div>
</div>
</th>
<td class="px-6 py-4">
user
</td>
<td class="px-6 py-4">
<div class="flex items-center">
<div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>
Online
</div>
</td>
<td class="px-6 py-4">
<!-- Modal toggle -->
<a href="#" type="button" data-modal-show="editUserModal"
class="font-medium text-blue-600 dark:text-blue-500 hover:underline px-2">Edit
user</a>
<a href="#" type="button"
class="font-medium text-red-500 dark:text-red-500 hover:underline px-2">Delete
user</a>
</td>
</tr>
<tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
<td class="w-4 p-4">
<div class="flex items-center">
<input id="checkbox-table-search-3" type="checkbox"
class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
<label for="checkbox-table-search-3" class="sr-only">checkbox</label>
</div>
</td>
<th scope="row"
class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
<img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-4.jpg"
alt="Jese image">
<div class="ps-3">
<div class="text-base font-semibold">
Leslie Livingston
</div>
<div class="font-normal text-gray-500">
leslie@flowbite.com
</div>
</div>
</th>
<td class="px-6 py-4">
user
</td>
<td class="px-6 py-4">
<div class="flex items-center">
<div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div>
Offline
</div>
</td>
<td class="px-6 py-4">
<!-- Modal toggle -->
<a href="#" type="button" data-modal-show="editUserModal" id="editUser"
class="font-medium text-blue-600 dark:text-blue-500 hover:underline px-2">Edit
user</a>
<a href="#" type="button"
class="font-medium text-red-500 dark:text-red-500 hover:underline px-2">Delete
user</a>
</td>
</tr>
</tbody>
</table>
<!-- Edit user modal -->
<div id="editUserModal" tabindex="-1" aria-hidden="true"
class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
<div class="relative w-full max-w-2xl max-h-full">
<!-- Modal content -->
<form class="relative bg-white rounded-lg shadow dark:bg-gray-700">
<!-- Modal header -->
<div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
<h3 class="text-xl font-semibold text-gray-900 dark:text-white">
Edit user
</h3>
<button type="button"
class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
data-modal-hide="editUserModal">
<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
fill="none" viewBox="0 0 14 14">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
</svg>
<span class="sr-only">Close modal</span>
</button>
</div>
<!-- Modal body -->
<div class="p-6 space-y-6">
<div class="grid grid-cols-6 gap-6">
<div class="col-span-6 sm:col-span-3">
<label for="first-name"
class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
Name</label>
<input type="text" name="first-name" id="first-name"
class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
placeholder="Bonnie" required="">
</div>
<div class="col-span-6 sm:col-span-3">
<label for="last-name"
class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
Name</label>
<input type="text" name="last-name" id="last-name"
class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
placeholder="Green" required="">
</div>
<div class="col-span-6 sm:col-span-3">
<label for="email"
class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
<input type="email" name="email" id="email"
class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
placeholder="example@company.com" required="">
</div>
<div class="col-span-6 sm:col-span-3">
<label for="phone-number"
class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
Number</label>
<input type="number" name="phone-number" id="phone-number"
class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
placeholder="e.g. +(12)3456 789" required="">
</div>
<div class="col-span-6 sm:col-span-3">
<label for="department"
class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
<input type="text" name="department" id="department"
class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
placeholder="Development" required="">
</div>
<div class="col-span-6 sm:col-span-3">
<label for="company"
class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
<input type="number" name="company" id="company"
class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
placeholder="123456" required="">
</div>
<div class="col-span-6 sm:col-span-3">
<label for="current-password"
class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Current
Password</label>
<input type="password" name="current-password" id="current-password"
class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
placeholder="••••••••" required="">
</div>
<div class="col-span-6 sm:col-span-3">
<label for="new-password"
class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New
Password</label>
<input type="password" name="new-password" id="new-password"
class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
placeholder="••••••••" required="">
</div>
</div>
</div>
<!-- Modal footer -->
<div
class="flex items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
<button type="submit"
class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save
all</button>
</div>
</form>
</div>
</div>
</div>
</div>
<!-- end tambah data -->
</body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

</html>