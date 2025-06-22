    <x-user.layouts :title="'Donasi'">
        <div class="container mx-auto px-4 py-8">
            <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Kolom Kiri - Informasi Campaign -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <!-- Gambar Campaign -->
                        <div class="h-64 bg-gray-200 overflow-hidden">
                            <img src="https://source.unsplash.com/random/800x450/?charity" alt="Gambar Campaign"
                                class="w-full h-full object-cover">
                        </div>

                        <!-- Informasi Campaign -->
                        <div class="p-6">
                            <h1 class="text-2xl font-bold text-gray-800 mb-2">Bantu Adik Melawan Kanker Stadium 4</h1>
                            <p class="text-gray-600 mb-4">Penggalangan dana untuk biaya pengobatan dan operasi Adik Siti
                                yang menderita kanker stadium 4.</p>

                            <!-- Progress Bar -->
                            <div class="mb-4">
                                <div class="flex justify-between text-sm text-gray-600 mb-1">
                                    <span>Terkumpul: Rp 128.450.000</span>
                                    <span>Target: Rp 200.000.000</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-3">
                                    <div class="bg-primary h-3 rounded-full" style="width: 64%"></div>
                                </div>
                                <div class="flex justify-between text-sm text-gray-500 mt-1">
                                    <span>64% tercapai</span>
                                    <span>25 hari lagi</span>
                                </div>
                            </div>

                            <!-- Deskripsi Singkat -->
                            <div class="border-t border-gray-200 pt-4">
                                <h3 class="font-semibold text-gray-800 mb-2">Deskripsi Singkat</h3>
                                <p class="text-gray-600">Adik Siti (12 tahun) didiagnosa kanker stadium 4 dan membutuhkan
                                    biaya pengobatan sebesar Rp 200 juta. Keluarga tidak mampu menanggung biaya pengobatan
                                    yang besar ini. Bantu kami untuk memberikan kesempatan hidup bagi Adik Siti.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Cerita Lengkap -->
                    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
                        <h2 class="text-xl font-bold text-gray-800 mb-4">Cerita Lengkap</h2>
                        <div class="prose max-w-none text-gray-600">
                            <p>Adik Siti, seorang anak berusia 12 tahun asal Bogor, didiagnosa menderita kanker stadium 4
                                pada bulan Januari 2023. Dokter menyatakan bahwa Adik Siti masih memiliki harapan sembuh
                                jika mendapatkan pengobatan yang tepat dan intensif.</p>
                            <p class="mt-4">Biaya pengobatan yang dibutuhkan mencapai Rp 200 juta untuk kemoterapi,
                                operasi, dan perawatan intensif selama 6 bulan ke depan. Keluarga Adik Siti yang bekerja
                                sebagai buruh harian tidak mampu menanggung biaya sebesar ini.</p>
                            <p class="mt-4">Kami memohon bantuan dari para dermawan untuk membantu meringankan beban
                                keluarga Adik Siti dan memberikan kesempatan hidup yang lebih baik untuknya.</p>
                        </div>
                    </div>
                </div>

                <!-- Kolom Kanan - Form Donasi -->
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-lg shadow-md p-6 sticky top-4">
                        <h2 class="text-xl font-bold text-gray-800 mb-6">Bantu Campaign Ini</h2>

                        <!-- Form Donasi -->
                        <form id="donationForm" >

                            <!-- Tambahkan di dalam form -->
                            {{-- <input type="hidden" name="campaign_id" id="campaignId" value="{{ $campaign->id }}"> --}}

                            <!-- Jumlah Donasi -->
                            <div class="mb-6">
                                <label class="block text-gray-700 font-medium mb-2">Jumlah Donasi (Rp)*</label>
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <button type="button"
                                        class="donation-amount-btn py-2 px-3  text-black border border-gray-300 rounded-lg hover:border-primary hover:bg-primary hover:bg-opacity-10 transition"
                                        data-amount="50000">50rb</button>
                                    <button type="button"
                                        class="donation-amount-btn py-2 px-3 text-black border border-gray-300 rounded-lg hover:border-primary hover:bg-primary hover:bg-opacity-10 transition"
                                        data-amount="100000">100rb</button>
                                    <button type="button"
                                        class="donation-amount-btn py-2 px-3 text-black border border-gray-300 rounded-lg hover:border-primary hover:bg-primary hover:bg-opacity-10 transition"
                                        data-amount="250000">250rb</button>
                                    <button type="button"
                                        class="donation-amount-btn py-2 px-3 text-black border border-gray-300 rounded-lg hover:border-primary hover:bg-primary hover:bg-opacity-10 transition"
                                        data-amount="500000">500rb</button>
                                    <button type="button"
                                        class="donation-amount-btn py-2 px-3 text-black border border-gray-300 rounded-lg hover:border-primary hover:bg-primary hover:bg-opacity-10 transition"
                                        data-amount="1000000">1jt</button>
                                    <button type="button"
                                        class="donation-amount-btn py-2 px-3 text-black border border-gray-300 rounded-lg hover:border-primary hover:bg-primary hover:bg-opacity-10 transition"
                                        data-amount="custom">Lainnya</button>
                                </div>
                                <input type="number" id="donationAmount" name="amount"
                                    class=" text-black w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                    placeholder="Masukkan jumlah donasi" required>
                            </div>

                            <!-- Metode Pembayaran -->
                            <div class="mb-6">
                                <label class="block text-gray-700 font-medium mb-2">Metode Pembayaran*</label>
                                <div class="space-y-2">
                                    <label
                                        class="flex items-center space-x-3 p-3 border border-gray-300 rounded-lg cursor-pointer hover:border-primary">
                                        <input type="radio" name="paymentMethod" value="gopay"
                                            class="text-primary focus:ring-primary" checked>
                                        <img src="https://midtrans.com/img/logo/gopay.png" alt="Gopay" class="h-6">
                                        <span class="text-gray-700">Gopay</span>
                                    </label>
                                    <label
                                        class="flex items-center space-x-3 p-3 border border-gray-300 rounded-lg cursor-pointer hover:border-primary">
                                        <input type="radio" name="paymentMethod" value="shopeepay"
                                            class="text-primary focus:ring-primary">
                                        <img src="https://midtrans.com/img/logo/shopeepay.png" alt="ShopeePay"
                                            class="h-6">
                                        <span class="text-gray-700">ShopeePay</span>
                                    </label>
                                    <label
                                        class="flex items-center space-x-3 p-3 border border-gray-300 rounded-lg cursor-pointer hover:border-primary">
                                        <input type="radio" name="paymentMethod" value="bank_transfer"
                                            class="text-primary focus:ring-primary">
                                        <img src="https://midtrans.com/img/logo/bank_transfer.png" alt="Bank Transfer"
                                            class="h-6">
                                        <span class="text-gray-700">Bank Transfer</span>
                                    </label>
                                    <label
                                        class="flex items-center space-x-3 p-3 border border-gray-300 rounded-lg cursor-pointer hover:border-primary">
                                        <input type="radio" name="paymentMethod" value="credit_card"
                                            class="text-primary focus:ring-primary">
                                        <img src="https://midtrans.com/img/logo/credit_card.png" alt="Credit Card"
                                            class="h-6">
                                        <span class="text-gray-700">Kartu Kredit</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Donasi Anonim -->
                            <div class="mb-6">
                                <label class="flex items-center space-x-2">
                                    <input type="checkbox" id="anonymous" name="anonymous"
                                        class="rounded text-primary focus:ring-primary">
                                    <span class="text-gray-700">Sembunyikan nama saya (Donasi Anonim)</span>
                                </label>
                            </div>

                            <!-- Tombol Donasi -->
                            <button type="submit" id="donateButton"
                                class="w-full py-3 bg-primary hover:bg-green-600 text-white rounded-lg font-medium transition focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
                                Donasi Sekarang
                            </button>

                            <!-- Info Keamanan -->
                            <div class="mt-4 text-center text-sm text-gray-500">
                                <p>Transaksi aman diproses dengan Midtrans</p>
                                <div class="flex justify-center mt-2">
                                    <img src="https://midtrans.com/img/logo/midtrans-logo.png" alt="Midtrans"
                                        class="h-6">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Midtrans Snap Popup (akan muncul saat form disubmit) -->
        <div id="snap-container"
            class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center">
            <div class="bg-white rounded-lg p-6 max-w-md w-full">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-bold text-gray-800">Proses Pembayaran</h3>
                    <button id="closeSnap" class="text-gray-500 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div id="snap-element" class="w-full"></div>
                <p class="text-sm text-gray-500 mt-4">Transaksi aman diproses dengan Midtrans</p>
            </div>
        </div>
        <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-9wbb-RS9zuzIR0xg"></script>

        {{-- <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Tombol jumlah donasi
                const donationAmountBtns = document.querySelectorAll('.donation-amount-btn');
                const donationAmountInput = document.getElementById('donationAmount');

                donationAmountBtns.forEach(btn => {
                    btn.addEventListener('click', function() {
                        // Hapus active state dari semua tombol
                        donationAmountBtns.forEach(b => {
                            b.classList.remove('border-primary', 'bg-primary', 'bg-opacity-10',
                                'text-primary');
                            b.classList.add('border-gray-300');
                        });

                        // Tambahkan active state ke tombol yang diklik
                        if (this.dataset.amount !== 'custom') {
                            this.classList.add('border-primary', 'bg-primary', 'bg-opacity-10',
                                'text-primary');
                            this.classList.remove('border-gray-300');
                            donationAmountInput.value = this.dataset.amount;
                        } else {
                            donationAmountInput.value = '';
                            donationAmountInput.focus();
                        }
                    });
                });

                // Form submission dengan Midtrans Snap
                const donationForm = document.getElementById('donationForm');
                const snapContainer = document.getElementById('snap-container');
                const closeSnap = document.getElementById('closeSnap');

                donationForm.addEventListener('submit', function(e) {
                    e.preventDefault();

                    const amount = donationAmountInput.value;
                    const paymentMethod = document.querySelector('input[name="paymentMethod"]:checked').value;
                    const anonymous = document.getElementById('anonymous').checked;

                    if (!amount || amount < 10000) {
                        alert('Jumlah donasi minimal Rp 10.000');
                        return;
                    }

                    const donateButton = document.getElementById('donateButton');
                    donateButton.disabled = true;
                    donateButton.innerHTML = 'Memproses...';

                    fetch("{{ url('/get-snap-token') }}", {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json",
                                "X-CSRF-TOKEN": '{{ csrf_token() }}',
                            },
                            body: JSON.stringify({
                                amount: amount,
                                payment_method: paymentMethod,
                                anonymous: anonymous,
                            }),
                        })
                        .then(res => res.json())
                        .then(data => {
                            window.snap.pay(data.snap_token, {
                                onSuccess: function(result) {
                                    alert(
                                        'Pembayaran berhasil! Terima kasih atas donasi Anda.'
                                        );
                                    location.reload();
                                },
                                onPending: function(result) {
                                    alert('Menunggu pembayaran!');
                                },
                                onError: function(result) {
                                    alert('Terjadi kesalahan pembayaran.');
                                },
                                onClose: function() {
                                    alert('Anda menutup popup pembayaran.');
                                }
                            });
                        })
                        .catch(err => {
                            alert('Gagal mendapatkan token pembayaran.');
                        })
                        .finally(() => {
                            donateButton.disabled = false;
                            donateButton.innerHTML = 'Donasi Sekarang';
                        });
                });


                // Tutup snap popup
                closeSnap.addEventListener('click', function() {
                    snapContainer.classList.add('hidden');
                    document.getElementById('donateButton').disabled = false;
                    document.getElementById('donateButton').innerHTML = 'Donasi Sekarang';
                });
            });
        </script> --}}


        <script>
        document.addEventListener('DOMContentLoaded', function () {
            const donationAmountBtns = document.querySelectorAll('.donation-amount-btn');
            const donationAmountInput = document.getElementById('donationAmount');
            const donationForm = document.getElementById('donationForm');
            const snapContainer = document.getElementById('snap-container');
            const closeSnap = document.getElementById('closeSnap');
            const campaignId = document.getElementById('campaignId').value;

            donationAmountBtns.forEach(btn => {
                btn.addEventListener('click', function () {
                    donationAmountBtns.forEach(b => {
                        b.classList.remove('border-primary', 'bg-primary', 'bg-opacity-10', 'text-primary');
                        b.classList.add('border-gray-300');
                    });

                    if (this.dataset.amount !== 'custom') {
                        this.classList.add('border-primary', 'bg-primary', 'bg-opacity-10', 'text-primary');
                        this.classList.remove('border-gray-300');
                        donationAmountInput.value = this.dataset.amount;
                    } else {
                        donationAmountInput.value = '';
                        donationAmountInput.focus();
                    }
                });
            });

            donationForm.addEventListener('submit', function (e) {
                e.preventDefault();

                const amount = donationAmountInput.value;
                const paymentMethod = document.querySelector('input[name="paymentMethod"]:checked').value;
                const anonymous = document.getElementById('anonymous').checked;

                if (!amount || parseInt(amount) < 10000) {
                    alert('Jumlah donasi minimal Rp 10.000');
                    return;
                }

                const donateButton = document.getElementById('donateButton');
                donateButton.disabled = true;
                donateButton.innerHTML = 'Memproses...';

                fetch("{{ url('/donate') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": '{{ csrf_token() }}',
                    },
                    body: JSON.stringify({
                        amount: amount,
                        paymentMethod: paymentMethod,
                        campaign_id: 4,
                        anonymous: anonymous
                    }),
                })
                    .then(res => res.json())
                    .then(data => {
                        if (!data.token) {
                            throw new Error("Snap token tidak ditemukan");
                        }
                        window.snap.pay(data.token, {
                            onSuccess: function (result) {
                                alert('Pembayaran berhasil! Terima kasih atas donasi Anda.');
                                location.reload();
                            },
                            onPending: function (result) {
                                alert('Menunggu pembayaran!');
                            },
                            onError: function (result) {
                                alert('Terjadi kesalahan pembayaran.');
                            },
                            onClose: function () {
                                alert('Anda menutup popup pembayaran.');
                            }
                        });
                    })
                    .catch(err => {
                        alert('Gagal mendapatkan token pembayaran.');
                        console.error(err);
                    })
                    .finally(() => {
                        donateButton.disabled = false;
                        donateButton.innerHTML = 'Donasi Sekarang';
                    });
            });

            closeSnap.addEventListener('click', function () {
                snapContainer.classList.add('hidden');
                document.getElementById('donateButton').disabled = false;
                document.getElementById('donateButton').innerHTML = 'Donasi Sekarang';
            });
        });
    </script>

    </x-user.layouts>
