<?php
namespace App\Http\Controllers;
class Linkfile{
    public const LINKCSS = [
        1 => "
                <link href='{{ asset('assets/css/buil.css')}}')}}' rel='stylesheet' type='text/css' />
                <link href='{{ asset('assets/libs/select2/css/select2.min.css')}}' rel='stylesheet' type='text/css' />
                <link href='{{ asset('assets/libs/dropzone/min/dropzone.min.css')}}' rel='stylesheet' type='text/css' />
                <link href='{{ asset('assets/libs/quill/quill.core.css')}}' rel='stylesheet' type='text/css' />
                <link href='{{ asset('assets/libs/quill/quill.snow.css')}}' rel='stylesheet' type='text/css' />
            ",
        2 => "
                <link href='{{ asset('assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css')}}' rel='stylesheet' type='text/css' />
                <link href='{{ asset('assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css')}}' rel='stylesheet' type='text/css' />
            ",
        3 => "
                <link href='{{ asset('assets/css/buil.css')}}' rel='stylesheet' type='text/css' />
                <link href='{{ asset('assets/libs/select2/css/select2.min.css')}}' rel='stylesheet' type='text/css' />
                <link href='{{ asset('assets/libs/dropzone/min/dropzone.min.css')}}' rel='stylesheet' type='text/css' />
                <link href='{{ asset('assets/libs/dropify/css/dropify.min.css')}}' rel='stylesheet' type='text/css' />
                <link href='{{ asset('assets/libs/quill/quill.core.css')}}' rel='stylesheet' type='text/css' />
                <link href='{{ asset('assets/libs/quill/quill.snow.css')}}' rel='stylesheet' type='text/css' />
            ",
        4 => "
                <link href='{{ asset('assets/libs/flatpickr/flatpickr.min.css')}}' rel='stylesheet' type='text/css' />
                <link href='{{ asset('assets/libs/selectize/css/selectize.bootstrap3.css')}}' rel='stylesheet' type='text/css' />
            "
    ];
    public const LINKJS = [
        1 => '
                <script src="{{ asset("assets/js/vendor.min.js")}}"></script>
                <script src="{{ asset("assets/libs/flatpickr/flatpickr.min.js")}}"></script>
                <script src="{{ asset("assets/libs/apexcharts/apexcharts.min.js")}}"></script>
                <script src="{{ asset("assets/libs/selectize/js/standalone/selectize.min.js")}}"></script>
                <script src="{{ asset("assets/js/pages/dashboard-1.init.js")}}"></script>
                <script src="{{ asset("assets/js/app.min.js")}}"></script>
            ',
        2 => '
                <script src="{{ asset("assets/js/vendor.min.js")}}"></script>
                <script src="{{ asset("assets/libs/datatables.net/js/jquery.dataTables.min.js")}}"></script>
                <script src="{{ asset("assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js")}}"></script>
                <script src="{{ asset("assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js")}}"></script>
                <script src="{{ asset("assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js")}}"></script>
                <script src="{{ asset("assets/libs/jquery-datatables-checkboxes/js/dataTables.checkboxes.min.js")}}"></script>
                <script src="{{ asset("assets/js/app.min.js")}}"></script>
        ',
        3 => '
                <script src="{{ asset("assets/js/change_avatar.js")}}"></script>
                <script src="{{ asset("assets/js/vendor.min.js")}}"></script>
                <script src="{{ asset("assets/js/app.min.js")}}"></script>
        ',
        4 => '
                <script src="{{ asset("assets/js/buil.js")}}"></script>
                <script src="{{ asset("assets/js/vendor.min.js")}}"></script>
                <script src="{{ asset("assets/libs/select2/js/select2.min.js")}}"></script>
                <script src="{{ asset("assets/libs/dropzone/min/dropzone.min.js")}}"></script>=
                <script src="{{ asset("assets/libs/quill/quill.min.js")}}"></script>
                <script src="{{ asset("assets/js/pages/form-fileuploads.init.js")}}"></script>
                <script src="{{ asset("assets/js/pages/add-product.init.js")}}"></script>
                <script src="{{ asset("assets/js/app.min.js")}}"></script>
        '
    ];
}

?>