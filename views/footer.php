    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal').modal();
      });        
    </script>
    <!--SideNav-->
    <script type="text/javascript">
        $(".button-collapse").sideNav();
    </script>
    <!--Table Sorter-->
    <script type="text/javascript" src="assets/lib/tablesorter/jquery.tablesorter.js"></script>
    <script type="text/javascript">
        $(function() {
            $("table").tablesorter({debug: true})
        });
    </script>
</body>
</html>