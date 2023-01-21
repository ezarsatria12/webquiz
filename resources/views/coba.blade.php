<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="ml-3 relative">
  <div>
    <button
      class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-white transition duration-150 ease-in-out"
      id="user-menu"
      aria-label="User menu"
      aria-haspopup="true"
    >
      <img
        class="h-8 w-8 rounded-full"
        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
        alt
      />
    </button>
  </div>

  <!-- drop -->
        <div class="container w-[1280px] h-[320px] m-auto flex flex-row">
            <button class="bg-[#ED6A5E] hover:brightness-125 rounded-[10px] shadow-boxjawaban h-[300px] w-[300px] m-[10px]">
                A
            </button>
            <button class="bg-[#A5F1E9] hover:brightness-125 rounded-[10px] shadow-boxjawaban h-[300px] w-[300px] m-[10px]">
                B
            </button>
            <button class="bg-[#FFF6BF] hover:brightness-125 rounded-[10px] shadow-boxjawaban h-[300px] w-[300px] m-[10px]">
            </button>
            <button class="bg-[#7FB77E] hover:brightness-125 rounded-[10px] shadow-boxjawaban h-[300px] w-[300px] m-[10px]">
                D
            </button>
        </div>

  <!-- button jawaban -->
        <div class="container m-[10px] w-[1280px] h-[320px] flex flex-col space-y-[20px]">
        <textarea class="bg-gray-100 h-full w-full rounded-[10px] form-control block px-3 py-1.5 text-2xl font-normal text-gray-700
        bg-clip-padding border border-solid outline outline-gray-400 transition ease-in-outm-0
        focus:text-gray-700 focus:bg-white focus:outline-green-111 focus:outline-4"
        id="exampleFormControlTextarea1"rows="3"placeholder="Masukkan Jawaban Disini">
    </textarea>
    </div>
  <!--
  Profile dropdown panel, show/hide based on dropdown state.

  Entering: "transition ease-out duration-100"
    From: "transform opacity-0 scale-95"
    To: "transform opacity-100 scale-100"
  Leaving: "transition ease-in duration-75"
    From: "transform opacity-100 scale-100"
    To: "transform opacity-0 scale-95"
  -->
  <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg">
    <div
      class="py-1 rounded-md bg-white shadow-xs"
      role="menu"
      aria-orientation="vertical"
      aria-labelledby="user-menu"
    >
      <a
        href="#"
        class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
        role="menuitem"
      >Your Profile</a>
      <a
        href="#"
        class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
        role="menuitem"
      >Settings</a>
      <a
        href="#"
        class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
        role="menuitem"
      >Sign out</a>
    </div>
  </div>
</div>
</body>
</html>