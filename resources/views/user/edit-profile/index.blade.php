<x-user.layouts :title="'Profile'">


    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8 " x-data="{ menu: 'edit' }">
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Sidebar -->
            <div class="md:w-1/4">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex flex-col items-center mb-6">
                        <div
                            class="w-24 h-24 rounded-full bg-primary bg-opacity-20 flex items-center justify-center mb-4">
                            <img src="{{ asset('uploads/profile/' . $user->gambar) }}" alt="">

                        </div>
                        <h3 class="text-xl font-bold text-black">Andi Kusuma</h3>
                        <p class="text-gray-500">Member sejak 2022</p>
                    </div>

                    <nav class="space-y-2">
                        <nav class="space-y-2">
                            <a @click.prevent="menu = 'edit'"
                                :class="menu === 'edit' ? 'bg-primary bg-opacity-10 text-primary' :
                                    'hover:bg-gray-100 text-primaryDark'"
                                class="block px-4 py-2 rounded-lg font-medium">Edit Profil</a>
                            <a @click.prevent="menu = 'campaign'"
                                :class="menu === 'campaign' ? 'bg-primary bg-opacity-10 text-primary' :
                                    'hover:bg-gray-100 text-primaryDark'"
                                class="block px-4 py-2 rounded-lg font-medium">Campaign Saya</a>
                            <a @click.prevent="menu = 'donasi'"
                                :class="menu === 'donasi' ? 'bg-primary bg-opacity-10 text-primary' :
                                    'hover:bg-gray-100 text-primaryDark'"
                                class="block px-4 py-2 rounded-lg font-medium">Donasi Saya</a>
                        </nav>

                    </nav>
                </div>
            </div>

            <!-- Edit Profile Form -->
            <div class="md:w-3/4">
                <div class="bg-white rounded-lg shadow-md p-6">



                    <div x-show="menu === 'edit'">
                        <!-- Form Edit Profil kamu disini -->
                        @include('user.edit-profile.form-profile')

                    </div>

                    <div x-show="menu == 'campaign'">
                        @include('user.edit-profile.campaign')
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-user.layouts>
