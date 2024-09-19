@extends('app')

@section('title', 'Dashboard')

@section('content')
    <div class="flex flex-col w-full h-full p-0 m-0 relative">

        @include('layout.header')

        @include('layout.sidebar')

        <main class="block flex-grow flex-shrink-0 w-auto h-auto p-0 mt-14 ml-0 lg:mt-16 lg:ml-64">
            <div class="block w-full max-w-7xl h-auto p-4 mx-auto overflow-hidden xl:m-0">

                {{-- Breadcrumbs --}}
                <nav class="block w-full h-auto p-0 m-0 list-none rounded whitespace-nowrap overflow-hidden relative">
                    <ol class="block w-full h-auto p-0 m-0 overflow-hidden">
                        <li class="inline-block w-auto h-auto p-0 m-0 relative [&+li::before]:content-['/'] [&+li::before]:mx-1 [&+li::before]:text-black/[0.60] dark:[&+li::before]:text-white/[0.60]">
                            <a href="{{ route('dashboard.index') }}" class="inline-block w-auto h-auto p-0 m-0 subtitle-1 text-primary no-underline outline-none cursor-pointer hover:underline focus:underline active:underline">
                                {{ __('Dashboard') }}
                            </a>
                        </li>

                        <li class="inline-block w-auto h-auto p-0 m-0 relative [&+li::before]:content-['/'] [&+li::before]:mx-1 [&+li::before]:text-black/[0.60] dark:[&+li::before]:text-white/[0.60]">
                            <span class="inline-block w-auto h-auto p-0 m-0 subtitle-1 text-black/[0.60] cursor-default dark:text-white/[0.60]">
                                {{ __('Home') }}
                            </span>
                        </li>
                    </ol>
                </nav>
                {{-- End Breadcrumbs --}}

                <div class="flex justify-start items-stretch flex-wrap gap-4 p-0 mt-4 relative sm:flex-nowrap">

                    {{-- Cards --}}
                    <div class="block min-w-0 w-full h-auto p-0 m-0 relative sm:w-3/12">
                        <div class="block w-full h-auto p-4 m-0 bg-white rounded text-black/[0.87] shadow-01dp overflow-hidden dark:bg-charleston-green">
                            <div class="flex justify-between items-center w-full h-auto p-0 m-0 relative">
                                <div class="flex-1 inline-block w-full h-auto pr-4 m-0 overflow-hidden relative">
                                    <h5 class="block w-full h-auto p-0 m-0 text-black/[0.60] subtitle-2 text-xs text-left uppercase truncate dark:text-white/[0.60]">
                                        {{ __('Today') }}
                                    </h5>

                                    <span class="block w-full h-auto p-0 m-0 text-black/[0.87] headline-6 text-left truncate dark:text-white/[0.60]">
                                        {{ $today?->today_count }}
                                    </span>
                                </div>

                                <div class="inline-block w-auto h-auto p-0 m-0 relative">
                                    <div class="block w-12 h-12 p-3 m-0 bg-primary rounded-full text-white shadow-lg relative dark:text-black">
                                        <svg class="pointer-events-none w-full h-full fill-current" xmlns="http://www.w3.org/2000/svg" enableBackground="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                            <rect fill="none" height="24" width="24" />
                                            <g><path d="M12,12.75c1.63,0,3.07,0.39,4.24,0.9c1.08,0.48,1.76,1.56,1.76,2.73L18,18H6l0-1.61c0-1.18,0.68-2.26,1.76-2.73 C8.93,13.14,10.37,12.75,12,12.75z M4,13c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2s-2,0.9-2,2C2,12.1,2.9,13,4,13z M5.13,14.1 C4.76,14.04,4.39,14,4,14c-0.99,0-1.93,0.21-2.78,0.58C0.48,14.9,0,15.62,0,16.43V18l4.5,0v-1.61C4.5,15.56,4.73,14.78,5.13,14.1z M20,13c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2s-2,0.9-2,2C18,12.1,18.9,13,20,13z M24,16.43c0-0.81-0.48-1.53-1.22-1.85 C21.93,14.21,20.99,14,20,14c-0.39,0-0.76,0.04-1.13,0.1c0.4,0.68,0.63,1.46,0.63,2.29V18l4.5,0V16.43z M12,6c1.66,0,3,1.34,3,3 c0,1.66-1.34,3-3,3s-3-1.34-3-3C9,7.34,10.34,6,12,6z" /></g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-start items-center w-full h-auto p-0 mt-4 relative">
                                @if ($today?->latest >= $today?->longest)
                                    <div class="inline-block w-auto h-auto p-px m-0 text-green-500 align-middle relative">
                                        <svg class="pointer-events-none w-full h-full fill-current" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                            <path d="M0 0h24v24H0z" fill="none" />
                                            <path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6z" />
                                        </svg>
                                    </div>

                                    <span class="inline-block w-auto h-auto p-0 m-0 text-green-500 body-2 text-left align-middle truncate">
                                        @if ($today?->today_count > 0)
                                            {{ number_format(($today?->latest - $today?->longest) / $today?->latest * 100, 2) }}%
                                        @else
                                            {{ __('0.00%') }}
                                        @endif
                                    </span>
                                @else
                                    <div class="inline-block w-auto h-auto p-px m-0 text-red-500 align-middle relative">
                                        <svg class="pointer-events-none w-full h-full fill-current" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                            <path d="M0 0h24v24H0z" fill="none" />
                                            <path d="M16 18l2.29-2.29-4.88-4.88-4 4L2 7.41 3.41 6l6 6 4-4 6.3 6.29L22 12v6z" />
                                        </svg>
                                    </div>

                                    <span class="inline-block w-auto h-auto p-0 m-0 text-red-500 body-2 text-left align-middle truncate">
                                        @if ($today?->today_count > 0)
                                            {{ number_format(($today?->latest - $today?->longest) / $today?->latest * 100, 2) }}%
                                        @else
                                            {{ __('0.00%') }}
                                        @endif
                                    </span>
                                @endif

                                <span class="inline-block w-auto h-auto p-0 ml-4 text-black/[0.60] body-2 text-left align-middle truncate dark:text-white/[0.60]">
                                    {{ __('Since last yesterday') }}
                                </span>
                            </div>
                        </div>
                    </div>
                    {{-- End Cards --}}

                    {{-- Cards --}}
                    <div class="block min-w-0 w-full h-auto p-0 m-0 relative sm:w-3/12">
                        <div class="block w-full h-auto p-4 m-0 bg-white rounded text-black/[0.87] shadow-01dp overflow-hidden dark:bg-charleston-green">
                            <div class="flex justify-between items-center w-full h-auto p-0 m-0 relative">
                                <div class="flex-1 inline-block w-full h-auto pr-4 m-0 overflow-hidden relative">
                                    <h5 class="block w-full h-auto p-0 m-0 text-black/[0.60] subtitle-2 text-xs text-left uppercase truncate dark:text-white/[0.60]">
                                        {{ __('3 Days') }}
                                    </h5>

                                    <span class="block w-full h-auto p-0 m-0 text-black/[0.87] headline-6 text-left truncate dark:text-white/[0.60]">
                                        {{ $days?->days_count }}
                                    </span>
                                </div>

                                <div class="inline-block w-auto h-auto p-0 m-0 relative">
                                    <div class="block w-12 h-12 p-3 m-0 bg-primary rounded-full text-white shadow-lg relative dark:text-black">
                                        <svg class="pointer-events-none w-full h-full fill-current" xmlns="http://www.w3.org/2000/svg" enableBackground="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                            <rect fill="none" height="24" width="24" />
                                            <g><path d="M12,12.75c1.63,0,3.07,0.39,4.24,0.9c1.08,0.48,1.76,1.56,1.76,2.73L18,18H6l0-1.61c0-1.18,0.68-2.26,1.76-2.73 C8.93,13.14,10.37,12.75,12,12.75z M4,13c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2s-2,0.9-2,2C2,12.1,2.9,13,4,13z M5.13,14.1 C4.76,14.04,4.39,14,4,14c-0.99,0-1.93,0.21-2.78,0.58C0.48,14.9,0,15.62,0,16.43V18l4.5,0v-1.61C4.5,15.56,4.73,14.78,5.13,14.1z M20,13c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2s-2,0.9-2,2C18,12.1,18.9,13,20,13z M24,16.43c0-0.81-0.48-1.53-1.22-1.85 C21.93,14.21,20.99,14,20,14c-0.39,0-0.76,0.04-1.13,0.1c0.4,0.68,0.63,1.46,0.63,2.29V18l4.5,0V16.43z M12,6c1.66,0,3,1.34,3,3 c0,1.66-1.34,3-3,3s-3-1.34-3-3C9,7.34,10.34,6,12,6z" /></g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-start items-center w-full h-auto p-0 mt-4 relative">
                                @if ($days?->latest >= $days?->longest)
                                    <div class="inline-block w-auto h-auto p-px m-0 text-green-500 align-middle relative">
                                        <svg class="pointer-events-none w-full h-full fill-current" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                            <path d="M0 0h24v24H0z" fill="none" />
                                            <path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6z" />
                                        </svg>
                                    </div>

                                    <span class="inline-block w-auto h-auto p-0 m-0 text-green-500 body-2 text-left align-middle truncate">
                                        @if ($days?->days_count > 0)
                                            {{ number_format(($days?->latest - $days?->longest) / $days?->latest * 100, 2) }}%
                                        @else
                                            {{ __('0.00%') }}
                                        @endif
                                    </span>
                                @else
                                    <div class="inline-block w-auto h-auto p-px m-0 text-red-500 align-middle relative">
                                        <svg class="pointer-events-none w-full h-full fill-current" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                            <path d="M0 0h24v24H0z" fill="none" />
                                            <path d="M16 18l2.29-2.29-4.88-4.88-4 4L2 7.41 3.41 6l6 6 4-4 6.3 6.29L22 12v6z" />
                                        </svg>
                                    </div>

                                    <span class="inline-block w-auto h-auto p-0 m-0 text-red-500 body-2 text-left align-middle truncate">
                                        @if ($days?->days_count > 0)
                                            {{ number_format(($days?->latest - $days?->longest) / $days?->latest * 100, 2) }}%
                                        @else
                                            {{ __('0.00%') }}
                                        @endif
                                    </span>
                                @endif

                                <span class="inline-block w-auto h-auto p-0 ml-4 text-black/[0.60] body-2 text-left align-middle truncate dark:text-white/[0.60]">
                                    {{ __('Since last 3 days') }}
                                </span>
                            </div>
                        </div>
                    </div>
                    {{-- End Cards --}}

                    {{-- Cards --}}
                    <div class="block min-w-0 w-full h-auto p-0 m-0 relative sm:w-3/12">
                        <div class="block w-full h-auto p-4 m-0 bg-white rounded text-black/[0.87] shadow-01dp overflow-hidden dark:bg-charleston-green">
                            <div class="flex justify-between items-center w-full h-auto p-0 m-0 relative">
                                <div class="flex-1 inline-block w-full h-auto pr-4 m-0 overflow-hidden relative">
                                    <h5 class="block w-full h-auto p-0 m-0 text-black/[0.60] subtitle-2 text-xs text-left uppercase truncate dark:text-white/[0.60]">
                                        {{ __('Weeks') }}
                                    </h5>

                                    <span class="block w-full h-auto p-0 m-0 text-black/[0.87] headline-6 text-left truncate dark:text-white/[0.60]">
                                        {{ $weeks?->weeks_count }}
                                    </span>
                                </div>

                                <div class="inline-block w-auto h-auto p-0 m-0 relative">
                                    <div class="block w-12 h-12 p-3 m-0 bg-primary rounded-full text-white shadow-lg relative dark:text-black">
                                        <svg class="pointer-events-none w-full h-full fill-current" xmlns="http://www.w3.org/2000/svg" enableBackground="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                            <rect fill="none" height="24" width="24" />
                                            <g><path d="M12,12.75c1.63,0,3.07,0.39,4.24,0.9c1.08,0.48,1.76,1.56,1.76,2.73L18,18H6l0-1.61c0-1.18,0.68-2.26,1.76-2.73 C8.93,13.14,10.37,12.75,12,12.75z M4,13c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2s-2,0.9-2,2C2,12.1,2.9,13,4,13z M5.13,14.1 C4.76,14.04,4.39,14,4,14c-0.99,0-1.93,0.21-2.78,0.58C0.48,14.9,0,15.62,0,16.43V18l4.5,0v-1.61C4.5,15.56,4.73,14.78,5.13,14.1z M20,13c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2s-2,0.9-2,2C18,12.1,18.9,13,20,13z M24,16.43c0-0.81-0.48-1.53-1.22-1.85 C21.93,14.21,20.99,14,20,14c-0.39,0-0.76,0.04-1.13,0.1c0.4,0.68,0.63,1.46,0.63,2.29V18l4.5,0V16.43z M12,6c1.66,0,3,1.34,3,3 c0,1.66-1.34,3-3,3s-3-1.34-3-3C9,7.34,10.34,6,12,6z" /></g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-start items-center w-full h-auto p-0 mt-4 relative">
                                @if ($weeks?->latest >= $weeks?->longest)
                                    <div class="inline-block w-auto h-auto p-px m-0 text-green-500 align-middle relative">
                                        <svg class="pointer-events-none w-full h-full fill-current" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                            <path d="M0 0h24v24H0z" fill="none" />
                                            <path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6z" />
                                        </svg>
                                    </div>

                                    <span class="inline-block w-auto h-auto p-0 m-0 text-green-500 body-2 text-left align-middle truncate">
                                        @if ($weeks?->weeks_count > 0)
                                            {{ number_format(($weeks?->latest - $weeks?->longest) / $weeks?->latest * 100, 2) }}%
                                        @else
                                            {{ __('0.00%') }}
                                        @endif
                                    </span>
                                @else
                                    <div class="inline-block w-auto h-auto p-px m-0 text-red-500 align-middle relative">
                                        <svg class="pointer-events-none w-full h-full fill-current" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                            <path d="M0 0h24v24H0z" fill="none" />
                                            <path d="M16 18l2.29-2.29-4.88-4.88-4 4L2 7.41 3.41 6l6 6 4-4 6.3 6.29L22 12v6z" />
                                        </svg>
                                    </div>

                                    <span class="inline-block w-auto h-auto p-0 m-0 text-red-500 body-2 text-left align-middle truncate">
                                        @if ($weeks?->weeks_count > 0)
                                            {{ number_format(($weeks?->latest - $weeks?->longest) / $weeks?->latest * 100, 2) }}%
                                        @else
                                            {{ __('0.00%') }}
                                        @endif
                                    </span>
                                @endif

                                <span class="inline-block w-auto h-auto p-0 ml-4 text-black/[0.60] body-2 text-left align-middle truncate dark:text-white/[0.60]">
                                    {{ __('Since last weeks') }}
                                </span>
                            </div>
                        </div>
                    </div>
                    {{-- End Cards --}}

                    {{-- Cards --}}
                    <div class="block min-w-0 w-full h-auto p-0 m-0 relative sm:w-3/12">
                        <div class="block w-full h-auto p-4 m-0 bg-white rounded text-black/[0.87] shadow-01dp overflow-hidden dark:bg-charleston-green">
                            <div class="flex justify-between items-center w-full h-auto p-0 m-0 relative">
                                <div class="flex-1 inline-block w-full h-auto pr-4 m-0 overflow-hidden relative">
                                    <h5 class="block w-full h-auto p-0 m-0 text-black/[0.60] subtitle-2 text-xs text-left uppercase truncate dark:text-white/[0.60]">
                                        {{ __('Months') }}
                                    </h5>

                                    <span class="block w-full h-auto p-0 m-0 text-black/[0.87] headline-6 text-left truncate dark:text-white/[0.60]">
                                        {{ $months?->months_count }}
                                    </span>
                                </div>

                                <div class="inline-block w-auto h-auto p-0 m-0 relative">
                                    <div class="block w-12 h-12 p-3 m-0 bg-primary rounded-full text-white shadow-lg relative dark:text-black">
                                        <svg class="pointer-events-none w-full h-full fill-current" xmlns="http://www.w3.org/2000/svg" enableBackground="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                            <rect fill="none" height="24" width="24" />
                                            <g><path d="M12,12.75c1.63,0,3.07,0.39,4.24,0.9c1.08,0.48,1.76,1.56,1.76,2.73L18,18H6l0-1.61c0-1.18,0.68-2.26,1.76-2.73 C8.93,13.14,10.37,12.75,12,12.75z M4,13c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2s-2,0.9-2,2C2,12.1,2.9,13,4,13z M5.13,14.1 C4.76,14.04,4.39,14,4,14c-0.99,0-1.93,0.21-2.78,0.58C0.48,14.9,0,15.62,0,16.43V18l4.5,0v-1.61C4.5,15.56,4.73,14.78,5.13,14.1z M20,13c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2s-2,0.9-2,2C18,12.1,18.9,13,20,13z M24,16.43c0-0.81-0.48-1.53-1.22-1.85 C21.93,14.21,20.99,14,20,14c-0.39,0-0.76,0.04-1.13,0.1c0.4,0.68,0.63,1.46,0.63,2.29V18l4.5,0V16.43z M12,6c1.66,0,3,1.34,3,3 c0,1.66-1.34,3-3,3s-3-1.34-3-3C9,7.34,10.34,6,12,6z" /></g>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-start items-center w-full h-auto p-0 mt-4 relative">
                                @if ($months?->latest >= $months?->longest)
                                    <div class="inline-block w-auto h-auto p-px m-0 text-green-500 align-middle relative">
                                        <svg class="pointer-events-none w-full h-full fill-current" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                            <path d="M0 0h24v24H0z" fill="none" />
                                            <path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6z" />
                                        </svg>
                                    </div>

                                    <span class="inline-block w-auto h-auto p-0 m-0 text-green-500 body-2 text-left align-middle truncate">
                                        @if ($months?->months_count > 0)
                                            {{ number_format(($months?->latest - $months?->longest) / $months?->latest * 100, 2) }}%
                                        @else
                                            {{ __('0.00%') }}
                                        @endif
                                    </span>
                                @else
                                    <div class="inline-block w-auto h-auto p-px m-0 text-red-500 align-middle relative">
                                        <svg class="pointer-events-none w-full h-full fill-current" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                            <path d="M0 0h24v24H0z" fill="none" />
                                            <path d="M16 18l2.29-2.29-4.88-4.88-4 4L2 7.41 3.41 6l6 6 4-4 6.3 6.29L22 12v6z" />
                                        </svg>
                                    </div>

                                    <span class="inline-block w-auto h-auto p-0 m-0 text-red-500 body-2 text-left align-middle truncate">
                                        @if ($months?->months_count > 0)
                                            {{ number_format(($months?->latest - $months?->longest) / $months?->latest * 100, 2) }}%
                                        @else
                                            {{ __('0.00%') }}
                                        @endif
                                    </span>
                                @endif

                                <span class="inline-block w-auto h-auto p-0 ml-4 text-black/[0.60] body-2 text-left align-middle truncate dark:text-white/[0.60]">
                                    {{ __('Since last months') }}
                                </span>
                            </div>
                        </div>
                    </div>
                    {{-- End Cards --}}

                </div>

                <div class="flex justify-start items-stretch flex-wrap gap-4 p-0 mt-4 relative sm:flex-nowrap">

                    {{-- Cards --}}
                    <div class="block min-w-0 w-full h-auto p-0 m-0 relative sm:w-12/12">
                        <div class="block w-full h-auto p-4 m-0 bg-white rounded text-black/[0.87] shadow-01dp overflow-hidden dark:bg-charleston-green">
                            <div class="block w-full h-auto p-0 m-0 overflow-hidden relative">
                                <h5 class="block w-full h-auto p-0 m-0 text-black/[0.60] subtitle-2 text-xs text-left uppercase truncate dark:text-white/[0.60]">
                                    {{ __('Overview') }}
                                </h5>

                                <span class="block w-full h-auto p-0 m-0 text-black/[0.87] headline-6 text-left truncate dark:text-white/[0.60]">
                                    {{ __('Guest Registration') }}
                                </span>
                            </div>

                            <div class="block w-full h-auto p-0 mt-4 overflow-hidden relative">
                                <canvas
                                    data-te-chart="bar"
                                    data-te-dataset-label="Visits"
                                    data-te-labels="['January', 'February' , 'March' , 'April' , 'May' , 'June' , 'July', 'August', 'September', 'October', 'November', 'December']"
                                    data-te-dataset-data="[{{ $years->jan }}, {{ $years->feb }}, {{ $years->mar }}, {{ $years->apr }}, {{ $years->may }}, {{ $years->jun }}, {{ $years->jul }}, {{ $years->aug }}, {{ $years->sep }}, {{ $years->oct }}, {{ $years->nov }}, {{ $years->dec }}]"
                                    data-te-dataset-background-color="rgb(13, 110, 253)"
                                    data-te-dark-ticks-color="rgba(255, 255, 255, 0.60)"
                                    data-te-dark-label-color="rgba(255, 255, 255, 0.60)"
                                    data-te-dark-grid-lines-color="rgb(81, 81, 81)"
                                    data-te-dark-bg-color-ligth="transparent"
                                    data-te-dark-bg-color="transparent">
                                </canvas>
                            </div>
                        </div>
                    </div>
                    {{-- End Cards --}}

                </div>

                <div class="flex justify-start items-stretch flex-wrap gap-4 p-0 mt-4 relative sm:flex-nowrap">

                    {{-- Cards --}}
                    <div class="block min-w-0 w-full h-auto p-0 m-0 relative sm:w-12/12">
                        <div class="block w-full h-auto p-0 m-0 bg-white rounded text-black/[0.87] shadow-01dp overflow-hidden dark:bg-charleston-green">

                        <div class="block w-full h-auto p-0 m-0 overflow-hidden">
                            <div class="flex justify-between items-center flex-wrap gap-2 w-full min-h-[64px] h-auto p-2 my-2 break-all relative sm:m-0">

                                <div class="flex-1 block w-auto h-auto p-0 m-0 overflow-hidden relative basis-auto order-1 sm:order-none">
                                    <div class="block w-full h-auto p-0 m-0 relative">
                                        <h6 class="block w-full h-auto px-2 py-1.5 m-0 headline-6 text-black/[0.87] truncate dark:text-white/[0.87]">
                                            {{ __('Page Visits') }}
                                        </h6>
                                    </div>
                                </div>

                                <div class="block w-auto h-auto p-0 mx-2 mt-2 overflow-hidden relative basis-full order-3 sm:basis-auto sm:order-none">
                                    <form class="block w-auto h-auto p-0 m-0 relative" action="{{ route('feedbacks.index') }}" method="GET" autocomplete="off" autocapitalize="off">

                                        {{-- Search --}}
                                        <div class="block w-full h-auto p-0 m-0 relative" data-te-input-wrapper-init>
                                            <input type="search" class="peer caret-primary block min-h-[32px] w-full border-0 bg-transparent py-1.5 pl-8 subtitle-1 text-black/[0.87] outline-none transition-none duration-0 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white/[0.87] dark:placeholder:text-white/[0.87] [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0 disabled:opacity-60 disabled:cursor-not-allowed" id="search" name="search" value="{{ $search }}" placeholder="Search..." autocomplete="off" spellcheck="false" autocapitalize="off" aria-label="Search" aria-describedby="button-search" />

                                            <button type="submit" class="block w-6 h-6 p-0 m-0 bg-transparent text-black/[0.60] rounded-full align-middle cursor-pointer outline-none transition duration-150 ease-in-out absolute left-0 top-1/2 -translate-y-1/2 z-0 dark:text-white/[0.60] peer-disabled:opacity-70 peer-disabled:cursor-not-allowed peer-disabled:hover:!bg-transparent peer-disabled:active:!bg-transparent peer-disabled:focus:!bg-transparent" id="button-search">
                                                <svg class="pointer-events-none w-full h-full fill-current" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                                    <path d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                                                </svg>
                                            </button>
                                        </div>
                                        {{-- End Search --}}

                                    </form>
                                </div>

                                <div class="flex justify-start items-center gap-2 w-auto h-auto p-0 m-0 overflow-hidden relative basis-auto order-2 sm:order-none">

                                    <div class="inline-block w-auto h-auto p-0 m-0 relative">

                                        {{-- Dropdown --}}
                                        <div class="block w-auto h-auto p-0 m-0 relative" data-te-dropdown-ref>
                                            <button type="button" class="inline-block w-9 h-9 p-1.5 m-0 bg-transparent rounded-full text-black/[0.60] outline-none cursor-pointer align-middle transition duration-150 ease-in-out hover:bg-black/[0.04] active:bg-black/[0.10] focus:bg-black/[0.12] dark:text-white/[0.60] dark:hover:bg-white/[0.04] dark:active:bg-white/[0.10] dark:focus:bg-white/[0.12]" data-te-dropdown-toggle-ref data-te-dropdown-animation="off" data-te-toggle="tooltip" title="Download">
                                                <svg class="pointer-events-none w-full h-full fill-current" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                                    <path d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M19 12v7H5v-7H3v7c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-7h-2zm-6 .67l2.59-2.58L17 11.5l-5 5-5-5 1.41-1.41L11 12.67V3h2z" />
                                                </svg>
                                            </button>

                                            <ul class="hidden min-w-[128px] w-auto max-w-[280px] h-auto py-2 m-0 list-none rounded bg-white shadow-08dp absolute top-full right-0 z-10 [&[data-te-dropdown-show]]:block dark:bg-charleston-green" data-te-dropdown-menu-ref>
                                                <li class="block w-full h-auto p-0 m-0 overflow-hidden relative">
                                                    <a href="{{ route('export.route-statistics', 'pdf') }}" class="flex justify-between items-center gap-4 w-full h-10 py-2 px-4 m-0 body-2 text-black/[0.60] no-underline outline-none truncate select-none hover:bg-black/[0.04] active:bg-black/[0.10] focus:bg-black/[0.12] dark:text-white/[0.60] dark:hover:bg-white/[0.04] dark:active:bg-white/[0.10] dark:focus:bg-white/[0.12]" data-te-dropdown-item-ref>
                                                        <div class="flex-1 inline-block w-full h-auto p-0 m-0 overflow-hidden relative">
                                                            <span class="block w-full h-auto p-0 m-0 text-black/[0.87] text-left truncate dark:text-white/[0.87]">
                                                                {{ __('PDF') }}
                                                            </span>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li class="block w-full h-auto p-0 m-0 overflow-hidden relative">
                                                    <a href="{{ route('export.route-statistics', 'xlsx') }}" class="flex justify-between items-center gap-4 w-full h-10 py-2 px-4 m-0 body-2 text-black/[0.60] no-underline outline-none truncate select-none hover:bg-black/[0.04] active:bg-black/[0.10] focus:bg-black/[0.12] dark:text-white/[0.60] dark:hover:bg-white/[0.04] dark:active:bg-white/[0.10] dark:focus:bg-white/[0.12]" data-te-dropdown-item-ref>
                                                        <div class="flex-1 inline-block w-full h-auto p-0 m-0 overflow-hidden relative">
                                                            <span class="block w-full h-auto p-0 m-0 text-black/[0.87] text-left truncate dark:text-white/[0.87]">
                                                                {{ __('Excel') }}
                                                            </span>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li class="block w-full h-auto p-0 m-0 overflow-hidden relative">
                                                    <a href="{{ route('export.route-statistics', 'csv') }}" class="flex justify-between items-center gap-4 w-full h-10 py-2 px-4 m-0 body-2 text-black/[0.60] no-underline outline-none truncate select-none hover:bg-black/[0.04] active:bg-black/[0.10] focus:bg-black/[0.12] dark:text-white/[0.60] dark:hover:bg-white/[0.04] dark:active:bg-white/[0.10] dark:focus:bg-white/[0.12]" data-te-dropdown-item-ref>
                                                        <div class="flex-1 inline-block w-full h-auto p-0 m-0 overflow-hidden relative">
                                                            <span class="block w-full h-auto p-0 m-0 text-black/[0.87] text-left truncate dark:text-white/[0.87]">
                                                                {{ __('CSV') }}
                                                            </span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        {{-- End Dropdown --}}

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="block w-full h-auto p-0 m-0 overflow-hidden">

                            {{-- Perfect Scrollbar --}}
                            <div class="flex flex-col w-full h-full p-0 m-0 relative" data-te-perfect-scrollbar-init>
                                <div class="block w-full h-full p-0 m-0">
                                    <div class="table min-w-full h-auto p-0 m-0">

                                        {{-- Table --}}
                                        <table class="table table-auto w-full h-auto p-0 m-0 border-collapse border-spacing-0 relative">
                                            <thead class="table-header-group border-b border-solid border-chinese-white dark:border-dark-liver">
                                            <tr class="table-row text-inherit align-middle outline-none relative">
                                                <th class="table-cell w-auto h-14 px-4 m-0 subtitle-2 text-black/[0.87] text-left truncate dark:text-white/[0.87]">
                                                    {{ __('#') }}
                                                </th>
                                                <th class="table-cell w-auto h-14 px-4 m-0 subtitle-2 text-black/[0.87] text-left truncate dark:text-white/[0.87]">
                                                    {{ __('User') }}
                                                </th>
                                                <th class="table-cell w-auto h-14 px-4 m-0 subtitle-2 text-black/[0.87] text-left truncate dark:text-white/[0.87]">
                                                    {{ __('Method') }}
                                                </th>
                                                <th class="table-cell w-auto h-14 px-4 m-0 subtitle-2 text-black/[0.87] text-left truncate dark:text-white/[0.87]">
                                                    {{ __('Route') }}
                                                </th>
                                                <th class="table-cell w-auto h-14 px-4 m-0 subtitle-2 text-black/[0.87] text-right truncate dark:text-white/[0.87]">
                                                    {{ __('Status') }}
                                                </th>
                                                <th class="table-cell w-auto h-14 px-4 m-0 subtitle-2 text-black/[0.87] text-left truncate dark:text-white/[0.87]">
                                                    {{ __('IP') }}
                                                </th>
                                                <th class="table-cell w-auto h-14 px-4 m-0 subtitle-2 text-black/[0.87] text-left truncate dark:text-white/[0.87]">
                                                    {{ __('Date') }}
                                                </th>
                                                <th class="table-cell w-auto h-14 px-4 m-0 subtitle-2 text-black/[0.87] text-right truncate dark:text-white/[0.87]">
                                                    {{ __('Counter') }}
                                                </th>
                                            </tr>
                                            </thead>

                                            <tbody class="table-row-group *:border-b *:border-solid *:border-chinese-white *:transition *:ease-in-out *:duration-300 *:motion-reduce:transition-none hover:*:bg-black/[0.04] dark:*:border-dark-liver dark:hover:*:bg-white/[0.04]">
                                            @forelse($routes as $route)
                                                <tr class="table-row text-inherit align-middle outline-none relative">
                                                    <td class="table-cell w-auto h-[52px] px-4 m-0 body-2 text-black/[0.87] text-left truncate dark:text-white/[0.87]">
                                                        {{ $loop->iteration + ($routes->currentPage() - 1) * $routes->perPage() }}
                                                    </td>
                                                    <td class="table-cell w-auto h-[52px] px-4 m-0 body-2 text-black/[0.87] text-left truncate dark:text-white/[0.87]">
                                                        {{ $route->user?->name }}
                                                    </td>
                                                    <td class="table-cell w-auto h-[52px] px-4 m-0 body-2 text-black/[0.87] text-left truncate dark:text-white/[0.87]">
                                                        {{ $route->method }}
                                                    </td>
                                                    <td class="table-cell w-auto h-[52px] px-4 m-0 body-2 text-black/[0.87] text-left truncate dark:text-white/[0.87]">
                                                        {{ $route->route }}
                                                    </td>
                                                    <td class="table-cell w-auto h-[52px] px-4 m-0 body-2 text-black/[0.87] text-right truncate dark:text-white/[0.87]">
                                                        {{ $route->status }}
                                                    </td>
                                                    <td class="table-cell w-auto h-[52px] px-4 m-0 body-2 text-black/[0.87] text-left truncate dark:text-white/[0.87]">
                                                        {{ $route->ip }}
                                                    </td>
                                                    <td class="table-cell w-auto h-[52px] px-4 m-0 body-2 text-black/[0.87] text-left truncate dark:text-white/[0.87]">
                                                        {{ $route->date->format('d-m-Y') }}
                                                    </td>
                                                    <td class="table-cell w-auto h-[52px] px-4 m-0 body-2 text-black/[0.87] text-right truncate dark:text-white/[0.87]">
                                                        {{ $route->counter }}
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr class="table-row text-inherit align-middle outline-none relative">
                                                    <td class="table-cell w-auto h-[52px] px-4 m-0 body-2 text-black/[0.87] text-center truncate dark:text-white/[0.87]" colspan="8">
                                                        {{ __('No data available.') }}
                                                    </td>
                                                </tr>
                                            @endforelse
                                            </tbody>
                                        </table>
                                        {{-- End Table --}}

                                    </div>
                                </div>
                            </div>
                            {{-- End Perfect Scrollbar --}}

                        </div>

                        <div class="block w-full h-auto p-0 m-0 overflow-hidden">
                            <div class="flex justify-start items-center w-full h-auto p-2 m-0 relative">

                                {{-- Pagination --}}
                                <div class="flex-1 block w-full min-h-[36px] h-auto p-0 m-0 relative">
                                    {{ $routes->onEachSide(2)->links() }}
                                </div>
                                {{-- End Pagination --}}

                            </div>
                        </div>

                    </div>
                    </div>
                    {{-- End Cards --}}

                </div>

            </div>
        </main>

        @include('layout.footer')

    </div>
@endsection
