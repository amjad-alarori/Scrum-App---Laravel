@extends('layouts.layout')

@section('title')
    Daily Stand Up Form
@endsection

@section('content')
    <header class="bg-primary py-5 mb-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <h1 class="display-4 text-white mt-5 mb-2">Daily Stand Up Form</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="h-100 flex flex-col md:justify-center items-center pt-6 sm:pt-0">
        <div class="w-full md:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden md:rounded-lg">
            <form method="POST"
                  action="{{isset($dailyStandUp)?:route('dailyStandUp.store', ['project'=> $project, 'sprint'=>$sprint])}}">
                @csrf

                <div class="mt-4 border-bottom border-secondary pb-3 clearfix">
                    <label class="block font-medium text-sm text-gray-700" for="standUpDate">Date of the
                        stand-up:</label>
                    @unless(isset($dailyStandUp))
                        <input class="form-input rounded-md shadow-sm block mt-1 col-sm-5" id="standUpDate" type="date"
                               name="standUpDate" autocomplete="standUpDate" required
                               value="{{old('standUpDate')}}">
                        @error('standUpDate')
                        <p class='text-sm text-red-600 mt-2'>{{ $message }}</p>
                        @enderror
                    @else
                        <label>{{$dailyStandUp->stand_up_date}}</label>
                    @endunless
                </div>
                @if(isset($dailyStandUp))
                    <div class="my-4">
                        <div class="list-group">
                            @foreach($dailyStandUp->questions as $question)
                                <div href="#" class="list-group-item list-group-item-action">
                                    {{$question->question}}
                                    <div class="inline-flex items-center justify-end float-right">
{{--                                        <form method="POST" action="">--}}
{{--                                            @csrf--}}
{{--                                            @method('DELETE')--}}
                                            <button type="submit"
                                                    class="btn btn-danger inline-flex items-center px-4 py-1 border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest focus:outline-none disabled:opacity-25 transition ease-in-out duration-150 ml-4">
                                                X
                                            </button>
{{--                                        </form>--}}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-700" for="question">New question</label>
                    <input class="form-input rounded-md shadow-sm block w-full" id="question" type="text"
                           name="question" autocomplete="question" required
                           value="{{old('question')}}">
                    @error('question')
                    <p class='text-sm text-red-600 mt-2'>{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4">
                    <div class="flex items-center justify-end mt-4">
                        <a href="{{(route('dailyStandUp.index',['project'=> $project, 'sprint'=> $sprint]))}}"
                           class="btn inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150 ml-4">
                            exit
                        </a>
                        <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150 ml-4">
                            create
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
