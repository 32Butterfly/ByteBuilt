<div class="section pt-4 pb-0">
    <div class="container is-flex is-justify-content-flex-end">
        <div style="max-width: 400px;">
            
            <!-- Error message -->
            @if ($errors->any())
            <article class="message is-danger" style="position: fixed; top: 20px; right: 20px; z-index: 9999; max-width: 400px;" id="errorMessage">
                <div class="message-header">
                <p>Error</p>
                <button class="delete" aria-label="delete"></button>
                </div>
                <div class="message-body">
                {{ $errors->first() }}
                </div>
            </article>
            @endif

            <!-- Session error message -->
            @if (session('error'))
            <article class="message is-danger" style="position: fixed; top: 20px; right: 20px; z-index: 9999; max-width: 400px;" id="errorMessage">
                <div class="message-header">
                <p>Error</p>
                <button class="delete" aria-label="delete"></button>
                </div>
                <div class="message-body">
                {{ session('error') }}
                </div>
            </article>
            @endif

            <!-- Session success message -->
            @if (session('success'))
            <article class="message is-success" style="position: fixed; top: 20px; right: 20px; z-index: 9999; max-width: 400px;" id="successMessage">
                <div class="message-header">
                <p>Success</p>
                <button class="delete" aria-label="delete"></button>
                </div>
                <div class="message-body">
                {{ session('success') }}
                </div>
            </article>
            @endif
        </div>
    </div>
</div>

<script src="{{ asset('js/closeMessage.js') }}"></script>