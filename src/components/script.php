  <script src="assets/js/oneui.app.min.js"></script>

  <!-- Page JS Plugins -->
  <script src="assets/js/plugins/chart.js/chart.umd.js"></script>

  <!-- Page JS Code -->
  <script src="assets/js/pages/be_pages_dashboard.min.js"></script>

  <script>
    function downloadPDF() {
      var element = document.getElementById('invoiceArea');
      var opt = {
        margin: 0.5,
        filename: 'invoice.pdf',
        image: {
          type: 'jpeg',
          quality: 0.98
        },
        html2canvas: {
          scale: 2
        },
        jsPDF: {
          unit: 'in',
          format: 'letter',
          orientation: 'portrait'
        }
      };
      html2pdf().set(opt).from(element).save();
    }
  </script>


  <!-- jQuery (required for Select2 + Bootstrap Maxlength plugin) -->
  <script src="assets/js/lib/jquery.min.js"></script>

  <!-- Page JS Plugins -->
  <script src="assets/js/plugins/select2/js/select2.full.min.js"></script>
  <script src="assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
  <script src="assets/js/plugins/dropzone/min/dropzone.min.js"></script>

  <!-- Page JS Helpers (Select2 + Bootstrap Maxlength plugins) -->
  <script>
    One.helpersOnLoad(['jq-select2', 'jq-maxlength']);
  </script>

  <script src="assets/js/plugins/flatpickr/flatpickr.min.js"></script>
  <script src="assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  <script src="assets/js/plugins/select2/js/select2.full.min.js"></script>
  <script src="assets/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js"></script>
  <script src="assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
  <!-- Page JS Helpers (Flatpickr + BS Datepicker + BS Maxlength + Select2 + Masked Inputs + Ion Range Slider plugins) -->
  <script>
    One.helpersOnLoad(['js-flatpickr', 'jq-datepicker', 'jq-maxlength', 'jq-select2', 'jq-masked-inputs', 'jq-rangeslider']);
  </script>


  <script src="assets/js/plugins/datatables/dataTables.min.js"></script>
  <script src="assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js"></script>
  <script src="assets/js/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="assets/js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
  <script src="assets/js/plugins/datatables-buttons/dataTables.buttons.min.js"></script>
  <script src="assets/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
  <script src="assets/js/plugins/datatables-buttons-jszip/jszip.min.js"></script>
  <script src="assets/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js"></script>
  <script src="assets/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js"></script>
  <script src="assets/js/plugins/datatables-buttons/buttons.print.min.js"></script>
  <script src="assets/js/plugins/datatables-buttons/buttons.html5.min.js"></script>

  <!-- Page JS Code -->
  <script src="assets/js/pages/be_tables_datatables.min.js"></script>