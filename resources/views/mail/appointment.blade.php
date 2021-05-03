<div class="text-center">
    <h1>{{ config('app.name') }}</h1>
    @if($appointment->approved)
        <h3 style="color: green">Approved at {{ $appointment->updated_at->format('g:i A d/M/Y') }}</h3>
    @else
        <h3 style="color: red">Reject at {{ $appointment->updated_at->format('g:i A d/M/Y') }}</h3>
    @endif
    <hr>
    <h3>{{ $appointment->schedule->doctor->name ?? '--' }}</h3>
</div>
