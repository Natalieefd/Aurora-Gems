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
                </a></li>
        </ul>
        <img src="{{ asset('assets/logo_aurora_gems_render.png') }}" alt="Aurora Gems" class="w-16">
        <a href="{{ route('logout') }}">
            <p class="capitalize font-semibold">logout</p>
        </a>
    </div>
</nav>
