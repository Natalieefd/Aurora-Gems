<main class="container mx-auto mt-8 top-10 max-w-screen-md">
    <h2 class="text-4xl font-semibold text-gold mt-8 top-10 flex justify-center">
        Our Top Products~
    </h2>
    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-10">
        <!-- Produk 1 -->
        <div class="bg-deeppink p-4 shadow-lg flex flex-col justify-center items-center  rounded-3xl">
            <img src="{{ asset('assets/product1.png') }}" alt="Product 1" class="w-fit h-48 mt-8 object-cover">
            <h2 class="text-xl font-semibold ">Queen's Delight</h2>
            <span class="text-2xl font-semibold text-pink-400">Rp 230.000</span>
            <p class="text-gray-700">
            </p>
            <div class="mt-5 top-10">
                <button class="bg-gold text-white px-2 py-1 ml-2 hover:bg-pink-600 rounded-xl">Buy Now</button>
            </div>
        </div>

        <!-- Produk 2 -->
        <div class="bg-deeppink p-4 shadow-lg flex flex-col justify-center items-center rounded-3xl">
            <img src="{{ asset('assets/product2.png') }}"alt="Product 2" class="w-fit h-48 object-cover">
            <h2 class="text-xl font-semibold mt-2">Winter's Embrace</h2>
            <span class="text-2xl font-semibold text-pink-400">Rp 250.000</span>
            <div class="mt-8 top-10">
                <button class="bg-gold text-white px-2 py-1 ml-2 hover:bg-pink-600 rounded-xl">Buy Now</button>
            </div>
        </div>
        <!-- Produk 3 -->
        <div class="bg-deeppink p-4 shadow-lg flex flex-col justify-center items-center rounded-3xl">
            <img src="{{ asset('assets/product3.png') }}"  alt="Product 3" class="w-fit h-48 object-cover">
            <h2 class="text-xl font-semibold mt-2">Wings of Beauty</h2>
            <span class="text-2xl font-semibold text-pink-400">Rp 150.000</span>
            <div class="mt-8 top-10">
                <button class="bg-gold text-white px-2 py-1 ml-2 hover:bg-pink-600 rounded-xl">Buy Now</button>
            </div>
        </div>
    </section>
</main>
