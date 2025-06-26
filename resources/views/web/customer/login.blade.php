<x-layout>
    <form method="POST" action="{{ route('customer.store_login') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                value="{{ old('email') }}" required autofocus>
            <form method="POST" action="{{ route('customer.store_login') }}">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                name="password" required>
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember" name="remember">
            <label class="form-check-label" for="remember">Remember Me</label>
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
        <div class="mt-3 text-center">
            <small>
                Belum punya akun?
                <a href="{{ route('customer.register') }}">Daftar disini</a>
            </small>
        </div>
    </form>
</x-layout>
