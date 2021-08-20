@extends('layout.layout')
@section('main_content')
    <div class="card mb-3">
        <div class="text-center"><h1 class="card-title">Card title</h1></div>
        <img src="https://dexpenslive.blob.core.windows.net/dexrpd/AttachedPhotoAlbums/Album117/02912fb5-fdf9-476a-8e87-1116c57eb51e.jpg" class="card-img-top" alt="...">
        <div class="card-body">

            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.
                This content is a little bit longer.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, in, laudantium! Dolorum illo non perspiciatis,
                repellat rerum ut voluptas voluptates. Fuga illo impedit incidunt maxime possimus reiciendis saepe sit ullam?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem nam nostrum optio provident sit tempore.
                Adipisci cupiditate enim explicabo quibusdam voluptatibus! Ab debitis facere laboriosam libero modi, quam repudiandae! Debitis.
                This content is a little bit longer.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, in, laudantium! Dolorum illo non perspiciatis,
                repellat rerum ut voluptas voluptates. Fuga illo impedit incidunt maxime possimus reiciendis saepe sit ullam?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem nam nostrum optio provident sit tempore.
                Adipisci cupiditate enim explicabo quibusdam voluptatibus! Ab debitis facere laboriosam libero modi, quam repudiandae! Debitis.
                This content is a little bit longer.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, in, laudantium! Dolorum illo non perspiciatis,
                repellat rerum ut voluptas voluptates. Fuga illo impedit incidunt maxime possimus reiciendis saepe sit ullam?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem nam nostrum optio provident sit tempore.
                Adipisci cupiditate enim explicabo quibusdam voluptatibus! Ab debitis facere laboriosam libero modi, quam repudiandae! Debitis.
            </p>

        </div>
    </div>
    <h1>Залиште коментар</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error  }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="articles/check">
        @csrf
        <input type="text" name="name" id="name" class="form-control" placeholder="Введіть імя"><br>
        <input type="text" name="message" id="message" class="form-control" placeholder="Залиште коментар"><br>
        <button type="submit" class="btn btn-success">Надіслати</button>
    </form>
    <br><br><br>
    @foreach($reviews as $el)
        <div class="alert alert-warning">
            <h3>{{$el->name}}</h3>
            <p>{{$el->message}}</p>
        </div>
    @endforeach
@endsection
