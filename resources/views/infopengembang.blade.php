@extends('partials.index')

@section('container')
<section>
    <div class="bg-white ">
        <div class="container px-6 py-4 mx-auto flex justify-between lg:h-[800px] h-full">
                <div class="container shadow-card p-5 rounded-md flex flex-col sm:flex-row w-full m-auto justify-between gap-5">
                <div class="m-auto w-full">
                    <img src="{{ URL('pictures/portrait.png') }}" class="w-[200px] h-[300px] sm:h-[600px] sm:w-[400px] rounded-md m-auto " alt="me">
                </div>
                    <div class="mx-auto flex flex-col w-full">
                    <p class="font-inter mx-auto text-4xl sm:text-6xl text-black">
                    Biodata</p>
                    <br>
                    <p class="font-inter text-2xl sm:text-3xl text-black">Sati, S.Pd.SD</p>
                    <br>
                    <p class="font-inter text-2xl sm:text-3xl text-black">Guru SDN Tambakreja 05 Cilacap Selatan </p>
                    <br>
                    <p class="font-inter text-2xl sm:text-3xl text-black">Dosen Pembimbing : Dr. Kuntoro, M.Hum</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection