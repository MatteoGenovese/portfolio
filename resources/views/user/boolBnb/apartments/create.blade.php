@extends('layouts.app')

@section('title', '| Nuova abitazione')

@section('content')

    <main>
        <div class="container">
            <div class="row">

                    <form action="{{ route('user.apartments.store') }}" method="post" class="crud-form" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        @include('user.boolbnb.apartments.includes.form', [ $isRequired = '*'])
                    </form>

            </div>
        </div>
    </main>

@endsection

@section("bottom-scripts")
    @include("user.boolbnb.apartments.includes.form-scripts")
@endsection
