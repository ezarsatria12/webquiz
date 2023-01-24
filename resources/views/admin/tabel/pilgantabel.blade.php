@extends('admin.soal')

@section('container')
    <div name="add" class="text-start px-[20px] w-full space-y-3">
        <div name="add" class="text-start px-[20px] w-full space-y-3">
            @include('admin.partials.subnav')
            <div class="flex flex-row justify-between">
                <h2 class="my-auto text-2xl">Pilihan Ganda</h2>
                <a href="{{ route("quiz.pilgan.create", $quiz) }}"><img src="{{ URL('Pictures/plus.png') }}"
                        class="w-[32px] h-[32px]" alt=""></a>
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
    </div>
    
@endsection
