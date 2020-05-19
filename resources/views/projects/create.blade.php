<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
    <style>
        body{
            padding-top: 48px
        }
    </style>
</head>
<body>
    <div id="app" class="container">

        <form method="post" action="/projects">
            <div class="control">
                <label for="name" class="label">Project Name:</label>
                <br>
                <input type="text" name="name" id="name" class="input" v-model="name">
            </div>
            <br>
            <div class="control">
                <label for="description" class="label">Description</label>
                <br>
                <input type="text" name="description" id="description" class="input" v-model="description">
            </div>
            <br>
            <div class="control">
                <button class="button is-primary">Create</button>
            </div>
        </form>
    </div>

    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script src="{{ asset('/js/index.js') }}"></script>
</body>
</html>
