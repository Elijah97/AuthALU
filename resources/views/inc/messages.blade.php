@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="aler" style="padding: 16px 8px; font-size: 12px; color: #fff; background: #ff8383; border-radius:  8px;margin-bottom:5px;">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert" style="padding: 16px 8px; font-size: 12px; color: #fff; background: #4db59d; border-radius:  8px;margin-bottom:5px;">
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert" style="padding: 16px 8px; font-size: 12px; color: #fff; background: #ff8383; border-radius:  8px;margin-bottom:5px;">
        {{session('error')}}
    </div>
@endif
