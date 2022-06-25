
<div class="row m-0 p-0 fixed-bottom" style="width: 100%;">
        <div class="btn-group p-0" role="group" aria-label="Basic mixed styles example">
            <a href="/{{config('keyword.nav_home_prefix')}}" class="btn btn-danger"  data-bs-toggle="tooltip"
                    data-bs-placement="top" title="Home Page"><i class="fas fa-home"></i> @lang('keyword::app.back_to_home')</a>

            <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bars"></i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
{{--                    @if(\Sentinel::inRole('admin') or \Sentinel::inRole('owner') or \Sentinel::inRole('manager') or \Sentinel::inRole('member'))--}}
{{--                    <a class="dropdown-item py-2" href="/admin" target="_blank">--}}
{{--                        <i class="fas fa-users-cog"></i> 管理员页--}}
{{--                    </a>--}}
{{--                        <hr class="dropdown-divider">--}}
{{--                    @endif--}}

                    <a class="dropdown-item py-2" href="/auth/logout">
                        <i class="fas fa-sign-out"></i> @lang('keyword::app.exit_system')
                    </a>
                    <hr class="dropdown-divider">
                    <a class="dropdown-item py-2" href="/lang/zh">@lang('keyword::app.chinese')</a>
                    <a class="dropdown-item py-2" href="/lang/en">@lang('keyword::app.english')</a>
                </ul>
            </div>

        </div>
</div>

