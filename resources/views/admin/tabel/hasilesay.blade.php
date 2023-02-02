@extends('admin.partials.index')

@section('container')
<section>
    <div class="container flex flex-col mx-auto px-3 sm:px-0 w-full sm:w-[1280px] h-full">
        <div class="container flex flex-col gap-4">
            <h1 class="text-4xl">Hasil Esay</h1>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase  bg-green-111">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            jawaban
                        </th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($esays->studentesayaswer as $student )
                    <tr class="border-b border-green-111">
                        <th scope="row" class="px-6 py-4 ">
                            {{ $loop->iteration }}
                        </th>
                        <td class="border-x border-opacity-25 border-green-111 px-6 py-4">
                            {{$esays->name}}
                        </td>
                        <td class="border-x border-opacity-25 border-green-111 px-6 py-4">
                            {{ $student->answer }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


</section>
@endsection