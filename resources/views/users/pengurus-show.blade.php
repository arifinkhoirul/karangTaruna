@extends('layouts.layout_user')

@section('user_content')
    <section class="default-section">
        <div class="flex flex-col gap-16">
            {{-- ? menu pengurus --}}
            <div class="grid grid-cols-2 gap-12 max-md:grid-cols-1">
                {{-- ? gambar member --}}
                <div class="overflow-hidden flex justify-center order-1 max-md:order-2">
                    <img src="{{ asset($member->teenager->image) }}" alt=""
                        class="block object-cover rounded-2xl w-[350px] h-auto transition-transform duration-300 ease-in-out group-hover:scale-110">
                </div>

                <div class="flex flex-col gap-6 order-2 max-md:order-1">
                    {{-- ? nama --}}
                    <div class="flex flex-col gap-3 max-md:gap-2 ">
                        <h1 class="text-textPrimary text-5xl max-lg:text-4xl capitalize font-bold leading-snug">
                            maudy ayunda</h1>
                        <div class="h-1 w-24 bg-primary rounded-full"></div>
                    </div>

                    {{-- ? deskripsi --}}
                    <p class="text-textSecondary font-light text-lg max-lg:text-base leading-relaxed"><span
                            class="text-textPrimary font-bold">Maudy Ayunda</span> adalah seorang aktris, penyanyi, penulis,
                        sekaligus aktivis muda Indonesia. Ia dikenal sebagai sosok multitalenta yang tidak hanya berkarya di
                        dunia hiburan, tetapi juga berprestasi di bidang akademik dengan menempuh pendidikan di Oxford
                        University dan Stanford University.</p>

                    <div class="flex flex-col gap-6">
                        <h5 class="text-textPrimary capitalize text-4xl font-semibold max-lg:text-3xl">kenali lebih lanjut
                        </h5>
                        {{-- ? media social --}}
                        <div class="flex gap-6 max-md:gap-4">
                            <a href="#" onclick="event.stopPropagation();"
                                class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center transition-colors duration-300 hover:bg-red-700">
                                <i class="ri-instagram-fill text-2xl"></i>
                            </a>
                            <a href="#" onclick="event.stopPropagation();"
                                class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center transition-colors duration-300 hover:bg-red-700">
                                <i class="ri-tiktok-fill text-2xl"></i>
                            </a>
                            <a href="#" onclick="event.stopPropagation();"
                                class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center transition-colors duration-300 hover:bg-red-700">
                                <i class="ri-twitter-x-fill text-2xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ? menu portfolio --}}
            <div class="flex flex-col gap-8">
                {{-- ? h1 portfolio --}}
                <div class="flex flex-col gap-3 max-md:gap-2">
                    <h1 class="text-textPrimary text-4xl max-lg:text-3xl capitalize font-bold leading-snug">
                        portfolio</h1>
                    <div class="h-1 w-20 bg-primary rounded-full"></div>
                </div>

                {{-- ? isi portfolio --}}
                <div class="grid grid-cols-3 gap-10 max-lg:grid-cols-2 max-sm:grid-cols-1 max-md:gap-6">
                    {{-- ? card --}}
                    <div class="bg-bg1 rounded-xl overflow-hidden shadow-md flex flex-col cursor-pointer group"
                        onclick="openModal()">
                        <div class="h-64 w-full overflow-hidden">
                            <img src="{{ asset('uploads/portfolio/portfolio-img-04.jpg') }}" alt=""
                                class="w-full h-full object-cover">
                        </div>
                        <div class="p-5 flex flex-col gap-2">
                            <h5 class="text-textSecondary text-base font-semibold uppercase">video editing</h5>
                            <h1
                                class="text-textPrimary capitalize font-semibold text-2xl flex justify-between line-clamp-2 transition-colors duration-300">
                                edit ducation
                                <i
                                    class="ri-arrow-right-up-fill text-primary transform scale-0 opacity-0 group-hover:scale-100 group-hover:opacity-100 transition-all duration-300"></i>
                            </h1>
                        </div>
                    </div>


                    <!-- MODAL -->
                    <div id="modal"
                        class="fixed inset-0 bg-black/60 backdrop-blur-sm items-center justify-center z-50 hidden"
                        onclick="closeModal()">

                        <div id="modalContent"
                            class="bg-white p-8 rounded-xl shadow-lg max-w-3xl w-full max-h-[80vh] overflow-y-auto transform scale-0 transition-transform duration-300 mx-4 relative no-scrollbar"
                            onclick="event.stopPropagation()">

                            <!-- Tombol close -->
                            <button onclick="closeModal()" class="absolute top-3 right-3 text-primary hover:text-red-700">
                                <i class="ri-close-line font-bold text-2xl"></i>
                            </button>

                            <!-- Isi modal -->
                            <img src="{{ asset('uploads/portfolio/portfolio-img-04.jpg') }}" alt=""
                                class="w-full h-64 object-cover rounded-xl">
                            <div class="p-6">
                                <h1 class="text-2xl font-bold mb-4">Edit DUCATION</h1>
                                <p class="text-gray-600 leading-relaxed">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut sed, provident inventore voluptates debitis, animi numquam ipsa pariatur quo maxime unde. Cupiditate repellat est vero. Quidem ad corporis accusamus possimus? Nesciunt dolore eaque eligendi in consequuntur quam eius non, magni porro reiciendis molestias similique assumenda, veritatis voluptate quidem! Aliquam, enim a illum nulla, recusandae nam blanditiis repellendus eius ratione facere odio fugit ex quisquam itaque error labore veritatis, accusantium aut deleniti doloremque. Nesciunt odit, aliquid blanditiis odio ad tempore magnam eaque at vero sint error excepturi pariatur ab praesentium nam eum, labore deserunt harum qui earum provident corrupti debitis laborum? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, dolor unde! Recusandae cupiditate aliquam ut iure corrupti iusto dolorem est quam illo nostrum excepturi, magnam labore vel sint, autem consequuntur perferendis. Molestiae corporis ullam blanditiis a cupiditate officia necessitatibus fugiat natus! Libero nihil atque mollitia necessitatibus pariatur et nemo harum est alias consequatur voluptate, hic, laboriosam culpa nisi ullam voluptatum odit, quis ducimus iure dolore odio commodi. Soluta quibusdam qui perferendis nam natus aspernatur adipisci veniam maiores labore assumenda nulla, vitae dolores unde deleniti officia laudantium perspiciatis enim veritatis provident aliquam voluptatem inventore. Maiores odio nihil assumenda expedita dicta inventore amet similique provident eos quibusdam ex placeat itaque, aliquam eius voluptatibus facilis quam corrupti fuga temporibus eveniet architecto est mollitia voluptatum saepe? Tempore enim magni reprehenderit consequuntur asperiores nemo, sed incidunt commodi dolorem modi voluptas. Perspiciatis rem commodi, tempore suscipit asperiores accusantium distinctio fugiat, officia consequatur eligendi corporis excepturi consectetur voluptate repellendus est iure, consequuntur molestiae necessitatibus sunt sed adipisci accusamus atque aperiam dolorum. Possimus suscipit quam eos quos maxime accusamus, voluptatum doloribus ad sunt dignissimos. In, incidunt nihil at debitis voluptatum id sunt? Mollitia, nobis sit voluptatibus illo et debitis! Maiores unde a tempora ipsa, eligendi ut repellendus quam?
                                </p>
                            </div>
                        </div>
                    </div>




                </div>

            </div>
        </div>
    </section>
@endsection
