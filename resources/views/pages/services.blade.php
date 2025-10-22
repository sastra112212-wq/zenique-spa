@extends('layout.app')
@section('title', 'Layanan & Harga - Zenique Salon & Spa')
@section('content')

    <section class="h-[40vh] bg-cover bg-center relative" style="background-image: url('{{ asset('images/cta-background.jpg') }}');">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative container mx-auto px-6 h-full flex flex-col justify-center items-center text-center text-white">
            <h1 class="text-5xl md:text-6xl font-serif font-bold" data-aos="fade-up">Daftar Layanan & Harga</h1>
            <p class="text-lg mt-4 max-w-2xl" data-aos="fade-up" data-aos-delay="100">Temukan perawatan yang sempurna untuk kebutuhan Anda, dari relaksasi hingga peremajaan.</p>
        </div>
    </section>

    <div class="py-24">
        <div class="container mx-auto px-6">

            <div class="mb-16">
                <h2 class="text-4xl font-serif text-pink-zen mb-8 text-center md:text-left" data-aos="fade-right">
                    Massages
                </h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    
                    <div class="zenique-card rounded-lg flex flex-col card-hover-effect" data-aos="fade-up" data-aos-delay="0">
                        <div class="card-decoration"></div>
                        <div class="p-6 flex-grow">
                            <h3 class="text-2xl font-serif text-green-zen">Balinese Massage</h3>
                            <p class="text-gray-500 mt-2 text-sm">30/60/90 Min</p>
                        </div>
                        <hr class="card-divider mx-6">
                        <div class="p-6 pt-0 flex justify-between items-center">
                            <span class="text-2xl font-serif font-bold text-green-zen">95K / 195K / 250K</span>
                            <a 
                                href="https://wa.me/6285602591090?text={{ urlencode("Halo Zenique, saya tertarik untuk booking layanan 'Balinese Massage' dengan harga 95K / 195K / 250K. Apakah tersedia?") }}" 
                                target="_blank" 
                                class="btn-primary text-sm font-semibold px-5 py-2 rounded-full flex items-center space-x-2"
                            >
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.31 20.6C8.75 21.42 10.36 21.88 12.04 21.88C17.5 21.88 21.95 17.43 21.95 11.97C21.95 9.32 20.93 6.83 19.11 4.99C17.27 3.17 14.78 2.13 12.04 2.13L12.04 2ZM17.46 14.85C17.21 15.45 16.25 15.93 15.74 16.05C15.23 16.17 14.56 16.25 12.4 15.43C9.64 14.38 7.72 11.95 7.58 11.78C7.43 11.61 6.45 10.35 6.45 9.08C6.45 7.82 7.15 7.15 7.41 6.89C7.67 6.63 8.01 6.54 8.31 6.54C8.95 6.55 9.12 6.57 9.33 7.04C9.57 7.57 10.12 8.94 10.19 9.08C10.26 9.22 10.32 9.42 10.21 9.61C9.72 10.25 9.58 10.4 9.46 10.53C9.21 10.82 9.34 11.08 9.47 11.34C10.02 12.23 10.79 12.94 11.83 13.89C12.68 14.2 13.01 14.33C13.65 14.24 14.19 13.56 14.42 13.27C14.93 12.91 15.23 13.01 15.54 13.11C16.81 13.75 17.05 14 17.29 14.25C17.5 14.4 17.55 14.53C17.68 14.34 17.46 14.85V14.85Z"/></svg>
                                <span>Booking via WA</span>
                            </a>
                        </div>
                    </div>

                    <div class="zenique-card rounded-lg flex flex-col card-hover-effect" data-aos="fade-up" data-aos-delay="50">
                        <div class="card-decoration"></div>
                        <div class="p-6 flex-grow">
                            <h3 class="text-2xl font-serif text-green-zen">Deep Tissue Massage</h3>
                            <p class="text-gray-500 mt-2 text-sm">60/90 Min</p>
                        </div>
                        <hr class="card-divider mx-6">
                        <div class="p-6 pt-0 flex justify-between items-center">
                            <span class="text-2xl font-serif font-bold text-green-zen">250K / 350K</span>
                            <a 
                                href="https://wa.me/6285602591090?text={{ urlencode("Halo Zenique, saya tertarik untuk booking layanan 'Deep Tissue Massage' dengan harga 250K / 350K. Apakah tersedia?") }}" 
                                target="_blank" 
                                class="btn-primary text-sm font-semibold px-5 py-2 rounded-full flex items-center space-x-2"
                            >
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.31 20.6C8.75 21.42 10.36 21.88 12.04 21.88C17.5 21.88 21.95 17.43 21.95 11.97C21.95 9.32 20.93 6.83 19.11 4.99C17.27 3.17 14.78 2.13 12.04 2.13L12.04 2ZM17.46 14.85C17.21 15.45 16.25 15.93 15.74 16.05C15.23 16.17 14.56 16.25 12.4 15.43C9.64 14.38 7.72 11.95 7.58 11.78C7.43 11.61 6.45 10.35 6.45 9.08C6.45 7.82 7.15 7.15 7.41 6.89C7.67 6.63 8.01 6.54 8.31 6.54C8.95 6.55 9.12 6.57 9.33 7.04C9.57 7.57 10.12 8.94 10.19 9.08C10.26 9.22 10.32 9.42 10.21 9.61C9.72 10.25 9.58 10.4 9.46 10.53C9.21 10.82 9.34 11.08 9.47 11.34C10.02 12.23 10.79 12.94 11.83 13.89C12.68 14.2 13.01 14.33C13.65 14.24 14.19 13.56 14.42 13.27C14.93 12.91 15.23 13.01 15.54 13.11C16.81 13.75 17.05 14 17.29 14.25C17.5 14.4 17.55 14.53C17.68 14.34 17.46 14.85V14.85Z"/></svg>
                                <span>Booking via WA</span>
                            </a>
                        </div>
                    </div>

                    <div class="zenique-card rounded-lg flex flex-col card-hover-effect" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-decoration"></div>
                        <div class="p-6 flex-grow">
                            <h3 class="text-2xl font-serif text-green-zen">Hot Stone Massage</h3>
                            <p class="text-gray-500 mt-2 text-sm">90 Min</p>
                        </div>
                        <hr class="card-divider mx-6">
                        <div class="p-6 pt-0 flex justify-between items-center">
                            <span class="text-2xl font-serif font-bold text-green-zen">350K</span>
                            <a 
                                href="https://wa.me/6285602591090?text={{ urlencode("Halo Zenique, saya tertarik untuk booking layanan 'Hot Stone Massage' dengan harga 350K. Apakah tersedia?") }}" 
                                target="_blank" 
                                class="btn-primary text-sm font-semibold px-5 py-2 rounded-full flex items-center space-x-2"
                            >
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.31 20.6C8.75 21.42 10.36 21.88 12.04 21.88C17.5 21.88 21.95 17.43 21.95 11.97C21.95 9.32 20.93 6.83 19.11 4.99C17.27 3.17 14.78 2.13 12.04 2.13L12.04 2ZM17.46 14.85C17.21 15.45 16.25 15.93 15.74 16.05C15.23 16.17 14.56 16.25 12.4 15.43C9.64 14.38 7.72 11.95 7.58 11.78C7.43 11.61 6.45 10.35 6.45 9.08C6.45 7.82 7.15 7.15 7.41 6.89C7.67 6.63 8.01 6.54 8.31 6.54C8.95 6.55 9.12 6.57 9.33 7.04C9.57 7.57 10.12 8.94 10.19 9.08C10.26 9.22 10.32 9.42 10.21 9.61C9.72 10.25 9.58 10.4 9.46 10.53C9.21 10.82 9.34 11.08 9.47 11.34C10.02 12.23 10.79 12.94 11.83 13.89C12.68 14.2 13.01 14.33C13.65 14.24 14.19 13.56 14.42 13.27C14.93 12.91 15.23 13.01 15.54 13.11C16.81 13.75 17.05 14 17.29 14.25C17.5 14.4 17.55 14.53C17.68 14.34 17.46 14.85V14.85Z"/></svg>
                                <span>Booking via WA</span>
                            </a>
                        </div>
                    </div>

                    <div class="zenique-card rounded-lg flex flex-col card-hover-effect" data-aos="fade-up" data-aos-delay="150">
                        <div class="card-decoration"></div>
                        <div class="p-6 flex-grow">
                            <h3 class="text-2xl font-serif text-green-zen">Aromatherapy Massage</h3>
                            <p class="text-gray-500 mt-2 text-sm">60 Min</p>
                        </div>
                        <hr class="card-divider mx-6">
                        <div class="p-6 pt-0 flex justify-between items-center">
                            <span class="text-2xl font-serif font-bold text-green-zen">225K</span>
                            <a 
                                href="https://wa.me/6285602591090?text={{ urlencode("Halo Zenique, saya tertarik untuk booking layanan 'Aromatherapy Massage' dengan harga 225K. Apakah tersedia?") }}" 
                                target="_blank" 
                                class="btn-primary text-sm font-semibold px-5 py-2 rounded-full flex items-center space-x-2"
                            >
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.31 20.6C8.75 21.42 10.36 21.88 12.04 21.88C17.5 21.88 21.95 17.43 21.95 11.97C21.95 9.32 20.93 6.83 19.11 4.99C17.27 3.17 14.78 2.13 12.04 2.13L12.04 2ZM17.46 14.85C17.21 15.45 16.25 15.93 15.74 16.05C15.23 16.17 14.56 16.25 12.4 15.43C9.64 14.38 7.72 11.95 7.58 11.78C7.43 11.61 6.45 10.35 6.45 9.08C6.45 7.82 7.15 7.15 7.41 6.89C7.67 6.63 8.01 6.54 8.31 6.54C8.95 6.55 9.12 6.57 9.33 7.04C9.57 7.57 10.12 8.94 10.19 9.08C10.26 9.22 10.32 9.42 10.21 9.61C9.72 10.25 9.58 10.4 9.46 10.53C9.21 10.82 9.34 11.08 9.47 11.34C10.02 12.23 10.79 12.94 11.83 13.89C12.68 14.2 13.01 14.33C13.65 14.24 14.19 13.56 14.42 13.27C14.93 12.91 15.23 13.01 15.54 13.11C16.81 13.75 17.05 14 17.29 14.25C17.5 14.4 17.55 14.53C17.68 14.34 17.46 14.85V14.85Z"/></svg>
                                <span>Booking via WA</span>
                            </a>
                        </div>
                    </div>

                    <div class="zenique-card rounded-lg flex flex-col card-hover-effect" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-decoration"></div>
                        <div class="p-6 flex-grow">
                            <h3 class="text-2xl font-serif text-green-zen">Aloe Vera Massage</h3>
                            <p class="text-gray-500 mt-2 text-sm">60 Min</p>
                        </div>
                        <hr class="card-divider mx-6">
                        <div class="p-6 pt-0 flex justify-between items-center">
                            <span class="text-2xl font-serif font-bold text-green-zen">225K</span>
                            <a 
                                href="https://wa.me/6285602591090?text={{ urlencode("Halo Zenique, saya tertarik untuk booking layanan 'Aloe Vera Massage' dengan harga 225K. Apakah tersedia?") }}" 
                                target="_blank" 
                                class="btn-primary text-sm font-semibold px-5 py-2 rounded-full flex items-center space-x-2"
                            >
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.31 20.6C8.75 21.42 10.36 21.88 12.04 21.88C17.5 21.88 21.95 17.43 21.95 11.97C21.95 9.32 20.93 6.83 19.11 4.99C17.27 3.17 14.78 2.13 12.04 2.13L12.04 2ZM17.46 14.85C17.21 15.45 16.25 15.93 15.74 16.05C15.23 16.17 14.56 16.25 12.4 15.43C9.64 14.38 7.72 11.95 7.58 11.78C7.43 11.61 6.45 10.35 6.45 9.08C6.45 7.82 7.15 7.15 7.41 6.89C7.67 6.63 8.01 6.54 8.31 6.54C8.95 6.55 9.12 6.57 9.33 7.04C9.57 7.57 10.12 8.94 10.19 9.08C10.26 9.22 10.32 9.42 10.21 9.61C9.72 10.25 9.58 10.4 9.46 10.53C9.21 10.82 9.34 11.08 9.47 11.34C10.02 12.23 10.79 12.94 11.83 13.89C12.68 14.2 13.01 14.33C13.65 14.24 14.19 13.56 14.42 13.27C14.93 12.91 15.23 13.01 15.54 13.11C16.81 13.75 17.05 14 17.29 14.25C17.5 14.4 17.55 14.53C17.68 14.34 17.46 14.85V14.85Z"/></svg>
                                <span>Booking via WA</span>
                            </a>
                        </div>
                    </div>

                    <div class="zenique-card rounded-lg flex flex-col card-hover-effect" data-aos="fade-up" data-aos-delay="250">
                        <div class="card-decoration"></div>
                        <div class="p-6 flex-grow">
                            <h3 class="text-2xl font-serif text-green-zen">Back and Shoulder</h3>
                            <p class="text-gray-500 mt-2 text-sm">30 Min</p>
                        </div>
                        <hr class="card-divider mx-6">
                        <div class="p-6 pt-0 flex justify-between items-center">
                            <span class="text-2xl font-serif font-bold text-green-zen">130K</span>
                            <a 
                                href="https://wa.me/6285602591090?text={{ urlencode("Halo Zenique, saya tertarik untuk booking layanan 'Back and Shoulder' dengan harga 130K. Apakah tersedia?") }}" 
                                target="_blank" 
                                class="btn-primary text-sm font-semibold px-5 py-2 rounded-full flex items-center space-x-2"
                            >
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.31 20.6C8.75 21.42 10.36 21.88 12.04 21.88C17.5 21.88 21.95 17.43 21.95 11.97C21.95 9.32 20.93 6.83 19.11 4.99C17.27 3.17 14.78 2.13 12.04 2.13L12.04 2ZM17.46 14.85C17.21 15.45 16.25 15.93 15.74 16.05C15.23 16.17 14.56 16.25 12.4 15.43C9.64 14.38 7.72 11.95 7.58 11.78C7.43 11.61 6.45 10.35 6.45 9.08C6.45 7.82 7.15 7.15 7.41 6.89C7.67 6.63 8.01 6.54 8.31 6.54C8.95 6.55 9.12 6.57 9.33 7.04C9.57 7.57 10.12 8.94 10.19 9.08C10.26 9.22 10.32 9.42 10.21 9.61C9.72 10.25 9.58 10.4 9.46 10.53C9.21 10.82 9.34 11.08 9.47 11.34C10.02 12.23 10.79 12.94 11.83 13.89C12.68 14.2 13.01 14.33C13.65 14.24 14.19 13.56 14.42 13.27C14.93 12.91 15.23 13.01 15.54 13.11C16.81 13.75 17.05 14 17.29 14.25C17.5 14.4 17.55 14.53C17.68 14.34 17.46 14.85V14.85Z"/></svg>
                                <span>Booking via WA</span>
                            </a>
                        </div>
                    </div>

                    <div class="zenique-card rounded-lg flex flex-col card-hover-effect" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-decoration"></div>
                        <div class="p-6 flex-grow">
                            <h3 class="text-2xl font-serif text-green-zen">Foot Massage</h3>
                            <p class="text-gray-500 mt-2 text-sm">30/60 Min</p>
                        </div>
                        <hr class="card-divider mx-6">
                        <div class="p-6 pt-0 flex justify-between items-center">
                            <span class="text-2xl font-serif font-bold text-green-zen">95K / 195K</span>
                            <a 
                                href="https://wa.me/6285602591090?text={{ urlencode("Halo Zenique, saya tertarik untuk booking layanan 'Foot Massage' dengan harga 95K / 195K. Apakah tersedia?") }}" 
                                target="_blank" 
                                class="btn-primary text-sm font-semibold px-5 py-2 rounded-full flex items-center space-x-2"
                            >
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.31 20.6C8.75 21.42 10.36 21.88 12.04 21.88C17.5 21.88 21.95 17.43 21.95 11.97C21.95 9.32 20.93 6.83 19.11 4.99C17.27 3.17 14.78 2.13 12.04 2.13L12.04 2ZM17.46 14.85C17.21 15.45 16.25 15.93 15.74 16.05C15.23 16.17 14.56 16.25 12.4 15.43C9.64 14.38 7.72 11.95 7.58 11.78C7.43 11.61 6.45 10.35 6.45 9.08C6.45 7.82 7.15 7.15 7.41 6.89C7.67 6.63 8.01 6.54 8.31 6.54C8.95 6.55 9.12 6.57 9.33 7.04C9.57 7.57 10.12 8.94 10.19 9.08C10.26 9.22 10.32 9.42 10.21 9.61C9.72 10.25 9.58 10.4 9.46 10.53C9.21 10.82 9.34 11.08 9.47 11.34C10.02 12.23 10.79 12.94 11.83 13.89C12.68 14.2 13.01 14.33C13.65 14.24 14.19 13.56 14.42 13.27C14.93 12.91 15.23 13.01 15.54 13.11C16.81 13.75 17.05 14 17.29 14.25C17.5 14.4 17.55 14.53C17.68 14.34 17.46 14.85V14.85Z"/></svg>
                                <span>Booking via WA</span>
                            </a>
                        </div>
                    </div>

                    <div class="zenique-card rounded-lg flex flex-col card-hover-effect" data-aos="fade-up" data-aos-delay="350">
                        <div class="card-decoration"></div>
                        <div class="p-6 flex-grow">
                            <h3 class="text-2xl font-serif text-green-zen">Face Massage</h3>
                            <p class="text-gray-500 mt-2 text-sm">30 Min</p>
                        </div>
                        <hr class="card-divider mx-6">
                        <div class="p-6 pt-0 flex justify-between items-center">
                            <span class="text-2xl font-serif font-bold text-green-zen">130K</span>
                            <a 
                                href="https://wa.me/6285602591090?text={{ urlencode("Halo Zenique, saya tertarik untuk booking layanan 'Face Massage' dengan harga 130K. Apakah tersedia?") }}" 
                                target="_blank" 
                                class="btn-primary text-sm font-semibold px-5 py-2 rounded-full flex items-center space-x-2"
                            >
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.31 20.6C8.75 21.42 10.36 21.88 12.04 21.88C17.5 21.88 21.95 17.43 21.95 11.97C21.95 9.32 20.93 6.83 19.11 4.99C17.27 3.17 14.78 2.13 12.04 2.13L12.04 2ZM17.46 14.85C17.21 15.45 16.25 15.93 15.74 16.05C15.23 16.17 14.56 16.25 12.4 15.43C9.64 14.38 7.72 11.95 7.58 11.78C7.43 11.61 6.45 10.35 6.45 9.08C6.45 7.82 7.15 7.15 7.41 6.89C7.67 6.63 8.01 6.54 8.31 6.54C8.95 6.55 9.12 6.57 9.33 7.04C9.57 7.57 10.12 8.94 10.19 9.08C10.26 9.22 10.32 9.42 10.21 9.61C9.72 10.25 9.58 10.4 9.46 10.53C9.21 10.82 9.34 11.08 9.47 11.34C10.02 12.23 10.79 12.94 11.83 13.89C12.68 14.2 13.01 14.33C13.65 14.24 14.19 13.56 14.42 13.27C14.93 12.91 15.23 13.01 15.54 13.11C16.81 13.75 17.05 14 17.29 14.25C17.5 14.4 17.55 14.53C17.68 14.34 17.46 14.85V14.85Z"/></svg>
                                <span>Booking via WA</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-16">
                <h2 class="text-4xl font-serif text-pink-zen mb-8 text-center md:text-left" data-aos="fade-right">
                    Body Treatments
                </h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    
                    <div class="zenique-card rounded-lg flex flex-col card-hover-effect" data-aos="fade-up" data-aos-delay="0">
                        <div class="card-decoration"></div>
                        <div class="p-6 flex-grow">
                            <h3 class="text-2xl font-serif text-green-zen">Body Scrub</h3>
                            <p class="text-gray-500 mt-2 text-sm">30 Min</p>
                        </div>
                        <hr class="card-divider mx-6">
                        <div class="p-6 pt-0 flex justify-between items-center">
                            <span class="text-2xl font-serif font-bold text-green-zen">195K</span>
                            <a 
                                href="https://wa.me/6285602591090?text={{ urlencode("Halo Zenique, saya tertarik untuk booking layanan 'Body Scrub' dengan harga 195K. Apakah tersedia?") }}" 
                                target="_blank" 
                                class="btn-primary text-sm font-semibold px-5 py-2 rounded-full flex items-center space-x-2"
                            >
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.31 20.6C8.75 21.42 10.36 21.88 12.04 21.88C17.5 21.88 21.95 17.43 21.95 11.97C21.95 9.32 20.93 6.83 19.11 4.99C17.27 3.17 14.78 2.13 12.04 2.13L12.04 2ZM17.46 14.85C17.21 15.45 16.25 15.93 15.74 16.05C15.23 16.17 14.56 16.25 12.4 15.43C9.64 14.38 7.72 11.95 7.58 11.78C7.43 11.61 6.45 10.35 6.45 9.08C6.45 7.82 7.15 7.15 7.41 6.89C7.67 6.63 8.01 6.54 8.31 6.54C8.95 6.55 9.12 6.57 9.33 7.04C9.57 7.57 10.12 8.94 10.19 9.08C10.26 9.22 10.32 9.42 10.21 9.61C9.72 10.25 9.58 10.4 9.46 10.53C9.21 10.82 9.34 11.08 9.47 11.34C10.02 12.23 10.79 12.94 11.83 13.89C12.68 14.2 13.01 14.33C13.65 14.24 14.19 13.56 14.42 13.27C14.93 12.91 15.23 13.01 15.54 13.11C16.81 13.75 17.05 14 17.29 14.25C17.5 14.4 17.55 14.53C17.68 14.34 17.46 14.85V14.85Z"/></svg>
                                <span>Booking via WA</span>
                            </a>
                        </div>
                    </div>

                    <div class="zenique-card rounded-lg flex flex-col card-hover-effect" data-aos="fade-up" data-aos-delay="50">
                        <div class="card-decoration"></div>
                        <div class="p-6 flex-grow">
                            <h3 class="text-2xl font-serif text-green-zen">Ear Candle</h3>
                            <p class="text-gray-500 mt-2 text-sm">30 Min</p>
                        </div>
                        <hr class="card-divider mx-6">
                        <div class="p-6 pt-0 flex justify-between items-center">
                            <span class="text-2xl font-serif font-bold text-green-zen">130K</span>
                            <a 
                                href="https://wa.me/6285602591090?text={{ urlencode("Halo Zenique, saya tertarik untuk booking layanan 'Ear Candle' dengan harga 130K. Apakah tersedia?") }}" 
                                target="_blank" 
                                class="btn-primary text-sm font-semibold px-5 py-2 rounded-full flex items-center space-x-2"
                            >
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.31 20.6C8.75 21.42 10.36 21.88 12.04 21.88C17.5 21.88 21.95 17.43 21.95 11.97C21.95 9.32 20.93 6.83 19.11 4.99C17.27 3.17 14.78 2.13 12.04 2.13L12.04 2ZM17.46 14.85C17.21 15.45 16.25 15.93 15.74 16.05C15.23 16.17 14.56 16.25 12.4 15.43C9.64 14.38 7.72 11.95 7.58 11.78C7.43 11.61 6.45 10.35 6.45 9.08C6.45 7.82 7.15 7.15 7.41 6.89C7.67 6.63 8.01 6.54 8.31 6.54C8.95 6.55 9.12 6.57 9.33 7.04C9.57 7.57 10.12 8.94 10.19 9.08C10.26 9.22 10.32 9.42 10.21 9.61C9.72 10.25 9.58 10.4 9.46 10.53C9.21 10.82 9.34 11.08 9.47 11.34C10.02 12.23 10.79 12.94 11.83 13.89C12.68 14.2 13.01 14.33C13.65 14.24 14.19 13.56 14.42 13.27C14.93 12.91 15.23 13.01 15.54 13.11C16.81 13.75 17.05 14 17.29 14.25C17.5 14.4 17.55 14.53C17.68 14.34 17.46 14.85V14.85Z"/></svg>
                                <span>Booking via WA</span>
                            </a>
                        </div>
                    </div>

                    <div class="zenique-card rounded-lg flex flex-col card-hover-effect" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-decoration"></div>
                        <div class="p-6 flex-grow">
                            <h3 class="text-2xl font-serif text-green-zen">Facial</h3>
                            <p class="text-gray-500 mt-2 text-sm">40 Min</p>
                        </div>
                        <hr class="card-divider mx-6">
                        <div class="p-6 pt-0 flex justify-between items-center">
                            <span class="text-2xl font-serif font-bold text-green-zen">195K</span>
                            <a 
                                href="https://wa.me/6285602591090?text={{ urlencode("Halo Zenique, saya tertarik untuk booking layanan 'Facial' dengan harga 195K. Apakah tersedia?") }}" 
                                target="_blank" 
                                class="btn-primary text-sm font-semibold px-5 py-2 rounded-full flex items-center space-x-2"
                            >
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.31 20.6C8.75 21.42 10.36 21.88 12.04 21.88C17.5 21.88 21.95 17.43 21.95 11.97C21.95 9.32 20.93 6.83 19.11 4.99C17.27 3.17 14.78 2.13 12.04 2.13L12.04 2ZM17.46 14.85C17.21 15.45 16.25 15.93 15.74 16.05C15.23 16.17 14.56 16.25 12.4 15.43C9.64 14.38 7.72 11.95 7.58 11.78C7.43 11.61 6.45 10.35 6.45 9.08C6.45 7.82 7.15 7.15 7.41 6.89C7.67 6.63 8.01 6.54 8.31 6.54C8.95 6.55 9.12 6.57 9.33 7.04C9.57 7.57 10.12 8.94 10.19 9.08C10.26 9.22 10.32 9.42 10.21 9.61C9.72 10.25 9.58 10.4 9.46 10.53C9.21 10.82 9.34 11.08 9.47 11.34C10.02 12.23 10.79 12.94 11.83 13.89C12.68 14.2 13.01 14.33C13.65 14.24 14.19 13.56 14.42 13.27C14.93 12.91 15.23 13.01 15.54 13.11C16.81 13.75 17.05 14 17.29 14.25C17.5 14.4 17.55 14.53C17.68 14.34 17.46 14.85V14.85Z"/></svg>
                                <span>Booking via WA</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mb-16">
                <h2 class="text-4xl font-serif text-pink-zen mb-8 text-center md:text-left" data-aos="fade-right">
                    Hair Care
                </h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    
                    <div class="zenique-card rounded-lg flex flex-col card-hover-effect" data-aos="fade-up" data-aos-delay="0">
                        <div class="card-decoration"></div>
                        <div class="p-6 flex-grow">
                            <h3 class="text-2xl font-serif text-green-zen">Hair Braiding</h3>
                            <p class="text-gray-500 mt-2 text-sm">Short/Medium/Long</p>
                        </div>
                        <hr class="card-divider mx-6">
                        <div class="p-6 pt-0 flex justify-between items-center">
                            <span class="text-2xl font-serif font-bold text-green-zen">300K / 350K / 500K</span>
                            <a 
                                href="https://wa.me/6285602591090?text={{ urlencode("Halo Zenique, saya tertarik untuk booking layanan 'Hair Braiding' dengan harga 300K / 350K / 500K. Apakah tersedia?") }}" 
                                target="_blank" 
                                class="btn-primary text-sm font-semibold px-5 py-2 rounded-full flex items-center space-x-2"
                            >
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.31 20.6C8.75 21.42 10.36 21.88 12.04 21.88C17.5 21.88 21.95 17.43 21.95 11.97C21.95 9.32 20.93 6.83 19.11 4.99C17.27 3.17 14.78 2.13 12.04 2.13L12.04 2ZM17.46 14.85C17.21 15.45 16.25 15.93 15.74 16.05C15.23 16.17 14.56 16.25 12.4 15.43C9.64 14.38 7.72 11.95 7.58 11.78C7.43 11.61 6.45 10.35 6.45 9.08C6.45 7.82 7.15 7.15 7.41 6.89C7.67 6.63 8.01 6.54 8.31 6.54C8.95 6.55 9.12 6.57 9.33 7.04C9.57 7.57 10.12 8.94 10.19 9.08C10.26 9.22 10.32 9.42 10.21 9.61C9.72 10.25 9.58 10.4 9.46 10.53C9.21 10.82 9.34 11.08 9.47 11.34C10.02 12.23 10.79 12.94 11.83 13.89C12.68 14.2 13.01 14.33C13.65 14.24 14.19 13.56 14.42 13.27C14.93 12.91 15.23 13.01 15.54 13.11C16.81 13.75 17.05 14 17.29 14.25C17.5 14.4 17.55 14.53C17.68 14.34 17.46 14.85V14.85Z"/></svg>
                                <span>Booking via WA</span>
                            </a>
                        </div>
                    </div>

                    <div class="zenique-card rounded-lg flex flex-col card-hover-effect" data-aos="fade-up" data-aos-delay="50">
                        <div class="card-decoration"></div>
                        <div class="p-6 flex-grow">
                            <h3 class="text-2xl font-serif text-green-zen">Cream Bath</h3>
                            <p class="text-gray-500 mt-2 text-sm">60 Min</p>
                        </div>
                        <hr class="card-divider mx-6">
                        <div class="p-6 pt-0 flex justify-between items-center">
                            <span class="text-2xl font-serif font-bold text-green-zen">150K</span>
                            <a 
                                href="https://wa.me/6285602591090?text={{ urlencode("Halo Zenique, saya tertarik untuk booking layanan 'Cream Bath' dengan harga 150K. Apakah tersedia?") }}" 
                                target="_blank" 
                                class="btn-primary text-sm font-semibold px-5 py-2 rounded-full flex items-center space-x-2"
                            >
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.31 20.6C8.75 21.42 10.36 21.88 12.04 21.88C17.5 21.88 21.95 17.43 21.95 11.97C21.95 9.32 20.93 6.83 19.11 4.99C17.27 3.17 14.78 2.13 12.04 2.13L12.04 2ZM17.46 14.85C17.21 15.45 16.25 15.93 15.74 16.05C15.23 16.17 14.56 16.25 12.4 15.43C9.64 14.38 7.72 11.95 7.58 11.78C7.43 11.61 6.45 10.35 6.45 9.08C6.45 7.82 7.15 7.15 7.41 6.89C7.67 6.63 8.01 6.54 8.31 6.54C8.95 6.55 9.12 6.57 9.33 7.04C9.57 7.57 10.12 8.94 10.19 9.08C10.26 9.22 10.32 9.42 10.21 9.61C9.72 10.25 9.58 10.4 9.46 10.53C9.21 10.82 9.34 11.08 9.47 11.34C10.02 12.23 10.79 12.94 11.83 13.89C12.68 14.2 13.01 14.33C13.65 14.24 14.19 13.56 14.42 13.27C14.93 12.91 15.23 13.01 15.54 13.11C16.81 13.75 17.05 14 17.29 14.25C17.5 14.4 17.55 14.53C17.68 14.34 17.46 14.85V14.85Z"/></svg>
                                <span>Booking via WA</span>
                            </a>
                        </div>
                    </div>

                    <div class="zenique-card rounded-lg flex flex-col card-hover-effect" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-decoration"></div>
                        <div class="p-6 flex-grow">
                            <h3 class="text-2xl font-serif text-green-zen">Hair Mask</h3>
                            <p class="text-gray-500 mt-2 text-sm">60 Min</p>
                        </div>
                        <hr class="card-divider mx-6">
                        <div class="p-6 pt-0 flex justify-between items-center">
                            <span class="text-2xl font-serif font-bold text-green-zen">175K</span>
                            <a 
                                href="https://wa.me/6285602591090?text={{ urlencode("Halo Zenique, saya tertarik untuk booking layanan 'Hair Mask' dengan harga 175K. Apakah tersedia?") }}" 
                                target="_blank" 
                                class="btn-primary text-sm font-semibold px-5 py-2 rounded-full flex items-center space-x-2"
                            >
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.31 20.6C8.75 21.42 10.36 21.88 12.04 21.88C17.5 21.88 21.95 17.43 21.95 11.97C21.95 9.32 20.93 6.83 19.11 4.99C17.27 3.17 14.78 2.13 12.04 2.13L12.04 2ZM17.46 14.85C17.21 15.45 16.25 15.93 15.74 16.05C15.23 16.17 14.56 16.25 12.4 15.43C9.64 14.38 7.72 11.95 7.58 11.78C7.43 11.61 6.45 10.35 6.45 9.08C6.45 7.82 7.15 7.15 7.41 6.89C7.67 6.63 8.01 6.54 8.31 6.54C8.95 6.55 9.12 6.57 9.33 7.04C9.57 7.57 10.12 8.94 10.19 9.08C10.26 9.22 10.32 9.42 10.21 9.61C9.72 10.25 9.58 10.4 9.46 10.53C9.21 10.82 9.34 11.08 9.47 11.34C10.02 12.23 10.79 12.94 11.83 13.89C12.68 14.2 13.01 14.33C13.65 14.24 14.19 13.56 14.42 13.27C14.93 12.91 15.23 13.01 15.54 13.11C16.81 13.75 17.05 14 17.29 14.25C17.5 14.4 17.55 14.53C17.68 14.34 17.46 14.85V14.85Z"/></svg>
                                <span>Booking via WA</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-16">
                <h2 class="text-4xl font-serif text-pink-zen mb-8 text-center md:text-left" data-aos="fade-right">
                    Nail Care
                </h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    
                    <div class="zenique-card rounded-lg flex flex-col card-hover-effect" data-aos="fade-up" data-aos-delay="0">
                        <div class="card-decoration"></div>
                        <div class="p-6 flex-grow">
                            <h3 class="text-2xl font-serif text-green-zen">Manicure</h3>
                            <p class="text-gray-500 mt-2 text-sm">45 Min</p>
                        </div>
                        <hr class="card-divider mx-6">
                        <div class="p-6 pt-0 flex justify-between items-center">
                            <span class="text-2xl font-serif font-bold text-green-zen">150K</span>
                            <a 
                                href="https://wa.me/6285602591090?text={{ urlencode("Halo Zenique, saya tertarik untuk booking layanan 'Manicure' dengan harga 150K. Apakah tersedia?") }}" 
                                target="_blank" 
                                class="btn-primary text-sm font-semibold px-5 py-2 rounded-full flex items-center space-x-2"
                            >
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.31 20.6C8.75 21.42 10.36 21.88 12.04 21.88C17.5 21.88 21.95 17.43 21.95 11.97C21.95 9.32 20.93 6.83 19.11 4.99C17.27 3.17 14.78 2.13 12.04 2.13L12.04 2ZM17.46 14.85C17.21 15.45 16.25 15.93 15.74 16.05C15.23 16.17 14.56 16.25 12.4 15.43C9.64 14.38 7.72 11.95 7.58 11.78C7.43 11.61 6.45 10.35 6.45 9.08C6.45 7.82 7.15 7.15 7.41 6.89C7.67 6.63 8.01 6.54 8.31 6.54C8.95 6.55 9.12 6.57 9.33 7.04C9.57 7.57 10.12 8.94 10.19 9.08C10.26 9.22 10.32 9.42 10.21 9.61C9.72 10.25 9.58 10.4 9.46 10.53C9.21 10.82 9.34 11.08 9.47 11.34C10.02 12.23 10.79 12.94 11.83 13.89C12.68 14.2 13.01 14.33C13.65 14.24 14.19 13.56 14.42 13.27C14.93 12.91 15.23 13.01 15.54 13.11C16.81 13.75 17.05 14 17.29 14.25C17.5 14.4 17.55 14.53C17.68 14.34 17.46 14.85V14.85Z"/></svg>
                                <span>Booking via WA</span>
                            </a>
                        </div>
                    </div>

                    <div class="zenique-card rounded-lg flex flex-col card-hover-effect" data-aos="fade-up" data-aos-delay="50">
                        <div class="card-decoration"></div>
                        <div class="p-6 flex-grow">
                            <h3 class="text-2xl font-serif text-green-zen">Pedicure</h3>
                            <p class="text-gray-500 mt-2 text-sm">60 Min</p>
                        </div>
                        <hr class="card-divider mx-6">
                        <div class="p-6 pt-0 flex justify-between items-center">
                            <span class="text-2xl font-serif font-bold text-green-zen">175K</span>
                            <a 
                                href="https://wa.me/6285602591090?text={{ urlencode("Halo Zenique, saya tertarik untuk booking layanan 'Pedicure' dengan harga 175K. Apakah tersedia?") }}" 
                                target="_blank" 
                                class="btn-primary text-sm font-semibold px-5 py-2 rounded-full flex items-center space-x-2"
                            >
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.31 20.6C8.75 21.42 10.36 21.88 12.04 21.88C17.5 21.88 21.95 17.43 21.95 11.97C21.95 9.32 20.93 6.83 19.11 4.99C17.27 3.17 14.78 2.13 12.04 2.13L12.04 2ZM17.46 14.85C17.21 15.45 16.25 15.93 15.74 16.05C15.23 16.17 14.56 16.25 12.4 15.43C9.64 14.38 7.72 11.95 7.58 11.78C7.43 11.61 6.45 10.35 6.45 9.08C6.45 7.82 7.15 7.15 7.41 6.89C7.67 6.63 8.01 6.54 8.31 6.54C8.95 6.55 9.12 6.57 9.33 7.04C9.57 7.57 10.12 8.94 10.19 9.08C10.26 9.22 10.32 9.42 10.21 9.61C9.72 10.25 9.58 10.4 9.46 10.53C9.21 10.82 9.34 11.08 9.47 11.34C10.02 12.23 10.79 12.94 11.83 13.89C12.68 14.2 13.01 14.33C13.65 14.24 14.19 13.56 14.42 13.27C14.93 12.91 15.23 13.01 15.54 13.11C16.81 13.75 17.05 14 17.29 14.25C17.5 14.4 17.55 14.53C17.68 14.34 17.46 14.85V14.85Z"/></svg>
                                <span>Booking via WA</span>
                            </a>
                        </div>
                    </div>

                    <div class="zenique-card rounded-lg flex flex-col card-hover-effect" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-decoration"></div>
                        <div class="p-6 flex-grow">
                            <h3 class="text-2xl font-serif text-green-zen">Nail Polish</h3>
                            <p class="text-gray-500 mt-2 text-sm">20 Min</p>
                        </div>
                        <hr class="card-divider mx-6">
                        <div class="p-6 pt-0 flex justify-between items-center">
                            <span class="text-2xl font-serif font-bold text-green-zen">50K</span>
                            <a 
                                href="https://wa.me/6285602591090?text={{ urlencode("Halo Zenique, saya tertarik untuk booking layanan 'Nail Polish' dengan harga 50K. Apakah tersedia?") }}" 
                                target="_blank" 
                                class="btn-primary text-sm font-semibold px-5 py-2 rounded-full flex items-center space-x-2"
                            >
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.31 20.6C8.75 21.42 10.36 21.88 12.04 21.88C17.5 21.88 21.95 17.43 21.95 11.97C21.95 9.32 20.93 6.83 19.11 4.99C17.27 3.17 14.78 2.13 12.04 2.13L12.04 2ZM17.46 14.85C17.21 15.45 16.25 15.93 15.74 16.05C15.23 16.17 14.56 16.25 12.4 15.43C9.64 14.38 7.72 11.95 7.58 11.78C7.43 11.61 6.45 10.35 6.45 9.08C6.45 7.82 7.15 7.15 7.41 6.89C7.67 6.63 8.01 6.54 8.31 6.54C8.95 6.55 9.12 6.57 9.33 7.04C9.57 7.57 10.12 8.94 10.19 9.08C10.26 9.22 10.32 9.42 10.21 9.61C9.72 10.25 9.58 10.4 9.46 10.53C9.21 10.82 9.34 11.08 9.47 11.34C10.02 12.23 10.79 12.94 11.83 13.89C12.68 14.2 13.01 14.33C13.65 14.24 14.19 13.56 14.42 13.27C14.93 12.91 15.23 13.01 15.54 13.11C16.81 13.75 17.05 14 17.29 14.25C17.5 14.4 17.55 14.53C17.68 14.34 17.46 14.85V14.85Z"/></svg>
                                <span>Booking via WA</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-16">
                <h2 class="text-4xl font-serif text-pink-zen mb-8 text-center md:text-left" data-aos="fade-right">
                    Waxing
                </h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    
                    <div class="zenique-card rounded-lg flex flex-col card-hover-effect" data-aos="fade-up" data-aos-delay="0">
                        <div class="card-decoration"></div>
                        <div class="p-6 flex-grow">
                            <h3 class="text-2xl font-serif text-green-zen">Full Back</h3>
                            <p class="text-gray-500 mt-2 text-sm">-</p>
                        </div>
                        <hr class="card-divider mx-6">
                        <div class="p-6 pt-0 flex justify-between items-center">
                            <span class="text-2xl font-serif font-bold text-green-zen">300K</span>
                            <a 
                                href="https://wa.me/6285602591090?text={{ urlencode("Halo Zenique, saya tertarik untuk booking layanan 'Full Back' dengan harga 300K. Apakah tersedia?") }}" 
                                target="_blank" 
                                class="btn-primary text-sm font-semibold px-5 py-2 rounded-full flex items-center space-x-2"
                            >
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.31 20.6C8.75 21.42 10.36 21.88 12.04 21.88C17.5 21.88 21.95 17.43 21.95 11.97C21.95 9.32 20.93 6.83 19.11 4.99C17.27 3.17 14.78 2.13 12.04 2.13L12.04 2ZM17.46 14.85C17.21 15.45 16.25 15.93 15.74 16.05C15.23 16.17 14.56 16.25 12.4 15.43C9.64 14.38 7.72 11.95 7.58 11.78C7.43 11.61 6.45 10.35 6.45 9.08C6.45 7.82 7.15 7.15 7.41 6.89C7.67 6.63 8.01 6.54 8.31 6.54C8.95 6.55 9.12 6.57 9.33 7.04C9.57 7.57 10.12 8.94 10.19 9.08C10.26 9.22 10.32 9.42 10.21 9.61C9.72 10.25 9.58 10.4 9.46 10.53C9.21 10.82 9.34 11.08 9.47 11.34C10.02 12.23 10.79 12.94 11.83 13.89C12.68 14.2 13.01 14.33C13.65 14.24 14.19 13.56 14.42 13.27C14.93 12.91 15.23 13.01 15.54 13.11C16.81 13.75 17.05 14 17.29 14.25C17.5 14.4 17.55 14.53C17.68 14.34 17.46 14.85V14.85Z"/></svg>
                                <span>Booking via WA</span>
                            </a>
                        </div>
                    </div>

                    <div class="zenique-card rounded-lg flex flex-col card-hover-effect" data-aos="fade-up" data-aos-delay="50">
                        <div class="card-decoration"></div>
                        <div class="p-6 flex-grow">
                            <h3 class="text-2xl font-serif text-green-zen">Hand</h3>
                            <p class="text-gray-500 mt-2 text-sm">-</p>
                        </div>
                        <hr class="card-divider mx-6">
                        <div class="p-6 pt-0 flex justify-between items-center">
                            <span class="text-2xl font-serif font-bold text-green-zen">200K</span>
                            <a 
                                href="https://wa.me/6285602591090?text={{ urlencode("Halo Zenique, saya tertarik untuk booking layanan 'Hand' dengan harga 200K. Apakah tersedia?") }}" 
                                target="_blank" 
                                class="btn-primary text-sm font-semibold px-5 py-2 rounded-full flex items-center space-x-2"
                            >
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.31 20.6C8.75 21.42 10.36 21.88 12.04 21.88C17.5 21.88 21.95 17.43 21.95 11.97C21.95 9.32 20.93 6.83 19.11 4.99C17.27 3.17 14.78 2.13 12.04 2.13L12.04 2ZM17.46 14.85C17.21 15.45 16.25 15.93 15.74 16.05C15.23 16.17 14.56 16.25 12.4 15.43C9.64 14.38 7.72 11.95 7.58 11.78C7.43 11.61 6.45 10.35 6.45 9.08C6.45 7.82 7.15 7.15 7.41 6.89C7.67 6.63 8.01 6.54 8.31 6.54C8.95 6.55 9.12 6.57 9.33 7.04C9.57 7.57 10.12 8.94 10.19 9.08C10.26 9.22 10.32 9.42 10.21 9.61C9.72 10.25 9.58 10.4 9.46 10.53C9.21 10.82 9.34 11.08 9.47 11.34C10.02 12.23 10.79 12.94 11.83 13.89C12.68 14.2 13.01 14.33C13.65 14.24 14.19 13.56 14.42 13.27C14.93 12.91 15.23 13.01 15.54 13.11C16.81 13.75 17.05 14 17.29 14.25C17.5 14.4 17.55 14.53C17.68 14.34 17.46 14.85V14.85Z"/></svg>
                                <span>Booking via WA</span>
                            </a>
                        </div>
                    </div>

                    <div class="zenique-card rounded-lg flex flex-col card-hover-effect" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-decoration"></div>
                        <div class="p-6 flex-grow">
                            <h3 class="text-2xl font-serif text-green-zen">Underarm</h3>
                            <p class="text-gray-500 mt-2 text-sm">-</p>
                        </div>
                        <hr class="card-divider mx-6">
                        <div class="p-6 pt-0 flex justify-between items-center">
                            <span class="text-2xl font-serif font-bold text-green-zen">100K</span>
                            <a 
                                href="https://wa.me/6285602591090?text={{ urlencode("Halo Zenique, saya tertarik untuk booking layanan 'Underarm' dengan harga 100K. Apakah tersedia?") }}" 
                                target="_blank" 
                                class="btn-primary text-sm font-semibold px-5 py-2 rounded-full flex items-center space-x-2"
                            >
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.31 20.6C8.75 21.42 10.36 21.88 12.04 21.88C17.5 21.88 21.95 17.43 21.95 11.97C21.95 9.32 20.93 6.83 19.11 4.99C17.27 3.17 14.78 2.13 12.04 2.13L12.04 2ZM17.46 14.85C17.21 15.45 16.25 15.93 15.74 16.05C15.23 16.17 14.56 16.25 12.4 15.43C9.64 14.38 7.72 11.95 7.58 11.78C7.43 11.61 6.45 10.35 6.45 9.08C6.45 7.82 7.15 7.15 7.41 6.89C7.67 6.63 8.01 6.54 8.31 6.54C8.95 6.55 9.12 6.57 9.33 7.04C9.57 7.57 10.12 8.94 10.19 9.08C10.26 9.22 10.32 9.42 10.21 9.61C9.72 10.25 9.58 10.4 9.46 10.53C9.21 10.82 9.34 11.08 9.47 11.34C10.02 12.23 10.79 12.94 11.83 13.89C12.68 14.2 13.01 14.33C13.65 14.24 14.19 13.56 14.42 13.27C14.93 12.91 15.23 13.01 15.54 13.11C16.81 13.75 17.05 14 17.29 14.25C17.5 14.4 17.55 14.53C17.68 14.34 17.46 14.85V14.85Z"/></svg>
                                <span>Booking via WA</span>
                            </a>
                        </div>
                    </div>

                    <div class="zenique-card rounded-lg flex flex-col card-hover-effect" data-aos="fade-up" data-aos-delay="150">
                        <div class="card-decoration"></div>
                        <div class="p-6 flex-grow">
                            <h3 class="text-2xl font-serif text-green-zen">Half Leg</h3>
                            <p class="text-gray-500 mt-2 text-sm">-</p>
                        </div>
                        <hr class="card-divider mx-6">
                        <div class="p-6 pt-0 flex justify-between items-center">
                            <span class="text-2xl font-serif font-bold text-green-zen">250K</span>
                            <a 
                                href="https://wa.me/6285602591090?text={{ urlencode("Halo Zenique, saya tertarik untuk booking layanan 'Half Leg' dengan harga 250K. Apakah tersedia?") }}" 
                                target="_blank" 
                                class="btn-primary text-sm font-semibold px-5 py-2 rounded-full flex items-center space-x-2"
                            >
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.31 20.6C8.75 21.42 10.36 21.88 12.04 21.88C17.5 21.88 21.95 17.43 21.95 11.97C21.95 9.32 20.93 6.83 19.11 4.99C17.27 3.17 14.78 2.13 12.04 2.13L12.04 2ZM17.46 14.85C17.21 15.45 16.25 15.93 15.74 16.05C15.23 16.17 14.56 16.25 12.4 15.43C9.64 14.38 7.72 11.95 7.58 11.78C7.43 11.61 6.45 10.35 6.45 9.08C6.45 7.82 7.15 7.15 7.41 6.89C7.67 6.63 8.01 6.54 8.31 6.54C8.95 6.55 9.12 6.57 9.33 7.04C9.57 7.57 10.12 8.94 10.19 9.08C10.26 9.22 10.32 9.42 10.21 9.61C9.72 10.25 9.58 10.4 9.46 10.53C9.21 10.82 9.34 11.08 9.47 11.34C10.02 12.23 10.79 12.94 11.83 13.89C12.68 14.2 13.01 14.33C13.65 14.24 14.19 13.56 14.42 13.27C14.93 12.91 15.23 13.01 15.54 13.11C16.81 13.75 17.05 14 17.29 14.25C17.5 14.4 17.55 14.53C17.68 14.34 17.46 14.85V14.85Z"/></svg>
                                <span>Booking via WA</span>
                            </a>
                        </div>
                    </div>

                    <div class="zenique-card rounded-lg flex flex-col card-hover-effect" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-decoration"></div>
                        <div class="p-6 flex-grow">
                            <h3 class="text-2xl font-serif text-green-zen">Full Leg</h3>
                            <p class="text-gray-500 mt-2 text-sm">-</p>
                        </div>
                        <hr class="card-divider mx-6">
                        <div class="p-6 pt-0 flex justify-between items-center">
                            <span class="text-2xl font-serif font-bold text-green-zen">300K</span>
                            <a 
                                href="https://wa.me/6285602591090?text={{ urlencode("Halo Zenique, saya tertarik untuk booking layanan 'Full Leg' dengan harga 300K. Apakah tersedia?") }}" 
                                target="_blank" 
                                class="btn-primary text-sm font-semibold px-5 py-2 rounded-full flex items-center space-x-2"
                            >
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.31 20.6C8.75 21.42 10.36 21.88 12.04 21.88C17.5 21.88 21.95 17.43 21.95 11.97C21.95 9.32 20.93 6.83 19.11 4.99C17.27 3.17 14.78 2.13 12.04 2.13L12.04 2ZM17.46 14.85C17.21 15.45 16.25 15.93 15.74 16.05C15.23 16.17 14.56 16.25 12.4 15.43C9.64 14.38 7.72 11.95 7.58 11.78C7.43 11.61 6.45 10.35 6.45 9.08C6.45 7.82 7.15 7.15 7.41 6.89C7.67 6.63 8.01 6.54 8.31 6.54C8.95 6.55 9.12 6.57 9.33 7.04C9.57 7.57 10.12 8.94 10.19 9.08C10.26 9.22 10.32 9.42 10.21 9.61C9.72 10.25 9.58 10.4 9.46 10.53C9.21 10.82 9.34 11.08 9.47 11.34C10.02 12.23 10.79 12.94 11.83 13.89C12.68 14.2 13.01 14.33C13.65 14.24 14.19 13.56 14.42 13.27C14.93 12.91 15.23 13.01 15.54 13.11C16.81 13.75 17.05 14 17.29 14.25C17.5 14.4 17.55 14.53C17.68 14.34 17.46 14.85V14.85Z"/></svg>
                                <span>Booking via WA</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-16">
                <h2 class="text-4xl font-serif text-pink-zen mb-8 text-center md:text-left" data-aos="fade-right">
                    Special Packages
                </h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    
                    <div class="zenique-card rounded-lg flex flex-col card-hover-effect" data-aos="fade-up" data-aos-delay="0">
                        <div class="card-decoration"></div>
                        <div class="p-6 flex-grow">
                            <h3 class="text-2xl font-serif text-green-zen">Package 1 (Massage + Scrub + Cream Bath)</h3>
                            <p class="text-gray-500 mt-2 text-sm">~2.5 Hours</p>
                        </div>
                        <hr class="card-divider mx-6">
                        <div class="p-6 pt-0 flex justify-between items-center">
                            <span class="text-2xl font-serif font-bold text-green-zen">540K</span>
                            <a 
                                href="https://wa.me/6285602591090?text={{ urlencode("Halo Zenique, saya tertarik untuk booking layanan 'Package 1' dengan harga 540K. Apakah tersedia?") }}" 
                                target="_blank" 
                                class="btn-primary text-sm font-semibold px-5 py-2 rounded-full flex items-center space-x-2"
                            >
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.31 20.6C8.75 21.42 10.36 21.88 12.04 21.88C17.5 21.88 21.95 17.43 21.95 11.97C21.95 9.32 20.93 6.83 19.11 4.99C17.27 3.17 14.78 2.13 12.04 2.13L12.04 2ZM17.46 14.85C17.21 15.45 16.25 15.93 15.74 16.05C15.23 16.17 14.56 16.25 12.4 15.43C9.64 14.38 7.72 11.95 7.58 11.78C7.43 11.61 6.45 10.35 6.45 9.08C6.45 7.82 7.15 7.15 7.41 6.89C7.67 6.63 8.01 6.54 8.31 6.54C8.95 6.55 9.12 6.57 9.33 7.04C9.57 7.57 10.12 8.94 10.19 9.08C10.26 9.22 10.32 9.42 10.21 9.61C9.72 10.25 9.58 10.4 9.46 10.53C9.21 10.82 9.34 11.08 9.47 11.34C10.02 12.23 10.79 12.94 11.83 13.89C12.68 14.2 13.01 14.33C13.65 14.24 14.19 13.56 14.42 13.27C14.93 12.91 15.23 13.01 15.54 13.11C16.81 13.75 17.05 14 17.29 14.25C17.5 14.4 17.55 14.53C17.68 14.34 17.46 14.85V14.85Z"/></svg>
                                <span>Booking via WA</span>
                            </a>
                        </div>
                    </div>

                    <div class="zenique-card rounded-lg flex flex-col card-hover-effect" data-aos="fade-up" data-aos-delay="50">
                        <div class="card-decoration"></div>
                        <div class="p-6 flex-grow">
                            <h3 class="text-2xl font-serif text-green-zen">Package 2 (Massage + Facial + Scrub + Cream Bath)</h3>
                            <p class="text-gray-500 mt-2 text-sm">~3.5 Hours</p>
                        </div>
                        <hr class="card-divider mx-6">
                        <div class="p-6 pt-0 flex justify-between items-center">
                            <span class="text-2xl font-serif font-bold text-green-zen">690K</span>
                            <a 
                                href="https://wa.me/6285602591090?text={{ urlencode("Halo Zenique, saya tertarik untuk booking layanan 'Package 2' dengan harga 690K. Apakah tersedia?") }}" 
                                target="_blank" 
                                class="btn-primary text-sm font-semibold px-5 py-2 rounded-full flex items-center space-x-2"
                            >
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.31 20.6C8.75 21.42 10.36 21.88 12.04 21.88C17.5 21.88 21.95 17.43 21.95 11.97C21.95 9.32 20.93 6.83 19.11 4.99C17.27 3.17 14.78 2.13 12.04 2.13L12.04 2ZM17.46 14.85C17.21 15.45 16.25 15.93 15.74 16.05C15.23 16.17 14.56 16.25 12.4 15.43C9.64 14.38 7.72 11.95 7.58 11.78C7.43 11.61 6.45 10.35 6.45 9.08C6.45 7.82 7.15 7.15 7.41 6.89C7.67 6.63 8.01 6.54 8.31 6.54C8.95 6.55 9.12 6.57 9.33 7.04C9.57 7.57 10.12 8.94 10.19 9.08C10.26 9.22 10.32 9.42 10.21 9.61C9.72 10.25 9.58 10.4 9.46 10.53C9.21 10.82 9.34 11.08 9.47 11.34C10.02 12.23 10.79 12.94 11.83 13.89C12.68 14.2 13.01 14.33C13.65 14.24 14.19 13.56 14.42 13.27C14.93 12.91 15.23 13.01 15.54 13.11C16.81 13.75 17.05 14 17.29 14.25C17.5 14.4 17.55 14.53C17.68 14.34 17.46 14.85V14.85Z"/></svg>
                                <span>Booking via WA</span>
                            </a>
                        </div>
                    </div>

                    <div class="zenique-card rounded-lg flex flex-col card-hover-effect" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-decoration"></div>
                        <div class="p-6 flex-grow">
                            <h3 class="text-2xl font-serif text-green-zen">Package 3 (Massage + Facial + Scrub + Mani-Pedi)</h3>
                            <p class="text-gray-500 mt-2 text-sm">~4 Hours</p>
                        </div>
                        <hr class="card-divider mx-6">
                        <div class="p-6 pt-0 flex justify-between items-center">
                            <span class="text-2xl font-serif font-bold text-green-zen">850K</span>
                            <a 
                                href="https://wa.me/6285602591090?text={{ urlencode("Halo Zenique, saya tertarik untuk booking layanan 'Package 3' dengan harga 850K. Apakah tersedia?") }}" 
                                target="_blank" 
                                class="btn-primary text-sm font-semibold px-5 py-2 rounded-full flex items-center space-x-2"
                            >
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.31 20.6C8.75 21.42 10.36 21.88 12.04 21.88C17.5 21.88 21.95 17.43 21.95 11.97C21.95 9.32 20.93 6.83 19.11 4.99C17.27 3.17 14.78 2.13 12.04 2.13L12.04 2ZM17.46 14.85C17.21 15.45 16.25 15.93 15.74 16.05C15.23 16.17 14.56 16.25 12.4 15.43C9.64 14.38 7.72 11.95 7.58 11.78C7.43 11.61 6.45 10.35 6.45 9.08C6.45 7.82 7.15 7.15 7.41 6.89C7.67 6.63 8.01 6.54 8.31 6.54C8.95 6.55 9.12 6.57 9.33 7.04C9.57 7.57 10.12 8.94 10.19 9.08C10.26 9.22 10.32 9.42 10.21 9.61C9.72 10.25 9.58 10.4 9.46 10.53C9.21 10.82 9.34 11.08 9.47 11.34C10.02 12.23 10.79 12.94 11.83 13.89C12.68 14.2 13.01 14.33C13.65 14.24 14.19 13.56 14.42 13.27C14.93 12.91 15.23 13.01 15.54 13.11C16.81 13.75 17.05 14 17.29 14.25C17.5 14.4 17.55 14.53C17.68 14.34 17.46 14.85V14.85Z"/></svg>
                                <span>Booking via WA</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection