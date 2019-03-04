
    <script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/mdb.min.js"></script>
    <script src="<?= base_url() ?>assets/js/addons/datatables.min.js"></script>
    <script src="<?= base_url() ?>assets/fa/js/all.min.js"></script>
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
                            html += '<tr>'+
                                        '<td>'+(index+1)+'</td>'+
                                        '<td>'+data[index].id_voucher+'</td>'+
                                        '<td>'+data[index].jumlah+'</td>'+
                                    '</tr>';
                        } 
                        html += '';
                        $('#model').html("");
                        $('#model').html(html);                        
                    }
                });
                $('#tabel').DataTable();
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
                        key_list();
                    }
                });
            });
            <?php } else { ?>
            $('#tabel').DataTable();
            <?php } ?>
        }); 
    </script>
</body>
</html>