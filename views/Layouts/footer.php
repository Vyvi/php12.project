
<footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © PHP-MySQL Course - Zent Coding School</small>
        </div>
      </div>
    </footer>
   <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="public/vendor/jquery/jquery.min.js"></script>
    <script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="public/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="public/vendor/chart.js/Chart.min.js"></script>
    <script src="public/vendor/datatables/jquery.dataTables.js"></script>
    <script src="public/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="public/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="public/js/sb-admin-datatables.min.js"></script>
    <script src="public/js/sb-admin-charts.min.js"></script>
    <script src="public/js/print.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
    

    $(document).ready(function() {

       var valve = Math.random();
       if (valve <= 0.25) {
        toastr["warning"]("Manage by yourself !!!")
       } if (0.25 < valve && valve <= 0.5) {
        toastr["success"]("Can't handle this TOASTR")
       } if (0.5 < valve && valve <= 0.75) {
        toastr["info"]("Some thing happen???")
       } if (0.75 < valve && valve <= 1) {
        toastr["error"]("This isn't error")
       }

       $('.delete').click(function(e){
            e.preventDefault();
            var url = $(this).attr('href');

            swal({
                  title: "Chắc chắn chứ ?",
                  text: "Một khi xóa thì chỉ có nhập lại!!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {

                    swal("Bùm! Mất màu", {
                      icon: "success",
                    });
                    $('button.swal-button--confirm').click(function(){
                            window.location.href = url;
                        });
                  } else {
                    swal("Dữ liệu của bạn an toàn!");
                  }
                });
        });
       
     
    toastr.options = {
        
              closeButton: true
 
           };

    });

    </script>
</body>

</html>