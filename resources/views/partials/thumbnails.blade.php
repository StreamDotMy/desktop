<div class="categories">
    <div class="titles">
        <h3>IM Originals</h3>
    </div>

    <section class="regular slider">

        @foreach($videos as $key => $value)
        <div>
        <a href="{{ route('play', $value->id) }}">
                <img src="/storage/{{$value->id }}/image/image1.jpg">
        </a>
        </div>
        @endforeach

            </section>


    <div class="titles">
       <h3>Continue Watching</h3>
    </div>

        <section class="regular slider">

                @foreach($continue as $k => $v)
            <div>
                <a href="{{ route('play', $v->id) }}">
                <img src="/storage/{{$v->id }}/image/image1.jpg">
                </a>
            </div>
                @endforeach

       </section>
</div>

