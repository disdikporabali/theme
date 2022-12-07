<script src={{ asset("vendors/perfect-scrollbar/perfect-scrollbar.min.js")}}></script>
<script src={{ asset("js/bootstrap.min.js")}}></script>

<script src={{ asset("js/main.js")}}></script>
<script src={{ asset("js/app.js")}}></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src={{ asset("js/select2-focus.js")}}></script>
<script src={{ asset("vendors/sweetalert2/sweetalert2.all.min.js")}}></script>


{{ $script ?? ''}}

@stack('script')