<x-layout title="Create">
    <h1>Create New Product</h1>
    <hr>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    
        <div class="mb-3">
            <label for="name" class="form-label">Enter product name</label>
            <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}">
            @error('name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="price" class="form-label">Enter product price</label>
            <input type="text" id="price" class="form-control" name="price" value="{{ old('price') }}">
            @error('price')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="description" class="form-label">Enter product description</label>
            <textarea id="description" class="form-control" name="description">{{ old('description') }}</textarea>
            @error('description')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="company_id" class="form-label">Enter product company ID</label>
            <input type="text" id="company_id" class="form-control" name="company_id" value="{{ old('company_id') }}">
            @error('company_id')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="image" class="form-label">Choose Image</label>
            <input type="file" id="image" name="image" class="form-control">
        </div>
    
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
    <br><br><br><br>

</x-layout>
