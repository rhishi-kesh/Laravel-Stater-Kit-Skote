        <!-- JAVASCRIPT -->
        <script src="{{ asset('backend') }}/assets/libs/jquery/jquery.min.js"></script>
        <script src="{{ asset('backend') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('backend') }}/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ asset('backend') }}/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('backend') }}/assets/libs/node-waves/waves.min.js"></script>

        <!-- Bootrstrap touchspin -->
        <script src="{{ asset('backend') }}/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>

        <script src="{{ asset('backend') }}/assets/js/pages/ecommerce-cart.init.js"></script>

        <script src="{{ asset('backend') }}/assets/js/app.js"></script>
        {{-- multiselect --}}
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
        $(document).ready(function() {
                $('.js-example-basic-multiple').select2();
        });
        </script>