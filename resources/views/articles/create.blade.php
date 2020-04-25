@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.2/css/bulma.min.css">
@endsection

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="title is-1">New Article</h1>

            <form action="/articles" method="POST">
                @csrf

                <div class="field">
                    <label for="title" class="label">Title</label>
                    <div class="control">
                    <input type="text" name="title" class="input @error('title') is-danger @enderror" id="title" value="{{old('title')}}">
                        @error('title')
                            <p class="help is-danger">{{ $errors->first('title') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label for="excerpt" class="label">Excerpt</label>
                    <div class="control">
                        <textarea name="excerpt" id="excerpt" cols="10" rows="10" class="textarea @error('excerpt') is-danger @enderror">{{old('excerpt')}}</textarea>
                        @error('excerpt')
                        <p class="help is-danger">{{$errors->first('excerpt')}}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label for="body" class="label">Body</label>
                    <div class="control">
                        <textarea name="body" id="body" cols="30" rows="10" class="textarea @error('body') is-danger @enderror">{{old('body')}}</textarea>
                        @error('body')
                        <p class="help is-danger">{{$errors->first('body')}}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label for="tags" class="label">Tags</label>
                    <div class="select is-multiple control">
                        <select name="tags[]" id="tags" multiple>
                            @foreach ($tags as $tag)
                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach
                        </select>
                        @error('tags')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
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
