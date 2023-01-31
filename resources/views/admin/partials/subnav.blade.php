<div class="sm:flex text-grey-fade m-auto ">
    <a class="ml-5 font-inter font-medium hover:text-green-111 focus:text-green-111 active:text-green-700 {{ Request::is('profile') ? 'text-green-700' : ''}}"
        href="{{ route("quiz.pilgan.index", $quiz) }}">Pilihan Ganda</a>
    <a class="mx-5 font-inter font-medium hover:text-green-111 focus:text-green-111 active:text-green-700 {{ Request::is('quiz') ? 'text-green-700' : ''}}"
        href="{{ route("quiz.dragndrop.index", $quiz) }}">Drag & Drop</a>
    <a class="mx-5 font-inter font-medium hover:text-green-111 focus:text-green-111 active:text-green-700 {{ Request::is('module') ? 'text-green-700' : ''}}"
        href="{{ route("quiz.esay.index", $quiz) }}">Esay</a>
</div>