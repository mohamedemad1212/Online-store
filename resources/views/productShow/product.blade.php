<x-layout title="product">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5">
                <img src="{{ asset('storage/' . $product['img_path']) }}" class="img-fluid rounded" style="max-width: 100%; height: auto;" alt="{{ $product['name'] }}">
            </div>
    
            <div class="col-md-7">
                <h2 class="fw-bold">{{ $product['name'] }}</h2>
                <h4 class="text-success fw-bold">{{ $product['price'] }} EGP</h4>
                <p class="text-muted">{{ $product['description'] }}</p>
    
                <hr>
    
                <div class="d-flex">
                    <!-- ✅ زر حذف مع تأكيد SweetAlert -->
                    <form id="delete-form" action="/products/{{ $product->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger me-3" onclick="confirmDelete()">🗑 Delete</button>
                    </form>
    
                    <a href="/products/{{ $product->id }}/edit" class="btn btn-primary me-3">✏️ Edit</a>
                    <button class="btn btn-warning">🛒 Buy Now</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ✅ إضافة مكتبة SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
        function confirmDelete() {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to undo this action!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById("delete-form").submit();
                }
            });
        }
    </script>
    
    <br><br><br><br>

</x-layout>

