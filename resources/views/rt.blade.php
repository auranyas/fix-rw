@extends('layouts.second')

@section('second')
<div class="row p-3">
    @foreach ($data as $b)
    <div class="col-3">
        <div class="card">
            

            <div class="card-body" style="background-color: #529B74"><h6 class="font-semibold"><a href="{{ url('/warga') }}">{{ $b->rt }}</a></h6></div>
            <div class="card-body" style="background-color: #FCF9FF">{{ $b->nama_rt }}</div>
            <img src="{{ asset('/storage/' . $b->foto) }}" style="border-radius: 50%; width: 5rem; position:absolute; top: 1rem; right: 1rem;"> 
            
        </div>
    </div> 
    @endforeach
</div>
@endsection