@extends('layouts.layout')

@section('title')
    Home
@endsection

@section('content')

    <header class="bg-primary py-5 mb-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">

                    <h1 class="display-4 text-white mt-5 mb-2">Add Review</h1>

                </div>
            </div>
        </div>
    </header>

    <div class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div class="w-full sm:max-w-xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <form method="POST" action="{{route('review.store',['project'=> $project->id, 'sprint'=>$sprint->id, 'user'=>$user->id])}}">
                    @csrf


                    <div class="mt-4">
                        <label class="block font-medium text-sm text-gray-700" for="text">Comment</label>
                        <textarea class="form-input rounded-md shadow-sm block mt-1 w-full" id="description" name="text" rows="4">{{old('text')}}</textarea>
                        @error('text')
                        <p class ='text-sm text-red-600 mt-2'>{{ $message }}</p>
                        @enderror
                    </div>



                    <div class="mt-4">
                        <label class="block font-medium text-sm text-gray-700" for="category">Select a category for your comment</label>
                        <input class="form-input rounded-md shadow-sm block mt-1 col-sm-5" id="category" type="radio" name="category" autocomplete="category">
                        <input type="radio" id="good" name="category" value="1">
                        <label for="good">Things that went Good</label><br>
                        <input type="radio" id="improve" name="category" value="2">
                        <label for="improve">Things that can be improved</label><br><br>
                        <label class="block font-medium text-sm text-gray-700" for="category">Select a Productbacklog</label>
                        <input class="form-input rounded-md shadow-sm block mt-1 col-sm-5" id="productbacklog" type="radio" name="productbacklog" autocomplete="productbacklog">
                        <select name="productbacklog" id="productbacklog">

                            <option></option>

                        </select>
                        <br><br>
                        @error('category')
                        <p class ='text-sm text-red-600 mt-2'>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150 ml-4">Submit Comment </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="columnRetrospective" id="retrospectiveGood">
        <h3 class="h3 columnRetrospectiveTitle">What went Good? </h3>
        <br>


{{--        @foreach($review as $comment)--}}
{{--            @if ($comment->category==1)--}}

                <div class="retrospectiveInput-group retrospectiveOverflow">
                    <div class="cardRetrospective">
                        <p class="card-text"></p>
                    </div>
                    <div class="card-footer text-muted">
{{--                        Written by {{$comment->user->name}} on {{date("d/m/Y",strtotime($comment->created_at))}}--}}
                    </div>
                </div>

{{--            @endif--}}
{{--        @endforeach--}}

    </div>

    <div class="columnRetrospective" id="retrospectiveImprove">
        <h3 class="h3 columnRetrospectiveTitle">Which things can be improved?</h3>
        <br>

{{--        @foreach ($review as $comment)--}}
{{--            @if($comment->category==2)--}}

                <div class="input-group overflow">
                    <div class="cardRetrospective">
                        <p class="card-text"></p>
                    </div>
                    <div class="card-footer text-muted">
{{--                        Written by {{$comment->user->name}} on {{date("d/m/Y",strtotime($comment->created_at))}}--}}
                    </div>
                </div>
{{--            @endif--}}
{{--        @endforeach--}}
    </div>



@endsection
