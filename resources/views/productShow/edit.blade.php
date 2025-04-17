<x-layout title="edit">
    <h1>Edit Product: {{ $product->name }}</h1>
    <hr>

    <form id="edit-product-form" action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') 
        
        <div class="mb-3">
            <label for="name" class="form-label">Enter product name</label>
            <input type="text" id="name" class="form-control" name="name" value="{{ old('name', $product->name) }}">
            @error('name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="price" class="form-label">Enter product price</label>
            <input type="text" id="price" class="form-control" name="price" value="{{ old('price', $product->price) }}">
            @error('price')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="description" class="form-label">Enter product description</label>
            <textarea id="description" class="form-control" name="description">{{ old('description', $product->description) }}</textarea>
            @error('description')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="company_id" class="form-label">Enter product company ID</label>
            <input type="text" id="company_id" class="form-control" name="company_id" value="{{ old('company_id', $product->company_id) }}">
            @error('company_id')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="image" class="form-label">Choose a new image (optional)</label>
            <input type="file" id="image" name="image" class="form-control">
            @if ($product->img_path)
                <div class="mt-2">
                    <p>Current Image:</p>
                    <img src="{{ asset('storage/' . $product->img_path) }}" alt="Product Image" width="150">
                </div>
            @endif
        </div>
    
        <button type="button" class="btn btn-primary" onclick="confirmUpdate()">Update</button>
    </form>
    
    <!-- ✅ إضافة مكتبة SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
        function confirmUpdate() {
            Swal.fire({
                title: "Are you sure?",
                text: "Do you want to apply the changes?",
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, update it!",
                cancelButtonText: "No, cancel"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById("edit-product-form").submit();
                }
            });
        }
    
     
        
    </script>
    
<br><br><br><br>

</x-layout>

