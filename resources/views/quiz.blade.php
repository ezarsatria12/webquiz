@extends('partials.index')

@section('container')
    <section> <!-- ini quiz guest -->
    <div class="bg-white ">
         <div class="container space-y-5 m-auto px-3 sm:px-0 sm:w-[1440px] sm:space-y-[32px]">
            <div
                class="container h-fit space-y-5 justify-start flex m-auto sm:w-[1280px] lg:flex-row sm:space-y-0 sm:space-x-20">
                <div class="h-fit mx-auto pt-5 flex flex-wrap justify-between font-inter text-2xl text-black sm:text-3xl sm:w-[1280px] sm:h-[40px]">
                    <h1>Daftar Quiz</h1>
                </div>
            </div>
            <div
                class="hidden container font-inter text-grey-fade h-fit space-x-3 justify-start m-auto sm:w-[1280px] lg:flex-row sm:space-y-0 sm:space-x-5">
                <a class="hover:text-green-111 focus:text-green-111" href="#">Terbaru</a>
                <a class="hover:text-green-111 focus:text-green-111" href="#">Mudah</a>
                <a class="hover:text-green-111 focus:text-green-111" href="#">Sedang</a>
                <a class="hover:text-green-111 focus:text-green-111" href="#">Sulit</a>
            </div>
            <!-- cardsection -->

            <div class="container m-auto flex gap-4 flex-wrap h-fit pb-[10px] sm:w-[1280px] sm:flex-wrap ">
                @foreach ($quizs as $quiz)
                    <!-- card1 -->
                    <a href="#">
                        <div type="button" onclick="toggleModal('modal-'+{{$quiz->id}})"
                            class="toggleModal container w-[150px] mx-auto flex flex-col justify-start h-fit sm:w-[400px] sm:space-y-3 sm:h-fit shadow-card rounded-[10px] bg-white">
                            <div>
                                <img class="my-[15px] mx-auto rounded-sm px-[10px] sm:w-[350px] sm:h-[185px]  "
                                    src="{{ asset('storage/'.$quiz->media) }}" alt="thumbnail-modul">
                                <h1
                                    class="flex justify-start font-inter text-[14px] sm:text-3xl text-black px-3 sm:px-7 font-medium ">
                                    {{$quiz->quiztitle}}</h1>
                                <p class="font-poppins sm:text-xl text-[12px] text-grey-fade flex flex-col font-light justify-start px-3 sm:px-7">
                                    {{ substr(strip_tags($quiz->quizdesc),0 ,50) }}</p>
                            </div>
                            <!-- tanda panah klo bukan admin -->
                            <div
                                class="container justify-end w-full h-auto flex pb-3 sm:pb-5 pr-3 sm:pr-5 sm:mb-5 mt-auto flex-row">
                                <img class="w-[16px] h-[16px] sm:w-[50px] sm:h-[50px]" src="pictures/go.png" alt="">
                            </div>
                        </div>
                    </a>
                    <!-- popup -->
                    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                        id="modal-{{$quiz->id}}">
                        <div id="card" class="container flex flex-col justify-start py-5 mx-6 z-10 w-full h-[400px] sm:w-[491px] sm:h-[654px]
                        rounded-[10px] shadow-card bg-white space-y-2 sm:space-y-3">
                            <div class="flex flex-col px-5 self-end">
                                <!-- back button -->
                                <button class="background-transparent font-bold uppercase text-sm outline-none
                                focus:outline-none transition-all duration-150" onclick="toggleModal('modal-'+{{$quiz->id}})">
                                    <img class="hover:scale-110 rounded-[10px] m-auto w-[16px] h-[16px] sm:w-[32px] sm:h-[32px]"
                                        src="pictures/cross.png" alt="backcard">
                                </button>
                            </div>
                            <!-- body -->
                            <div class="container mx-auto w-full px-6 h-full flex space-y-2 flex-col">
                                <img class="self-center mx-auto rounded-[10px] px-[10px] w-[300px] h-[150px] sm:w-[450px] sm:h-[250px]  "
                                    src="{{ asset('storage/'.$quiz->media) }}" alt="thumbnail-modul">
                                <h1 class="flex self-start font-medium text-[16px] font-inter text-black sm:text-3xl ">{{$quiz->quiztitle}}</h1>
                                <p class="text-[12px] flex flex-col font-poppins sm:text-2xl text-grey-fade self-start">{{$quiz->quizdesc}}</p>
                            </div>
                            <!-- button masuk -->
                            <div class="container mx-auto w-full px-6 text-center h-full flex flex-col justify-end">
                                <a class="text-[12px] sm:text-[18px] py-2 mx-auto sm:py-3 hover:scale-105
                                bg-green-111 text-white border-2 rounded-[4px] sm:rounded-[6px] w-full" href="/quizguest/play/{{$quiz->id}}">
                                    <span>masuk</span>
                                </a>
                            </div>
                            <!--  -->
                        </div>
                    </div>
                    <!-- js modal -->
                    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-{{$quiz->id}}-backdrop"></div>
                    <script type="text/javascript">
                        var modal = document.getElementById(modal+{{$quiz->id}});
                    
                            function toggleModal(modalID) {
                                document.getElementById(modalID).classList.toggle("hidden");
                                document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
                                document.getElementById(modalID).classList.toggle("flex");
                                document.getElementById(modalID + "-backdrop").classList.toggle("flex");
                                event.preventDefault();
                            }   
                    </script>
                @endforeach
                <!-- card end -->
            </div>
        </div>
        <div class=" py-10 flex mx-auto flex-row space-x-2 justify-center" href="#home">
            {{ $quizs->links() }}
        </div>
    </section>
@endsection
