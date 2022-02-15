@foreach ($works as $work)
    <div class="col-md-4 col-sm-6">
        <figure>
            <img src="{{ asset('storage/' . $work->image) }}">
            <figcaption>
                <h3>{{ $work->title }}</h3>
                <span>{{ $work->client->name }}</span>
                <a href="works/{{ $work->id }}/{{ Str::slug($work->title, '-') }}">Take a look</a>
            </figcaption>
        </figure>
    </div>
@endforeach
