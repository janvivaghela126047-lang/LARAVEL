<h1> Our First Page</h1>

{{5 + 10}}

<br><br> 

{{"Hello World"}}

<br><br>

{{" <h1> Hello World</h1>"}}

{!!"<h1> Hello World</h1>"!!}

<!-- {!!"<script>aler t('Hello World')</script>"!!} -->

<!-- @php 
  $user = "Hello";
@endphp

{{$user}} -->

@php 
  $names = ["salman khan", "Alia Bhatt"]
@endphp

<ul>
@foreach ( $names as $n)
<li>{{ $n }}</li>
@endforeach
</ul>