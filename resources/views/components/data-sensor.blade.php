<div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

    <div
        class="flex justify-between border-b border-gray-200 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
        <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b" id="defaultTab"
            data-tabs-toggle="#defaultTabContent" role="tablist">
            <li class="mr-2">
                <button id="sensors-{{ $data->id }}-tab" data-tabs-target="#sensors-{{ $data->id }}" type="button"
                    role="tab" aria-controls="sensors-{{ $data->id }}" aria-selected="true"
                    class="inline-block p-4 hover:text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300">Sensors</button>
            </li>
            <li class="mr-2">
                <button id="graphic-{{ $data->id }}-tab" data-tabs-target="#graphic-{{ $data->id }}"
                    type="button" role="tab" aria-controls="graphic-{{ $data->id }}" aria-selected="false"
                    class="inline-block p-4 text-blue-600 rounded-tl-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">Graphic</button>
            </li>
        </ul>
        <div class="flex justify-end px-4">
            <button id="dropdownButton-{{ $data->id }}" data-dropdown-toggle="dropdown-{{ $data->id }}"
                class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5"
                type="button">
                <span class="sr-only">Open dropdown</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 16 3">
                    <path
                        d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                </svg>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdown-{{ $data->id }}"
                class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2" aria-labelledby="dropdownButton-{{ $data->id }}">
                    <li>
                        <button value="{{ $data->id }}" data-modal-target="edit-alat-modal"
                            data-modal-toggle="edit-alat-modal"
                            class="editBtn block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</button>

                    </li>
                    <li>

                        <a href="{{ route('dashboard.destroy', $data->id) }}"
                            class="w-full  text-left block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                            data-confirm-delete="true">Delete</a>

                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="defaultTabContent">
        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="sensors-{{ $data->id }}"
            role="tabpanel" aria-labelledby="sensors-{{ $data->id }}-tab">
            <dl
                class="grid max-w-screen-xl grid-cols-2 gap-8 p-4 mx-auto text-gray-900 sm:grid-cols-3 xl:grid-cols-6 dark:text-white sm:p-8">
                <div class="flex flex-col items-center justify-center">

                    {{-- <img class="rounded-full w-fit h-fit"
                                src="https://image.pngaaa.com/488/1418488-middle.png" alt="image description"> --}}
                    <dt class="mb-2 md:text-xl font-extrabold my-4 xs:text-sm">{{ $data->ph }}
                        pH</dt>

                    <dd class="text-gray-500 dark:text-gray-400">pH</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    {{-- <img class="rounded-full w-fit h-fit"
                                src="https://image.pngaaa.com/488/1418488-middle.png" alt="image description"> --}}
                    <dt class="mb-2 md:text-xl font-extrabold my-4 xs:text-sm">{{ $data->suhu }}
                        °C</dt>
                    <dd class="text-gray-500 dark:text-gray-400">Suhu</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    {{-- <img class="rounded-full w-fit h-fit"
                                src="https://image.pngaaa.com/488/1418488-middle.png" alt="image description"> --}}
                    <dt class="mb-2 md:text-xl font-extrabold my-4 xs:text-sm">{{ $data->amonia }}
                        PPM</dt>
                    <dd class="text-gray-500 dark:text-gray-400">Amonia</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    {{-- <img class="rounded-full w-fit h-fit"
                                src="https://image.pngaaa.com/488/1418488-middle.png" alt="image description"> --}}
                    <dt class="mb-2 md:text-xl font-extrabold my-4 xs:text-sm">{{ $data->tss }}
                        PPM</dt>
                    <dd class="text-gray-500 dark:text-gray-400">TSS</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    {{-- <img class="rounded-full w-fit h-fit"
                                src="https://image.pngaaa.com/488/1418488-middle.png" alt="image description"> --}}
                    <dt class="mb-2 md:text-xl font-extrabold my-4 xs:text-sm">{{ $data->tds }}
                        NTU</dt>
                    <dd class="text-gray-500 dark:text-gray-400">TDS</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    {{-- <img class="rounded-full w-fit h-fit"
                                src="https://image.pngaaa.com/488/1418488-middle.png" alt="image description"> --}}
                    <dt class="mb-2 md:text-xl font-extrabold my-4 xs:text-sm">
                        {{ $data->salinitas }} PPT</dt>
                    <dd class="text-gray-500 dark:text-gray-400">Salinitas</dd>
                </div>
            </dl>
        </div>
        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="graphic-{{ $data->id }}"
            role="tabpanel" aria-labelledby="graphic-{{ $data->id }}-tab">

            {{-- Graph --}}
            <div class="max-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
                <div class="flex justify-between mb-5">
                    <div class="grid gap-4 grid-cols-2">
                        <div>
                            <h5
                                class="inline-flex items-center text-gray-500 dark:text-gray-400 leading-none font-normal mb-2">
                                Clicks
                                <svg data-popover-target="clicks-info" data-popover-placement="bottom"
                                    class="w-3 h-3 text-gray-400 hover:text-gray-900 dark:hover:text-white cursor-pointer ml-1"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <div data-popover id="clicks-info" role="tooltip"
                                    class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                    <div class="p-3 space-y-2">
                                        <h3 class="font-semibold text-gray-900 dark:text-white">Clicks growth -
                                            Incremental</h3>
                                        <p>Report helps navigate cumulative growth of community activities.
                                            Ideally, the chart should have a growing trend, as stagnating chart
                                            signifies a significant decrease of community activity.</p>
                                        <h3 class="font-semibold text-gray-900 dark:text-white">Calculation</h3>
                                        <p>For each date bucket, the all-time volume of activities is
                                            calculated. This means that activities in period n contain all
                                            activities up to period n, plus the activities generated by your
                                            community in period.</p>
                                        <a href="#"
                                            class="flex items-center font-medium text-blue-600 dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:underline">Read
                                            more <svg class="w-2 h-2 ml-1.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                            </svg></a>
                                    </div>
                                    <div data-popper-arrow></div>
                                </div>
                            </h5>
                            <p class="text-gray-900 dark:text-white text-2xl leading-none font-bold">42,3k</p>
                        </div>
                        <div>
                            <h5
                                class="inline-flex items-center text-gray-500 dark:text-gray-400 leading-none font-normal mb-2">
                                CPC
                                <svg data-popover-target="cpc-info" data-popover-placement="bottom"
                                    class="w-3 h-3 text-gray-400 hover:text-gray-900 dark:hover:text-white cursor-pointer ml-1"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <div data-popover id="cpc-info" role="tooltip"
                                    class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                    <div class="p-3 space-y-2">
                                        <h3 class="font-semibold text-gray-900 dark:text-white">CPC growth -
                                            Incremental</h3>
                                        <p>Report helps navigate cumulative growth of community activities.
                                            Ideally, the chart should have a growing trend, as stagnating chart
                                            signifies a significant decrease of community activity.</p>
                                        <h3 class="font-semibold text-gray-900 dark:text-white">Calculation
                                        </h3>
                                        <p>For each date bucket, the all-time volume of activities is
                                            calculated. This means that activities in period n contain all
                                            activities up to period n, plus the activities generated by your
                                            community in period.</p>
                                        <a href="#"
                                            class="flex items-center font-medium text-blue-600 dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:underline">Read
                                            more <svg class="w-2 h-2 ml-1.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                            </svg></a>
                                    </div>
                                    <div data-popper-arrow></div>
                                </div>
                            </h5>
                            <p class="text-gray-900 dark:text-white text-2xl leading-none font-bold">$5.40</p>
                        </div>
                    </div>
                    <div>
                        <button id="dropdownDefaultButton" data-dropdown-toggle="lastDaysdropdown"
                            data-dropdown-placement="bottom" type="button"
                            class="px-3 py-2 inline-flex items-center text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Last
                            week <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <div id="lastDaysdropdown"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                        7 days</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                        30 days</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                        90 days</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="line-chart"></div>
                <div
                    class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between mt-2.5">
                    <div class="pt-5">
                        <a href="#"
                            class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-3.5 h-3.5 text-white mr-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                                <path
                                    d="M14.066 0H7v5a2 2 0 0 1-2 2H0v11a1.97 1.97 0 0 0 1.934 2h12.132A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.934-2Zm-3 15H4.828a1 1 0 0 1 0-2h6.238a1 1 0 0 1 0 2Zm0-4H4.828a1 1 0 0 1 0-2h6.238a1 1 0 1 1 0 2Z" />
                                <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.98 2.98 0 0 0 .13 5H5Z" />
                            </svg>
                            View full report
                        </a>
                    </div>
                </div>
            </div>
            {{-- Graph --}}


            {{-- <h2 class="mb-3 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">Powering
                        innovation & trust at 200,000+ companies worldwide</h2>
                    <p class="mb-3 text-gray-500 dark:text-gray-400">Empower Developers, IT Ops, and business teams to
                        collaborate at high velocity. Respond to changes and deliver great customer and employee service
                        experiences fast.</p>
                    <a href="#"
                        class="inline-flex items-center font-medium text-blue-600 hover:text-blue-800 dark:text-blue-500 dark:hover:text-blue-700">
                        Learn more
                        <svg class="w-2.5 h-2.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                    </a> --}}
        </div>

    </div>
</div>
