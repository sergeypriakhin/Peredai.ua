<nav>
    <div class="nav-wrapper container">
        <a href="{{ url('/') }}" class="brand-logo">PEREDAI</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            @include('partials.main-menu-list')
        </ul>
        <ul class="side-nav" id="mobile-demo">
            @include('partials.main-menu-list')
        </ul>
    </div>
</nav>

<!-- Modal Structure -->
{{-- <div id="modal-signin" class="modal">
    <div class="modal-content">
        @include('forms.login_form')
    </div>
    <div class="modal-footer">
        
    </div>
</div> --}}