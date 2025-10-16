@extends('layout.app')
@section('title', 'Galeri - Zenique Salon & Spa')
@section('content')
    
    <section class="h-[40vh] bg-cover bg-center relative" style="background-image: url('{{ asset('images/hero-background.jpg') }}');">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative container mx-auto px-6 h-full flex flex-col justify-center items-center text-center text-white">
            <h1 class="text-5xl md:text-6xl font-serif font-bold" data-aos="fade-up">Galeri Kami</h1>
            <p class="text-lg mt-4 max-w-2xl" data-aos="fade-up" data-aos-delay="100">Sekilas tentang suasana damai dan hasil perawatan terbaik di Zenique.</p>
        </div>
    </section>

    <div class="py-24">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach ($images as $key => $image)
                <a href="{{ asset('images/gallery/' . $image) }}" data-fancybox="gallery" class="block overflow-hidden rounded-lg shadow-lg group" data-aos="fade-up" data-aos-delay="{{ $key * 100 }}">
                    <img class="h-auto w-full object-cover aspect-square transform group-hover:scale-110 transition-transform duration-500" src="{{ asset('images/gallery/' . $image) }}" alt="Zenique Gallery Image {{ $key + 1 }}">
                </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection