@extends('layouts.layout')

@section('title')
    Home
@endsection

@section('content')

    <header class="bg-primary py-5 mb-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">

                    <h1 class="display-4 text-white mt-5 mb-2">Add Sprint</h1>

                </div>
            </div>
        </div>
    </header>

    <div class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div class="w-full sm:max-w-xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <form method="POST" action="{{url('saveSprint')}}">
                    @csrf
                    <div>
                        <label class="block font-medium text-sm text-gray-700" for="title">Sprint title</label>
                        <input class="form-input rounded-md shadow-sm block mt-1 w-full" id="title" type="text" name="title" required autofocus="autofocus" autocomplete="title" value="{{old('SprintTitle')}}">
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
                        <label class="block font-medium text-sm text-gray-700" for="startdate">Start date</label>
                        <input class="form-input rounded-md shadow-sm block mt-1 col-sm-5" id="startdate" type="date" name="startdate" autocomplete="startdate" value="{{old('startdate')}}">
                        @error('startdate')
                        <p class ='text-sm text-red-600 mt-2'>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <label class="block font-medium text-sm text-gray-700" for="enddate">End date</label>
                        <input class="form-input rounded-md shadow-sm block mt-1 col-sm-5" id="enddate" type="date" name="enddate" autocomplete="enddate" value="{{old('enddate')}}">
                        @error('startdate')
                        <p class ='text-sm text-red-600 mt-2'>{{ $message }}</p>
                        @enderror
                    </div>

                    <input type="hidden" name="projectId" value="{{$projects->id}}">



                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150 ml-4">Create Sprint </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
