<nav class="bg-deeppink">
    <div class="flex justify-between items-center pl-10 pr-10 text-peach">
        <ul class="flex gap-10">
            <li>
                <a href="{{ route('admin.product') }}">
                    <p class="capitalize font-semibold">produk</p>
                </a>
            </li>
            <li><a href="{{ route('admin.manajemen_product') }}">
                    <p class="capitalize font-semibold">manajemen produk</p>
                </a>
            </li>
        </ul>
        <img src="{{ asset('assets/logo_aurora_gems_render.png') }}" alt="Aurora Gems" class="w-16">
        <ul class="flex gap-10">
            <li><a href="{{ route('admin.dashboard') }}">
                    <p class="capitalize font-semibold">home</p>
                </a>
            </li>
            {{-- <li>
                <a href="{{ route('admin.favorite') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path
                            d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                    </svg>
                </a>
            </li> --}}
            <li>
                <a href="{{ route('logout') }}">
                    <p class="capitalize font-semibold">logout</p>
                </a>
            </li>
        </ul>
    </div>
</nav>
