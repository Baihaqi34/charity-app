<x-user.layouts :title="'Buat Campaign'">
    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8 bg-white">
        <div class="max-w-4xl mx-auto">
            <!-- Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-black mb-2">Buat Campaign Penggalangan Dana1234</h1>
                <p class="text-gray-600">Isi formulir berikut dengan detail campaign Anda. Pastikan informasi yang
                    diberikan jelas dan lengkap.</p>
            </div>

            <!-- Progress Steps -->
            <div class="mb-8">
                <div class="flex justify-between relative">
                    <!-- Step 1 - Active -->
                    <div class="flex flex-col items-center z-10">
                        <div class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center font-bold">
                            1
                        </div>
                        <span class="mt-2 text-sm font-medium text-primary">Informasi Dasar</span>
                    </div>

                    <!-- Step 2 -->
                    <div class="flex flex-col items-center z-10">
                        <div class="w-10 h-10 rounded-full bg-gray-200 text-gray-600 flex items-center justify-center font-bold">
                            2
                        </div>
                        <span class="mt-2 text-sm font-medium text-gray-500">Target Dana</span>
                    </div>

                    <!-- Step 3 -->
                    <div class="flex flex-col items-center z-10">
                        <div class="w-10 h-10 rounded-full bg-gray-200 text-gray-600 flex items-center justify-center font-bold">
                            3
                        </div>
                        <span class="mt-2 text-sm font-medium text-gray-500">Penerima Dana</span>
                    </div>

                    <!-- Progress Line -->
                    <div class="absolute top-5 left-0 right-0 h-1 bg-gray-200">
                        <div class="h-full bg-primary transition-all duration-300 ease-in-out" style="width: 0%" id="progressBar"></div>
                    </div>
                </div>
            </div>

            <!-- Campaign Form -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <form id="campaignForm" class="space-y-6">
                    <!-- Judul Campaign -->
                    <div class="mb-6">
                        <label for="title" class="block text-black font-medium mb-2">Judul Campaign*</label>
                        <input type="text" id="title" name="title"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                            placeholder="Contoh: Bantu Adik Melawan Kanker Stadium 4" required>
                        <p class="text-gray-500 text-sm mt-1">Buat judul yang jelas dan menarik perhatian (maksimal 60
                            karakter)</p>
                    </div>

                    <!-- Kategori -->
                    <div class="mb-6">
                        <label class="block text-black font-medium mb-2">Kategori*</label>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                            <label class="flex items-center space-x-2 p-3 border border-gray-300 rounded-lg hover:border-primary cursor-pointer">
                                <input type="radio" name="category" value="kesehatan" class="text-primary focus:ring-primary" checked>
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                    </svg>
                                    <span class="text-black">Kesehatan</span>
                                </div>
                            </label>

                            <!-- Kategori lainnya tetap sama, pastikan memiliki value dan name="category" -->
                        </div>
                    </div>

                    <!-- Gambar Campaign -->
                    <div class="mb-6">
                        <label class="block text-black font-medium mb-2">Gambar Campaign*</label>
                        <div class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center">
                            <div id="image-preview" class="hidden mb-4">
                                <img id="preview" src="#" alt="Preview Gambar" class="max-h-48 mx-auto rounded-lg">
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <p class="mt-2 text-gray-600">Unggah gambar utama campaign</p>
                            <p class="text-sm text-gray-500 mb-4">Format JPG, PNG (Rasio 16:9, min. 800x450px)</p>
                            <label class="cursor-pointer">
                                <input type="file" id="campaign-image" name="image" class="hidden" accept="image/*" required>
                                <span class="px-4 py-2 bg-primary hover:bg-green-600 text-white rounded-lg font-medium transition">Pilih Gambar</span>
                            </label>
                        </div>
                    </div>

                    <!-- Deskripsi -->
                    <div class="mb-6">
                        <label for="description" class="block text-black font-medium mb-2">Deskripsi Campaign*</label>
                        <textarea id="description" name="description" rows="8"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                            placeholder="Ceritakan secara detail tentang campaign Anda. Siapa yang membutuhkan bantuan? Mengapa mereka membutuhkan bantuan? Bagaimana dana akan digunakan?"
                            required></textarea>
                        <div class="flex justify-between text-sm text-gray-500 mt-1">
                            <span>Minimal 300 karakter</span>
                            <span><span id="char-count">0</span>/5000 karakter</span>
                        </div>
                    </div>

                    <!-- Navigation Buttons -->
                    <div class="flex justify-between pt-4 border-t border-gray-200">
                        <button type="button" id="backButton" class="px-6 py-2 text-black font-medium hover:text-primary">Kembali</button>
                        <button type="submit" class="px-6 py-2 bg-primary hover:bg-green-600 text-white rounded-lg font-medium transition">Lanjutkan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const progressBar = document.getElementById('progressBar');
            const form = document.getElementById('campaignForm');
            const backButton = document.getElementById('backButton');
            let currentStep = 1;
            const totalSteps = 3;

            // Fungsi untuk update progress bar
            function updateProgressBar() {
                const progressPercentage = ((currentStep - 1) / (totalSteps - 1)) * 100;
                progressBar.style.width = `${progressPercentage}%`;

                // Update step indicator
                document.querySelectorAll('.flex.flex-col.items-center').forEach((step, index) => {
                    const stepNumber = step.querySelector('div');
                    const stepText = step.querySelector('span');

                    if (index < currentStep) {
                        stepNumber.classList.remove('bg-gray-200', 'text-gray-600');
                        stepNumber.classList.add('bg-primary', 'text-white');
                        stepText.classList.remove('text-gray-500');
                        stepText.classList.add('text-primary');
                    } else {
                        stepNumber.classList.remove('bg-primary', 'text-white');
                        stepNumber.classList.add('bg-gray-200', 'text-gray-600');
                        stepText.classList.remove('text-primary');
                        stepText.classList.add('text-gray-500');
                    }
                });
            }

            // Inisialisasi progress bar
            updateProgressBar();

            // Image Preview
            document.getElementById('campaign-image').addEventListener('change', function(e) {
                const preview = document.getElementById('preview');
                const imagePreview = document.getElementById('image-preview');

                if (this.files && this.files[0]) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        preview.src = e.target.result;
                        imagePreview.classList.remove('hidden');
                    }

                    reader.readAsDataURL(this.files[0]);
                }
            });

            // Character Count
            document.getElementById('description').addEventListener('input', function() {
                document.getElementById('char-count').textContent = this.value.length;
            });

            // Form submission
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                // Validasi form
                const title = form.querySelector('#title').value.trim();
                const category = form.querySelector('input[name="category"]:checked');
                const image = form.querySelector('#campaign-image').files[0];
                const description = form.querySelector('#description').value.trim();

                if (!title || !category || !image || !description) {
                    alert('Semua field wajib diisi!');
                    return;
                }

                if (description.length < 300) {
                    alert('Deskripsi minimal 300 karakter!');
                    return;
                }

                // Simulasi pindah ke step berikutnya
                if (currentStep < totalSteps) {
                    currentStep++;
                    updateProgressBar();

                    // Ubah tampilan form untuk step berikutnya (contoh)
                    if (currentStep === 2) {
                        // Simpan data step 1 ke session/local storage
                        sessionStorage.setItem('campaignStep1', JSON.stringify({
                            title,
                            category: category.value,
                            image: URL.createObjectURL(image),
                            description
                        }));

                        // Redirect atau ganti form untuk step 2
                        alert('Data step 1 tersimpan. Lanjut ke step 2: Target Dana');
                        // window.location.href = '/campaign/step2';
                    }
                }
            });

            // Tombol kembali
            backButton.addEventListener('click', function() {
                if (currentStep > 1) {
                    currentStep--;
                    updateProgressBar();

                    // Kembali ke step sebelumnya
                    alert('Kembali ke step sebelumnya');
                    // window.location.href = currentStep === 1 ? '/campaign' : '/campaign/step' + (currentStep - 1);
                } else {
                    // Kembali ke halaman sebelumnya
                    window.history.back();
                }
            });
        });
    </script>
</x-user.layouts>
