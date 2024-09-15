@extends('app')

@section('title', 'Home')

@section('content')
    <div class="flex flex-col w-full h-full p-0 m-0 relative">

        <header class="block w-full h-auto p-0 m-0 fixed top-0 right-0 z-20 lg:pl-0 lg:left-auto">
            <nav class="flex justify-between items-center w-full h-14 p-2 m-0 bg-primary shadow-04dp lg:h-16 dark:bg-charleston-green">

                <div class="flex-1 block w-auto h-auto p-0 m-0 overflow-hidden relative">
                    <div class="block w-auto h-auto p-0 m-0 relative">
                        <h6 class="block w-full h-auto px-2 py-1.5 m-0 headline-6 text-white truncate">
                            @yield('title')
                        </h6>
                    </div>
                </div>

                <div class="flex justify-start items-center gap-2 w-auto h-auto p-0 m-0 overflow-hidden relative">
                    <div class="inline-block w-auto h-auto p-0 m-0 relative">

                        @auth
                            <div class="block w-auto h-auto p-0 m-0 relative">
                                <a href="{{ route('dashboard.index') }}" class="inline-block min-w-[64px] w-auto h-9 p-2 m-0 bg-transparent rounded button text-white text-center shadow-none align-middle truncate outline-none cursor-pointer transition duration-150 ease-in-out relative hover:bg-white/[0.04] active:bg-white/[0.10] focus:bg-white/[0.12] disabled:opacity-70 disabled:cursor-not-allowed disabled:hover:!bg-transparent disabled:active:!bg-transparent disabled:focus:!bg-transparent">
                                    {{ __('Dashboard') }}
                                </a>
                            </div>
                        @else
                            <div class="block w-auto h-auto p-0 m-0 relative">
                                <a href="{{ route('login.index') }}" class="inline-block min-w-[64px] w-auto h-9 p-2 m-0 bg-transparent rounded button text-white text-center shadow-none align-middle truncate outline-none cursor-pointer transition duration-150 ease-in-out relative hover:bg-white/[0.04] active:bg-white/[0.10] focus:bg-white/[0.12] disabled:opacity-70 disabled:cursor-not-allowed disabled:hover:!bg-transparent disabled:active:!bg-transparent disabled:focus:!bg-transparent">
                                    {{ __('Login') }}
                                </a>
                            </div>
                        @endauth

                    </div>
                </div>

            </nav>
        </header>

        <main class="block flex-grow flex-shrink-0 w-auto h-auto p-0 mt-14 ml-0 lg:mt-16 lg:ml-0">
            <div class="block w-full max-w-5xl h-auto p-4 mx-auto overflow-hidden xl:mx-auto">

                {{-- Breadcrumbs --}}
                <nav class="block w-full h-auto p-0 m-0 list-none rounded whitespace-nowrap overflow-hidden relative">
                    <ol class="block w-full h-auto p-0 m-0 overflow-hidden">
                        <li class="inline-block w-auto h-auto p-0 m-0 relative [&+li::before]:content-['/'] [&+li::before]:mx-1 [&+li::before]:text-black/[0.60] dark:[&+li::before]:text-white/[0.60]">
                            <span class="inline-block w-auto h-auto p-0 m-0 subtitle-1 text-black/[0.60] cursor-default dark:text-white/[0.60]">
                                {{ __('Home') }}
                            </span>
                        </li>
                    </ol>
                </nav>
                {{-- End Breadcrumbs --}}

                @if (session()->has('message'))
                    {{-- Toast --}}
                    <div class="hidden invisible w-auto max-w-[344px] h-auto px-4 py-2 mx-auto bg-dark-charcoal border-none  rounded-full shadow-md overflow-hidden animate-toast fixed bottom-8 left-1/2 -translate-x-1/2 z-[9999] data-[te-toast-show]:block data-[te-toast-show]:visible data-[te-toast-hide]:hidden data-[te-toast-hide]:invisible dark:bg-lotion" role="alert" aria-live="assertive" aria-atomic="true" data-te-toast-init>
                        <span class="block w-full h-auto p-0 m-0 body-2 text-center text-white truncate dark:text-black">
                            {{ session()->get('message') }}
                        </span>
                    </div>
                    {{-- End Toast --}}
                @endif

                {{-- Cards --}}
                <div class="block w-full h-auto p-0 mt-4 bg-white rounded text-black/[0.87] shadow-01dp overflow-hidden dark:bg-charleston-green">

                    <div class="block w-full h-auto p-0 m-0 overflow-hidden">
                        <div class="flex justify-between items-center flex-wrap gap-2 w-full min-h-[64px] h-auto p-2 my-2 break-all relative sm:m-0">

                            <div class="flex-1 block w-auto h-auto p-0 m-0 overflow-hidden relative basis-auto order-1 sm:order-none">
                                <div class="block w-full h-auto p-0 m-0 relative">
                                    <h6 class="block w-full h-auto px-2 py-1.5 m-0 headline-6 text-black/[0.87] truncate dark:text-white/[0.87]">
                                        {{ __('Today\'s Guest') }}
                                    </h6>
                                </div>
                            </div>

                            <div class="block w-auto h-auto p-0 mx-2 mt-2 overflow-hidden relative basis-full order-3 sm:basis-auto sm:order-none">
                                <form class="block w-auto h-auto p-0 m-0 relative" action="{{ route('home.index') }}" method="GET" autocomplete="off" autocapitalize="off">

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

                                    {{-- Icon Link --}}
                                    <div class="block w-auto h-auto p-0 m-0 relative">
                                        <a href="{{ route('registration.create') }}" class="block w-10 h-10 p-2 m-0 bg-transparent rounded-full text-black/[0.60] outline-none cursor-pointer align-middle transition duration-150 ease-in-out hover:bg-black/[0.04] active:bg-black/[0.10] focus:bg-black/[0.12] dark:text-white/[0.60] dark:hover:bg-white/[0.04] dark:active:bg-white/[0.10] dark:focus:bg-white/[0.12]" data-te-toggle="tooltip" title="Create">
                                            <svg class="pointer-events-none w-full h-full fill-current" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                                <path d="M0 0h24v24H0z" fill="none" />
                                                <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
                                            </svg>
                                        </a>
                                    </div>
                                    {{-- End Icon Link --}}

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
                                                    {{ __('Name') }}
                                                </th>
                                                <th class="table-cell w-auto h-14 px-4 m-0 subtitle-2 text-black/[0.87] text-left truncate dark:text-white/[0.87]">
                                                    {{ __('Gender') }}
                                                </th>
                                                <th class="table-cell w-auto h-14 px-4 m-0 subtitle-2 text-black/[0.87] text-left truncate dark:text-white/[0.87]">
                                                    {{ __('Email') }}
                                                </th>
                                                <th class="table-cell w-auto h-14 px-4 m-0 subtitle-2 text-black/[0.87] text-left truncate dark:text-white/[0.87]">
                                                    {{ __('Phone Number') }}
                                                </th>
                                                <th class="table-cell w-auto h-14 px-4 m-0 subtitle-2 text-black/[0.87] text-left truncate dark:text-white/[0.87]">
                                                    {{ __('Company') }}
                                                </th>
                                                <th class="table-cell w-auto h-14 px-4 m-0 subtitle-2 text-black/[0.87] text-left truncate dark:text-white/[0.87]">
                                                    {{ __('Address') }}
                                                </th>
                                                <th class="table-cell w-auto h-14 px-4 m-0 subtitle-2 text-black/[0.87] text-left truncate dark:text-white/[0.87]">
                                                    {{ __('Staff To Visit') }}
                                                </th>
                                                <th class="table-cell w-auto h-14 px-4 m-0 subtitle-2 text-black/[0.87] text-left truncate dark:text-white/[0.87]">
                                                    {{ __('Purpose') }}
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody class="table-row-group *:border-b *:border-solid *:border-chinese-white *:transition *:ease-in-out *:duration-300 *:motion-reduce:transition-none hover:*:bg-black/[0.04] dark:*:border-dark-liver dark:hover:*:bg-white/[0.04]">
                                            @forelse($guests as $guest)
                                                <tr class="table-row text-inherit align-middle outline-none relative">
                                                    <td class="table-cell w-auto h-[52px] px-4 m-0 body-2 text-black/[0.87] text-left truncate dark:text-white/[0.87]">
                                                        {{ $loop->iteration + ($guests->currentPage() - 1) * $guests->perPage() }}
                                                    </td>
                                                    <td class="table-cell w-auto h-[52px] px-4 m-0 body-2 text-black/[0.87] text-left truncate dark:text-white/[0.87]">
                                                        {{ $guest->name }}
                                                    </td>
                                                    <td class="table-cell w-auto h-[52px] px-4 m-0 body-2 text-black/[0.87] text-left truncate dark:text-white/[0.87]">
                                                        {{ $guest->gender->label() }}
                                                    </td>
                                                    <td class="table-cell w-auto h-[52px] px-4 m-0 body-2 text-black/[0.87] text-left truncate dark:text-white/[0.87]">
                                                        {{ $guest->email }}
                                                    </td>
                                                    <td class="table-cell w-auto h-[52px] px-4 m-0 body-2 text-black/[0.87] text-left truncate dark:text-white/[0.87]">
                                                        {{ $guest->phone_number }}
                                                    </td>
                                                    <td class="table-cell w-auto h-[52px] px-4 m-0 body-2 text-black/[0.87] text-left truncate dark:text-white/[0.87]">
                                                        {{ $guest->company }}
                                                    </td>
                                                    <td class="table-cell w-auto h-[52px] px-4 m-0 body-2 text-black/[0.87] text-left truncate dark:text-white/[0.87]">
                                                        {{ $guest->address }}
                                                    </td>
                                                    <td class="table-cell w-auto h-[52px] px-4 m-0 body-2 text-black/[0.87] text-left truncate dark:text-white/[0.87]">
                                                        {{ $guest->staff?->name }}
                                                    </td>
                                                    <td class="table-cell w-auto h-[52px] px-4 m-0 body-2 text-black/[0.87] text-left truncate dark:text-white/[0.87]">
                                                        {{ str($guest->purpose)->limit(100) }}
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr class="table-row text-inherit align-middle outline-none relative">
                                                    <td class="table-cell w-auto h-[52px] px-4 m-0 body-2 text-black/[0.87] text-center truncate dark:text-white/[0.87]" colspan="9">
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
                                {{ $guests->onEachSide(2)->links() }}
                            </div>
                            {{-- End Pagination --}}

                        </div>
                    </div>

                </div>
                {{-- End Cards --}}

                {{-- FAB --}}
                <div class="block w-auto h-auto p-0 m-0 fixed bottom-6 right-6 z-10">
                    <a href="{{ route('feedback.create') }}" class="flex justify-center items-center gap-3 min-w-[64px] w-full h-12 px-5 py-2 m-0 rounded-full button text-black/[0.87] text-center align-middle truncate outline-none cursor-pointer relative disabled:opacity-70 disabled:cursor-not-allowed border-none text-white bg-primary shadow-[0_3px_5px_-1px_rgba(0,0,0,0.2),_0_6px_10px_0_rgba(0,0,0,0.14),_0_1px_18px_0_rgba(0,0,0,0.12)] transition-all hover:shadow-[0_5px_5px_-3px_rgba(0,0,0,0.2),_0_8px_10px_1px_rgba(0,0,0,0.14),_0_3px_14px_2px_rgba(0,0,0,0.12)] focus:shadow-[0_5px_5px_-3px_rgba(0,0,0,0.2),_0_8px_10px_1px_rgba(0,0,0,0.14),_0_3px_14px_2px_rgba(0,0,0,0.12)] active:shadow-[0_7px_8px_-4px_rgba(0,0,0,0.2),_0_12px_17px_2px_rgba(0,0,0,0.14),_0_5px_22px_4px_rgba(0,0,0,0.12)] disabled:!shadow-[0_3px_1px_-2px_rgba(0,0,0,0.2),_0_2px_2px_0_rgba(0,0,0,0.14),_0_1px_5px_0_rgba(0,0,0,0.12)]">
                        <div class="inline-block min-w-[24px] w-auto h-auto p-0 m-0 relative">
                            <svg class="pointer-events-none w-full h-full fill-current" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000">
                                <path d="M0 0h24v24H0z" fill="none" />
                                <path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-7 12h-2v-2h2v2zm0-4h-2V6h2v4z" />
                            </svg>
                        </div>

                        <div class="flex-1 inline-block w-full h-auto p-0 m-0 overflow-hidden relative">
                            <span class="block w-full h-auto p-0 m-0 button text-white text-left truncate dark:text-white">
                                {{ __('Feedback') }}
                            </span>
                        </div>
                    </a>
                </div>
                {{-- End FAB --}}

            </div>
        </main>

        <footer class="block flex-shrink-0 w-auto h-auto px-4 mt-4 ml-0 lg:ml-0">
            <div class="block w-full h-auto py-2 m-0 border-t border-solid border-chinese-white shadow-none dark:border-dark-liver">
                <div class="block py-1 m-0 text-center overflow-hidden relative lg:text-left">
                    <span class="inline-block w-auto h-auto p-0 m-0 caption text-black/[0.60] align-middle whitespace-nowrap dark:text-white/[0.60]">
                        &copy {{ config('app.name', 'Laravel') }} {{ now()->year }}, All rights reserved.
                    </span>
                </div>
            </div>
        </footer>

    </div>
@endsection
