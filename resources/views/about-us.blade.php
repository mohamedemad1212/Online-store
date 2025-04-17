<x-layout title="about">
    <div class="container mt-5">
        <!-- 🔥 Hero Section (غلاف جذاب) -->
        <div class="text-center bg-dark text-white p-5 rounded shadow-lg">
            <h1 class="fw-bold display-4 text-warning">🚀 Welcome to Our Store</h1>
            <p class="lead text-light">We offer top-quality products, the best deals, and secure shopping! 🛒</p>  
            <a href="{{ route('products.index') }}" class="btn btn-warning btn-lg mt-3 fw-bold shadow px-4 py-2">🛍 Shop Now</a>
        </div>
    
        <div class="row mt-5">
            <!-- 📌 Mission & Vision -->
            <div class="col-md-6">
                <div class="p-4 bg-white rounded shadow border-start border-4 border-primary">
                    <h2 class="fw-bold text-primary"><i class="fas fa-bullseye"></i> Our Mission & Vision</h2>
                    <p class="text-muted"><strong>🎯 Mission:</strong> Providing high-quality products at unbeatable prices.</p>
                    <p class="text-muted"><strong>🌟 Vision:</strong> To be the most trusted online store.</p>
                </div>
            </div>
    
            <!-- ⭐ Why Choose Us? -->
            <div class="col-md-6">
                <div class="p-4 bg-light rounded shadow border-start border-4 border-warning">
                    <h2 class="fw-bold text-warning"><i class="fas fa-star"></i> Why Choose Us?</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-success"><i class="fas fa-check-circle"></i> 100% Genuine Products</li>
                        <li class="list-group-item text-danger"><i class="fas fa-shipping-fast"></i> Fast & Secure Delivery</li>
                        <li class="list-group-item text-info"><i class="fas fa-credit-card"></i> Multiple Payment Options</li>
                        <li class="list-group-item text-primary"><i class="fas fa-undo"></i> Hassle-Free Returns</li>
                    </ul>
                </div>
            </div>
        </div>
    
        <!-- 🏆 Meet Our Team -->
        <div class="mt-5 p-4 bg-white rounded shadow text-center border-start border-4 border-dark">
            <h2 class="fw-bold text-dark"><i class="fas fa-users"></i> Meet Our Team</h2>
            <p class="text-muted">We are a passionate team, committed to providing the best shopping experience.</p>
        </div>
    </div>
    <br><br><br><br>
    
</x-layout>

