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
            @foreach ($services as $serviceCategory)
            <div class="mb-16">
                <h2 class="text-4xl font-serif text-pink-zen mb-8 text-center md:text-left" data-aos="fade-right">
                    {{ $serviceCategory['category'] }}
                </h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($serviceCategory['items'] as $key => $item)
                    <div class="zenique-card rounded-lg flex flex-col card-hover-effect" data-aos="fade-up" data-aos-delay="{{ $key * 50 }}">
                        <div class="card-decoration"></div>
                        <div class="p-6 flex-grow">
                            <h3 class="text-2xl font-serif text-green-zen">{{ $item['name'] }}</h3>
                            <p class="text-gray-500 mt-2 text-sm">{{ $item['duration'] }}</p>
                        </div>
                        <hr class="card-divider mx-6">
                        <div class="p-6 pt-0 flex justify-between items-center">
                            <span class="text-2xl font-serif font-bold text-green-zen">{{ $item['price'] }}</span>
                            <a 
                                href="https://wa.me/6285602591090?text={{ urlencode("Halo Zenique, saya tertarik untuk booking layanan '" . $item['name'] . "' dengan harga " . $item['price'] . ". Apakah tersedia?") }}" 
                                target="_blank" 
                                class="btn-primary text-sm font-semibold px-5 py-2 rounded-full flex items-center space-x-2"
                            >
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.31 20.6C8.75 21.42 10.36 21.88 12.04 21.88C17.5 21.88 21.95 17.43 21.95 11.97C21.95 9.32 20.93 6.83 19.11 4.99C17.27 3.17 14.78 2.13 12.04 2.13L12.04 2ZM17.46 14.85C17.21 15.45 16.25 15.93 15.74 16.05C15.23 16.17 14.56 16.25 12.4 15.43C9.64 14.38 7.72 11.95 7.58 11.78C7.43 11.61 6.45 10.35 6.45 9.08C6.45 7.82 7.15 7.15 7.41 6.89C7.67 6.63 8.01 6.54 8.31 6.54C8.95 6.55 9.12 6.57 9.33 7.04C9.57 7.57 10.12 8.94 10.19 9.08C10.26 9.22 10.32 9.42 10.21 9.61C9.72 10.25 9.58 10.4 9.46 10.53C9.21 10.82 9.34 11.08 9.47 11.34C10.02 12.23 10.79 12.94 11.83 13.89C12.68 14.2 13.01 14.33C13.65 14.24 14.19 13.56 14.42 13.27C14.93 12.91 15.23 13.01 15.54 13.11C16.81 13.75 17.05 14 17.29 14.25C17.5 14.4 17.55 14.53C17.68 14.34 17.46 14.85V14.85Z"/></svg>
                                <span>Booking via WA</span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection