@extends('layouts.layout')

@section('title')
    Daily StandUp
@endsection

@section('content')

    <div class="shadow overflow-hidden sm:rounded-md py-2">
        @error('questionId')
        <div class="row px-4 pt-4 pb-2 bg-white sm:p-6">
            <p class='text-sm text-red-600 px-4 mt-2'>{{ $message }}</p>
        </div>
        @enderror
        @foreach($dailyStandUp->questions as $question)
            @if(count($question->usersAnswers())==0 || (isset($answer) && $question->usersAnswers()[0]==$answer ))
                <form method="POST"
                      action="{{isset($answer)?route('standUpAnswer.update',['project'=>$project,'sprint'=>$sprint, 'dailyStandUp'=>$dailyStandUp,'standUpAnswer'=>$answer]):route('standUpAnswer.store',['project'=>$project,'sprint'=>$sprint, 'dailyStandUp'=>$dailyStandUp])}}">
                    @csrf
                    @if(isset($answer))
                        @method('PUT')
                    @endif
                    <div class="row px-4 pt-4 pb-2 bg-white sm:p-6">
                        <label class="block px-3 font-medium text-sm text-gray-700" for="question{{$question->id}}">
                            {{$question->question}}
                        </label>
                        <input type="hidden" name="questionId" value="{{$question->id}}">
                        <textarea class="form-input rounded-md shadow-sm mx-4 mt-1 block w-full"
                                  id="question{{$question->id}}" style="white-space: pre-wrap;"
                                  name="question{{$question->id}}">{{is_null(old('question'.$question->id))?isset($answer)?$answer->answer:'':old('question'.$question->id)}}</textarea>
                        @error('question'.$question->id)
                        <p class='text-sm text-red-600 px-4 mt-2'>{{ $message }}</p>
                        @enderror
                    </div>

                    <div
                        class="flex {{$dailyStandUp->questions->last() === $question?"":"border-bottom border-secondary"}} items-center justify-end px-4 pb-3 pt-1 bg-gray-50 text-right sm:px-6">
                        <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                            Save
                        </button>
                    </div>
                </form>
            @else

                    <div class="row px-4 pt-4 pb-2 bg-white sm:p-6">
                        <label class="block px-3 font-medium text-sm text-gray-700" for="question{{$question->id}}">
                            {{$question->question}}
                        </label>
                        <div class="form-input rounded-md shadow-sm mx-4 mt-1 block w-full"
                                  id="question{{$question->id}}" style="white-space: pre-wrap;">{{$question->usersAnswers()[0]->answer}}</div>
                    </div>

                    <div
                        class="flex {{$dailyStandUp->questions->last() === $question?"":"border-bottom border-secondary"}} items-center justify-end px-4 pb-3 pt-1 bg-gray-50 text-right sm:px-6">
                        <a class="btn edit-button inline-flex items-center mx-2 px-4 py-2 border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150"
                           href="{{route('standUpAnswer.edit',['project'=>$project,'sprint'=>$sprint, 'dailyStandUp'=>$dailyStandUp, 'standUpAnswer'=>$question->usersAnswers()[0]])}}">
                            Edit
                        </a>
                        <form method="POST" action="{{route('standUpAnswer.destroy',['project'=>$project,'sprint'=>$sprint, 'dailyStandUp'=>$dailyStandUp, 'standUpAnswer'=>$question->usersAnswers()[0]])}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="del-but inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Delet
                            </button>
                        </form>
                    </div>
            @endif
        @endforeach
    </div>

@endsection
