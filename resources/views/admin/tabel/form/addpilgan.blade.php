<div>
    @extends('admin.partials.index')

    @section('container')
    <section>
        <div>
            <form action="{{ route("quiz.pilgan.store", $quiz) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div name="pilgan" class="container m-auto white w-full sm:w-[1440px] space-y-5">
                    <div id="file" class="flex flex-col">
                        <p><input type="file" name="media" id="file-modul" onchange="loadFile(event)"
                                style="display: none;">
                        </p>
                        <p><label for="file-modul" style="cursor: pointer;">
                                <img class="w-[60px] h-[60px] hover:scale-105"
                                    src="{{ URL('pictures/Insert file.png') }}" alt="pilgan">
                            </label></p>
                        <p><img id="filemodul" class="w-[300px] h-[200px]" /></p>
                        <script>
                        var loadFile = function(event) {
                            var image = document.getElementById('filemodul');
                            image.src = URL.createObjectURL(event.target.files[0]);
                        };
                        </script>
                    </div>
                    <div class="flex flex-row justify-between">
                        <p>Soal 1</p>
                        <!-- button hapus -->
                    </div>
                    <textarea required class="outline-green-111 rounded border-2 p-2 w-full sm:w-[1280px] 
                                                    border-gray-200 resize-none" name="question" id="question" rows="1"
                        placeholder="Masukkan Soal"></textarea>
                    <div class="space-y-5 w-full">
                        <!-- opsi -->
                        <div class="flex flex-col w-full space-y-3">
                            <p class="font-thin">Opsi 1</p>
                            <label class="inline-flex items-center w-full">
                                <input name="answerfield[0][correct]" type="checkbox"
                                    class="accent-green-111 w-6 h-6 border-0 rounded-md focus:ring-0" value="1">
                                <span class="ml-2 w-[1280px]" name="jawaban">
                                    <textarea required
                                        class="outline-green-111 rounded
                                                                border-2 p-2 w-[300px] sm:w-full border-gray-200 resize-none"
                                        name="answerfield[0][answer]" id="answer" rows="1"
                                        placeholder="Masukkan jawaban"></textarea>
                                </span>
                            </label>
                        </div>
                        <div class="flex flex-col w-full space-y-3">
                            <p class="font-thin">Opsi 1</p>
                            <label class="inline-flex items-center w-full">
                                <input name="answerfield[1][correct]" type="checkbox"
                                    class="accent-green-111 w-6 h-6 border-0 rounded-md focus:ring-0" value="1">
                                <span class="ml-2 w-[1280px]" name="jawaban">
                                    <textarea required
                                        class="outline-green-111 rounded
                                                                                        border-2 p-2 w-[300px] sm:w-full border-gray-200 resize-none"
                                        name="answerfield[1][answer]" id="answer" rows="1"
                                        placeholder="Masukkan jawaban"></textarea>
                                </span>
                            </label>
                        </div>
                        <div class="flex flex-col w-full space-y-3">
                            <p class="font-thin">Opsi 1</p>
                            <label class="inline-flex items-center w-full">
                                <input name="answerfield[2][correct]" type="checkbox"
                                    class="accent-green-111 w-6 h-6 border-0 rounded-md focus:ring-0" value="1">
                                <span class="ml-2 w-[1280px]" name="jawaban">
                                    <textarea required
                                        class="outline-green-111 rounded
                                                                                        border-2 p-2 w-[300px] sm:w-full border-gray-200 resize-none"
                                        name="answerfield[2][answer]" id="answer" rows="1"
                                        placeholder="Masukkan jawaban"></textarea>
                                </span>
                            </label>
                        </div>
                        <div class="flex flex-col w-full space-y-3">
                            <p class="font-thin">Opsi 1</p>
                            <label class="inline-flex items-center w-full">
                                <input name="answerfield[3][correct]" type="checkbox"
                                    class="accent-green-111 w-6 h-6 border-0 rounded-md focus:ring-0" value="1">
                                <span class="ml-2 w-[1280px]" name="jawaban">
                                    <textarea required
                                        class="outline-green-111 rounded
                                                                                        border-2 p-2 w-[300px] sm:w-full border-gray-200 resize-none"
                                        name="answerfield[3][answer]" id="answer" rows="1"
                                        placeholder="Masukkan jawaban"></textarea>
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="container flex flex-row w-full sm:w-[1280px] h-[38px] justify-end">
                        <button type="submit" value="submit">
                            <a href="">
                                <img class="w-[130px] h-[38px] hover:scale-105" src="{{ URL('Pictures/simpan.png') }}"
                                    alt="">
                            </a>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    @endsection
</div>