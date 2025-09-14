@foreach ($events as $event)
    <div class="mb-4 p-4 border rounded">
        <h3 class="text-lg font-bold">{{ $event->title }}</h3>
        <p>{{ $event->description }}</p>
    </div>
@endforeach
