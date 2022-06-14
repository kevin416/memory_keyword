@foreach($memory_date as $dates)
    <div class="card shadow mt-3">
        <div class="card-body p-0 pb-2">
            <div class="row m-0 p-0 g-2">
                <div class="col-12">{{ $dates->date }}</div>
                @foreach($memory_keyword as $keyword)
                    @if($dates->date == $keyword->date)
                        <div class="col-auto badge bg-secondary fs-6 mx-1">
                            <a onclick="confirmDelete('/keyword/delete','{{$keyword->id}}')">{{ $keyword->keyword }}</a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endforeach

    @if($memory_keyword->count('id')==0)
        <div id="no_record_auto_hide">
            <h3 class="text-center">还没有记录！</h3>
        </div>
    @endif
