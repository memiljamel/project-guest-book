<aside class="block w-auto h-full p-0 m-0 !visible overflow-hidden outline-none transition-transform fixed top-0 left-0 z-[1045] -translate-x-full lg:translate-x-0 lg:z-30 [&[data-te-offcanvas-show]]:transform-none [&[data-te-offcanvas-show]]:shadow-16dp" id="offcanvas" data-te-offcanvas-init tabindex="-1">
    <div class="block w-64 h-full bg-white border-r border-solid border-chinese-white shadow-none overflow-x-hidden overflow-y-auto dark:bg-charleston-green dark:border-dark-liver">

        <div class="block w-full h-14 p-2 m-0 relative lg:h-16 lg:py-3">
            <a href="" class="inline-block w-auto max-w-full h-10 px-2 py-1.5 m-0 headline-6 text-black/[0.87] no-underline truncate dark:text-white/[0.87]" id="sidebar-label">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>

        <ul class="block w-full py-2 pr-2 m-0 list-none shadow-none border-t border-solid border-chinese-white dark:border-dark-liver relative">
            <li class="block w-full h-auto p-0 m-0 overflow-hidden relative">
                <a href="{{ route('dashboard.index') }}" class="group flex justify-between items-center gap-4 w-full h-12 py-3 px-5 m-0 text-black/[0.60] rounded-r-full no-underline outline-none whitespace-nowrap overflow-hidden select-none relative hover:bg-black/[0.04] active:bg-black/[0.10] focus:bg-black/[0.12] dark:text-white/[0.60] dark:hover:bg-white/[0.04] dark:active:bg-white/[0.10] dark:focus:bg-white/[0.12] open:bg-primary/[0.04] open:text-primary open:hover:bg-primary/[0.04] open:active:bg-primary/[0.10] open:focus:bg-primary/[0.12] dark:open:bg-primary dark:open:text-black dark:open:hover:bg-primary dark:open:active:bg-primary dark:open:focus:bg-primary" data-te-ripple-init data-te-ripple-color="light" @if (request()->routeIs('dashboard.*')) open @endif>
                    <div class="inline-block min-w-[24px] w-auto h-auto p-0 m-0 relative">
                        <svg class="pointer-events-none w-full h-full fill-current" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                            <path d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z" />
                        </svg>
                    </div>

                    <div class="flex-1 inline-block w-full h-auto p-0 m-0 overflow-hidden relative">
						<span class="block w-full h-auto p-0 m-0 subtitle-1 text-black/[0.87] text-left truncate dark:text-white/[0.87] group-open:text-primary dark:group-open:text-black">
							{{ __('Dashboard') }}
						</span>
                    </div>
                </a>
            </li>

            <li class="block w-full h-auto p-0 m-0 overflow-hidden relative">
                <a href="{{ route('guests.index') }}" class="group flex justify-between items-center gap-4 w-full h-12 py-3 px-5 m-0 text-black/[0.60] rounded-r-full no-underline outline-none whitespace-nowrap overflow-hidden select-none relative hover:bg-black/[0.04] active:bg-black/[0.10] focus:bg-black/[0.12] dark:text-white/[0.60] dark:hover:bg-white/[0.04] dark:active:bg-white/[0.10] dark:focus:bg-white/[0.12] open:bg-primary/[0.04] open:text-primary open:hover:bg-primary/[0.04] open:active:bg-primary/[0.10] open:focus:bg-primary/[0.12] dark:open:bg-primary dark:open:text-black dark:open:hover:bg-primary dark:open:active:bg-primary dark:open:focus:bg-primary" data-te-ripple-init data-te-ripple-color="light" @if (request()->routeIs('guests.*')) open @endif>
                    <div class="inline-block min-w-[24px] w-auto h-auto p-0 m-0 relative">
                        <svg class="pointer-events-none w-full h-full fill-current" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                            <rect fill="none" height="24" width="24" />
                            <g><path d="M12,12.75c1.63,0,3.07,0.39,4.24,0.9c1.08,0.48,1.76,1.56,1.76,2.73L18,18H6l0-1.61c0-1.18,0.68-2.26,1.76-2.73 C8.93,13.14,10.37,12.75,12,12.75z M4,13c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2s-2,0.9-2,2C2,12.1,2.9,13,4,13z M5.13,14.1 C4.76,14.04,4.39,14,4,14c-0.99,0-1.93,0.21-2.78,0.58C0.48,14.9,0,15.62,0,16.43V18l4.5,0v-1.61C4.5,15.56,4.73,14.78,5.13,14.1z M20,13c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2s-2,0.9-2,2C18,12.1,18.9,13,20,13z M24,16.43c0-0.81-0.48-1.53-1.22-1.85 C21.93,14.21,20.99,14,20,14c-0.39,0-0.76,0.04-1.13,0.1c0.4,0.68,0.63,1.46,0.63,2.29V18l4.5,0V16.43z M12,6c1.66,0,3,1.34,3,3 c0,1.66-1.34,3-3,3s-3-1.34-3-3C9,7.34,10.34,6,12,6z" /></g>
                        </svg>
                    </div>

                    <div class="flex-1 inline-block w-full h-auto p-0 m-0 overflow-hidden relative">
						<span class="block w-full h-auto p-0 m-0 subtitle-1 text-black/[0.87] text-left truncate dark:text-white/[0.87] group-open:text-primary dark:group-open:text-black">
							{{ __('Guests') }}
						</span>
                    </div>
                </a>
            </li>

            <li class="block w-full h-auto p-0 m-0 overflow-hidden relative">
                <a href="{{ route('staffs.index') }}" class="group flex justify-between items-center gap-4 w-full h-12 py-3 px-5 m-0 text-black/[0.60] rounded-r-full no-underline outline-none whitespace-nowrap overflow-hidden select-none relative hover:bg-black/[0.04] active:bg-black/[0.10] focus:bg-black/[0.12] dark:text-white/[0.60] dark:hover:bg-white/[0.04] dark:active:bg-white/[0.10] dark:focus:bg-white/[0.12] open:bg-primary/[0.04] open:text-primary open:hover:bg-primary/[0.04] open:active:bg-primary/[0.10] open:focus:bg-primary/[0.12] dark:open:bg-primary dark:open:text-black dark:open:hover:bg-primary dark:open:active:bg-primary dark:open:focus:bg-primary" data-te-ripple-init data-te-ripple-color="light" @if (request()->routeIs('staffs.*')) open @endif>
                    <div class="inline-block min-w-[24px] w-auto h-auto p-0 m-0 relative">
                        <svg class="pointer-events-none w-full h-full fill-current" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000">
                            <g><rect fill="none" height="24" width="24"/></g>
                            <g><path d="M20,7h-5V4c0-1.1-0.9-2-2-2h-2C9.9,2,9,2.9,9,4v3H4C2.9,7,2,7.9,2,9v11c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V9 C22,7.9,21.1,7,20,7z M9,12c0.83,0,1.5,0.67,1.5,1.5S9.83,15,9,15s-1.5-0.67-1.5-1.5S8.17,12,9,12z M12,18H6v-0.75c0-1,2-1.5,3-1.5 s3,0.5,3,1.5V18z M13,9h-2V4h2V9z M18,16.5h-4V15h4V16.5z M18,13.5h-4V12h4V13.5z"/></g>
                        </svg>
                    </div>

                    <div class="flex-1 inline-block w-full h-auto p-0 m-0 overflow-hidden relative">
						<span class="block w-full h-auto p-0 m-0 subtitle-1 text-black/[0.87] text-left truncate dark:text-white/[0.87] group-open:text-primary dark:group-open:text-black">
							{{ __('Staffs') }}
						</span>
                    </div>
                </a>
            </li>

            <li class="block w-full h-auto p-0 m-0 overflow-hidden relative">
                <a href="{{ route('departments.index') }}" class="group flex justify-between items-center gap-4 w-full h-12 py-3 px-5 m-0 text-black/[0.60] rounded-r-full no-underline outline-none whitespace-nowrap overflow-hidden select-none relative hover:bg-black/[0.04] active:bg-black/[0.10] focus:bg-black/[0.12] dark:text-white/[0.60] dark:hover:bg-white/[0.04] dark:active:bg-white/[0.10] dark:focus:bg-white/[0.12] open:bg-primary/[0.04] open:text-primary open:hover:bg-primary/[0.04] open:active:bg-primary/[0.10] open:focus:bg-primary/[0.12] dark:open:bg-primary dark:open:text-black dark:open:hover:bg-primary dark:open:active:bg-primary dark:open:focus:bg-primary" data-te-ripple-init data-te-ripple-color="light" @if (request()->routeIs('departments.*')) open @endif>
                    <div class="inline-block min-w-[24px] w-auto h-auto p-0 m-0 relative">
                        <svg class="pointer-events-none w-full h-full fill-current" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="000">
                            <path d="M0 0h24v24H0z" fill="none" />
                            <path d="M22 11V3h-7v3H9V3H2v8h7V8h2v10h4v3h7v-8h-7v3h-2V8h2v3z" />
                        </svg>
                    </div>

                    <div class="flex-1 inline-block w-full h-auto p-0 m-0 overflow-hidden relative">
						<span class="block w-full h-auto p-0 m-0 subtitle-1 text-black/[0.87] text-left truncate dark:text-white/[0.87] group-open:text-primary dark:group-open:text-black">
							{{ __('Departments') }}
						</span>
                    </div>
                </a>
            </li>
        </ul>

        <ul class="block w-full py-2 pr-2 m-0 list-none shadow-none border-t border-solid border-chinese-white dark:border-dark-liver relative">
            <li class="block w-full h-auto p-0 m-0 overflow-hidden relative">
                <a href="{{ route('feedbacks.index') }}" class="group flex justify-between items-center gap-4 w-full h-12 py-3 px-5 m-0 text-black/[0.60] rounded-r-full no-underline outline-none whitespace-nowrap overflow-hidden select-none relative hover:bg-black/[0.04] active:bg-black/[0.10] focus:bg-black/[0.12] dark:text-white/[0.60] dark:hover:bg-white/[0.04] dark:active:bg-white/[0.10] dark:focus:bg-white/[0.12] open:bg-primary/[0.04] open:text-primary open:hover:bg-primary/[0.04] open:active:bg-primary/[0.10] open:focus:bg-primary/[0.12] dark:open:bg-primary dark:open:text-black dark:open:hover:bg-primary dark:open:active:bg-primary dark:open:focus:bg-primary" data-te-ripple-init data-te-ripple-color="light" @if (request()->routeIs('feedbacks.*')) open @endif>
                    <div class="inline-block min-w-[24px] w-auto h-auto p-0 m-0 relative">
                        <svg class="pointer-events-none w-full h-full fill-current" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000">
                            <path d="M0 0h24v24H0z" fill="none" />
                            <path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-7 12h-2v-2h2v2zm0-4h-2V6h2v4z" />
                        </svg>
                    </div>

                    <div class="flex-1 inline-block w-full h-auto p-0 m-0 overflow-hidden relative">
						<span class="block w-full h-auto p-0 m-0 subtitle-1 text-black/[0.87] text-left truncate dark:text-white/[0.87] group-open:text-primary dark:group-open:text-black">
							{{ __('Feedbacks') }}
						</span>
                    </div>
                </a>
            </li>
        </ul>

        <ul class="block w-full py-2 pr-2 m-0 list-none shadow-none border-t border-solid border-chinese-white dark:border-dark-liver relative">
            <li class="block w-full h-auto p-0 m-0 overflow-hidden relative">
                <a href="" class="group flex justify-between items-center gap-4 w-full h-12 py-3 px-5 m-0 text-black/[0.60] rounded-r-full no-underline outline-none whitespace-nowrap overflow-hidden select-none relative hover:bg-black/[0.04] active:bg-black/[0.10] focus:bg-black/[0.12] dark:text-white/[0.60] dark:hover:bg-white/[0.04] dark:active:bg-white/[0.10] dark:focus:bg-white/[0.12]" data-te-ripple-init data-te-ripple-color="light" target="_blank">
                    <div class="flex-1 inline-block w-full h-auto p-0 m-0 overflow-hidden relative">
						<span class="block w-full h-auto p-0 m-0 subtitle-1 text-black/[0.87] text-left truncate dark:text-white/[0.87]">
							{{ __('Help Center') }}
						</span>
                    </div>
                </a>
            </li>

            <li class="block w-full h-auto p-0 m-0 overflow-hidden relative">
                <a href="" class="group flex justify-between items-center gap-4 w-full h-12 py-3 px-5 m-0 text-black/[0.60] rounded-r-full no-underline outline-none whitespace-nowrap overflow-hidden select-none relative hover:bg-black/[0.04] active:bg-black/[0.10] focus:bg-black/[0.12] dark:text-white/[0.60] dark:hover:bg-white/[0.04] dark:active:bg-white/[0.10] dark:focus:bg-white/[0.12]" data-te-ripple-init data-te-ripple-color="light" target="_blank">
                    <div class="flex-1 inline-block w-full h-auto p-0 m-0 overflow-hidden relative">
						<span class="block w-full h-auto p-0 m-0 subtitle-1 text-black/[0.87] text-left truncate dark:text-white/[0.87]">
							{{ __('Terms of Service') }}
						</span>
                    </div>
                </a>
            </li>

            <li class="block w-full h-auto p-0 m-0 overflow-hidden relative">
                <a href="" class="group flex justify-between items-center gap-4 w-full h-12 py-3 px-5 m-0 text-black/[0.60] rounded-r-full no-underline outline-none whitespace-nowrap overflow-hidden select-none relative hover:bg-black/[0.04] active:bg-black/[0.10] focus:bg-black/[0.12] dark:text-white/[0.60] dark:hover:bg-white/[0.04] dark:active:bg-white/[0.10] dark:focus:bg-white/[0.12]" data-te-ripple-init data-te-ripple-color="light" target="_blank">
                    <div class="flex-1 inline-block w-full h-auto p-0 m-0 overflow-hidden relative">
						<span class="block w-full h-auto p-0 m-0 subtitle-1 text-black/[0.87] text-left truncate dark:text-white/[0.87]">
							{{ __('Privacy Policy') }}
						</span>
                    </div>
                </a>
            </li>
        </ul>

    </div>
</aside>
