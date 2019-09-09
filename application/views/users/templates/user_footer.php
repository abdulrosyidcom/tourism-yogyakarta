
<script src="<?= base_url('assets/frontend/'); ?>js/jquery-3.2.1.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>styles/bootstrap4/popper.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>plugins/easing/easing.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/offers_custom.js"></script>
<script>
    $('.custom-file-input').on('change', function() {
      let fileName = $(this).val().split('\\').pop();
      $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
  </script>
</body>

</html>