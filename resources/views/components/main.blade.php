<main>
    <div class="container mt-5">
        <div class="row">
    <ul class="d-flex list-unstyled flex-wrap">
        @foreach ($comics as $comic)
        <li class="flex-column col-2"
        >
        <a href="/comic">
            <img src="{{ $comic['thumb'] }}" width="100px">
            <p>         {{ $comic['title'] }}</p>  
            </a> 

        </li>
        @endforeach
    </ul>
    </div>
    </div>
</main>