@if(\Session::get('all_options.cdn_country')=="China")
    @if(isset($bootstrap))
        <script src="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.js"></script>
    @endif
    @if(isset($jquery))
        <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.6.0/jquery.js"></script>
    @endif
    @if(isset($popper))
        <script src="https://cdn.bootcdn.net/ajax/libs/popper.js/2.11.0/umd/popper.js"></script>
    @endif
    @if(isset($select))
        <script src="https://cdn.bootcdn.net/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js"></script>
    @endif
    @if(isset($toastr))
        <script src="https://cdn.bootcdn.net/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    @endif
    @if(isset($sweet))
        <script src="https://cdn.bootcdn.net/ajax/libs/limonte-sweetalert2/11.4.4/sweetalert2.min.js"></script>
    @endif
    @if(isset($sticky))
        <script src="https://cdn.bootcdn.net/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js"></script>
    @endif
    @if(isset($font))
        <script src="https://cdn.bootcdn.net/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
    @endif
    @if(isset($summernote))
        <script src="https://cdn.bootcdn.net/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>
    @endif

@elseif(\Session::get('all_options.cdn_country')=="Local")
    @if(isset($bootstrap))
        <script src="/js/b5/bootstrap.bundle.min.js"></script>
    @endif
    @if(isset($jquery))
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    @endif
    @if(isset($popper))
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.0/umd/popper.min.js"></script>
    @endif
    @if(isset($select))
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js" ></script>
    @endif
    @if(isset($toastr))
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    @endif
    @if(isset($sweet))
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.4/sweetalert2.min.js"></script>
    @endif
    @if(isset($sticky))
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js"></script>
    @endif
    @if(isset($font))
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
    @endif
    @if(isset($summernote))
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    @endif

@else
    @if(isset($bootstrap))
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>

    @endif
    @if(isset($jquery))
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    @endif
    @if(isset($popper))
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.0/umd/popper.min.js"></script>
    @endif
    @if(isset($select))
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js" ></script>
    @endif
    @if(isset($toastr))
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    @endif
    @if(isset($sweet))
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.4/sweetalert2.min.js"></script>
    @endif
    @if(isset($sticky))
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js"></script>
    @endif
    @if(isset($font))
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
    @endif
    @if(isset($summernote))
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    @endif

@endif
