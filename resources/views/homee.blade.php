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
        @php
        $countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp;
        Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia
        &amp; Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina
        Faso","Burundi","Cambodia","Cameroon","Cape Verde","Cayman
        Islands","Chad","Chile","China","Colombia","Congo","Cook
        Islands","Costa Rica","Cote D Ivoire","Croatia","Cruise Ship","Cuba","Cyprus","Czech
        Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial
        Guinea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French
        Polynesia","French
        West
        Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea
        Bissau","Guyana","Haiti","Honduras","Hong
        Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of
        Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kuwait","Kyrgyz
        Republic","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Mauritania","Mauritius","Mexico","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Namibia","Nepal","Netherlands","Netherlands
        Antilles","New Caledonia","New
        Zealand","Nicaragua","Niger","Nigeria","Norway","Oman","Pakistan","Palestine","Panama","Papua New
        Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto
        Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San
        Marino","Satellite","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra
        Leone","Singapore","Slovakia","Slovenia","South Africa","South Korea","Spain","Sri Lanka","St Kitts &amp;
        Nevis","St
        Lucia","St Vincent","St.
        Lucia","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor
        L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia","Turkey","Turkmenistan","Turks &amp;
        Caicos","Uganda","Ukraine","United Arab Emirates","United
        Kingdom","Uruguay","Uzbekistan","Venezuela","Vietnam","Virgin
        Islands (US)","Yemen","Zambia","Zimbabwe"];
        @endphp
        the name of the countries are:
        @foreach ($countries as $item)
        {{$item}}
        @unless ($item!="Nepal" && $item!=="India")
        <h1>Nepal is here</h1>
        @endunless
        @if($item=="China")
        @continue

        @endif
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