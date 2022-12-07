<!-- Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

<!-- Vendors -->
<link rel="stylesheet" href={{asset("vendors/iconly/bold.css")}}>
<link rel="stylesheet" href={{asset("vendors/perfect-scrollbar/perfect-scrollbar.css")}}>

<!-- Styles -->
{{-- <link rel="stylesheet" href={{asset("vendors/bootstrap-icons/bootstrap-icons.css")}}> --}}
<link rel="stylesheet" href={{asset("css/bootstrap.css")}}>
<link rel="stylesheet" href={{asset("css/app.css")}}>
<link rel="stylesheet" href={{asset("css/app-dark.css")}}>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href={{asset("css/select2-bootstrap.css")}}>

<link rel="stylesheet" href="{{asset('vendors/datatables/datatables.css')}}" >
<link rel="stylesheet" href="{{asset('vendors/sweetalert2/sweetalert2.min.css')}}" >

{{ $style ?? '' }}