@extends('layout_but')


@section('butt')
    
@extends('layout')
<H1 style="color:black;text-align:center">Добавление новой записи в таблицу</H1>
    <iframe src="{{URL::to('/population')}}"  frameborder="1" width=100% height="250px"></iframe>
    <iframe src="{{URL::to('/weather')}}" frameborder="1" width=100% height="250px"></iframe>
 @endsection

</html>
