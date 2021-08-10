<script src="<?php echo base_url(); ?>public/assets/js/vendor-all.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/pcoded.min.js"></script>

<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#example1').DataTable();
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#example2').DataTable();
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#example3').DataTable();
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#example4').DataTable();
    });
</script>

<!-- select2 -->
<script src="<?php echo base_url("public/lib/select2/js/select2.min.js"); ?>" type="text/javascript"></script>
<script>
    $(function() {
        'use strict'

        $('.select2').select2({
            placeholder: 'Pilih',
            searchInputPlaceholder: 'Search options'
        });

    });
</script>

</body>

</html>