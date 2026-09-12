@if ($attributes->get('type') === 'video')
    <video width="400" controls>
        <source src="{{ asset($slot) }}" type="video/mp4">
        Your browser does not support HTML video.
    </video>
@else
    <img {{ $attributes }} src="{{ asset($slot) }}" alt="Poster">
@endif
