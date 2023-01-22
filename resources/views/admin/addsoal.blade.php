@extends('admin.partials.index')

@section('container')
    <section>
        <div class="container space-y-5 mx-auto px-3 w-full h-full  sm:space-y-16">
            <div class="container h-fit space-y-5 justify-start flex flex-col mx-auto sm:w-[1280px] sm:h-[64px] sm:flex-row sm:space-y-0 sm:space-x-20">
                <div name="Title" class="h-fit w-full sm:w-[630px] space-y-3">
                    <p class="">Quiz Title</p>
                    <textarea required class="outline-green-111 rounded border-2 p-2 w-full sm:w-[630px] border-gray-200 resize-none"
                        name="Title" id="Title" rows="2" placeholder="Masukkan Judul Quiz"></textarea>
                </div>
                <div name="Title" class="h-fit w-full space-y-3 sm:w-1/2">
                    <p class="">Kategori</p>
                    <select id="Kategori" name="Kategori" required
                        class="w-full sm:w-full select-none text-black-primary
                invalid:text-gray-400 focus:outline-green-111 rounded border-2 border-gray-200 box-border h-10 p-2 ">
                        <option value="" disabled selected>Pilih Kategori</option>
                        <option value="mudah">Mudah</option>
                        <option value="sedang">Sedang</option>
                        <option value="sulit">Sulit</option>
                    </select>
                </div>
            </div>
            <div class="mx-auto sm:w-[1280px] h-[676px] flex flex-col justify-start space-y-5">
                <div name="Title" class=" flex flex-col">
                    <div>
                        <p class="">Quiz Description</p>
                    <textarea class="w-full sm:w-[630px] outline-green-111 rounded border-2 p-2 border-gray-200 resize-none" name="Title"
                    id="Title" cols="80" rows="6" placeholder="Masukkan Judul Quiz"></textarea>
                    <!-- thumbnail pict upload -->
                    </div>
                    <div id="file" class="flex flex-col gap-5">
                    <p><input type="file" name="image" id="file-modul"
                    onchange="loadFile(event)" style="display: none;"></p>
                    <p><label for="file-modul" style="cursor: pointer;">
                    <p class="">Upload Cover</p>
                    <img class="w-[60px] h-[60px] hover:scale-105" src="pictures/Insert file.png" alt="pilgan">
                    </label></p>
                    <p><img id="filemodul" class="w-[300px] h-[200px]"/></p>
                    <script>
                    var loadFile = function(event) {
                        var image = document.getElementById('filemodul');
                        image.src = URL.createObjectURL(event.target.files[0]);
                    };
                    </script>
                </div>
                </div>
                <div class="container flex flex-row w-full sm:w-[1280px] h-[38px] justify-end">
                    <button>
                        <a href="">
                            <img class="w-[130px] h-[38px] hover:scale-105" src="{{ URL('Pictures/simpan.png') }}"
                                alt="">
                        </a>
                    </button>
                </div>
                <div>
                </div>
                <!-- asdasd -->
                <div name="add" class="text-start px-[20px] w-full space-y-3">
                    <div class="flex flex-row justify-between">
                        <h2 class="my-auto text-2xl">Pilihan Ganda</h2>
                    <a href=""><img src="{{ URL('Pictures/plus.png') }}" class="w-[32px] h-[32px]" alt=""></a>
                    </div>
                    <div class="relative overflow-x-auto self-center  sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-white uppercase  bg-green-111">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        No
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Soal
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Media
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Jawaban
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class=" border-b  border-green-111">
                                    <th scope="row" class="border-x border-opacity-25 border-green-111 px-6 py-4 ">
                                        1.
                                    </th>
                                    <td class="border-x border-opacity-25 border-green-111 px-6 py-4">
                                        puisi adalah
                                    </td>
                                    <td class="border-x border-opacity-25 border-green-111 px-6 py-4">
                                        contohpuisi.jpeg
                                    </td>
                                    <td class="border-x border-opacity-25 border-green-111 px-6 py-4">
                                        <p>a</p>
                                        <p>b</p>
                                        <p>c</p>
                                    </td>
                                    <td class="border-x border-opacity-25 border-green-111 px-6 py-4">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">delete</a>
                                    </td>
                                </tr>
                                <tr class=" border-b  border-green-111">
                                    <th scope="row" class="border-x border-opacity-25 border-green-111 px-6 py-4 ">
                                        1.
                                    </th>
                                    <td class="border-x border-opacity-25 border-green-111 px-6 py-4">
                                        puisi adalah
                                    </td>
                                    <td class="border-x border-opacity-25 border-green-111 px-6 py-4">
                                        contohpuisi.jpeg
                                    </td>
                                    <td class="border-x border-opacity-25 border-green-111 px-6 py-4">
                                        <p>a</p>
                                        <p>b</p>
                                        <p>c</p>
                                    </td>
                                    <td class="border-x border-opacity-25 border-green-111 px-6 py-4">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div name="dnd" class="text-start px-[20px] pt-5 w-full space-y-3">
                    <div class="flex flex-row justify-between">
                        <h2 class="my-auto text-2xl">Drag n Drop</h2>
                        <a href="">
                        <img src="{{ URL('Pictures/plus.png') }}" class="w-[32px] h-[32px]" alt=""></a>
                    </a>
                    </div>
                    <div class="relative overflow-x-auto  sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-white uppercase  bg-green-111">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        No
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Soal
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Media
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Jawaban
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-green-111">
                                    <th scope="row" class="px-6 py-4 ">
                                        1.
                                    </th>
                                    <td class="border-x border-opacity-25 border-green-111 px-6 py-4">
                                        puisi adalah
                                    </td>
                                    <td class="border-x border-opacity-25 border-green-111 px-6 py-4">
                                        contohpuisi.jpeg
                                    </td>
                                    <td class="border-x border-opacity-25 border-green-111 px-6 py-4">
                                        <p>a</p>
                                        <p>b</p>
                                        <p>c</p>
                                    </td>
                                    <td class="border-x border-opacity-25 border-green-111 px-6 py-4">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">delete</a>
                                    </td>
                                </tr>
                                <tr class=" border-b border-green-111">
                                    <th scope="row" class="border-x border-opacity-25 border-green-111 px-6 py-4 ">
                                        1.
                                    </th>
                                    <td class="border-x border-opacity-25 border-green-111 px-6 py-4">
                                        puisi adalah
                                    </td>
                                    <td class="border-x border-opacity-25 border-green-111 px-6 py-4">
                                        contohpuisi.jpeg
                                    </td>
                                    <td class="border-x border-opacity-25 border-green-111 px-6 py-4">
                                        <p>a</p>
                                        <p>b</p>
                                        <p>c</p>
                                    </td>
                                    <td class="border-x border-opacity-25 border-green-111 px-6 py-4">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div name="add" class="text-start px-[20px] w-full pt-5 space-y-3">
                    <div class="flex flex-row justify-between">
                        <h2 class="my-auto text-2xl">Essay</h2>
                    <a href="">
                        <img src="{{ URL('Pictures/plus.png') }}" class="w-[32px] h-[32px]" alt=""></a>
                    </a>
                    </div>
                    <div class="relative overflow-x-auto  sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-white uppercase  bg-green-111">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        No
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Soal
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Media
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class=" border-b border-green-111">
                                    <th scope="row" class="border-x border-opacity-25 border-green-111 px-6 py-4 ">
                                        1.
                                    </th>
                                    <td class="border-x border-opacity-25 border-green-111 px-6 py-4">
                                        puisi adalah
                                    </td>
                                    <td class="border-x border-opacity-25 border-green-111 px-6 py-4">
                                        contohpuisi.jpeg
                                    </td>
                                    <td class="border-x border-opacity-25 border-green-111 px-6 py-4">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">delete</a>
                                    </td>
                                </tr>
                                <tr class=" border-b border-green-111">
                                    <th scope="row" class="border-x border-opacity-25 border-green-111 px-6 py-4 ">
                                        1.
                                    </th>
                                    <td class="border-x border-opacity-25 border-green-111 px-6 py-4">
                                        puisi adalah
                                    </td>
                                    <td class="border-x border-opacity-25 border-green-111 px-6 py-4">
                                        contohpuisi.jpeg
                                    </td>
                                    <td class="border-x border-opacity-25 border-green-111 px-6 py-4">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                    <div class="container flex flex-row w-full h-fit justify-end">
                        <button>
                            <a href="">
                                <img class="w-[130px] h-[38px] hover:scale-105" src="{{ URL('Pictures/simpan.png') }}"
                                    alt="">
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
