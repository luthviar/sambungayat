
@foreach ($ranking as $rankings)
    <p>This is user {{ $rankings->id_user }}  total {{ $rankings->total_score }}</p>
@endforeach