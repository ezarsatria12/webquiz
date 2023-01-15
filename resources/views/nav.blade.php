<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav class="bg-contain w-screen flex justify-between px-8 py-8 bg-white">
  <div onclick="handleclick" class="text-2xl font-medium "><a href="/">
    <h3>LOGO</h3>
  </div>
  <div onclick="handleclick" class=" hidden sm:flex  content-center text-grey-fade m-auto text-center">
    <a class="mr-5 hover:text-green-111 focus:text-green-111 active:text-green-700" href="#about us">About Us</a>
    <a class="mx-5 hover:text-green-111 focus:text-green-111 active:text-green-700" href="#Quiz">Quiz</a>
    <a class="mx-5 hover:text-green-111 focus:text-green-111 active:text-green-700" href="/modul">Modul</a>
    <a class="ml-5 hover:text-green-111 focus:text-green-111 active:text-green-700" href="/coba">Help</a>
  </div>
  <div onclick="handleclick" class="hidden space-x-8 sm:flex">
  <a href="#">
    <h3 class="text-white bg-green-111 px-3 py-1 rounded hover:bg-transparent hover:text-green-111 " >Sign in</h3>
  </div>
  <div class="flex sm:hidden">
<div>
      <button class="relative group">
        <div class="relative flex flex-col overflow-hidden items-center justify-center w-[32px] h-[32px] transform transition-all bg-green-111 ring-0 ring-gray-300
        hover:ring-8 group-focus:ring-4 ring-opacity-30 duration-200 shadow-md">
          <div class="transform transition-all duration-150 overflow-hidden -translate-y-5 group-focus:translate-y-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6h-6 w-6 animate-bounce text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
          </div>

          <div class="flex flex-col justify-between justify-center w-[20px] h-[10px] transform transition-all duration-300 origin-center overflow-hidden -translate-y-3">
            <div class="bg-white h-[2px] w-7 transform transition-all duration-300 origin-left group-focus:translate-y-6"></div>
            <div class="bg-white h-[2px] w-7 transform transition-all duration-300 group-focus:translate-y-6 delay-75"></div>
            <div class="bg-white h-[2px] w-7 transform transition-all duration-300 origin-left group-focus:translate-y-6 delay-100"></div>
          </div>
        </div>
      </button>
    </div>

  </div>
</nav>
</body>
</html>
