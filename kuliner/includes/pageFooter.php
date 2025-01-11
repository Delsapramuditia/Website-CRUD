<script src="assets/jquery.slim.min.js"></script>
<script src="assets/DataTables/datatables.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>

<script>
    new DataTable('#example', {
        columns: [
            {
                data: 'No.',
                defaultContent: '<i>Not Set</i>'
            },
            {
                data: 'Nama Makanan',
                defaultContent: '<i>Not Set</i>'
            },
            {
                data: 'Daerah Makanan',
                defaultContent: '<i>Not Set</i>'
            },
            {
                data: 'Keterangan',
                defaultContent: '<i>Not Set</i>'
            }
        ]
    }
    );
</script>
<style>
    body {
        background-color: #f8e6e9;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button {
        background-color: #f8c8dc !important;
        color: black !important;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button.current {
        background-color: #f8c8dc !important;
        color: black !important;
    }
    .dataTables_wrapper .dataTables_length select, .dataTables_wrapper .dataTables_filter input {
        background-color: #f8c8dc;
        color: black;
        border: 1px solid #ddd;
    }
    table.dataTable thead {
        background-color: #f8c8dc;
        color: black;
    }
</style>

</body>

</html>