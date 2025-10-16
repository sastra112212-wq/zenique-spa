@extends('layout.app')
@section('title', 'Kontak Kami - Zenique Salon & Spa')
@section('content')

    <section class="h-[40vh] bg-cover bg-center relative" style="background-image: url('{{ asset('images/hero-background.jpg') }}');">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative container mx-auto px-6 h-full flex flex-col justify-center items-center text-center text-white">
            <h1 class="text-5xl md:text-6xl font-serif font-bold" data-aos="fade-up">Hubungi Kami</h1>
            <p class="text-lg mt-4 max-w-2xl" data-aos="fade-up" data-aos-delay="100">Kami siap menyambut Anda. Pesan janji temu Anda hari ini.</p>
        </div>
    </section>
    
    <div class="py-24">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="zenique-card p-10 rounded-lg" data-aos="fade-right">
                    <div class="card-decoration"></div>
                    <h2 class="text-3xl font-serif text-green-zen mb-6">Detail Kontak</h2>
                    <div class="flex items-start mb-8">
                        <div class="text-pink-zen mr-4 mt-1 flex-shrink-0"><svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg></div>
                        <div>
                            <h3 class="text-xl font-semibold text-green-zen">Alamat</h3>
                            <p class="text-gray-600">Jl. Raya Tulamben, Kec. Kubu, Kab. Karangasem, Bali</p>
                        </div>
                    </div>
                    <div class="flex items-start mb-8">
                        <div class="text-pink-zen mr-4 mt-1 flex-shrink-0"><svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg></div>
                        <div>
                            <h3 class="text-xl font-semibold text-green-zen">WhatsApp</h3>
                            <a href="https://wa.me/6285602591090" target="_blank" class="text-gray-600 hover:text-pink-zen transition-colors">0856-0259-1090</a>
                        </div>
                    </div>
                    <div class="flex items-start mb-8">
                        <div class="text-pink-zen mr-4 mt-1 flex-shrink-0"><svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg></div>
                        <div>
                            <h3 class="text-xl font-semibold text-green-zen">Email</h3>
                            <a href="mailto:zeniquesalonspa@gmail.com" class="text-gray-600 hover:text-pink-zen transition-colors">zeniquesalonspa@gmail.com</a>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="text-pink-zen mr-4 mt-1 flex-shrink-0"><svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>
                        <div>
                            <h3 class="text-xl font-semibold text-green-zen">Jam Buka</h3>
                            <p class="text-gray-600">Setiap Hari: 09:00 - 19:00 WITA</p>
                        </div>
                    </div>
                </div>

                <div class="w-full h-96 md:h-[500px] rounded-lg shadow-lg overflow-hidden" data-aos="fade-left">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.241661289975!2d115.5936629!3d-8.278730099999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd1ff0042723ecb%3A0xe645c2d28fc5e71c!2sZenique%20Salon%20%26%20Spa!5e0!3m2!1sen!2sid!4v1760565948881!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection