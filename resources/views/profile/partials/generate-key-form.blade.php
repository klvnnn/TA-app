<section>
    <header>
        <h2 class="text-lg font-medium text-dark">
            {{ __('Generate your Signature Key') }}
        </h2>

        <p class="mt-1 text-sm text-dark">
            {{ __("Signature key berfungsi untuk proses penanda tanganan dokumen, terdiri dari public key dan private key") }}
        </p>
    </header>
    @if (Auth::user()->public_key == null)
        <form method="post" action="{{ route('sign.create-key') }}" class="mt-4">
            @csrf
            <div class="mt-4">
                <button type="submit" class="btn btn-primary">{{ __('Generate Key') }}</button>
            </div>
        </form>
        @else
        <br>
        <div class="mb-3">
            <label for="public_key" class="form-label">{{ __('Public Key') }}</label>
            <textarea class="form-control" id="public_key" rows="5" disabled>
                {{ old('public_key', $user->public_key) }}
            </textarea>
        </div>
        <div class="mb-3">
            <label for="private_key" class="form-label">{{ __('Private Key') }}</label>
            <textarea class="form-control" id="private_key" rows="5" disabled>
                {{ Storage::get($user->private_key)}}
            </textarea>
        </div>
    @endif
</section>