<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold text-black">Edit Profil</h2>
    <button class="text-primary font-medium">Lihat Profil</button>
</div>
<form action="  profile" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- Foto Profil -->
    <div class="mb-8">
        <label class="block text-black font-medium mb-2">Foto Profil</label>
        <div class="flex items-center space-x-6">
            <div class="w-20 h-20 rounded-full bg-primary bg-opacity-20 flex items-center justify-center">
                <img src="{{ asset('uploads/profile/' . $user->gambar) }}" alt="">
            </div>
            <div>
                <label class="cursor-pointer">
                    <input type="file" name="gambar" class="hidden">
                    <span
                        class="px-4 py-2 bg-primary bg-opacity-10 text-primary rounded-lg font-medium hover:bg-opacity-20 transition">Unggah
                        Foto</span>
                </label>
                <p class="text-gray-500 text-sm mt-2">Format JPG, PNG maksimal 2MB</p>
            </div>
        </div>
    </div>

    <!-- Informasi Dasar -->
    <div class="mb-8">
        <h3 class="text-lg font-bold text-black mb-4">Informasi Dasar</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-black font-medium mb-2">Username</label>
                <input type="text" name="name"
                    class="w-full px-4 py-2 text-black border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                    value="{{ $user->name }}">
            </div>
            <div>
                <label class="block text-black font-medium mb-2">Nama Lengkap</label>
                <input type="text" name="nama_lengkap"
                    class="w-full px-4 py-2 text-black border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                    value="{{ $user->nama_lengkap }}">
            </div>

            <div>
                <label class="block text-black font-medium mb-2">Email</label>
                <input type="email" name="email"
                    class="w-full px-4 py-2 text-black border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                    value="{{ $user->email }}">
            </div>
            <div>
                <label class="block text-black font-medium mb-2">Password</label>
                <input type="password" name="password"
                    class="w-full px-4 py-2 text-black border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                    value="" placeholder="Kosongkan jika tidak diganti">
            </div>
            <div>
                <label class="block text-black font-medium mb-2">Nomor Telepon</label>
                <input type="tel" name="no_telp"
                    class="w-full px-4 py-2 text-black border border-gray-300 text-black rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                    value="{{ $user->no_telp }}">
            </div>
        </div>
    </div>
    <div class="mb-8">
        <h3 class="text-lg font-bold text-black mb-4">Rekening Bank</h3>
        <div class="mb-4">
            <flux:modal.trigger name="tambah-rekening">
                <flux:button class="w-24 h-8">+ Rekening</flux:button>
            </flux:modal.trigger>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="overflow-x-auto">
                <table class="table-auto w-full border border-gray-300 text-black text-sm">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border px-4 py-2">Nama Bank</th>
                            <th class="border px-4 py-2">No Rekening</th>
                            <th class="border px-4 py-2">Atas Nama</th>
                            <th class="border px-4 py-2 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($rekening as $item)
                            <tr>
                                <td class="border px-4 py-2">{{ $item->nama_bank }}</td>
                                <td class="border px-4 py-2">{{ $item->no_rekening }}</td>
                                <td class="border px-4 py-2">{{ $item->atas_nama }}</td>
                                <td class="border px-4 py-2 text-center">
                                    <flux:modal.trigger name="edit-rekening{{ $item->id }}">
                                        <flux:button icon="pencil"></flux:button>
                                    </flux:modal.trigger>
                                    <flux:modal.trigger name="delete-rekening{{ $item->id }}">
                                        <flux:button icon="trash"></flux:button>
                                    </flux:modal.trigger>
                                </td>
                            </tr>
                            <flux:modal name="edit-rekening{{ $item->id }}" class="md:w-96">
                                <div class="space-y-6">
                                    <div>
                                        <flux:heading size="lg">Tambah Kategori</flux:heading>
                                        <flux:text class="mt-2">Masukkan nama kategori baru.</flux:text>
                                    </div>

                                    <form action="{{ url('update-rekening/' . $item->id) }}" method="POST">
                                        @csrf
                                        <!-- Nama Kategori -->
                                        <div class="mb-4">
                                            <flux:input name="nama_bank" label="Nama Bank"
                                                value="{{ $item->nama_bank }}"
                                                class="focus:ring-primary focus:border-primary border-gray-300" />
                                        </div>
                                        <div class="mb-4">
                                            <flux:input name="no_rekening" label="No Rekening"
                                                value="{{ $item->no_rekening }}"
                                                class="focus:ring-primary focus:border-primary border-gray-300" />
                                        </div>
                                        <div class="mb-4">
                                            <flux:input name="atas_nama" label="Nama" value="{{ $item->atas_nama }}"
                                                class="focus:ring-primary focus:border-primary border-gray-300" />
                                        </div>
                                        <div class="flex justify-end">
                                            <flux:button type="submit" variant="primary"
                                                class="bg-primary hover:bg-primaryDark text-white">
                                                Simpan
                                            </flux:button>
                                        </div>
                                    </form>
                                </div>
                            </flux:modal>

                            <flux:modal name="delete-rekening{{ $item->id }}" class="min-w-[22rem]">
                                <div class="space-y-6">
                                    <div>
                                        <flux:heading size="lg">Delete Rekening</flux:heading>
                                        <flux:text class="mt-2">
                                            <p>You're about to delete this Rekening.</p>
                                            <p>This action cannot be reversed.</p>
                                        </flux:text>
                                    </div>
                                    <form action="{{ url('delete-rekening/' . $item->id) }}" method="GET">
                                        {{-- @csrf --}}
                                        <div class="flex gap-2">
                                            <flux:spacer />
                                            <flux:modal.close>
                                                <flux:button variant="ghost">Cancel</flux:button>
                                            </flux:modal.close>
                                            <flux:button type="submit" variant="danger">Delete project
                                            </flux:button>
                                        </div>
                                    </form>
                                </div>
                            </flux:modal>
                        @empty
                            <tr>
                                <td colspan="4" class="border px-4 py-2 text-center text-gray-500">Tidak ada data
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <!-- Informasi Tambahan -->
    <div class="mb-8">
        <h3 class="text-lg font-bold text-black mb-4">Informasi Tambahan</h3>
        <div class="grid grid-cols-1 gap-6">
            <div>
                <label class="block text-black font-medium mb-2">Bio</label>
                <textarea name="bio" value="{{ $user->bio }}"
                    class="w-full px-4 py-2 text-black border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent h-32">{{ $user->bio }}</textarea>
            </div>
            <div>
                <label class="block text-black font-medium mb-2">Alamat</label>
                <textarea name="alamat"
                    class="w-full px-4 py-2 text-black border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent h-24">{{ $user->alamat }}</textarea>
            </div>
        </div>
    </div>

    <!-- Social Media -->
    <div class="mb-8">
        <h3 class="text-lg font-bold text-black mb-4">Media Sosial</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-black font-medium mb-2">Instagram</label>
                <div class="flex">
                    <span
                        class="inline-flex items-center px-3 rounded-l-lg border border-r-0 border-gray-300 bg-gray-50 text-gray-500">@</span>
                    <input type="text" name="instagram"
                        class="flex-1 px-4 py-2 text-black border border-gray-300 rounded-r-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                        value="{{ $user->instagram }}">
                </div>
            </div>

        </div>
    </div>

    <!-- Action Buttons -->
    <div class="flex justify-end space-x-4">
        <button type="button"
            class="px-6 py-2 border border-gray-300 rounded-lg font-medium text-black hover:bg-gray-50 transition">Batal</button>
        <button type="submit"
            class="px-6 py-2 bg-primary hover:bg-green-600 rounded-lg font-medium text-white transition">Simpan
            Perubahan</button>
    </div>
