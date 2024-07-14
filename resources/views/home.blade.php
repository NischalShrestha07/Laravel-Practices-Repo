<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>
    <div class="container">
        {{-- USE OF FOREACH --}}
        @php
        $arr=[1,2,3,4,6,6,7,7]
        @endphp
        @foreach ($arr as $item)
        {{$item}}
        @endforeach
    </div>








    {{-- <h1>Welcome,{{$name }} </h1> --}}
    {{-- <h1>Today Date is {{date('d-m-y')}}</h1> --}}
    {{--
    @unless ($name=='narayan')
    The name is not narayan
    @endunless ()


    @if ($name=='naruto')
    the tale of naruto uzumaki
    <br>
    @else
    the tale of narayan shrestha

    @endif --}}

    {{-- looping directrives FOR LOOP --}}
    {{-- @for ($i = 0; $i <= 10; $i++) <h1>{{'Narayan'}}</h1>
        @endfor --}}


        {{-- WHILE LOOPS DETAILS --}}
        {{-- @php
        $i=1
        @endphp
        @while ($i<10) <h1>
            {{$i}}
            </h1> @php $i++ @endphp @endwhile --}}
</body>


</html>