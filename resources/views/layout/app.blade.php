<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Zenique Salon & Spa')</title>
    
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
    @vite('resources/css/app.css')

    <style>
        :root { --bg-main: #fff9f9; --accent-pink: #fe6da7; --accent-green: #588263; --text-dark: #3D3D3D; }
        body { background-color: var(--bg-main); cursor: none; }
        .btn-primary { background-color: var(--accent-pink); color: white; transition: all 0.3s ease; }
        .btn-primary:hover { background-color: #e46196; box-shadow: 0 10px 25px -5px rgba(254, 109, 167, 0.4); transform: translateY(-2px); }
        .text-pink-zen { color: var(--accent-pink); }
        .text-green-zen { color: var(--accent-green); }
        .card-hover-effect { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .card-hover-effect:hover { transform: translateY(-8px); box-shadow: 0 20px 35px -10px rgba(0, 0, 0, 0.08); }
        .zenique-card { background-color: rgba(255, 255, 255, 0.6); backdrop-filter: blur(10px); border: 1px solid rgba(88, 130, 99, 0.1); position: relative; overflow: hidden; }
        .card-decoration { content: ''; position: absolute; top: -20px; right: -20px; width: 100px; height: 100px; background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M50 100C50 100 85 75 95 50C105 25 85 0 85 0C85 0 65 20 50 40C35 20 15 0 15 0C15 0 -5 25 5 50C15 75 50 100 50 100Z' fill='%23588263'/%3E%3C/svg%3E"); background-repeat: no-repeat; opacity: 0.05; transform: rotate(15deg); }
        .card-divider { border-color: rgba(88, 130, 99, 0.2); margin-top: 1rem; margin-bottom: 1rem; }
        #preloader { position: fixed; inset: 0; z-index: 9999; background-color: var(--bg-main); display: flex; align-items: center; justify-content: center; transition: opacity 0.75s ease, visibility 0.75s ease; }
        #preloader.hidden { opacity: 0; visibility: hidden; }
        #preloader img { animation: pulse 1.5s ease-in-out infinite; }
        @keyframes pulse { 0%, 100% { transform: scale(1); } 50% { transform: scale(1.05); } }
        #to-top-button { position: fixed; bottom: 2rem; right: 2rem; width: 3rem; height: 3rem; background-color: var(--accent-pink); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 10px rgba(0,0,0,0.1); opacity: 0; transform: scale(0); transition: opacity 0.3s ease, transform 0.3s ease; z-index: 1000; }
        #to-top-button.visible { opacity: 1; transform: scale(1); }
        #to-top-button:hover { background-color: #e46196; }
        header { transition: padding 0.3s ease, background-color 0.3s ease; }
        header.header-scrolled { padding-top: 0.5rem; padding-bottom: 0.5rem; background-color: rgba(255, 249, 249, 0.85); }
        header.header-scrolled nav a img { height: 3.5rem; }
        header nav a img { transition: height 0.3s ease; }
        .cursor-dot, .cursor-circle { pointer-events: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); border-radius: 50%; z-index: 9990; }
        .cursor-dot { width: 8px; height: 8px; background-color: var(--accent-pink); }
        .cursor-circle { width: 40px; height: 40px; border: 2px solid var(--accent-pink); transition: transform 0.2s ease-out, width 0.3s ease, height 0.3s ease, border-width 0.3s ease; }
        .cursor-circle.hovered { transform: scale(1.5); border-width: 1px; }
        .reveal-text span { display: inline-block; transform: translateY(100%); opacity: 0; transition: transform 0.6s cubic-bezier(0.2, 1, 0.3, 1), opacity 0.6s cubic-bezier(0.2, 1, 0.3, 1); }
        .reveal-text.revealed span { transform: translateY(0); opacity: 1; }
    </style>
</head>
<body class="antialiased font-sans text-dark">

    <div class="cursor-dot"></div>
    <div class="cursor-circle"></div>
    <div id="preloader"><img src="{{ asset('logo/logo-color.png') }}" alt="Zenique Logo" class="h-24"></div>

    <header class="bg-white/70 backdrop-blur-lg sticky top-0 z-50 py-4">
        <nav class="container mx-auto px-6 flex justify-between items-center"><a href="{{ route('home') }}"><img src="{{ asset('logo/logo-color.png') }}" alt="Zenique Logo" class="h-16"></a><div class="hidden md:flex items-center space-x-8 text-lg"><a href="{{ route('home') }}" class="hover:text-pink-zen">Beranda</a><a href="{{ route('services') }}" class="hover:text-pink-zen">Layanan</a><a href="{{ route('gallery') }}" class="hover:text-pink-zen">Galeri</a><a href="{{ route('contact') }}" class="hover:text-pink-zen">Kontak</a></div><a href="https://wa.me/6285602591090?text=Halo%20Zenique%2C%20saya%20ingin%20membuat%20janji%20temu." target="_blank" class="btn-primary hidden md:block px-6 py-3 font-semibold">Booking Janji Temu</a><div class="md:hidden"><button id="menu-btn" class="focus:outline-none"><svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg></button></div></nav>
        <div id="mobile-menu" class="hidden md:hidden bg-white"><a href="{{ route('home') }}" class="block py-3 px-6 text-base hover:bg-cream">Beranda</a><a href="{{ route('services') }}" class="block py-3 px-6 text-base hover:bg-cream">Layanan</a><a href="{{ route('gallery') }}" class="block py-3 px-6 text-base hover:bg-cream">Galeri</a><a href="{{ route('contact') }}" class="block py-3 px-6 text-base hover:bg-cream">Kontak</a><div class="p-4"><a href="https://wa.me/6285602591090?text=Halo%20Zenique%2C%20saya%20ingin%20membuat%20janji%20temu." target="_blank" class="btn-primary w-full text-center block py-3">Booking Janji Temu</a></div></div>
    </header>

    <main>@yield('content')</main>

    <footer class="bg-green-zen text-white">
        <div class="container mx-auto px-6 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                <div><a href="{{ route('home') }}"><img src="{{ asset('logo/logo-white.png') }}" alt="Zenique Logo Putih" class="h-20 mb-4"></a><p class="text-gray-200 leading-relaxed">Dengan layanan spa dan pijat kami, Anda akan dibawa ke tempat yang tenang di mana tangan para ahli kami akan merevitalisasi tubuh dan menenangkan jiwa Anda.</p></div>
                <div><h4 class="font-serif text-2xl font-semibold mb-4">Tautan Cepat</h4><ul class="space-y-3"><li><a href="{{ route('home') }}" class="flex items-center hover:translate-x-1 transition-transform"><span class="mr-2">&rsaquo;</span> Home</a></li><li><a href="{{ route('services') }}" class="flex items-center hover:translate-x-1 transition-transform"><span class="mr-2">&rsaquo;</span> Layanan</a></li><li><a href="{{ route('gallery') }}" class="flex items-center hover:translate-x-1 transition-transform"><span class="mr-2">&rsaquo;</span> Galeri</a></li><li><a href="{{ route('contact') }}" class="flex items-center hover:translate-x-1 transition-transform"><span class="mr-2">&rsaquo;</span> Kontak</a></li></ul></div>
                <div><h4 class="font-serif text-2xl font-semibold mb-4">Informasi Lain</h4><div class="flex items-start space-x-3 mb-4"><svg class="w-5 h-5 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg><span>Buka Setiap Hari: 09:00 - 19:00 WITA</span></div><div class="flex items-start space-x-3 mb-4"><svg class="w-5 h-5 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg><span>Jl. Raya Tulamben, Kubu, Karangasem, Bali</span></div><div class="flex items-start space-x-3"><svg class="w-5 h-5 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg><a href="mailto:zeniquesalonspa@gmail.com" class="hover:text-gray-300">zeniquesalonspa@gmail.com</a></div></div>
                <div><h4 class="font-serif text-2xl font-semibold mb-4">Ikuti Kami</h4><div class="flex space-x-3"><a href="https://wa.me/6285602591090" target="_blank" class="w-10 h-10 bg-white/10 rounded-md flex items-center justify-center hover:bg-white/20 transition-colors"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.31 20.6C8.75 21.42 10.36 21.88 12.04 21.88C17.5 21.88 21.95 17.43 21.95 11.97C21.95 9.32 20.93 6.83 19.11 4.99C17.27 3.17 14.78 2.13 12.04 2.13L12.04 2ZM17.46 14.85C17.21 15.45 16.25 15.93 15.74 16.05C15.23 16.17 14.56 16.25 12.4 15.43C9.64 14.38 7.72 11.95 7.58 11.78C7.43 11.61 6.45 10.35 6.45 9.08C6.45 7.82 7.15 7.15 7.41 6.89C7.67 6.63 8.01 6.54 8.31 6.54C8.95 6.55 9.12 6.57 9.33 7.04C9.57 7.57 10.12 8.94 10.19 9.08C10.26 9.22 10.32 9.42 10.21 9.61C9.72 10.25 9.58 10.4 9.46 10.53C9.21 10.82 9.34 11.08 9.47 11.34C10.02 12.23 10.79 12.94 11.83 13.89C12.68 14.2 13.01 14.33C13.65 14.24 14.19 13.56 14.42 13.27C14.93 12.91 15.23 13.01 15.54 13.11C16.81 13.75 17.05 14 17.29 14.25C17.5 14.4 17.55 14.53C17.68 14.34 17.46 14.85V14.85Z"/></svg></a><a href="#" target="_blank" class="w-10 h-10 bg-white/10 rounded-md flex items-center justify-center hover:bg-white/20 transition-colors"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.024.06 1.378.06 3.808s-.012 2.784-.06 3.808c-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.024.048-1.378.06-3.808.06s-2.784-.012-3.808-.06c-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.048-1.024-.06-1.378-.06-3.808s.012-2.784.06-3.808c.049 1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 016.08 2.525c.636-.247 1.363-.416 2.427-.465C9.53 2.013 9.884 2 12.315 2zm0 1.62c-2.403 0-2.73.01-3.685.053-1.033.048-1.597.2-1.996.368-.503.214-.85.485-1.22.854-.37.37-.64.717-.854 1.22-.168.399-.32.963-.368 1.996-.043.955-.053 1.282-.053 3.685s.01 2.73.053 3.685c.048 1.033.2 1.597.368 1.996.214.503.485.85.854 1.22.37.37.717.64 1.22.854.399.168.963.32 1.996.368.955.043 1.282.053 3.685.053s2.73-.01 3.685-.053c1.033-.048 1.597-.2 1.996-.368.503-.214.85-.485 1.22-.854.37.37.64-.717.854-1.22.168-.399.32-.963-.368-1.996.043-.955.053-1.282.053-3.685s-.01-2.73-.053-3.685c-.048-1.033-.2-1.597-.368-1.996-.214-.503-.485-.85-.854-1.22-.37-.37-.717-.64-1.22-.854-.399-.168-.963-.32-1.996-.368C15.045 3.63 14.718 3.62 12.315 3.62zM12 6.88c-2.827 0-5.12 2.293-5.12 5.12s2.293 5.12 5.12 5.12 5.12-2.293 5.12-5.12-2.293-5.12-5.12-5.12zm0 8.62c-1.928 0-3.5-1.572-3.5-3.5s1.572-3.5 3.5-3.5 3.5 1.572 3.5 3.5-1.572 3.5-3.5 3.5zM16.82 6.24c-.62 0-1.12.5-1.12 1.12s.5 1.12 1.12 1.12 1.12-.5 1.12-1.12-.5-1.12-1.12-1.12z" clip-rule="evenodd"></path></svg></a><a href="#" target="_blank" class="w-10 h-10 bg-white/10 rounded-md flex items-center justify-center hover:bg-white/20 transition-colors"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path></svg></a></div></div></div></div>
        <div class="border-t border-white/20"><div class="container mx-auto px-6 py-6 text-center text-gray-300"><p>Copyright &copy; {{ date('Y') }} By Zenique Salon & Spa. All Rights Reserved.</p></div></div>
    </footer>
    
    <a href="#" id="to-top-button" aria-label="Back to top"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg></a>
    
    <a href="https://wa.me/6285602591090?text=Halo%20Zenique%2C%20saya%20ingin%20membuat%20janji%20temu." target="_blank" class="md:hidden fixed bottom-4 left-1/2 -translate-x-1/2 z-50 btn-primary shadow-lg flex items-center space-x-2 px-6 py-3 font-semibold"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.31 20.6C8.75 21.42 10.36 21.88 12.04 21.88C17.5 21.88 21.95 17.43 21.95 11.97C21.95 9.32 20.93 6.83 19.11 4.99C17.27 3.17 14.78 2.13 12.04 2.13L12.04 2ZM17.46 14.85C17.21 15.45 16.25 15.93 15.74 16.05C15.23 16.17 14.56 16.25 12.4 15.43C9.64 14.38 7.72 11.95 7.58 11.78C7.43 11.61 6.45 10.35 6.45 9.08C6.45 7.82 7.15 7.15 7.41 6.89C7.67 6.63 8.01 6.54 8.31 6.54C8.95 6.55 9.12 6.57 9.33 7.04C9.57 7.57 10.12 8.94 10.19 9.08C10.26 9.22 10.32 9.42 10.21 9.61C9.72 10.25 9.58 10.4 9.46 10.53C9.21 10.82 9.34 11.08 9.47 11.34C10.02 12.23 10.79 12.94 11.83 13.89C12.68 14.2 13.01 14.33C13.65 14.24 14.19 13.56 14.42 13.27C14.93 12.91 15.23 13.01 15.54 13.11C16.81 13.75 17.05 14 17.29 14.25C17.5 14.4 17.55 14.53C17.68 14.34 17.46 14.85V14.85Z"/></svg><span>Booking Janji Temu</span></a>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/countup.js@2.0.7/dist/countUp.umd.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            try {
                const preloader = document.getElementById('preloader');
                if (preloader) { window.addEventListener('load', () => { preloader.classList.add('hidden'); }); }
                const header = document.querySelector('header');
                const toTopButton = document.getElementById('to-top-button');
                if(header && toTopButton) { window.addEventListener('scroll', () => { window.scrollY > 50 ? header.classList.add('header-scrolled') : header.classList.remove('header-scrolled'); window.scrollY > 300 ? toTopButton.classList.add('visible') : toTopButton.classList.remove('visible'); }); }
                const menuBtn = document.getElementById('menu-btn');
                const mobileMenu = document.getElementById('mobile-menu');
                if (menuBtn && mobileMenu) { menuBtn.addEventListener('click', () => { mobileMenu.classList.toggle('hidden'); }); }
                AOS.init({ duration: 800, once: true, offset: 50 });
                Fancybox.bind("[data-fancybox]", { Thumbs: false, Toolbar: { display: { left: ["close"], middle: [], right: [] } } });
                const counters = document.querySelectorAll('.counter');
                if (counters.length > 0) { const counterObserver = new IntersectionObserver((entries, observer) => { entries.forEach(entry => { if (entry.isIntersecting) { const el = entry.target; const endVal = parseFloat(el.getAttribute('data-count')); const countUp = new countUp.CountUp(el, endVal, { duration: 2.5, separator: '.' }); if (!countUp.error) { countUp.start(); } observer.unobserve(el); } }); }, { threshold: 0.5 }); counters.forEach(counter => counterObserver.observe(counter)); }
                const cursorDot = document.querySelector('.cursor-dot');
                const cursorCircle = document.querySelector('.cursor-circle');
                if (cursorDot && cursorCircle) { window.addEventListener('mousemove', e => { cursorDot.style.left = e.clientX + 'px'; cursorDot.style.top = e.clientY + 'px'; cursorCircle.style.left = e.clientX + 'px'; cursorCircle.style.top = e.clientY + 'px'; }); document.querySelectorAll('a, button, [data-fancybox], summary').forEach(el => { el.addEventListener('mouseenter', () => cursorCircle.classList.add('hovered')); el.addEventListener('mouseleave', () => cursorCircle.classList.remove('hovered')); }); }
                const revealTexts = document.querySelectorAll('.reveal-text');
                if (revealTexts.length > 0) { const revealObserver = new IntersectionObserver((entries, observer) => { entries.forEach(entry => { if (entry.isIntersecting) { const el = entry.target; if (!el.classList.contains('revealed')) { el.innerHTML = el.innerText.split(' ').map(word => `<span>${word}</span>`).join(' '); el.querySelectorAll('span').forEach((span, i) => { span.style.transitionDelay = `${i * 70}ms`; }); el.classList.add('revealed'); } observer.unobserve(el); } }); }, { threshold: 0.5 }); revealTexts.forEach(text => revealObserver.observe(text)); }
            } catch (e) {
                console.error("Terjadi error saat menjalankan script utama: ", e);
                const preloader = document.getElementById('preloader');
                if (preloader) preloader.classList.add('hidden');
            }
        });
    </script>
</body>
</html>