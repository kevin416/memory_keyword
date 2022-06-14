<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Yepos Keyword</title>
    @include('keyword::style.style',['bootstrap'=>1,'select'=>1,'toastr'=>1,'sweet'=>1,'summernote'=>isset($summernote) ? 1 : null ])

    {{--    <!-- Font Awesome JS -->--}}
    <link href="/inspinia/font-awesome/css/all_5.12.css" rel="stylesheet">

    @yield('header_styles')

</head>

<body>

<div class="container-fluid login-bg">
    <!-- Page Content  -->
    <div id="content" class="p-0 m-0" >

        @yield('content')

    </div>

</div>

@include('keyword::js.main_js',['bootstrap'=>1,'jquery'=>1,'popper'=>1,'select'=>1,'toastr'=>1,'sweet'=>1,'summernote'=>isset($summernote) ? 1 : null ])


<script type="text/javascript">

    $('.my-select').selectpicker();


    //Enable tooltips everywhere
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    @if(Session::has('flash_message'))
    var toastElList = [].slice.call(document.querySelectorAll('.toast'))
    var toastList = toastElList.map(function(toastEl) {
        // Creates an array of toasts (it only initializes them)
        return new bootstrap.Toast(toastEl) // No need for options; use the default options

    });


    var type = "{{ Session::get('alert-type', 'info') }}";

    toastList.forEach(toast => toast.show()); // This show them
    $('#toast-msg-body').html("{{ \Session::get('flash_message') }}");
    switch (type) {
        case 'info':
            $('#toast-box').addClass( 'bg-info');
            break;
        case 'warning':
            $('#toast-box').addClass( 'bg-warning');
            break;
        case 'success':
            $('#toast-box').addClass( 'bg-success');
            break;
        case 'error':
            $('#toast-box').addClass( 'bg-danger');
            break;
        default:
            $('#toast-box').addClass( 'bg-success');
            break;
    }

    @endif


    function confirmDelete(url, id, value=null,title = null, text = null) {
        Swal.fire({
            title: 'Are you sure?',
            text: text ? text : 'This action can not be undo',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: "Delete, 删除!",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {
                        id: id,
                        '_method': 'DELETE',
                        "_token": "{{ csrf_token() }}",
                        "value":value,
                    },
                    success: function (data) {
                        if (data.action =="success") {
                            swal.fire("Done!", data.message, "success");
                            if (data.url) {
                                window.location.replace(data.url)
                            } else {
                                window.location.reload()
                            }
                        } else {
                            swal.fire("Error!", 'Sumething went wrong.', "error");
                        }

                    },
                    error: function (data) {
                        swal(
                            "Internal Error",
                            "Oops, Fail to delete record.", // had a missing comma
                            "error"
                        )
                    }
                });
            } else if (result.isDenied) {
                swal.fire('Changes are not saved', '', 'info')
            }
        })
    }


    function confirmAction(url, id, title = null, text = null) {
        swal.fire({
            closeOnClickOutside: false,
            icon: "warning",
            title: title ? title : 'Confirm this action?',
            text: text ? text : 'This action can not be undo',
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, 确认!",
            closeOnConfirm: false,
            showSpinner: true

        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {
                        id: id,
                        '_method': 'POST',
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function (data) {
                        if (data.action =="success") {
                            swal.fire("Done!", data.message, "success");
                            if (data.url) {
                                window.location.replace(data.url)
                            } else {
                                window.location.reload()
                            }
                        } else {
                            swal.fire("Error!", 'Sumething went wrong.', "error");
                        }

                    },
                    error: function (data) {
                        swal(
                            "Internal Error",
                            "Oops, Fail to delete record.", // had a missing comma
                            "error"
                        )
                    }
                });
            } else if (result.isDenied) {
                swal.fire('Changes are not saved', '', 'info')
            }
        })

    }


</script>

@yield('footer')


</body>

</html>
