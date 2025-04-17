<x-layout title="sign_up" >
    
  <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
      <div class="card shadow p-4" style="width: 400px;">
          <h3 class="text-center">Login</h3>
          
          <form>
              <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" required>
              </div>
              <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" required>
              </div>
              <button type="submit" class="btn btn-primary w-100">Login</button>
          </form>
  
          <p class="text-center mt-3">Or sign in with</p>
  
          <div class="d-flex justify-content-center gap-3 social-buttons">
              <a href="#" class="btn btn-danger"><i class="bi bi-google"></i> Google</a>
              <a href="#" class="btn btn-primary"><i class="bi bi-facebook"></i> Facebook</a>
              <a href="#" class="btn btn-dark"><i class="bi bi-github"></i> GitHub</a>
              <a href="#" class="btn btn-info"><i class="bi bi-linkedin"></i> LinkedIn</a>
          </div>
      </div>
  </div>

  
</x-layout>