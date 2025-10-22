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
                
                <a href="/images/gallery/gallery1.jpg" data-fancybox="gallery" class="block overflow-hidden rounded-lg shadow-lg group" data-aos="fade-up" data-aos-delay="0">
                    <img class="h-auto w-full object-cover aspect-square transform group-hover:scale-110 transition-transform duration-500" src="/images/gallery/gallery1.jpg" alt="Zenique Gallery Image 1">
                </a>
                
                <a href="/images/gallery/gallery2.jpg" data-fancybox="gallery" class="block overflow-hidden rounded-lg shadow-lg group" data-aos="fade-up" data-aos-delay="100">
                    <img class="h-auto w-full object-cover aspect-square transform group-hover:scale-110 transition-transform duration-500" src="/images/gallery/gallery2.jpg" alt="Zenique Gallery Image 2">
                </a>

                <a href="/images/gallery/gallery3.jpg" data-fancybox="gallery" class="block overflow-hidden rounded-lg shadow-lg group" data-aos="fade-up" data-aos-delay="200">
                    <img class="h-auto w-full object-cover aspect-square transform group-hover:scale-110 transition-transform duration-500" src="/images/gallery/gallery3.jpg" alt="Zenique Gallery Image 3">
                </a>

                <a href="/images/gallery/gallery4.jpg" data-fancybox="gallery" class="block overflow-hidden rounded-lg shadow-lg group" data-aos="fade-up" data-aos-delay="300">
                    <img class="h-auto w-full object-cover aspect-square transform group-hover:scale-110 transition-transform duration-500" src="/images/gallery/gallery4.jpg" alt="Zenique Gallery Image 4">
                </a>
                
                <a href="/images/gallery/gallery5.jpg" data-fancybox="gallery" class="block overflow-hidden rounded-lg shadow-lg group" data-aos="fade-up" data-aos-delay="0">
                    <img class="h-auto w-full object-cover aspect-square transform group-hover:scale-110 transition-transform duration-500" src="/images/gallery/gallery5.jpg" alt="Zenique Gallery Image 5">
                </a>
                
                <a href="/images/gallery/gallery6.jpg" data-fancybox="gallery" class="block overflow-hidden rounded-lg shadow-lg group" data-aos="fade-up" data-aos-delay="100">
                    <img class="h-auto w-full object-cover aspect-square transform group-hover:scale-110 transition-transform duration-500" src="/images/gallery/gallery6.jpg" alt="Zenique Gallery Image 6">
                </a>
                
                <a href="/images/gallery/gallery7.jpg" data-fancybox="gallery" class="block overflow-hidden rounded-lg shadow-lg group" data-aos="fade-up" data-aos-delay="200">
                    <img class="h-auto w-full object-cover aspect-square transform group-hover:scale-110 transition-transform duration-500" src="/images/gallery/gallery7.jpg" alt="Zenique Gallery Image 7">
                </a>

                <a href="/images/gallery/gallery8.jpg" data-fancybox="gallery" class="block overflow-hidden rounded-lg shadow-lg group" data-aos="fade-up" data-aos-delay="300">
                    <img class="h-auto w-full object-cover aspect-square transform group-hover:scale-110 transition-transform duration-500" src="/images/gallery/gallery8.jpg" alt="Zenique Gallery Image 8">
                </a>
                
            </div>
        </div>
    </div>
@endsection