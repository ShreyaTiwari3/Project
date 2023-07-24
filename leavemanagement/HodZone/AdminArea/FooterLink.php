<div class="modal fade" id="modal-show">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Show</h4>
                <button class="close" data-dismiss="modal"><span>&times;</span></button>

            </div>
            <div class="modal-body" id="modal-body-show">



            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js\scripts.js"></script>
<script src="js\toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets\demo\chart-area-demo.js"></script>
<script src="assets\demo\chart-bar-demo.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="assets\demo\datatables-demo.js"></script>
<script src="js/bootstrap-datetimepicker.js"></script>
<script>
    function Show(id, table) {

        $.ajax({

            url: "code/ShowCode.php?table=" + table + "&id=" + id,
            success: function(res) {
                $("#modal-body-show").html(res);
                $("#modal-show").modal("show");
            }
        })
    }
</script>
<script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>