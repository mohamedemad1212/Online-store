<x-layout title="products">
    <div class="container mt-5">
        <h1 class="text-center fw-bold text-lightblue">🛒 Our Products</h1>
    
        <!-- زر إضافة منتج جديد -->
        <div class="text-end mb-4">
            <a href="/product/create" class="btn btn-lightblue btn-lg shadow fw-bold">
                ➕ Add New Product
            </a>
        </div>
    
        <!-- عرض المنتجات -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach ($products as $product)
                <div class="col">
                    <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden product-card">
                        
                        <!-- صورة المنتج -->
                        <img src="{{ asset('storage/' . $product['img_path']) }}" class="card-img-top rounded-top" alt="{{ $product['name'] }}">
    
                        <div class="card-body d-flex flex-column text-center">
                            <h5 class="card-title fw-bold text-dark"> Model: {{ $product['name'] }}</h5>
                            <h6 class="text-secondary">🏢 Brand: <span class="text-dark fw-semibold">{{ $product->company->name }}</span></h6>
                            <h4 class="fw-bold text-lightblue"> {{ $product['price'] }} EGP</h4>
    
                            <!-- جعل الزر في الأسفل دائما -->
                            <a href="/products/{{ $product['id'] }}" class="btn btn-lightblue fw-bold mt-auto">
                                🛍 BUY NOW
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    
        <!-- ✅ تصميم الترقيم بـ Bootstrap -->
        <div class="d-flex justify-content-center mt-4">
            {{ $products->links('pagination::bootstrap-4') }}
        </div>
    </div>
    
    <!-- تحسينات CSS إضافية -->
    <style>
        /* ألوان مخصصة */
        .text-lightblue { color: #6ea8fe; }
    
        .btn-lightblue {
            background-color: #6ea8fe;
            border: none;
            color: white;
        }
        .btn-lightblue:hover {
            background-color: #4c92fd;
        }
    
        .product-card {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            background-color: #f3f6ff; /* خلفية هادئة */
        }
    
        .product-card:hover {
            transform: scale(1.05);
            box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.15);
            background-color: #e0edff; /* أزرق فاتح عند التحويل */
        }
    </style>
    
    <br><br><br><br><br>
</x-layout>
