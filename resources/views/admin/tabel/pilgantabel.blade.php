@extends('admin.soal')

@section('container')
<div name="add" class="text-start px-[20px] w-full space-y-3">
    <div name="add" class="text-start px-[20px] w-full space-y-3">
        @include('admin.partials.subnav')
        <div class="flex flex-row justify-between">
            <h2 class="my-auto text-2xl">Pilihan Ganda</h2>
            <a href="{{ route('quiz.pilgan.create', $quiz) }}"><img src="{{ URL('Pictures/plus.png') }}"
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

                    @foreach ($pilgans->multichoise as $pilgan)
                    <tr class=" border-b  border-green-111">
                        <th scope="row" class="border-x border-opacity-25 border-green-111 px-6 py-4 ">
                            {{ $loop->iteration }}
                        </th>
                        <td class="border-x border-opacity-25 border-green-111 px-6 py-4">
                            {{ $pilgan->question }}
                        </td>
                        <td class="border-x border-opacity-25 border-green-111 px-6 py-4">
                            <p> {{ $pilgan->media }}</p>
                        </td>
                        <td class="border-x border-opacity-25 border-green-111 px-6 py-4">
                            @foreach ($pilgan->mutichoisechoise as $choise)
                            {{ $loop->iteration }}
                            @if ($choise->correct == 1)
                            <p class="text-blue-600">{{ $choise->answer }}</p>
                            @else
                            <p> {{ $choise->answer }}</p>
                            @endif

                            @endforeach
                        </td>
                        <td class="border-x border-opacity-25 border-green-111 px-6 py-4">
                            <a href="{{ route('quiz.pilgan.edit', [$quiz, $pilgan]) }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><span>Edit</span></a>
                            <form action="{{ route('quiz.pilgan.destroy', [$quiz, $pilgan]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection