<x-user.layouts :title="'Home'">
    <!-- Hero Section -->
    <div class="">

        <section class="bg-gradient-to-r from-primary to-primaryDark text-white py-16 md:py-24">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row items-center">
                    <!-- Hero Content -->
                    <div class="md:w-1/2 mb-10 md:mb-0">
                        <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-4">Bantu Wujudkan Harapan Bersama</h1>
                        <p class="text-xl mb-8">Platform penggalangan1111 dana terpercaya untuk membantu sesama dalam
                            berbagai
                            kebutuhan.</p>
                        <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                            <a href="#"
                                class="px-8 py-3 bg-white text-primary font-bold rounded-lg hover:bg-gray-100 text-center transition duration-300">Galang
                                Dana</a>
                            <a href="#"
                                class="px-8 py-3 bg-secondary text-white font-bold rounded-lg hover:bg-opacity-90 text-center transition duration-300">Donasi
                                Sekarang</a>
                        </div>
                    </div>

                    <!-- Hero Image -->
                    <div class="md:w-1/2 flex justify-center">
                        <div class="relative w-full max-w-md">
                            <div class="absolute -top-6 -left-6 w-32 h-32 bg-accent rounded-lg opacity-20"></div>
                            <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-secondary rounded-lg opacity-20"></div>
                            <div class="relative bg-white rounded-xl shadow-xl overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1579202673506-ca3ce28943ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                                    alt="Orang berdonasi" class="w-full h-auto">
                                <div class="p-4 bg-gray-50">
                                    <div class="flex justify-between items-center mb-2">
                                        <span class="text-sm text-gray-600">Terkumpul</span>
                                        <span class="text-sm font-bold text-primary">Rp 12.450.000</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                                        <div class="bg-primary h-2.5 rounded-full" style="width: 65%"></div>
                                    </div>
                                    <p class="mt-2 text-sm text-gray-600">65% dari target Rp 19.000.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Kategori Populer -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Kategori Populer</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Temukan berbagai kategori penggalangan dana yang paling
                        banyak didukung</p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <!-- Kategori 1 -->
                    @foreach ($kategori as $items)
                        <a href="#"
                            class="bg-gray-50 rounded-xl p-6 text-center hover:shadow-md transition duration-300">
                            <div
                                class="bg-primary bg-opacity-10 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                                <img src="{{ asset($items->icon) }}" class="h-8 w-8 object-cover" alt="icon">

                            </div>
                            <h3 class="font-semibold text-gray-800 mb-2">{{ $items->nama }}</h3>
                            <p class="text-sm text-gray-500">1,245 Campaign</p>
                        </a>
                    @endforeach

                    {{-- <!-- Kategori 2 -->
                    <a href="#"
                        class="bg-gray-50 rounded-xl p-6 text-center hover:shadow-md transition duration-300">
                        <div
                            class="bg-secondary bg-opacity-10 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-secondary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-2">Pendidikan</h3>
                        <p class="text-sm text-gray-500">892 Campaign</p>
                    </a>

                    <!-- Kategori 3 -->
                    <a href="#"
                        class="bg-gray-50 rounded-xl p-6 text-center hover:shadow-md transition duration-300">
                        <div
                            class="bg-accent bg-opacity-10 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-accent" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-2">Sosial</h3>
                        <p class="text-sm text-gray-500">1,532 Campaign</p>
                    </a>

                    <!-- Kategori 4 -->
                    <a href="#"
                        class="bg-gray-50 rounded-xl p-6 text-center hover:shadow-md transition duration-300">
                        <div
                            class="bg-primary bg-opacity-10 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-2">Bisnis</h3>
                        <p class="text-sm text-gray-500">756 Campaign</p>
                    </a> --}}
                </div>

                <div class="text-center mt-10">
                    <a href="#"
                        class="inline-flex items-center px-6 py-3 border border-primary text-primary font-medium rounded-lg hover:bg-primary hover:text-white transition duration-300">
                        Lihat Semua Kategori
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- Section Campaign Terpopuler -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row justify-between items-center mb-12">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-800 mb-2">Campaign Terpopuler</h2>
                        <p class="text-gray-600">Penggalangan dana yang sedang banyak didukung</p>
                    </div>
                    <a href="#"
                        class="mt-4 md:mt-0 inline-flex items-center text-primary font-medium hover:underline">
                        Lihat Semua Campaign
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Campaign 1 -->
                    @foreach ($campaign as $camp)
                    {{-- @dd($campaign) --}}
                        <div
                            class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                            <div class="relative">
                                <img src="{{asset($camp->foto)}}" loading="lazy"
                                    alt="Campaign 1" class="w-full h-48 object-cover">
                                <div
                                    class="absolute top-4 right-4 bg-white rounded-full px-3 py-1 text-sm font-semibold shadow-sm">
                                    <span class="text-primary">{{$camp->kategori->nama}}</span>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">{{$camp->judul}}</h3>
                                <p class="text-gray-600 mb-4">Salsa (8 tahun) membutuhkan biaya pengobatan kanker
                                    stadium
                                    3.
                                    Bantu kami mengumpulkan dana untuk kemoterapi dan perawatan.</p>

                                <div class="mb-4">
                                    <div class="flex justify-between items-center mb-2">
                                        <span class="text-sm text-gray-600">Terkumpul</span>
                                        <span class="text-sm font-bold text-primary">Rp 87.450.000</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                                        <div class="bg-primary h-2.5 rounded-full" style="width: 78%"></div>
                                    </div>
                                    <p class="mt-2 text-sm text-gray-600">78% dari target Rp 112.000.000</p>
                                </div>

                                <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 rounded-full overflow-hidden mr-3">
                                            <img src="https://randomuser.me/api/portraits/women/32.jpg"
                                                alt="Penggalang Dana" class="w-full h-full object-cover">
                                        </div>
                                        <span class="text-sm font-medium text-gray-700">{{$camp->user->name}}</span>
                                    </div>
                                    <a href="#"
                                        class="px-4 py-2 bg-primary text-white text-sm font-medium rounded-lg hover:bg-primaryDark transition duration-300">Donasi</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- <!-- Campaign 2 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                                alt="Campaign 2" class="w-full h-48 object-cover">
                            <div
                                class="absolute top-4 right-4 bg-white rounded-full px-3 py-1 text-sm font-semibold shadow-sm">
                                <span class="text-secondary">Pendidikan</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Beasiswa untuk Anak Yatim di Desa</h3>
                            <p class="text-gray-600 mb-4">Bantu 50 anak yatim di desa terpencil untuk melanjutkan
                                pendidikan ke jenjang SMP dan SMA.</p>

                            <div class="mb-4">
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-sm text-gray-600">Terkumpul</span>
                                    <span class="text-sm font-bold text-primary">Rp 45.200.000</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-primary h-2.5 rounded-full" style="width: 45%"></div>
                                </div>
                                <p class="mt-2 text-sm text-gray-600">45% dari target Rp 100.000.000</p>
                            </div>

                            <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                                <div class="flex items-center">
                                    <div class="w-10 h-10 rounded-full overflow-hidden mr-3">
                                        <img src="https://randomuser.me/api/portraits/men/45.jpg"
                                            alt="Penggalang Dana" class="w-full h-full object-cover">
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">Yayasan Peduli Pendidikan</span>
                                </div>
                                <a href="#"
                                    class="px-4 py-2 bg-primary text-white text-sm font-medium rounded-lg hover:bg-primaryDark transition duration-300">Donasi</a>
                            </div>
                        </div>
                    </div>

                    <!-- Campaign 3 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                                alt="Campaign 3" class="w-full h-48 object-cover">
                            <div
                                class="absolute top-4 right-4 bg-white rounded-full px-3 py-1 text-sm font-semibold shadow-sm">
                                <span class="text-accent">Sosial</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Bantu Korban Banjir Bandang</h3>
                            <p class="text-gray-600 mb-4">Banjir bandang melanda desa kami. Bantu sediakan makanan,
                                pakaian, dan tempat tinggal sementara.</p>

                            <div class="mb-4">
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-sm text-gray-600">Terkumpul</span>
                                    <span class="text-sm font-bold text-primary">Rp 156.780.000</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-primary h-2.5 rounded-full" style="width: 89%"></div>
                                </div>
                                <p class="mt-2 text-sm text-gray-600">89% dari target Rp 175.000.000</p>
                            </div>

                            <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                                <div class="flex items-center">
                                    <div class="w-10 h-10 rounded-full overflow-hidden mr-3">
                                        <img src="https://randomuser.me/api/portraits/women/68.jpg"
                                            alt="Penggalang Dana" class="w-full h-full object-cover">
                                    </div>
                                    <span class="text-sm font-medium text-gray-700">Relawan Peduli Bencana</span>
                                </div>
                                <a href="#"
                                    class="px-4 py-2 bg-primary text-white text-sm font-medium rounded-lg hover:bg-primaryDark transition duration-300">Donasi</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
                </div>
        </section>

        <!-- Section Cara Kerja -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Cara Kerja DanaKita</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Hanya butuh 3 langkah sederhana untuk memulai
                        penggalangan
                        dana atau memberikan donasi</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Langkah 1 -->
                    <div class="text-center p-6 rounded-xl hover:bg-gray-50 transition duration-300">
                        <div
                            class="bg-primary bg-opacity-10 w-20 h-20 mx-auto rounded-full flex items-center justify-center mb-6 relative">
                            <span
                                class="absolute -top-2 -right-2 bg-primary text-white w-8 h-8 rounded-full flex items-center justify-center font-bold">1</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Buat Campaign</h3>
                        <p class="text-gray-600">Isi formulir penggalangan dana dengan detail dan tujuan yang jelas.
                            Unggah
                            foto dan cerita yang menggugah.</p>
                    </div>

                    <!-- Langkah 2 -->
                    <div class="text-center p-6 rounded-xl hover:bg-gray-50 transition duration-300">
                        <div
                            class="bg-primary bg-opacity-10 w-20 h-20 mx-auto rounded-full flex items-center justify-center mb-6 relative">
                            <span
                                class="absolute -top-2 -right-2 bg-primary text-white w-8 h-8 rounded-full flex items-center justify-center font-bold">2</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Sebarkan</h3>
                        <p class="text-gray-600">Bagikan campaign Anda melalui media sosial, WhatsApp, atau email
                            kepada
                            keluarga, teman, dan jaringan Anda.</p>
                    </div>

                    <!-- Langkah 3 -->
                    <div class="text-center p-6 rounded-xl hover:bg-gray-50 transition duration-300">
                        <div
                            class="bg-primary bg-opacity-10 w-20 h-20 mx-auto rounded-full flex items-center justify-center mb-6 relative">
                            <span
                                class="absolute -top-2 -right-2 bg-primary text-white w-8 h-8 rounded-full flex items-center justify-center font-bold">3</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-primary" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Terkumpul</h3>
                        <p class="text-gray-600">Dana akan terkumpul dan bisa dicairkan sesuai kebutuhan. Kami
                            memastikan
                            transparansi dalam setiap proses.</p>
                    </div>
                </div>

                <div class="text-center mt-12">
                    <a href="#"
                        class="inline-flex items-center px-8 py-3 bg-primary text-white font-medium rounded-lg hover:bg-primaryDark transition duration-300">
                        Mulai Galang Dana Sekarang
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- Section Testimoni -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Kisah Sukses</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Mereka yang telah berhasil mewujudkan harapan melalui
                        DanaKita</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Testimoni 1 -->
                    <div class="bg-white p-8 rounded-xl shadow-md">
                        <div class="flex items-center mb-6">
                            <div class="w-16 h-16 rounded-full overflow-hidden mr-4">
                                <img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Testimoni 1"
                                    class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Ibu Siti</h4>
                                <p class="text-gray-600">Penerima Donasi</p>
                            </div>
                        </div>
                        <p class="text-gray-700 mb-6">"Terima kasih DanaKita dan semua donatur yang telah membantu
                            pengobatan anak saya. Dana yang terkumpul melebihi target dan sangat membantu biaya
                            kemoterapi.
                            Semoga Tuhan membalas kebaikan kalian semua."</p>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                    </div>

                    <!-- Testimoni 2 -->
                    <div class="bg-white p-8 rounded-xl shadow-md">
                        <div class="flex items-center mb-6">
                            <div class="w-16 h-16 rounded-full overflow-hidden mr-4">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Testimoni 2"
                                    class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Pak Andi</h4>
                                <p class="text-gray-600">Penggalang Dana</p>
                            </div>
                        </div>
                        <p class="text-gray-700 mb-6">"Melalui DanaKita, saya bisa mengumpulkan dana untuk renovasi
                            sekolah
                            kami yang rusak. Respons dari masyarakat sangat luar biasa. Platform ini sangat mudah
                            digunakan
                            dan tim support sangat membantu."</p>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-16 bg-primary text-white">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-3xl font-bold mb-6">Siap Membantu Sesama?</h2>
                <p class="text-xl mb-8 max-w-2xl mx-auto">Bergabunglah dengan ribuan orang baik yang telah memberikan
                    dukungan melalui platform kami</p>
                <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="#"
                        class="px-8 py-3 bg-white text-primary font-bold rounded-lg hover:bg-gray-100 text-center transition duration-300">Mulai
                        Donasi</a>
                    <a href="#"
                        class="px-8 py-3 border-2 border-white text-white font-bold rounded-lg hover:bg-white hover:text-primary text-center transition duration-300">Galang
                        Dana</a>
                </div>
            </div>
        </section>
    </div>
</x-user.layouts>
