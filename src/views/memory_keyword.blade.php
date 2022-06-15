@extends('keyword::temp')

@section('head_title', 'Factory'.' | '.\Session::get('site_settings.site_name') )
@section('content')

    @if(config('keyword.nav_bar') == true)
        @include('keyword::nav')
    @endif

    <div class="card shadow">
        <!--Card content-->
        <div class="card-body p-1">
            @csrf
            <div class="row">

{{--                {!! Form::hidden('user_id', Sentinel::getUser()->id, ['class' => 'form-control input-sm','id'=>'user_id']) !!}--}}
                {!! Form::hidden('user_id', 1, ['class' => 'form-control input-sm','id'=>'user_id']) !!}

                <div class="col-12">
                    <!-- Title Input Form -->
                    <div class="input-group">
                        {!! Form::text('keyword', null, ['class' => 'form-control input-sm','autofocus', 'placeholder'=>'Keyword','id'=>'keyword']) !!}
                        <button type="button" class="btn btn-outline-primary" id="submit_memory_keyword">@lang('keyword::app.submit')</button>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <div id="load_keywords">
        @include('keyword::load_memory_keyword')
    </div>

@endsection

@section('footer')
    <script type="text/javascript">
        $('#submit_memory_keyword').click(function () {

            $.ajax({
                type: 'POST',
                url: '/yepos/keyword/store',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'user_id': $('#user_id').val(),
                    'keyword': $('#keyword').val(),
                },
                success: function (data) {
                    toastr.success('Add Success', '成功', {timeOut: 4000});
                    $('#load_keywords').load('/yepos/keyword/load');
                    $('#keyword').val('');
                    $('#keyword').focus();
                },
                error: function (request, error) {
                    toastr.warning('录入有误', '失败', {timeOut: 4000});
                },
            });

        });
        var enter_key = document.getElementById("keyword");
        enter_key.addEventListener("keydown",keyCapt,false);
        function keyCapt(e){
            if(e.keyCode===13){
                if (e.which === 13) { //Enter key
                    e.preventDefault(); //Skip default behavior of the enter key
                    document.getElementById("submit_memory_keyword").click();

                }
            }
        }

</script>
@endsection
