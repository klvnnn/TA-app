<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-dark">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-dark">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <button type="button" class="btn btn-danger"
        data-bs-toggle="modal"
        data-bs-target="#confirm-user-deletion"
    >{{ __('Delete Account') }}</button>

    <div class="modal fade" id="confirm-user-deletion" tabindex="-1" aria-labelledby="confirm-user-deletion-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="{{ route('profile.destroy') }}" class="p-4">
                    @csrf
                    @method('delete')

                    <h2 class="text-lg font-medium text-dark" id="confirm-user-deletion-label">
                        {{ __('Are you sure you want to delete your account?') }}
                    </h2>

                    <p class="mt-1 text-sm text-dark">
                        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                    </p>

                    <div class="mt-3">
                        <label for="password" class="form-label visually-hidden">{{ __('Password') }}</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="{{ __('Password') }}">
                        @if($errors->userDeletion->has('password'))
                            <div class="text-danger mt-1">
                                {{ $errors->userDeletion->first('password') }}
                            </div>
                        @endif
                    </div>

                    <div class="mt-4 text-end">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            {{ __('Cancel') }}
                        </button>

                        <button type="submit" class="btn btn-danger ms-2">
                            {{ __('Delete Account') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
