
    <script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/mdb.min.js"></script>
    <script src="<?= base_url() ?>assets/js/addons/datatables.min.js"></script>
    <script src="<?= base_url() ?>assets/fa/js/all.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
     -->
    <script>
        $(document).ready(function() {
            <?php if($content == 'admin/main') { ?>
            key_list();

            function key_list() {
                $.ajax({
                    type  : 'ajax',
                    url   : '<?php echo site_url('admin/key_data'); ?>',
                    async : false,
                    dataType : 'json',
                    success : function(data) {
                        var html = '';
                        for (let index = 0; index < data.length; index++) {
                            var sts = 'Belum Terpakai';
                            if(data[index].status == 1){
                                sts = 'Sudah Terpakai';
                            }
                            html += '<tr>'+
                                        '<td>'+(index+1)+'</td>'+
                                        '<td>'+data[index].id_voucher+'</td>'+
                                        '<td>'+data[index].jumlah+'</td>'+
                                        '<td>'+sts+'</td>'+
                                    '</tr>';
                        } 
                        html += '';
                        $('#model').html("");
                        $('#model').html(html);                        
                    }
                });
                $('#tabel').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                });
            }

            $('#generate').click(
                function() {
                    $.ajax({
                        type  : 'GET',
                        url   : '<?= base_url(); ?>admin/generate',
                        async : false,
                        dataType : 'json',
                        success : function(data){
                            if(data.status == 'success') {
                                $('#key').val(data.key);
                            }
                        }
                    });
                }
            );

            $('#submit').click(function() {
                var key = $('#key').val();
                var jml = $('select[name=jml]').val();
                $.ajax({
                    type: 'POST',
                    url: '<?= base_url() ?>admin/saveKey',
                    dataType: 'JSON',
                    data: {keys:key, jumlah:jml},
                    success: function(data) {
                        $('#key').val("");
                        location.reload();
                    }
                });
            });
            <?php } else { ?>
            $('#tabel').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
            <?php } ?>
        }); 
    </script>
</body>
</html>