@extends('keyword::temp')
@section('header_styles')

@endsection
@section('head_title', 'Factory'.' | '.\Session::get('site_settings.site_name') )
@section('content')

    @if(config('keyword.nav_bar') == true)
        @include('keyword::nav')
    @endif




    <div id="app">
        <create-keyword></create-keyword>

        <keyword-card></keyword-card>

{{--        @include('keyword::load_memory_keyword')--}}
    </div>

@endsection

@section('footer')
    <script type="text/javascript">




        import CreateKeyword from "../js/components/keyword/CreateKeyword";
        $('#submit_memory_keyword').click(function () {

            $.ajax({
                type: 'POST',
                url: '/keyword/store',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'user_id': $('#user_id').val(),
                    'keyword': $('#keyword').val(),
                },
                success: function (data) {
                    toastr.success('Add Success', '成功', {timeOut: 4000});
                    $('#load_keywords').load('/keyword/load');
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
        export default {
            components: {CreateKeyword}
        }
    </script>
@endsection
