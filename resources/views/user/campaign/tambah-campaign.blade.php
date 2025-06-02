<x-user.layouts :title="'Buat Campaign'">
    <div class="container mx-auto px-4 py-8 bg-white">
        <div class="max-w-4xl mx-auto">
            <!-- Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-black mb-2">Buat Campaign Penggalangan Dana</h1>
                <p class="text-gray-600">Isi formulir berikut dengan detail campaign Anda. Pastikan informasi yang
                    diberikan jelas dan lengkap.</p>
            </div>

            <!-- Progress Steps -->
            <div class="mb-8">
                <div class="flex justify-between relative">
                    <!-- Step 1 -->
                    <div class="flex flex-col items-center z-10 step-indicator" data-step="1">
                        <div
                            class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center font-bold">
                            1
                        </div>
                        <span class="mt-2 text-sm font-medium text-primary">Informasi Dasar</span>
                    </div>

                    <!-- Step 2 -->
                    <div class="flex flex-col items-center z-10 step-indicator" data-step="2">
                        <div
                            class="w-10 h-10 rounded-full bg-gray-200 text-gray-600 flex items-center justify-center font-bold">
                            2
                        </div>
                        <span class="mt-2 text-sm font-medium text-gray-500">Target Dana</span>
                    </div>

                    <!-- Step 3 -->
                    <div class="flex flex-col items-center z-10 step-indicator" data-step="3">
                        <div
                            class="w-10 h-10 rounded-full bg-gray-200 text-gray-600 flex items-center justify-center font-bold">
                            3
                        </div>
                        <span class="mt-2 text-sm font-medium text-gray-500">Penerima Dana</span>
                    </div>

                    <!-- Progress Line -->
                    <div class="absolute top-5 left-0 right-0 h-1 bg-gray-200">
                        <div class="h-full bg-primary transition-all duration-300 ease-in-out" style="width: 33.33%"
                            id="progressBar"></div>
                    </div>
                </div>
            </div>

            <!-- Campaign Form -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <form id="campaignForm" action="{{ url('create-campaign') }}" method="POST"
                    enctype="multipart/form-data"
                    class="space-y-6">
                    @csrf
                    <!-- Step 1 -->
                    <div class="step active" data-step="1">
                        <!-- Judul Campaign -->
                        <div class="mb-6">
                            <label for="title" class="block text-black font-medium mb-2">Judul Campaign*</label>
                            <input type="text" id="title" name="judul"
                                class="w-full text-black px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                placeholder="Contoh: Bantu Adik Melawan Kanker Stadium 4" required>
                            <p class="text-gray-500 text-sm mt-1">Buat judul yang jelas dan menarik perhatian (maksimal
                                60 karakter)</p>
                        </div>




                        <!-- Kategori -->
                        <div class="mb-6">
                            <label class="block text-black font-medium mb-2 mt-4">Kategori*</label>
                            <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                                @foreach ($kategori as $k)
                                    <label
                                        class="flex items-center space-x-2 p-3 border border-gray-300 rounded-lg hover:border-primary cursor-pointer">
                                        <input type="radio" name="id_kategori" value="{{ $k->id }}"
                                            class="text-primary focus:ring-primary" {{ $loop->first ? 'checked' : '' }}>
                                        <div class="flex items-center">
                                            <!-- Ganti ikon sesuai kebutuhan atau simpan ikon dalam DB -->
                                            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                            </svg> --}}

                                            <img src="{{ asset($k->icon) }}" class="h-16 w-16 text-primary mr-2"
                                                alt="">
                                            <span class="text-black">{{ $k->nama }}</span>
                                        </div>
                                    </label>
                                @endforeach
                            </div>

                        </div>

                        <!-- Gambar Campaign -->
                        <div class="mb-6">
                            <label class="block text-black font-medium mb-2">Gambar Campaign*</label>
                            <div class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center">
                                <div id="image-preview" class="hidden mb-4">
                                    <img id="preview" src="#" alt="Preview Gambar"
                                        class="max-h-48 mx-auto rounded-lg">
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <p class="mt-2 text-gray-600">Unggah gambar utama campaign</p>
                                <p class="text-sm text-gray-500 mb-4">Format JPG, PNG (Rasio 16:9, min. 800x450px)</p>
                                <label class="cursor-pointer">
                                    <input type="file" id="campaign-image" name="foto" class="hidden"
                                        accept="image/*" required>
                                    <span
                                        class="px-4 py-2 bg-primary hover:bg-green-600 text-white rounded-lg font-medium transition">Pilih
                                        Gambar</span>
                                </label>
                            </div>
                        </div>

                        <!-- Deskripsi -->
                        <div class="mb-6">
                            <label for="description" class="block text-black font-medium mb-2">Deskripsi
                                Campaign*</label>
                            <textarea id="description" name="deskripsi" rows="8"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                placeholder="Ceritakan secara detail tentang campaign Anda. Siapa yang membutuhkan bantuan? Mengapa mereka membutuhkan bantuan? Bagaimana dana akan digunakan?"
                                required></textarea>
                            <div class="flex justify-between text-sm text-gray-500 mt-1">
                                <span>Minimal 300 karakter</span>
                                <span><span id="char-count">0</span>/5000 karakter</span>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="step" data-step="2" style="display:none;">
                        <!-- Contoh input Target Dana -->
                        <div class="mb-6">
                            <label for="target" class="block text-black font-medium mb-2">Target Dana*</label>
                            <input type="number" id="target" name="nominal_target"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                placeholder="Masukkan target dana (misal: 10000000)" required>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="step" data-step="3" style="display:none;">
                        <!-- Contoh input Penerima Dana -->
                        <div class="flex gap-4">
                            <div class="w-1/2">
                                <label class="block text-black font-medium mb-2">Mulai</label>
                                <input type="date" name="mulai"
                                    class="w-full text-black border border-gray-300 rounded px-3 py-2">
                            </div>
                            <div class="w-1/2">
                                <label class="block text-black font-medium mb-2">Berakhir</label>
                                <input type="date" name="berakhir"
                                    class="w-full text-black border border-gray-300 rounded px-3 py-2">
                            </div>
                        </div>
                    </div>

                    <!-- Navigation Buttons -->
                    <div class="flex justify-between pt-4 border-t border-gray-200">
                        <button type="button" id="backButton"
                            class="px-6 py-2 text-black font-medium hover:text-primary">Kembali</button>
                        <button type="button" id="nextButton"
                            class="px-6 py-2 bg-primary text-white rounded hover:bg-green-600">Lanjutkan</button>
                        <button type="submit" id="submitButton"
                            class="px-6 py-2 bg-primary text-white rounded hover:bg-green-600 hidden">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const steps = document.querySelectorAll('.step');
        const indicators = document.querySelectorAll('.step-indicator');
        const progressBar = document.getElementById('progressBar');
        const backBtn = document.getElementById('backButton');
        const nextBtn = document.getElementById('nextButton');
        const submitBtn = document.getElementById('submitButton');
        let currentStep = 1;
        const totalSteps = steps.length;

        function showStep(step) {
            steps.forEach((s, i) => {
                s.style.display = (i === step - 1) ? 'block' : 'none';
            });

            indicators.forEach((ind, i) => {
                const circle = ind.querySelector('div');
                const text = ind.querySelector('span');
                if (i < step - 1) {
                    circle.classList.remove('bg-gray-200', 'text-gray-600');
                    circle.classList.add('bg-primary', 'text-white');
                    text.classList.remove('text-gray-500');
                    text.classList.add('text-primary');
                } else if (i === step - 1) {
                    circle.classList.remove('bg-gray-200', 'text-gray-600');
                    circle.classList.add('bg-primary', 'text-white');
                    text.classList.remove('text-gray-500');
                    text.classList.add('text-primary');
                } else {
                    circle.classList.remove('bg-primary', 'text-white');
                    circle.classList.add('bg-gray-200', 'text-gray-600');
                    text.classList.remove('text-primary');
                    text.classList.add('text-gray-500');
                }
            });

            // Update progress bar width
            progressBar.style.width = (step / totalSteps * 100) + '%';

            // Show/hide buttons
            backBtn.style.display = step === 1 ? 'none' : 'inline-block';
            nextBtn.style.display = step === totalSteps ? 'none' : 'inline-block';
            submitBtn.style.display = step === totalSteps ? 'inline-block' : 'none';
        }

        backBtn.style.display = 'none'; // awal step 1

        nextBtn.addEventListener('click', () => {
            // Bisa tambahkan validasi step disini
            if (currentStep < totalSteps) {
                currentStep++;
                showStep(currentStep);
            }
        });

        backBtn.addEventListener('click', () => {
            if (currentStep > 1) {
                currentStep--;
                showStep(currentStep);
            }
        });

        document.getElementById('campaignForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // submit form, bisa AJAX atau form submit biasa
            // alert('Form berhasil disubmit!');
            this.submit(); // jika mau submit ke server
        });

        showStep(currentStep);

        // Count karakter deskripsi
        const description = document.getElementById('description');
        const charCount = document.getElementById('char-count');
        description.addEventListener('input', () => {
            charCount.textContent = description.value.length;
        });

        // Preview gambar
        const imageInput = document.getElementById('campaign-image');
        const imagePreview = document.getElementById('image-preview');
        const previewImg = document.getElementById('preview');

        imageInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImg.src = e.target.result;
                    imagePreview.classList.remove('hidden');
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
</x-user.layouts>
