<h2>This is Home page</h2>
<?php
print_r($data);
echo $str;
?>
{{$str}}
{{-- dd($data)--}}
<br>
<?php
foreach ($data as $key => $value) :
    echo $value. '   ';
endforeach
?>
<br>
@foreach($data as $key=>$value)
    @continue($value<4)
    {{$value}}
@endforeach
<br>
@for($i=0; $i< count($data); $i++)
    {{$data[$i]}}
    @break($data[$i]>=4)
@endfor
<br>
@if(1<2) 
    đúng
@else 
    sai
@endif 

<? $data = [];?>

@forelse($data as $value)
    {{$value}}
@empty
    Khong ton tai data
@endforelse
<br>
@if(empty($data))
    Khong ton tai data
@else 
    @foreach($data as $value)
        {{$value}}
    @endforeach
@endif