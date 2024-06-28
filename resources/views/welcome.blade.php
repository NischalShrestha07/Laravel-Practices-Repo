<h1>Hello welcome to Laravel</h1>
<a href="/post"><h1>Post Method!</h1> <br></a>
<a href="/firstpost"><h1>FirstPage</h1> <br></a>
<a href="{{route('mypost')}}"><h1>PostMethod2</h1> </a>



{{5+2}}

<br><br>
{{"<h1>Hello Nepal</h1>"}}  
{{--prints the same as {{}} is very secure and prvents us from XSS hacking  --}}
{{-- So instead of above we can use --}}
{!! "<h1>Namastey NEPAL</h1>"!!}

@php
$details=["Nischal Shrestha","Age:6","Address:BRT"];
$user="Naruto";

@endphp

<ul>
@foreach ($details as $item)
@if ($loop->even)
<li><h1 style='color:blue;font-family:cursive;font-size:2em'>{{$item}}</h1></li>
@elseif ($loop->odd)

    
@endif
@endforeach
</ul>

@{{$user}}
{{-- use of @ infront of any variable will print the keys only --}}

