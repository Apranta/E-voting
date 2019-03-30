
    <script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/mdb.min.js"></script>
    <script>
        $(document).on("click", ".open-modal", function () {
            var Id = $(this).data('id');
            console.log(Id);
            $('.idF').val(Id);
        });
    </script>
</body>
</html>