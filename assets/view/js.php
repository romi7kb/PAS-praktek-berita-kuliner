<!-- JavaScript files-->
<script src="/assets/template/admin/vendor/jquery/jquery.min.js"></script>
<script src="/assets/template/admin/vendor/popper.js/umd/popper.min.js"> </script>
<script src="/assets/template/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/assets/template/admin/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
<script src="/assets/template/admin/vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="/assets/template/admin/vendor/chart.js/Chart.min.js"></script>
<script src="/assets/template/admin/vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="/assets/template/admin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js">
</script>
<script src="/assets/template/admin/js/charts-home.js"></script>
<!-- Main File-->
<script src="/assets/template/admin/js/front.js"></script>
<!-- ckeditor -->
<script src="/assets/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor1');
    CKEDITOR.stylesSet.add('myStyles', [{
        name: 'Custom Span',
        element: 'span'
    }]);
    CKEDITOR.config.stylesSet = 'myStyles';
    CKEDITOR.config.height = 150;
    CKEDITOR.config.filebrowserImageBrowseUrl = "/admin/artikel/img/";
</script>
<!-- DataTable -->
<script src="/assets/DataTables/datatables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#datatable').DataTable();
    });
</script>