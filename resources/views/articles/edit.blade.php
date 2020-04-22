@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.2/css/bulma.min.css">
@endsection

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="title is-1">Update Article</h1>

            <form action="/articles" method="PUT">
                @csrf

                <div class="field">
                    <label for="title" class="label">Title</label>
                    <div class="control">
                        <input type="text" name="title" class="input" id="title">
                    </div>
                </div>

                <div class="field">
                    <label for="excerpt" class="label">Excerpt</label>
                    <div class="control">
                        <textarea name="excerpt" id="excerpt" cols="10" rows="10" class="textarea"></textarea>
                    </div>
                </div>

                <div class="field">
                    <label for="body" class="label">Body</label>
                    <div class="control">
                        <textarea name="body" id="body" cols="30" rows="10" class="textarea"></textarea>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
