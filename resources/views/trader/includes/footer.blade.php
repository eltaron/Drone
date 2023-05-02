            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="{{url('web_files')}}">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="{{url('web_files')}}">
                                    Shop
                                </a>
                            </li>
                            <li>
                                <a href="{{url('web_files')}}">
                                    Articles
                                </a>
                            </li>
                            <li>
                                <a href="{{url('web_files')}}">
                                    Posts
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="http://www.cropcopter.com">CropCopter</a>. Copyrights Reserved
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="{{asset('admin_files')}}/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="{{asset('admin_files')}}/js/core/popper.min.js" type="text/javascript"></script>
<script src="{{asset('admin_files')}}/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches-->
<script src="{{asset('admin_files')}}/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="{{asset('admin_files')}}/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('admin_files')}}/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Dashboard: scripts for the example pages etc -->
<script src="{{asset('admin_files')}}/js/dashboard.js " type="text/javascript"></script>
<!-- Dashboard  -->
<script src="{{asset('admin_files')}}/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
    $(document).ready(function () {

        $('.counter').each(function () {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 5000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });

    });
</script>

</html>
