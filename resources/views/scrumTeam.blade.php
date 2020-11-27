@extends('layouts.layout')

@section('title')
    Scrum team
@endsection

@section('content')
    @foreach($members as $member)
        <div class="container pt-5">
            <div class="row">
                <div class="card col-sm-4 rounded p-1 scrum-team-member">
                    <div class="row no-gutters h-100 w-100">
                        <div class="col-sm-5 h-100 rounded" style="background: #868e96;">
                            <img class="card-img-top h-100 w-100 p-2 rounded-full"
                                 src="{{ $member['user']->profile_photo_url }}" alt="{{ $member['user']->name }}"/>
                        </div>
                        <div class="col-sm-7 h-100">
                            <div class="card-body h-100">
                                <div class="h-75">
                                    <h5 class="card-title font-weight-bold">{{$member['scrumRole']->title}}</h5>
                                    <p class="card-text">Name: {{ $member['user']->name }}</p>
                                </div>
                                <div class="h-25">
                                    <div class="float-right">
                                        <a href="#" class="btn btn-primary stretched-link float-right w-100">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <hr class="m-4"/>

    <div class="flex flex-col md:justify-center items-center pt-6 md:pt-0 bg-gray-100">
        <div class="w-full md:max-w-xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden md:rounded-lg"
             id="formcontainer">
            <form method="POST" id="searchform" action="{{-- route('saveProject') --}}">
                @csrf

                <div class="form-group">
                    <label class="block font-medium text-sm text-gray-700" for="user">E-mail of the user</label>
                    <div class="input-group md-form form-sm form-2 pl-0">
                        <input class="rounded-md shadow-sm block mt-1 w-full form-control lime-border" id="user"
                               type="text" placeholder="Search e-mail" aria-label="user" name="user"
                               value="{{old('user')}}">
                        <div class="input-group-append">
                            <button type="button"
                                    class="rounded-md shadow-sm block mt-1 w-full btn input-group-text lime lighten-2"
                                    id="userSearch">search
                            </button>
                        </div>
                    </div>
                    @error('user')
                    <p class='text-sm text-red-600 mt-2'>{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="block font-medium text-sm text-gray-700" for="role">Role</label>
                    <select class="form-control rounded-md shadow-sm block mt-1 w-full" id="role" name="role" required
                            autofocus>
                        @foreach($scrumRoles as $role)
                            <option
                                value="{{$role->id}}" {{old('role')==$role->id?"selected":""}}>{{$role->title}}</option>
                        @endforeach
                    </select>
                    @error('role')
                    <p class='text-sm text-red-600 mt-2'>{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150 ml-4">
                        Create project
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('Script')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script>
        function dangetAlert(parentObj) {
            $(parentObj).prepend('<div class="alert alert-danger" id="searcherror" role="alert">' + messagetxt + '</div>');
            $("#searcherror").delay(3000).slideUp(300, function () {
                $(this).remove();
            });
        };

        $(function () {
            $("#userSearch").click(function () {
                $.post("{{route('searchuser')}}", $("#searchform").serialize())
                    .done(function (data) {
                        let response = jQuery.parseJSON(data)
                        if (response.status === false) {
                            messagetxt = response.message;
                        } else if (response.message !== null) {
                            messagetxt = null;
                            email = response.email;
                        }
                        if (messagetxt !== null) {
                            dangetAlert('#formcontainer');
                        } else {
                            $("#user").val(email);
                        }
                    }).fail(function () {
                    messagetxt = "something went wrong. \ntry it again!";
                    dangetAlert('#formcontainer');
                });
            });
        })
        ;
    </script>
@endsection
