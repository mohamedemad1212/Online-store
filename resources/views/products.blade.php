<x-layout title="products">
<h1>products</h1>
<ul>
@foreach ($products as $product)
<a href="/products/{{$product['id']}}">
<li>{{$product["name"]}} pays {{$product["price"]}} EGP</li>
</a>
@endforeach
</ul>

</x-layout>