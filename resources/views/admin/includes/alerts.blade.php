{{-- <div class="alert">
    <p>Alert - {{$content ?? ''}}</p> 
</div> --}}
@if ($errors->any())
    <div class="alert alert-warning">
        <ul>

            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>   
            @endforeach
        </ul>
    </div>
@endif