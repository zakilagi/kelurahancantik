<div class="relative font-inter antialiased">

    <div class="w-full max-w-6xl mx-auto px-4 md:px-6 py-24">

        <!-- Tabs component -->
        <div x-data="{ activeTab: 1 }">

            <!-- Buttons -->
            <div class="flex justify-center">
                <div role="tablist"
                    class="max-[480px]:max-w-[180px] inline-flex flex-wrap justify-center bg-slate-200 rounded-[20px] p-1 mb-8 min-[480px]:mb-12"
                    @keydown.right.prevent.stop="$focus.wrap().next()" @keydown.left.prevent.stop="$focus.wrap().prev()"
                    @keydown.home.prevent.stop="$focus.first()" @keydown.end.prevent.stop="$focus.last()">
                    <!-- Button #1 -->
                    <button id="tab-1"
                        class="flex-1 text-sm font-medium h-8 px-4 rounded-2xl whitespace-nowrap focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150 ease-in-out"
                        :class="activeTab === 1 ? 'bg-white text-slate-900' : 'text-slate-600 hover:text-slate-900'"
                        :tabindex="activeTab === 1 ? 0 : -1" :aria-selected="activeTab === 1" aria-controls="tabpanel-1"
                        @click="activeTab = 1" @focus="activeTab = 1">Grafik
                        Jenis Kelamin</button>
                    <!-- Button #2 -->
                    <button id="tab-2"
                        class="flex-1 text-sm font-medium h-8 px-4 rounded-2xl whitespace-nowrap focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150 ease-in-out"
                        :class="activeTab === 2 ? 'bg-white text-slate-900' : 'text-slate-600 hover:text-slate-900'"
                        :tabindex="activeTab === 2 ? 0 : -1" :aria-selected="activeTab === 2" aria-controls="tabpanel-2"
                        @click="activeTab = 2" @focus="activeTab = 2">Grafik
                        Pekerjaan</button>
                    <!-- Button #3 -->
                    <button id="tab-3"
                        class="flex-1 text-sm font-medium h-8 px-4 rounded-2xl whitespace-nowrap focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150 ease-in-out"
                        :class="activeTab === 3 ? 'bg-white text-slate-900' : 'text-slate-600 hover:text-slate-900'"
                        :tabindex="activeTab === 3 ? 0 : -1" :aria-selected="activeTab === 3" aria-controls="tabpanel-3"
                        @click="activeTab = 3" @focus="activeTab = 3">Grafik Agama</button>
                </div>
            </div>

            <!-- Tab panels -->
            <div class="max-w-[1280px] mx-auto">
                <div class="relative flex flex-col">

                    <div id="tabpanel-1" role="tabpanel" tabindex="0" aria-labelledby="tab-1" x-show="activeTab === 1"
                        x-transition:enter="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-700 transform order-first"
                        x-transition:enter-start="opacity-0 -translate-y-8"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-300 transform absolute"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-12">
                        @livewire(\App\Livewire\Widgets\Chart\PendudukChart::class)
                    </div>

                    <div id="tabpanel-2" role="tabpanel" tabindex="0" aria-labelledby="tab-2" x-show="activeTab === 2"
                        x-transition:enter="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-700 transform order-first"
                        x-transition:enter-start="opacity-0 -translate-y-8"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-300 transform absolute"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-12">
                        @livewire(\App\Livewire\Widgets\Chart\PekerjaanChart::class)
                    </div>
                    <div id="tabpanel-3" role="tabpanel" tabindex="0" aria-labelledby="tab-3" x-show="activeTab === 3"
                        x-transition:enter="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-700 transform order-first"
                        x-transition:enter-start="opacity-0 -translate-y-8"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-300 transform absolute"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-12">
                        @livewire(\App\Livewire\Widgets\Chart\AgamaChart::class)
                    </div>

                    <!-- Panel #1 -->
                    {{-- <article id="tabpanel-1"
                            class="w-full bg-white rounded-2xl shadow-xl min-[480px]:flex items-stretch focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300"
                            role="tabpanel" tabindex="0" aria-labelledby="tab-1" x-show="activeTab === 1"
                            x-transition:enter="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-700 transform order-first"
                            x-transition:enter-start="opacity-0 -translate-y-8"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-300 transform absolute"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-12">
                            <figure class="min-[480px]:w-1/2 p-2">
                                <img class="w-full h-[180px] min-[480px]:h-full object-cover rounded-lg" width="304"
                                    height="214"
                                    src="https://cruip-tutorials.vercel.app/unconventional-tabs/tabs-image-01.jpg"
                                    alt="Tab 01" />
                            </figure>
                            <div class="min-[480px]:w-1/2 flex flex-col justify-center p-5 pl-3">
                                <div class="flex justify-between mb-1">
                                    <header>
                                        <div class="font-caveat text-xl font-medium text-sky-500">Mountain</div>
                                        <h1 class="text-xl font-bold text-slate-900">Lassen Peak</h1>
                                    </header>
                                    <button
                                        class="shrink-0 h-[30px] w-[30px] border border-slate-200 hover:border-slate-300 rounded-full shadow inline-flex items-center justify-center focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150 ease-in-out"
                                        aria-label="Like">
                                        <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="14"
                                            height="13">
                                            <path
                                                d="M6.985 1.635C5.361.132 2.797.162 1.21 1.7A3.948 3.948 0 0 0 0 4.541a3.948 3.948 0 0 0 1.218 2.836l5.156 4.88a.893.893 0 0 0 1.223 0l5.165-4.886a3.925 3.925 0 0 0 .061-5.663C11.231.126 8.62.094 6.985 1.635Zm4.548 4.53-4.548 4.303-4.54-4.294a2.267 2.267 0 0 1 0-3.275 2.44 2.44 0 0 1 3.376 0c.16.161.293.343.398.541a.915.915 0 0 0 .766.409c.311 0 .6-.154.767-.409.517-.93 1.62-1.401 2.677-1.142 1.057.259 1.797 1.181 1.796 2.238a2.253 2.253 0 0 1-.692 1.63Z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="text-slate-500 text-sm line-clamp-3 mb-2">It is a long established fact that
                                    a reader will be distracted by the readable content of a page when looking at its
                                    layout.</div>
                                <div class="text-right">
                                    <a class="text-sm font-medium text-indigo-500 hover:text-indigo-600 focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150 ease-out"
                                        href="#0">Read more -&gt;</a>
                                </div>
                            </div>
                        </article> --}}

                    <!-- Panel #2 -->
                    {{-- <article id="tabpanel-2"
                            class="w-full bg-white rounded-2xl shadow-xl min-[480px]:flex items-stretch focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300"
                            role="tabpanel" tabindex="0" aria-labelledby="tab-2" x-show="activeTab === 2"
                            x-transition:enter="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-700 transform order-first"
                            x-transition:enter-start="opacity-0 -translate-y-8"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-300 transform absolute"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-12">
                            <figure class="min-[480px]:w-1/2 p-2">
                                <img class="w-full h-[180px] min-[480px]:h-full object-cover rounded-lg" width="304"
                                    height="214"
                                    src="https://cruip-tutorials.vercel.app/unconventional-tabs/tabs-image-02.jpg"
                                    alt="Tab 02" />
                            </figure>
                            <div class="min-[480px]:w-1/2 flex flex-col justify-center p-5 pl-3">
                                <div class="flex justify-between mb-1">
                                    <header>
                                        <div class="font-caveat text-xl font-medium text-sky-500">Mountain</div>
                                        <h1 class="text-xl font-bold text-slate-900">Mount Shasta</h1>
                                    </header>
                                    <button
                                        class="shrink-0 h-[30px] w-[30px] border border-slate-200 hover:border-slate-300 rounded-full shadow inline-flex items-center justify-center focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150 ease-in-out"
                                        aria-label="Like">
                                        <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="14"
                                            height="13">
                                            <path
                                                d="M6.985 1.635C5.361.132 2.797.162 1.21 1.7A3.948 3.948 0 0 0 0 4.541a3.948 3.948 0 0 0 1.218 2.836l5.156 4.88a.893.893 0 0 0 1.223 0l5.165-4.886a3.925 3.925 0 0 0 .061-5.663C11.231.126 8.62.094 6.985 1.635Zm4.548 4.53-4.548 4.303-4.54-4.294a2.267 2.267 0 0 1 0-3.275 2.44 2.44 0 0 1 3.376 0c.16.161.293.343.398.541a.915.915 0 0 0 .766.409c.311 0 .6-.154.767-.409.517-.93 1.62-1.401 2.677-1.142 1.057.259 1.797 1.181 1.796 2.238a2.253 2.253 0 0 1-.692 1.63Z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="text-slate-500 text-sm line-clamp-3 mb-2">It is a long established fact that
                                    a reader will be distracted by the readable content of a page when looking at its
                                    layout.It is a long established fact that a reader will be distracted by the
                                    readable content of a page when looking at its layout.It is a long established fact
                                    that a reader will be distracted by the readable content of a page when looking at
                                    its layout.It is a long established fact that a reader will be distracted by the
                                    readable content of a page when looking at its layout.</div>
                                <div class="text-right">
                                    <a class="text-sm font-medium text-indigo-500 hover:text-indigo-600 focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150 ease-out"
                                        href="#0">Read more -&gt;</a>
                                </div>
                            </div>
                        </article> --}}

                    <!-- Panel #3 -->
                    {{-- <article id="tabpanel-3"
                            class="w-full bg-white rounded-2xl shadow-xl min-[480px]:flex items-stretch focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300"
                            role="tabpanel" tabindex="0" aria-labelledby="tab-3" x-show="activeTab === 3"
                            x-transition:enter="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-700 transform order-first"
                            x-transition:enter-start="opacity-0 -translate-y-8"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-300 transform absolute"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-12">
                            <figure class="min-[480px]:w-1/2 p-2">
                                <img class="w-full h-[180px] min-[480px]:h-full object-cover rounded-lg" width="304"
                                    height="214"
                                    src="https://cruip-tutorials.vercel.app/unconventional-tabs/tabs-image-03.jpg"
                                    alt="Tab 03" />
                            </figure>
                            <div class="min-[480px]:w-1/2 flex flex-col justify-center p-5 pl-3">
                                <div class="flex justify-between mb-1">
                                    <header>
                                        <div class="font-caveat text-xl font-medium text-sky-500">Mountain</div>
                                        <h1 class="text-xl font-bold text-slate-900">Eureka Peak</h1>
                                    </header>
                                    <button
                                        class="shrink-0 h-[30px] w-[30px] border border-slate-200 hover:border-slate-300 rounded-full shadow inline-flex items-center justify-center focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150 ease-in-out"
                                        aria-label="Like">
                                        <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="14"
                                            height="13">
                                            <path
                                                d="M6.985 1.635C5.361.132 2.797.162 1.21 1.7A3.948 3.948 0 0 0 0 4.541a3.948 3.948 0 0 0 1.218 2.836l5.156 4.88a.893.893 0 0 0 1.223 0l5.165-4.886a3.925 3.925 0 0 0 .061-5.663C11.231.126 8.62.094 6.985 1.635Zm4.548 4.53-4.548 4.303-4.54-4.294a2.267 2.267 0 0 1 0-3.275 2.44 2.44 0 0 1 3.376 0c.16.161.293.343.398.541a.915.915 0 0 0 .766.409c.311 0 .6-.154.767-.409.517-.93 1.62-1.401 2.677-1.142 1.057.259 1.797 1.181 1.796 2.238a2.253 2.253 0 0 1-.692 1.63Z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="text-slate-500 text-sm line-clamp-3 mb-2">It is a long established fact
                                    that a reader will be distracted by the readable content of a page when looking at
                                    its layout.</div>
                                <div class="text-right">
                                    <a class="text-sm font-medium text-indigo-500 hover:text-indigo-600 focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150 ease-out"
                                        href="#0">Read more -&gt;</a>
                                </div>
                            </div>
                        </article> --}}

                </div>
            </div>

        </div>
        <!-- End: Tabs component -->

    </div>

    <!-- Banner with links -->
    {{-- <div class="fixed bottom-0 right-0 w-full md:bottom-6 md:right-12 md:w-auto z-50"
        :class="bannerOpen ? '' : 'hidden'" x-data="{ bannerOpen: true }">
        <div class="bg-slate-800 text-sm p-3 md:rounded shadow flex justify-between">
            <div class="text-slate-500 inline-flex">
                <a class="font-medium hover:underline text-slate-300"
                    href="https://cruip.com/using-tailwind-css-and-alpine-js-to-create-animated-and-accessible-tabs/"
                    target="_blank">
                    Read Tutorial
                </a>
                <span class="italic px-1.5">or</span>
                <a class="font-medium hover:underline text-indigo-500 flex items-center"
                    href="https://github.com/cruip/cruip-tutorials/blob/main/unconventional-tabs/index.html"
                    target="_blank" rel="noreferrer">
                    <span>Download</span>
                    <svg class="fill-indigo-400 ml-1" xmlns="http://www.w3.org/2000/svg" width="9" height="9">
                        <path d="m1.649 8.514-.91-.915 5.514-5.523H2.027l.01-1.258h6.388v6.394H7.158l.01-4.226z" />
                    </svg>
                </a>
            </div>
            <button class="text-slate-500 hover:text-slate-400 pl-2 ml-3 border-l border-slate-700"
                @click="bannerOpen = false">
                <span class="sr-only">Close</span>
                <svg class="w-4 h-4 shrink-0 fill-current" viewBox="0 0 16 16">
                    <path
                        d="M12.72 3.293a1 1 0 00-1.415 0L8.012 6.586 4.72 3.293a1 1 0 00-1.414 1.414L6.598 8l-3.293 3.293a1 1 0 101.414 1.414l3.293-3.293 3.293 3.293a1 1 0 001.414-1.414L9.426 8l3.293-3.293a1 1 0 000-1.414z" />
                </svg>
            </button>
        </div>
    </div> --}}

</div>
