<x-layouts.app :title="__('Kategori')">
    <section class="flex flex-col justify-center antialiased bg-gray-100 text-gray-600 min-h-screen p-4 ">
        <div class="h-full">
            <!-- Table -->
            <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
                <header class="px-5 py-4 border-b border-gray-100">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="font-semibold text-gray-800">Kategori Donasi</h2>
                        <flux:modal.trigger name="tambah-kategori">
                            <flux:button class="mt-2">Add +</flux:button>
                        </flux:modal.trigger>

                    </div>

                </header>
                <div class="p-3">
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full text-center">
                            <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                <tr>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">No</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">Nama Kategori</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">icon</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">aksi</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-sm divide-y divide-gray-100">
                                @foreach ($kategori as $items)
                                    <tr>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">{{ $items->id }}</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">{{ $items->nama }}</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">{{ $items->icon }}</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">
                                                <flux:modal.trigger name="edit-kategori{{ $items->id }}">
                                                    <flux:button icon="pencil"></flux:button>
                                                </flux:modal.trigger>
                                                <flux:modal.trigger name="delete-kategori{{ $items->id }}">
                                                    <flux:button icon="trash"></flux:button>
                                                </flux:modal.trigger>

                                            </div>
                                        </th>
                                    </tr>
                                    <flux:modal name="edit-kategori{{ $items->id }}" class="md:w-96">
                                        <div class="space-y-6">
                                            <div>
                                                <flux:heading size="lg">Tambah Kategori</flux:heading>
                                                <flux:text class="mt-2">Masukkan nama kategori baru.</flux:text>
                                            </div>
                                            <form action="{{ url('kategori/' . $items->id) }}" enctype="multipart/form-data" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <flux:input name="nama" label="Nama Kategori"
                                                    value="{{ $items->nama }}" />
                                                <flux:input type="file" name="icon" label="Nama icon"
                                                    value="{{ $items->icon }}" />
                                                <flux:link href="https://heroicons.com/" target="_blank"><flux:button>Icon</flux:button></flux:link>
                                                <div class="flex justify-end">
                                                    <flux:button type="submit" variant="primary" class="mt-2">Simpan Perubahan
                                                    </flux:button>
                                                </div>
                                            </form>
                                        </div>
                                    </flux:modal>

                                    <flux:modal name="delete-kategori{{ $items->id }}" class="min-w-[22rem]">
                                        <div class="space-y-6">
                                            <div>
                                                <flux:heading size="lg">Delete project?</flux:heading>
                                                <flux:text class="mt-2">
                                                    <p>You're about to delete this project.</p>
                                                    <p>This action cannot be reversed.</p>
                                                </flux:text>
                                            </div>
                                            <form action="{{ url('kategori/' . $items->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
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
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <flux:modal name="tambah-kategori" class="md:w-96">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Tambah Kategori</flux:heading>
                <flux:text class="mt-2">Masukkan nama kategori baru.</flux:text>
            </div>
            <form action="{{ url('kategori') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <flux:input name="nama" label="Nama Kategori" />
                <flux:input name="icon" type="file" label="Nama Icon" class="mb-2" />
                       <flux:link href="https://heroicons.com/" class="" target="_blank"><flux:button>Icon</flux:button></flux:link>
                <div class="flex justify-end">
                    <flux:button type="submit" class="" variant="primary">Simpan</flux:button>
                </div>
            </form>
        </div>
    </flux:modal>


</x-layouts.app>
