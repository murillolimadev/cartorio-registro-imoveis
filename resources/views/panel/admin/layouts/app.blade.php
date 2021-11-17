<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cartório - @yield('title')</title>
  <link rel="shortcut icon" href="{{ asset('logos/favicon.svg') }}" type="image/x-icon">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('assets/admin/plugins/ekko-lightbox/ekko-lightbox.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/admin/dist/css/adminlte.min.css') }}">
  {{--
  <link rel="stylesheet" href="{{ asset('css/global.css') }}"> --}}

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
    div#loader {
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background: url('{{url('assets/admin/dist/img/4.gif')}}') 50% 50% no-repeat white;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div id="loader"></div>
  <div class="wrapper">
    @include('panel.admin.layouts.nav')
    @yield('content')
    @include('panel.admin.layouts.footer')
  </div>
  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="{{ asset('assets/admin/plugins/jquery/jQuery-2.1.4.min.js') }}"></script>
  <!-- Bootstrap -->
  <script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  {{-- datatable --}}
  <script src="{{ asset('assets/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

  <!-- overlayScrollbars -->
  <script src="{{ asset('assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('assets/admin/plugins/ekko-lightbox/ekko-lightbox.min.js') }}"></script>
  <script src="{{ asset('assets/admin/dist/js/adminlte.js') }}"></script>

  <!-- OPTIONAL SCRIPTS -->
  <script src="{{ asset('assets/admin/dist/js/demo.js') }}"></script>
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
      $("#example3").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
    });
  </script>
  <script src="{{ asset('assets/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

  <script type="text/javascript">
    $(document).ready(function () {
          bsCustomFileInput.init();
        });
  </script>
  <script src="{{ asset('assets/admin/plugins/filterizr/jquery.filterizr.min.js') }}"></script>
  <!-- PAGE PLUGINS -->
  <!-- jQuery Mapael -->
  <script src="{{ asset('assets/admin/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
  <script src="{{ asset('assets/admin/plugins/raphael/raphael.min.js') }}"></script>
  <script src="{{ asset('assets/admin/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
  <script src="{{ asset('assets/admin/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
  <!-- ChartJS -->
  <script src="{{ asset('assets/admin/plugins/chart.js/Chart.min.js') }}"></script>

  <!-- PAGE SCRIPTS -->
  <script src="{{ asset('assets/admin/dist/js/pages/dashboard2.js') }}"></script>

  <script src="{{ asset('assets/admin/dist/js/jquery.mask.js')}}"></script>
  <script>
    $('.year').mask('0000');
        $('.date').mask('00/00/0000');
        $('.time').mask('00:00:00');
        $('.time2').mask('00:00');
        $('.date_time').mask('00/00/0000 00:00:00');
        $('.cep').mask('00000-000');
        $('.phone').mask('0000-0000');
        $('.phone_with_ddd').mask('(00)00000-0000'); //(99)99999-9999
        $('.phone_us').mask('(000) 0000-0000');
        $('.mixed').mask('AAA 000-S0S');
        $('.cpf').mask('000.000.000-00', {reverse: true});
        $('.rg').mask('99.999.999-9');    // Máscara para RG<br/>
        $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
        $('.money').mask('000.000.000.000.000,00', {reverse: true});
        $('.money2').mask("#.##0,00", {reverse: true});
        $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
        translation: {
        'Z': {
            pattern: /[0-9]/, optional: true
        }
        }
    });
        $('.ip_address').mask('099.099.099.099');
        $('.percent').mask('##0,00%', {reverse: true});
        $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
        $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
        $('.fallback').mask("00r00r0000", {
            translation: {
                'r': {
                pattern: /[\/]/,
                fallback: '/'
                },
                placeholder: "__/__/____"
            }
            });
        $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
    
  </script>
  <script>
    // Este evendo é acionado após o carregamento da página
    jQuery(window).load(function() {
        //Após a leitura da pagina o evento fadeOut do loader é acionado, esta com delay para ser perceptivo em ambiente fora do servidor.
        jQuery("#loader").fadeOut("slow");
    });
  </script>
  <script>
    $(function () {
      $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
          alwaysShowClose: true
        });
      });
  
      $('.filter-container').filterizr({gutterPixels: 3});
      $('.btn[data-filter]').on('click', function() {
        $('.btn[data-filter]').removeClass('active');
        $(this).addClass('active');
      });
    })
  </script>
  {{-- troca class cpf para cnpj --}}
  <script type="text/javascript">
    const value = document.querySelector('#pfj');
        function addCpf(cpf) {
            value.classList.remove('cnpj');
            value.classList.add(cpf);
        }

        function addCnpj(cnpj) {
            value.classList.remove('cpf');
            value.classList.add(cnpj);
        }
  </script>


</body>

</html>