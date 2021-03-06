<form class="user" wire:submit.prevent="login">
    @if (session()->has('error'))
    <div class="alert alert-danger alert-dismissible">
        <span>{{ session('error' )}}</span>
        <button class="close" data-dismiss="alert">&times;</button>
    </div>
    @endif
    <div class="form-group">
        <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror"
            wire:model="email" id="email" aria-describedby="emailHelp" placeholder="Email" autofocus>

        @error('email')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror"
            wire:model="password" id="password" placeholder="Password">

        @error('password')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <div class="custom-control custom-checkbox small">
            <input type="checkbox" class="custom-control-input" id="customCheck" wire:model="remember">
            <label class="custom-control-label" for="customCheck">Remember Me</label>
        </div>
    </div>
    <button type="submit" class="btn btn-success btn-user btn-block">
        Login
    </button>
</form>
