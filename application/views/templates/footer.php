 <footer>
    <p class="text-center"> <b>Copyright E-Voting SMK SATYA BHAKTI SATU 2021</b></p>
</footer>
 
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url('assets/'); ?>js/jquery-3.5.1.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/popper.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
  
  <script>
   $(document).ready(function () {
      $('.nav-active').on('click', function(){
        $('.nav-active').removeClass('active');
        $(this).addClass('active');
      });
   });
  </script>
  
  
  </body>
</html>