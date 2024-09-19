@extends('app')

@section('title', 'Staffs')

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
                            <a href="{{ route('staffs.index') }}" class="inline-block w-auto h-auto p-0 m-0 subtitle-1 text-primary no-underline outline-none cursor-pointer hover:underline focus:underline active:underline">
                                {{ __('Staffs') }}
                            </a>
                        </li>

                        <li class="inline-block w-auto h-auto p-0 m-0 relative [&+li::before]:content-['/'] [&+li::before]:mx-1 [&+li::before]:text-black/[0.60] dark:[&+li::before]:text-white/[0.60]">
                            <span class="inline-block w-auto h-auto p-0 m-0 subtitle-1 text-black/[0.60] cursor-default dark:text-white/[0.60]">
                                {{ __('Create') }}
                            </span>
                        </li>
                    </ol>
                </nav>
                {{-- End Breadcrumbs --}}

                {{-- Cards --}}
                <div class="block w-full h-auto p-0 mt-4 bg-white rounded text-black/[0.87] shadow-01dp overflow-hidden dark:bg-charleston-green">

                    <form action="{{ route('staffs.store') }}" method="POST" autocomplete="off" spellcheck="false" autocapitalize="off">
                        @csrf
                        @method('POST')

                        <div class="block w-full h-auto p-0 m-0 overflow-hidden">
                            <div class="flex justify-between items-center gap-4 w-full h-16 p-2 m-0 relative">

                                <div class="flex justify-start items-center gap-2 w-auto h-auto p-0 m-0 overflow-hidden relative">

                                    {{-- Icon Link --}}
                                    <div class="inline-block w-auto h-auto p-0 m-0 relative">
                                        <a href="{{ route('staffs.index') }}" class="block w-10 h-10 p-2 m-0 bg-transparent rounded-full text-black/[0.60] outline-none cursor-pointer align-middle transition duration-150 ease-in-out hover:bg-black/[0.04] active:bg-black/[0.10] focus:bg-black/[0.12] dark:text-white/[0.60] dark:hover:bg-white/[0.04] dark:active:bg-white/[0.10] dark:focus:bg-white/[0.12]" data-te-toggle="tooltip" title="Back" data-te-ripple-init data-te-ripple-color="light">
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
                                            {{ __('Create') }}
                                        </h6>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="block w-full h-auto p-4 m-0 border-y border-solid border-chinese-white overflow-hidden dark:border-dark-liver sm:p-6">
                            <div class="block w-full max-w-3xl h-auto p-0 m-0 relative">
                                <div class="flex flex-col flex-grow-0 gap-0 w-full h-auto p-0 m-0 relative">

                                    <div class="flex flex-col justify-between item-center gap-4 w-full h-auto p-0 my-2 relative sm:flex-row last:mb-0">
                                        <div class="group flex-1 inline-block w-full h-auto p-0 m-0 relative sm:basis-full">
                                            <div class="block w-auto h-auto p-0 mb-2 relative">

                                                {{-- Input --}}
                                                <div class="block w-full h-auto p-0 m-0 relative" data-te-input-wrapper-init>
                                                    <input class="peer caret-primary block min-h-[48px] w-full border-0 bg-transparent pt-3 pb-2 subtitle-1 text-black/[0.87] outline-none transition-none duration-0 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white/[0.87] dark:placeholder:text-white/[0.87] [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0 group-data-[te-validation-state='invalid']:!caret-error disabled:opacity-60 disabled:cursor-not-allowed group-has-[.is-invalid]:!caret-error" type="text" id="staff_number" name="staff_number" value="{{ old('staff_number') }}" autofocus />

                                                    <label class="pointer-events-none absolute top-0 left-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-3 leading-[1.6] text-black/[0.60] transition-all duration-200 ease-out peer-focus:-translate-y-[1.25rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.25rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-white/[0.60] dark:peer-focus:text-primary group-data-[te-validation-state='invalid']:!text-error group-data-[te-validation-state='invalid']:peer-focus:!text-error peer-disabled:opacity-60 peer-disabled:cursor-not-allowed group-has-[.is-invalid]:!text-error" for="staff_number">
                                                        {{ __('Staff Number') }}
                                                    </label>
                                                </div>
                                                {{-- End Input --}}

                                            </div>

                                            @error('staff_number')
                                                <span class="block w-full h-auto p-0 mb-2 text-xs tracking-normal text-error text-left break-words">
                                                    {{ $message}}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="flex flex-col justify-between item-center gap-4 w-full h-auto p-0 my-2 relative sm:flex-row last:mb-0">
                                        <div class="group flex-1 inline-block w-full h-auto p-0 m-0 relative sm:basis-full">
                                            <div class="block w-auto h-auto p-0 mb-2 relative">

                                                {{-- Input --}}
                                                <div class="block w-full h-auto p-0 m-0 relative" data-te-input-wrapper-init>
                                                    <input class="peer caret-primary block min-h-[48px] w-full border-0 bg-transparent pt-3 pb-2 subtitle-1 text-black/[0.87] outline-none transition-none duration-0 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white/[0.87] dark:placeholder:text-white/[0.87] [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0 group-data-[te-validation-state='invalid']:!caret-error disabled:opacity-60 disabled:cursor-not-allowed group-has-[.is-invalid]:!caret-error" type="text" id="name" name="name" value="{{ old('name') }}" />

                                                    <label class="pointer-events-none absolute top-0 left-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-3 leading-[1.6] text-black/[0.60] transition-all duration-200 ease-out peer-focus:-translate-y-[1.25rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.25rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-white/[0.60] dark:peer-focus:text-primary group-data-[te-validation-state='invalid']:!text-error group-data-[te-validation-state='invalid']:peer-focus:!text-error peer-disabled:opacity-60 peer-disabled:cursor-not-allowed group-has-[.is-invalid]:!text-error" for="name">
                                                        {{ __('Name') }}
                                                    </label>
                                                </div>
                                                {{-- End Input --}}

                                            </div>

                                            @error('name')
                                                <span class="block w-full h-auto p-0 mb-2 text-xs tracking-normal text-error text-left break-words">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="flex flex-col justify-between item-center gap-4 w-full h-auto p-0 my-2 relative sm:flex-row last:mb-0">
                                        <span class="flex-1 inline-block w-full h-auto p-0 m-0 caption text-black/[0.60] truncate dark:text-white/[0.60]">
                                          {{ __('Gender') }}
                                        </span>
                                    </div>

                                    <div class="flex flex-col justify-between item-center gap-4 w-full h-auto p-0 my-2 relative sm:flex-row last:mb-0">
                                        <div class="group flex-1 inline-block w-full h-auto p-0 m-0 relative sm:basis-full">
                                            <div class="block w-auto h-auto p-0 mb-2 relative">

                                                <div class="flex flex-wrap justify-start items-start gap-4 w-auto h-auto p-0 m-0 relative">

                                                    @foreach(\App\Enums\GenderEnum::cases() as $key => $gender)
                                                        {{-- Checkbox --}}
                                                        <div class="mb-0 block min-h-[1.5rem] pl-[1.5rem]">
                                                            <input class="peer relative float-left -ml-[1.5rem] mr-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-black/[0.60] outline-none before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_theme(colors.primary)] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:border-white/[0.60] dark:checked:border-primary dark:checked:after:border-black dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[0px_0px_0px_13px_theme(colors.primary)] disabled:opacity-75 disabled:cursor-not-allowed group-has-[.is-invalid]:checked:!border-error group-has-[.is-invalid]:checked:after:!border-error group-has-[.is-invalid]:checked:after:!bg-error group-has-[.is-invalid]:checked:focus:!border-error group-has-[.is-invalid]:checked:focus:before:!shadow-[0px_0px_0px_13px_theme(colors.error)] group-has-[.is-invalid]:dark:checked:!border-error group-has-[.is-invalid]:dark:checked:focus:before:!shadow-[0px_0px_0px_13px_theme(colors.error)" type="radio" id="{{ $gender->value }}" name="gender" value="{{ $gender->value }}" @checked(old('gender', $key === 0) == $gender->value) />

                                                            <label class=" inline-block pl-1.5 mt-px subtitle-1 !text-black/[0.87] hover:cursor-pointer dark:!text-white/[0.87] peer-disabled:opacity-75 peer-disabled:cursor-not-allowed" for="{{ $gender->value }}">
                                                                {{ $gender->label() }}
                                                            </label>
                                                        </div>
                                                        {{-- End Checkbox --}}
                                                    @endforeach

                                                </div>

                                            </div>

                                            @error('gender')
                                                <span class="block w-full h-auto p-0 mb-2 text-xs tracking-normal text-error text-left break-words">
                                                  {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="flex flex-col justify-between item-center gap-4 w-full h-auto p-0 my-2 relative sm:flex-row last:mb-0">
                                        <div class="group flex-1 inline-block w-full h-auto p-0 m-0 relative sm:basis-full">
                                            <div class="block w-auto h-auto p-0 mb-2 relative">

                                                {{-- Input --}}
                                                <div class="block w-full h-auto p-0 m-0 relative" data-te-input-wrapper-init>
                                                    <input class="peer caret-primary block min-h-[48px] w-full border-0 bg-transparent pt-3 pb-2 subtitle-1 text-black/[0.87] outline-none transition-none duration-0 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white/[0.87] dark:placeholder:text-white/[0.87] [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0 group-data-[te-validation-state='invalid']:!caret-error disabled:opacity-60 disabled:cursor-not-allowed group-has-[.is-invalid]:!caret-error" type="email" id="email" name="email" value="{{ old('email') }}" />

                                                    <label class="pointer-events-none absolute top-0 left-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-3 leading-[1.6] text-black/[0.60] transition-all duration-200 ease-out peer-focus:-translate-y-[1.25rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.25rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-white/[0.60] dark:peer-focus:text-primary group-data-[te-validation-state='invalid']:!text-error group-data-[te-validation-state='invalid']:peer-focus:!text-error peer-disabled:opacity-60 peer-disabled:cursor-not-allowed group-has-[.is-invalid]:!text-error" for="email">
                                                        {{ __('Email') }}
                                                    </label>
                                                </div>
                                                {{-- End Input --}}

                                            </div>

                                            @error('email')
                                                <span class="block w-full h-auto p-0 mb-2 text-xs tracking-normal text-error text-left break-words">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="flex flex-col justify-between item-center gap-4 w-full h-auto p-0 my-2 relative sm:flex-row last:mb-0">
                                        <div class="group flex-1 inline-block w-full h-auto p-0 m-0 relative sm:basis-full">
                                            <div class="block w-auto h-auto p-0 mb-2 relative">

                                                {{-- Input --}}
                                                <div class="block w-full h-auto p-0 m-0 relative" data-te-input-wrapper-init>
                                                    <input class="peer caret-primary block min-h-[48px] w-full border-0 bg-transparent pt-3 pb-2 subtitle-1 text-black/[0.87] outline-none transition-none duration-0 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white/[0.87] dark:placeholder:text-white/[0.87] [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0 group-data-[te-validation-state='invalid']:!caret-error disabled:opacity-60 disabled:cursor-not-allowed group-has-[.is-invalid]:!caret-error" type="tel" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" />

                                                    <label class="pointer-events-none absolute top-0 left-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-3 leading-[1.6] text-black/[0.60] transition-all duration-200 ease-out peer-focus:-translate-y-[1.25rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.25rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-white/[0.60] dark:peer-focus:text-primary group-data-[te-validation-state='invalid']:!text-error group-data-[te-validation-state='invalid']:peer-focus:!text-error peer-disabled:opacity-60 peer-disabled:cursor-not-allowed group-has-[.is-invalid]:!text-error" for="phone_number">
                                                        {{ __('Phone Number') }}
                                                    </label>
                                                </div>
                                                {{-- End Input --}}

                                            </div>

                                            @error('phone_number')
                                                <span class="block w-full h-auto p-0 mb-2 text-xs tracking-normal text-error text-left break-words">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="flex flex-col justify-between item-center gap-4 w-full h-auto p-0 my-2 relative sm:flex-row last:mb-0">
                                        <div class="group flex-1 inline-block w-full h-auto p-0 m-0 relative sm:basis-full">
                                            <div class="block w-auto h-auto p-0 mb-2 relative">

                                                {{-- Input --}}
                                                <div class="block w-full h-auto p-0 m-0 relative" data-te-input-wrapper-init>
                                                    <input class="peer caret-primary block min-h-[48px] w-full border-0 bg-transparent pt-3 pb-2 subtitle-1 text-black/[0.87] outline-none transition-none duration-0 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white/[0.87] dark:placeholder:text-white/[0.87] [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0 group-data-[te-validation-state='invalid']:!caret-error disabled:opacity-60 disabled:cursor-not-allowed group-has-[.is-invalid]:!caret-error" type="text" id="job_title" name="job_title" value="{{ old('job_title') }}" />

                                                    <label class="pointer-events-none absolute top-0 left-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-3 leading-[1.6] text-black/[0.60] transition-all duration-200 ease-out peer-focus:-translate-y-[1.25rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.25rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-white/[0.60] dark:peer-focus:text-primary group-data-[te-validation-state='invalid']:!text-error group-data-[te-validation-state='invalid']:peer-focus:!text-error peer-disabled:opacity-60 peer-disabled:cursor-not-allowed group-has-[.is-invalid]:!text-error" for="job_title">
                                                        {{ __('Job Title') }}
                                                    </label>
                                                </div>
                                                {{-- End Input --}}

                                            </div>

                                            @error('job_title')
                                                <span class="block w-full h-auto p-0 mb-2 text-xs tracking-normal text-error text-left break-words">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="flex flex-col justify-between item-center gap-4 w-full h-auto p-0 my-2 relative sm:flex-row last:mb-0">
                                        <div class="group flex-1 inline-block w-full h-auto p-0 m-0 relative sm:basis-full">
                                            <div class="block w-auto h-auto p-0 mb-2 relative">

                                                {{-- Select --}}
                                                <div class="block w-full h-auto p-0 m-0 relative">
                                                    <select id="department_id" name="department_id" data-te-select-init>
                                                        <option value="" hidden selected></option>

                                                        @foreach ($departments as $key => $department)
                                                            <option value="{{ $department->id }}" @selected(old('department_id') == $department->id)>
                                                                {{ $department->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                    <label for="department_id" data-te-select-label-ref>
                                                        {{ __('Department') }}
                                                    </label>
                                                </div>
                                                {{-- End Select --}}

                                            </div>

                                            @error('department_id')
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
                                            <button type="reset" class="inline-block min-w-[64px] w-auto h-9 p-2 m-0 bg-transparent rounded button text-primary text-center shadow-none align-middle truncate outline-none cursor-pointer relative hover:bg-primary/[0.04] active:bg-primary/[0.10] focus:bg-primary/[0.12] disabled:opacity-70 disabled:cursor-not-allowed disabled:hover:!bg-transparent disabled:active:!bg-transparent disabled:focus:!bg-transparent" data-te-ripple-init data-te-ripple-color="light">
                                                {{ __('Reset') }}
                                            </button>
                                        </div>
                                        {{-- End Button --}}

                                        {{-- Button --}}
                                        <div class="block w-auto h-auto p-0 m-0 relative">
                                            <button type="submit" class="inline-block min-w-[64px] w-auto h-9 p-2 m-0 bg-transparent rounded button text-primary text-center shadow-none align-middle truncate outline-none cursor-pointer relative hover:bg-primary/[0.04] active:bg-primary/[0.10] focus:bg-primary/[0.12] disabled:opacity-70 disabled:cursor-not-allowed disabled:hover:!bg-transparent disabled:active:!bg-transparent disabled:focus:!bg-transparent" data-te-ripple-init data-te-ripple-color="light">
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

        @include('layout.footer')

    </div>
@endsection
