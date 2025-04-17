<x-layout title="Home" >
  <div class="container mt-5">
      
      <div class="text-center bg-dark text-white p-5 rounded shadow-lg">
          <h1 class="fw-bold display-4 text-warning">🏪 Welcome to Our Store!</h1>
          <p class="lead text-light">The best deals, highest quality, and fastest delivery! 🚀</p>
          <a href="#offers" class="btn btn-warning btn-lg mt-3 fw-bold shadow px-4 py-2">🔥 Discover Offers</a>
      </div>
  
     
      <div class="row mt-5">
          <div class="col-md-6">
              <div class="p-4 bg-white rounded shadow border-start border-4 border-primary">
                  <h2 class="fw-bold text-primary"><i class="fas fa-th-list"></i> Browse Categories</h2>
                  <p class="text-muted">
                      🏠 Home & Kitchen | 📱 Electronics | 👗 Fashion | 🛍️ Special Offers
                  </p>
              </div>
          </div>
  
          
          <div class="col-md-6" id="offers">
              <div class="p-4 bg-light rounded shadow border-start border-4 border-warning">
                  <h2 class="fw-bold text-warning"><i class="fas fa-fire"></i> Today's Deals</h2>
                  <p class="text-muted">🔥 Discounts up to <strong>50%</strong> – Don't Miss Out!</p>
                  <a href="{{ route('products.index') }}" class="btn btn-danger fw-bold shadow px-4 py-2">🛒 Shop Now</a>
              </div>
          </div>
      </div>
  
   
      <div class="mt-5 p-4 bg-white rounded shadow text-center border-start border-4 border-dark">
          <h2 class="fw-bold text-dark"><i class="fas fa-star"></i> Why Choose Us?</h2>
          <p class="text-muted">
              ✅ <strong>Secure Payments</strong> | 🚀 <strong>Fast Delivery</strong> | 💳 <strong>Multiple Payment Options</strong> | 🔄 <strong>14-Day Returns</strong>
          </p>
      </div>
  </div>
  <br><br><br><br>
</x-layout>