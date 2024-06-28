

<h1>Header Page</h1>
{{-- <p>{!!"<h1>$names</h1>"!!}</p> --}}

@foreach ($names as $n)
<p>{{$n}}</p>
    
@endforeach