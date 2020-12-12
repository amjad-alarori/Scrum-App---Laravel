@extends('layouts.layout')

@section('title')
    Daily StandUp
@endsection

@section('content')

    <div class="shadow overflow-hidden sm:rounded-md py-2">
        @foreach($dailyStandUp->questions as $question)
            <form>
                <div class="row px-4 pt-4 pb-2 bg-white sm:p-6">
                    <label class="block px-3 font-medium text-sm text-gray-700" for="question{{$question->id}}">
                        {{$question->question}}
                    </label>
                    <textarea class="form-input rounded-md shadow-sm mx-4 mt-1 block w-full" id="question{{$question->id}}" name="question{{$question->id}}">
                        {{old('question'.$question->id)}}
                    </textarea>
                    @error('text')
                    <p class ='text-sm text-red-600 mt-2'>{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex {{$dailyStandUp->questions->last() === $question?"":"border-bottom border-secondary"}} items-center justify-end px-4 pb-3 pt-1 bg-gray-50 text-right sm:px-6">
                    <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                        Save
                    </button>
                </div>
            </form>
        @endforeach
    </div>

@endsection
