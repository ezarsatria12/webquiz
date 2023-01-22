@extends('admin.partials.index')

@section('container')
    <section>
        <div class="container space-y-5 m-auto px-3 sm:w-[1440px] h-full  sm:space-y-16">
            <div
                class="container h-fit space-y-5 justify-start flex flex-col m-auto sm:w-[1280px] sm:h-[64px] sm:flex-row sm:space-y-0 sm:space-x-20">
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
            <div class="m-auto sm:w-[1280px] h-[676px] flex flex-col justify-start space-y-5">
                <div name="Title" class="space-y-3">
                    <p class="">Quiz Description</p>
                    <textarea class="w-full sm:w-[630px] outline-green-111 rounded border-2 p-2 border-gray-200 resize-none" name="Title"
                        id="Title" cols="80" rows="6" placeholder="Masukkan Judul Quiz"></textarea>
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
                <div name="add" class="space-y-3 w-full sm:w-[630px]">
                    <h2>Pilihan Ganda</h2>
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
                                <tr class=" border-b border-green-111">
                                    <th scope="row" class="px-6 py-4 ">
                                        1.
                                    </th>
                                    <td class="px-6 py-4">
                                        puisi adalah
                                    </td>
                                    <td class="px-6 py-4">
                                        contohpuisi.jpeg
                                    </td>
                                    <td class="px-6 py-4">
                                        <p>a</p>
                                        <p>b</p>
                                        <p>c</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">delete</a>
                                    </td>
                                </tr>
                                <tr class=" border-b border-green-111">
                                    <th scope="row" class="px-6 py-4 ">
                                        1.
                                    </th>
                                    <td class="px-6 py-4">
                                        puisi adalah
                                    </td>
                                    <td class="px-6 py-4">
                                        contohpuisi.jpeg
                                    </td>
                                    <td class="px-6 py-4">
                                        <p>a</p>
                                        <p>b</p>
                                        <p>c</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h2>Mencocokan</h2>
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
                                <tr class=" border-b border-green-111">
                                    <th scope="row" class="px-6 py-4 ">
                                        1.
                                    </th>
                                    <td class="px-6 py-4">
                                        puisi adalah
                                    </td>
                                    <td class="px-6 py-4">
                                        contohpuisi.jpeg
                                    </td>
                                    <td class="px-6 py-4">
                                        <p>a</p>
                                        <p>b</p>
                                        <p>c</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">delete</a>
                                    </td>
                                </tr>
                                <tr class=" border-b border-green-111">
                                    <th scope="row" class="px-6 py-4 ">
                                        1.
                                    </th>
                                    <td class="px-6 py-4">
                                        puisi adalah
                                    </td>
                                    <td class="px-6 py-4">
                                        contohpuisi.jpeg
                                    </td>
                                    <td class="px-6 py-4">
                                        <p>a</p>
                                        <p>b</p>
                                        <p>c</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h2>Esay</h2>
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
                                    <th scope="row" class="px-6 py-4 ">
                                        1.
                                    </th>
                                    <td class="px-6 py-4">
                                        puisi adalah
                                    </td>
                                    <td class="px-6 py-4">
                                        contohpuisi.jpeg
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">delete</a>
                                    </td>
                                </tr>
                                <tr class=" border-b border-green-111">
                                    <th scope="row" class="px-6 py-4 ">
                                        1.
                                    </th>
                                    <td class="px-6 py-4">
                                        puisi adalah
                                    </td>
                                    <td class="px-6 py-4">
                                        contohpuisi.jpeg
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="container flex flex-row w-full sm:w-[1280px] h-[38px] justify-end">
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
