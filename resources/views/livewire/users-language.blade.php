<div class="mr-4 ">
    <x-jet-dropdown align="right" width="42">
        <x-slot name="trigger">
                <span class="inline-flex rounded-md">
                    <button type="button"
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">

                        @if(auth()->user()->language == 'kh') {{ __('Khmer') }} @else {{ __('English') }} @endif

{{--                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"--}}
{{--                             fill="currentColor">--}}
{{--                                            <path fill-rule="evenodd"--}}
{{--                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"--}}
{{--                                                  clip-rule="evenodd"></path>--}}
{{--                         </svg>--}}
                    </button>
                </span>
        </x-slot>

        <x-slot name="content">
{{--            <div class="block px-4 py-2 text-xs text-gray-400">--}}
{{--                {{ __('Change Language') }}--}}
{{--            </div>--}}

            <x-jet-dropdown-link wire:click.prevent="update('kh')" href=""
                                 id="khmer">
                {{ __('Khmer') }}
            </x-jet-dropdown-link>

            <x-jet-dropdown-link wire:click.prevent="update('en')" href=""
                                 id="english">
                {{ __('English') }}
            </x-jet-dropdown-link>

        </x-slot>
    </x-jet-dropdown>
</div>
