<section class="bg-white">
    <div class="w-full">
        <img src="{{ asset('images/collection.jpg') }}" alt="Collection Banner" class="w-full h-[450px] object-cover">
    </div>

    <div class="max-w-7xl mx-auto px-6 py-16 flex flex-col md:flex-row gap-10">
        <div class="md:w-1/2" style="margin-left: 100px;">
            <h2 class="text-3xl font-bold mb-6">Collection</h2>
            <p class="text-gray-400 leading-relaxed mb-6">
                If you are a furniture retailer and you don’t use our services, you are probably NOT getting the best
                for your business.
                Our business is based in Ho Chi Minh City and our clients here include most of the very best
                manufacturers of both indoor and outdoor furniture available.
            </p>
            <a href="#" class="text-sm font-bold text-black hover:text-gray-700">
                — SEE MORE
            </a>
        </div>

        <div class="lg:w-2/3 overflow-x-auto relative" id="collectionScroll">
            <div class="flex gap-6 min-w-max" id="collectionItems">
                <div
                    class="flex-shrink-0 w-[250px] flex flex-col items-center transition-opacity duration-300 opacity-60">
                    <div class="text-center tracking-[1em] text-sm font-medium mb-3 relative w-full">
                        <span>CHAIR</span>
                        <div class="mt-2 mx-auto h-[2px] w-full bg-[#d6cfa5]"></div>
                    </div>
                    <img src="{{ asset('images/collection1.jpg') }}" alt="Chair"
                        class="w-full h-[330px] object-cover rounded shadow-md">
                </div>

                <div
                    class="flex-shrink-0 w-[250px] flex flex-col items-center transition-opacity duration-300 opacity-60">
                    <div class="text-center tracking-[1em] text-sm font-medium mb-3 relative w-full">
                        <span>TABLE</span>
                        <div class="mt-2 mx-auto h-[2px] w-full bg-[#d6cfa5]"></div>
                    </div>
                    <img src="{{ asset('images/collection2.jpg') }}" alt="Table"
                        class="w-full h-[330px] object-cover rounded shadow-md">
                </div>
         
                <div
                    class="flex-shrink-0 w-[250px] flex flex-col items-center transition-opacity duration-300 opacity-60">
                    <div class="text-center tracking-[1em] text-sm font-medium mb-3 relative w-full">
                        <span>SOFA</span>
                        <div class="mt-2 mx-auto h-[2px] w-full bg-[#d6cfa5]"></div>
                    </div>
                    <img src="{{ asset('images/collection3.jpg') }}" alt="Sofa"
                        class="w-full h-[330px] object-cover rounded shadow-md">
                </div>
            </div>
        </div>
    </div>
</section>

