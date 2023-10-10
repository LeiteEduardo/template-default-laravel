 <!-- BEGIN: Footer-->
 <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0">
            <span class="float-md-start d-block d-md-inline-block mt-25 w-100 text-center">COPYRIGHT &copy; 2023
                <a class="ms-25" href="https://www.google.com" target="_blank">
                    Transverse
                </a>
                <span class="d-none d-sm-inline-block">
                    , All rights Reserved
                </span>
            </span>
        </p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->

    <!-- Imports -->
    <script src="{{ url('assets/vendors/js/vendors.min.js') }}"></script>

    <script src="{{ url('assets/vendors/js/charts/apexcharts.min.js') }}"></script>

    <script src="{{ url('assets/js/core/app-menu.js') }}"></script>
    <script src="{{ url('assets/js/core/app.js') }}"></script>

    <script src="{{ url('assets/js/scripts/pages/dashboard-ecommerce.js') }}"></script>

    @yield('footerpage')

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>