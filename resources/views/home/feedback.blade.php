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
                                <a href="" class="inline-block min-w-[64px] w-auto h-9 p-2 m-0 bg-transparent rounded button text-white text-center shadow-none align-middle truncate outline-none cursor-pointer transition duration-150 ease-in-out relative hover:bg-white/[0.04] active:bg-white/[0.10] focus:bg-white/[0.12] disabled:opacity-70 disabled:cursor-not-allowed disabled:hover:!bg-transparent disabled:active:!bg-transparent disabled:focus:!bg-transparent">
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
                            <a href="{{ route('home.index') }}" class="inline-block w-auto h-auto p-0 m-0 subtitle-1 text-primary no-underline outline-none cursor-pointer hover:underline focus:underline active:underline">
                                {{ __('Home') }}
                            </a>
                        </li>

                        <li class="inline-block w-auto h-auto p-0 m-0 relative [&+li::before]:content-['/'] [&+li::before]:mx-1 [&+li::before]:text-black/[0.60] dark:[&+li::before]:text-white/[0.60]">
                            <span class="inline-block w-auto h-auto p-0 m-0 subtitle-1 text-black/[0.60] cursor-default dark:text-white/[0.60]">
                                {{ __('Feedback') }}
                            </span>
                        </li>
                    </ol>
                </nav>
                {{-- End Breadcrumbs --}}

                {{-- Cards --}}
                <div class="block w-full h-auto p-0 mt-4 bg-white rounded text-black/[0.87] shadow-01dp overflow-hidden dark:bg-charleston-green">

                    <form action="{{ route('feedback.store') }}" method="POST" autocomplete="off" spellcheck="false" autocapitalize="off">
                        @csrf
                        @method('POST')

                        <div class="block w-full h-auto p-0 m-0 overflow-hidden">
                            <div class="flex justify-between items-center gap-4 w-full h-16 p-2 m-0 relative">

                                <div class="flex justify-start items-center gap-2 w-auto h-auto p-0 m-0 overflow-hidden relative">

                                    {{-- Icon Link --}}
                                    <div class="inline-block w-auto h-auto p-0 m-0 relative">
                                        <a href="{{ route('home.index') }}" class="block w-10 h-10 p-2 m-0 bg-transparent rounded-full text-black/[0.60] outline-none cursor-pointer align-middle transition duration-150 ease-in-out hover:bg-black/[0.04] active:bg-black/[0.10] focus:bg-black/[0.12] dark:text-white/[0.60] dark:hover:bg-white/[0.04] dark:active:bg-white/[0.10] dark:focus:bg-white/[0.12]" data-te-toggle="tooltip" title="Back">
                                            <svg class="pointer-events-none w-full h-full fill-current" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                                <path d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/>
                                            </svg>
                                        </a>
                                    </div>
                                    {{-- End Icon Link --}}

                                </div>

                                <div class="flex-1 block w-auto h-auto p-0 m-0 overflow-hidden relative">
                                    <div class="block w-full h-auto p-0 m-0 relative">
                                        <h6 class="block w-full h-auto px-2 py-1.5 m-0 headline-6 text-black/[0.87] truncate dark:text-white/[0.87]">
                                            {{ __('Feedback') }}
                                        </h6>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="block w-full h-auto p-4 m-0 border-y border-solid border-chinese-white overflow-hidden dark:border-dark-liver sm:p-6">
                            <div class="block w-full max-w-3xl h-auto p-0 m-0 relative">
                                <div class="flex flex-col flex-grow-0 gap-0 w-full h-auto p-0 m-0 relative">

                                    <div class="flex flex-col justify-between item-center gap-4 w-full h-auto p-0 my-2 relative sm:flex-row last:mb-0">
                                        <span class="flex-1 inline-block w-full h-auto p-0 m-0 body-2 text-black/[0.60] truncate dark:text-white/[0.60]">
                                            {{ __('Do you have a suggestion or found some bug? Let us know in the field bellow.') }}
                                        </span>
                                    </div>

                                    <div class="flex flex-col justify-between item-center gap-4 w-full h-auto p-0 my-2 relative sm:flex-row last:mb-0">
                                        <div class="group flex-1 inline-block w-full h-auto p-0 m-0 relative sm:basis-full">
                                            <div class="block w-auto h-auto p-0 mb-2 relative">

                                                {{-- Input --}}
                                                <div class="block w-full h-auto p-0 m-0 relative" data-te-input-wrapper-init>
                                                    <textarea class="peer caret-primary block min-h-[48px] w-full border-0 bg-transparent pt-3 pb-2 subtitle-1 text-black/[0.87] outline-none transition-none duration-0 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white/[0.87] dark:placeholder:text-white/[0.87] [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0 group-data-[te-validation-state='invalid']:!caret-error disabled:opacity-60 disabled:cursor-not-allowed group-has-[.is-invalid]:!caret-error" rows="1" id="description" name="description">{{ old('description') }}</textarea>

                                                    <label class="pointer-events-none absolute top-0 left-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-3 leading-[1.6] text-black/[0.60] transition-all duration-200 ease-out peer-focus:-translate-y-[1.25rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.25rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-white/[0.60] dark:peer-focus:text-primary group-data-[te-validation-state='invalid']:!text-error group-data-[te-validation-state='invalid']:peer-focus:!text-error peer-disabled:opacity-60 peer-disabled:cursor-not-allowed group-has-[.is-invalid]:!text-error" for="description">
                                                        {{ __('Describe your issue or idea') }}
                                                    </label>
                                                </div>
                                                {{-- End Input --}}

                                            </div>

                                            @error('description')
                                            <span class="block w-full h-auto p-0 mb-2 text-xs tracking-normal text-error text-left break-words">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="flex flex-col justify-between item-center gap-4 w-full h-auto p-0 my-2 relative sm:flex-row last:mb-0">
                                        <span class="flex-1 inline-block w-full h-auto p-0 m-0 caption text-black/[0.60] truncate dark:text-white/[0.60]">
                                            {{ __('Feedback Type') }}
                                        </span>
                                    </div>

                                    <div class="flex flex-col justify-between item-center gap-4 w-full h-auto p-0 my-2 relative sm:flex-row last:mb-0">
                                        <div class="group flex-1 inline-block w-full h-auto p-0 m-0 relative sm:basis-full">
                                            <div class="block w-auto h-auto p-0 mb-2 relative">

                                                <div class="flex flex-wrap justify-start items-start gap-4 w-auto h-auto p-0 m-0 relative">

                                                    @foreach(\App\Enums\FeedbackTypeEnum::cases() as $key => $type)
                                                        {{-- Checkbox --}}
                                                        <div class="mb-0 block min-h-[1.5rem] pl-[1.5rem]">
                                                            <input class="peer relative float-left -ml-[1.5rem] mr-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-black/[0.60] outline-none before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_theme(colors.primary)] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:border-white/[0.60] dark:checked:border-primary dark:checked:after:border-black dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[0px_0px_0px_13px_theme(colors.primary)] disabled:opacity-75 disabled:cursor-not-allowed group-has-[.is-invalid]:checked:!border-error group-has-[.is-invalid]:checked:after:!border-error group-has-[.is-invalid]:checked:after:!bg-error group-has-[.is-invalid]:checked:focus:!border-error group-has-[.is-invalid]:checked:focus:before:!shadow-[0px_0px_0px_13px_theme(colors.error)] group-has-[.is-invalid]:dark:checked:!border-error group-has-[.is-invalid]:dark:checked:focus:before:!shadow-[0px_0px_0px_13px_theme(colors.error)" type="radio" id="{{ $type->value }}" name="feedback_type" value="{{ $type->value }}" @checked(old('feedback_type', $key === 0) == $type->value) />

                                                            <label class=" inline-block pl-1.5 mt-px subtitle-1 !text-black/[0.87] hover:cursor-pointer dark:!text-white/[0.87] peer-disabled:opacity-75 peer-disabled:cursor-not-allowed" for="{{ $type->value }}">
                                                                {{ $type->label() }}
                                                            </label>
                                                        </div>
                                                        {{-- End Checkbox --}}
                                                    @endforeach

                                                </div>

                                            </div>

                                            @error('feedback_type')
                                            <span class="block w-full h-auto p-0 mb-2 text-xs tracking-normal text-error text-left break-words">
                                                  {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="block w-full h-auto p-0 m-0 overflow-hidden">
                            <div class="flex justify-start items-center w-full h-auto p-2 m-0 relative">

                                <div class="flex-1 block w-full min-h-[36px] h-auto p-0 m-0 relative">
                                    <div class="flex justify-end items-center gap-4 w-full h-auto p-0 m-0 relative">

                                        {{-- Button --}}
                                        <div class="block w-auto h-auto p-0 m-0 relative">
                                            <button type="reset" class="inline-block min-w-[64px] w-auto h-9 p-2 m-0 bg-transparent rounded button text-primary text-center shadow-none align-middle truncate outline-none cursor-pointer relative hover:bg-primary/[0.04] active:bg-primary/[0.10] focus:bg-primary/[0.12] disabled:opacity-70 disabled:cursor-not-allowed disabled:hover:!bg-transparent disabled:active:!bg-transparent disabled:focus:!bg-transparent">
                                                {{ __('Reset') }}
                                            </button>
                                        </div>
                                        {{-- End Button --}}

                                        {{-- Button --}}
                                        <div class="block w-auto h-auto p-0 m-0 relative">
                                            <button type="submit" class="inline-block min-w-[64px] w-auto h-9 p-2 m-0 bg-transparent rounded button text-primary text-center shadow-none align-middle truncate outline-none cursor-pointer relative hover:bg-primary/[0.04] active:bg-primary/[0.10] focus:bg-primary/[0.12] disabled:opacity-70 disabled:cursor-not-allowed disabled:hover:!bg-transparent disabled:active:!bg-transparent disabled:focus:!bg-transparent">
                                                {{ __('Submit') }}
                                            </button>
                                        </div>
                                        {{-- End Button --}}

                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>

                </div>

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
