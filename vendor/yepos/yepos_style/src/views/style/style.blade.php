@if(\Session::get('all_options.cdn_country')=="China")
    @if(isset($bootstrap))
        <link href="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css" rel="stylesheet">
    @endif
    @if(isset($select))
        <link href="https://cdn.bootcdn.net/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css"
              rel="stylesheet">
    @endif
    @if(isset($toastr))
        <link href="https://cdn.bootcdn.net/ajax/libs/toastr.js/2.1.4/toastr.min.css" rel="stylesheet">
    @endif
    @if(isset($sweet))
        <link href="https://cdn.bootcdn.net/ajax/libs/limonte-sweetalert2/11.4.4/sweetalert2.min.css" rel="stylesheet">
    @endif
    @if(isset($font))
        <link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    @endif
    @if(isset($summernote))
        <link href="https://cdn.bootcdn.net/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" rel="stylesheet">
    @endif
@elseif(\Session::get('all_options.cdn_country')=="Local")
    @if(isset($bootstrap))
        <link href="/css/b5/bootstrap.min.css" rel="stylesheet">
    @endif
    @if(isset($select))
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css" />
    @endif
    @if(isset($toastr))
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css"/>
    @endif
    @if(isset($sweet))
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.4/sweetalert2.min.css" />
    @endif
    @if(isset($font))
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    @endif
    @if(isset($summernote))
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    @endif
@else
    @if(isset($bootstrap))
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css" rel="stylesheet">
    @endif
    @if(isset($select))
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css" />
    @endif
    @if(isset($toastr))
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css"/>
    @endif
    @if(isset($sweet))
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.4/sweetalert2.min.css" />
    @endif
    @if(isset($font))
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    @endif
    @if(isset($summernote))
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    @endif
@endif
