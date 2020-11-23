@extends('layouts.layout')

@section('title')
    Project form
@endsection

@section('content')
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
            </div>

            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <!-- Name -->
                                <div class="col-span-6 sm:col-span-4">
                                    <label class="block font-medium text-sm text-gray-700" for="name">
                                        Name
                                    </label>

                                    <input class="form-input rounded-md shadow-sm mt-1 block w-full" id="name" type="text" autocomplete="name" value="Ali Saviz">
                                </div>

                                <!-- Email -->
                                <div class="col-span-6 sm:col-span-4">
                                    <label class="block font-medium text-sm text-gray-700" for="email">
                                        Email
                                    </label>

                                    <input class="form-input rounded-md shadow-sm mt-1 block w-full" id="email" type="email" value="s1154718@windesheim.nl">
                                </div>

                                <!-- biograohy -->
                                <div class="col-span-6 sm:col-span-4">
                                    <label class="block font-medium text-sm text-gray-700" for="biography">
                                        Little biography and skills list to know you better
                                    </label>

                                    <textarea class="form-input rounded-md shadow-sm block mt-1 w-full" id="biography" name="biography" style="margin-top: 4px; margin-bottom: 0px;">Little biography and skills list to know you better Custom field in de user table</textarea>

                                </div>
                            </div>
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <div x-data="{ shown: false, timeout: null }" x-init="window.livewire.find('1b8K0Vpq2YtKDFyCrVnu').on('saved', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })" x-show.transition.opacity.out.duration.1500ms="shown" style="display: none;" class="text-sm text-gray-600 mr-3">
                                Saved.
                            </div>


                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        </div>
    </div>


@endsection