</form>


<flux:modal name="tambah-rekening" class="md:w-96 bg-white">
    <div class="space-y-6">
        <!-- Header Modal -->
        <div class="border-b border-gray-200 pb-4">
            <flux:heading size="lg" class="text-primary">Tambah Rekening Bank</flux:heading>
            {{-- <flux:text class="mt-2 text-white">Masukkan nama kategori baru.</flux:text> --}}
        </div>

        <!-- Form -->
        <form action="{{ url('create-rekening') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Nama Kategori -->
            <div class="mb-4">
                <flux:input name="nama_bank" label="Nama Bank"
                    class="focus:ring-primary focus:border-primary border-gray-300" />
            </div>
            <div class="mb-4">
                <flux:input name="no_rekening" label="No Rekening"
                    class="focus:ring-primary focus:border-primary border-gray-300" />
            </div>
            <div class="mb-4">
                <flux:input name="atas_nama" label="Nama"
                    class="focus:ring-primary focus:border-primary border-gray-300" />
            </div>



            <!-- Action Buttons -->
            <div class="flex justify-end space-x-3 pt-4 border-t border-gray-200">
                <flux:button type="button" class="border border-gray-300 text-gray-700 hover:bg-gray-50"
                    @click="modal.tambah-kategori = false">
                    Batal
                </flux:button>
                <flux:button type="submit" class="bg-primary hover:bg-primaryDark text-white">
                    Simpan
                </flux:button>
            </div>
        </form>
    </div>
</flux:modal>
