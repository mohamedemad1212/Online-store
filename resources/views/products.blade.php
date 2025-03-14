<x-layout title="products">
<h1>products</h1>
@foreach ($products as $product)<br>
    <div class="card" style="width: 18rem;">
    <img src="{{asset('storage/'.$product["img_path"])}} "    class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Model : {{$product["name"]}}</h5>
      <h5 class="card-title"> brand name : {{$product->company->name}}</h5>
      <h5 class="card-title">{{$product["price"]}}</h5>
     
      <a href="/products/{{$product['id']}}" class="btn btn-primary">BUY NOW</a>
    </div>
  </div>

<a href="/products/{{$product['id']}}">

</a>
@endforeach
<br>
{{ $products->links('pagination::bootstrap-4') }}
<br>


</x-layout>