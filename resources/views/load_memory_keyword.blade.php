@foreach($memory_date as $dates)
    <div class="card shadow mt-3">
        <div class="card-body p-0 pb-2">
            <div class="row m-0 p-0 g-2">
                <div class="col-12">{{ $dates->created }}</div>
                @foreach($memory_keyword as $keyword)
                    @if($dates->created == $keyword->created)
                        <div class="col-auto badge bg-secondary fs-6 mx-1">
                            <a onclick="confirmDelete('/keyword/destory','{{$keyword->id}}')">{{ $keyword->keyword }}</a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endforeach

