@extends('layouts.layout')

@section('title')
    Project form
@endsection

@section('content')
    <div class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div class="w-full sm:max-w-xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <form method="POST" action="{{url('saveProject')}}">
                    @csrf
                    <div>
                        <label class="block font-medium text-sm text-gray-700" for="title">Project title</label>
                        <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="title" type="text" name="title" required autofocus="autofocus" autocomplete="title" value="{{old('title')}}">
                        @error('title')
                            <p class ='text-sm text-red-600 mt-2'>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <label class="block font-medium text-sm text-gray-700" for="description">Description</label>
                        <textarea class="form-input rounded-md shadow-sm block mt-1 w-full" id="description" name="description" rows="4">{{old('description')}}</textarea>
                        @error('description')
                            <p class ='text-sm text-red-600 mt-2'>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <label class="block font-medium text-sm text-gray-700" for="mission">Mission</label>
                        <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="mission" type="text" name="mission" autocomplete="mission" value="{{old('mission')}}">
                        @error('mission')
                            <p class ='text-sm text-red-600 mt-2'>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <label class="block font-medium text-sm text-gray-700" for="vision">Vision</label>
                        <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="vision" type="text" name="vision" autocomplete="vision" value="{{old('vision')}}">
                        @error('vision')
                            <p class ='text-sm text-red-600 mt-2'>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <label class="block font-medium text-sm text-gray-700" for="deadline">Deadline</label>
                        <input class="form-input rounded-md shadow-sm block mt-1 col-sm-5" id="deadline" type="date" name="deadline" autocomplete="deadline" value="{{old('deadline')}}">
                        @error('deadline')
                            <p class ='text-sm text-red-600 mt-2'>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <label class="block font-medium text-sm text-gray-700" for="sprintLength">Deadline</label>
                        <input class="form-input rounded-md shadow-sm inline-block mt-1 col-sm-5" id="sprintLength" type="number"  name="sprintLength" autocomplete="sprintLength" value="{{old('sprintLength')}}"> day(s)
                        @error('sprintLength')
                            <p class ='text-sm text-red-600 mt-2'>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150 ml-4">Create project</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
