<x-layout title="product">
   
    <img src="{{asset('storage/'.$product["img_path"])}} "    class="img" alt="...">
    <h1> model name : {{$product["name"]}}</h1>
    <h1>model price : {{$product["price"]}} EGP</h1>
    <h1 class="card-text">detales : {{$product["description"]}}</h1>
</x-layout>