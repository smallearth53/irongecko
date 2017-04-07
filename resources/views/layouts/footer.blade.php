



<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/tether.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>

<script>
    // SideNav init
    $(".button-collapse").sideNav();

    $('#modal-contact').on('shown.bs.modal', function () {
        $('#myInput').focus()
    })


    // Custom scrollbar init
    var el = document.querySelector('.custom-scrollbar');
    Ps.initialize(el);

    new WOW().init();

    var xHighlight = document.createElement('high-light');
</script>



</body>
</html>

