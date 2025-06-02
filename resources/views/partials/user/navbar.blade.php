<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4 py-3">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="#" class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="ml-2 text-xl font-bold text-primary">DanaKita</span>
                </a>
            </div>

            <!-- Menu Desktop -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="#" class="text-gray-700 hover:text-primary font-medium">Beranda</a>
                <a href="#" class="text-gray-700 hover:text-primary font-medium">Cari Galang Dana</a>
                <a href="#" class="text-gray-700 hover:text-primary font-medium">Buat Galang Dana</a>
                <a href="#" class="text-gray-700 hover:text-primary font-medium">Tentang Kami</a>
            </div>

            <!-- Tombol Aksi -->
            <div class="flex items-center space-x-4">
                @guest
                    <a href="{{ url('login') }}"
                        class="hidden md:block px-4 py-2 text-primary font-medium hover:bg-gray-100 rounded-lg">Masuk</a>
                    <a href="{{ url('register') }}"
                        class="px-4 py-2 bg-primary text-white font-medium rounded-lg hover:bg-primaryDark transition duration-300">Daftar</a>
                @endguest

                @auth
                    <flux:dropdown position="bottom" align="end">
                        {{-- <flux:profile avatar="/img/demo/user.png" name="Olivia Martin" /   > --}}
                        <flux:profile :chevron="false" avatar="https://unavatar.io/x/calebporzio" />

                        <flux:navmenu>
                            <flux:navmenu.item class="item">
                                <flux:text>{{ session('username') }}</flux:text>
                            </flux:navmenu.item>

                            <flux:navmenu.separator />
                            @if (session('user_role') == 'admin')
                                <flux:navmenu.item href="{{ url('dashboard') }}" icon="building-storefront

">Dashboard
                                </flux:navmenu.item>
                            @endif
                            <flux:navmenu.item href="{{url('profile')}}" icon="user">Profile</flux:navmenu.item>
                            <form action="{{ url('logout') }}" method="post">
                                @csrf
                                <flux:navmenu.item type="submit" variant="danger" icon="arrow-right-start-on-rectangle">
                                    Logout
                                </flux:navmenu.item>
                            </form>
                        </flux:navmenu>
                    </flux:dropdown>
                    {{-- <form action="{{url('logout')}}" method="post">
                    @csrf
                    <button type="submit"
                            class="px-4 py-2 text-primary font-medium hover:bg-gray-100 rounded-lg">Logout</button>
                </form> --}}
                @endauth


                <!-- Mobile Menu Button -->
                <button class="md:hidden focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>
