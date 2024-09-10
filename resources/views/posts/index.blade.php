<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Buat Postingan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</head>

<body>
    @include('layout.header')
    <div class="container">
        <h1>
            Blog Laravel
            <a class="btn btn-success" href="{{ route('posts.create') }}" role="button">+ Buat Postingan</a>
        </h1>

        @foreach ($post as $data)
            <div class="card mb-3" style="width: 1000px">
                <div class="card-body">
                    <h5 class="card-title">{{ $data->title }}</h5>
                    <p>{{ $data->content }}</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <a href="{{ route('posts.show', $data->id) }}" class="btn btn-primary">Selengkapnya</a>
                    <a href="{{ route('posts.edit', $data->id) }}" class="btn btn-warning">Ubah</a>
                </div>
            </div>
        @endforeach
    </div>
     @include('layout.footer')
</body>

</html>
