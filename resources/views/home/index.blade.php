@extends('_layouts.rose')

@section('content')
<div id="title" style="text-align: center;">
    <h1>Learn Laravel 5</h1>
    <div style="padding: 5px; font-size: 16px;">{{ Inspiring::quote() }}</div>
</div>
<hr>
<div id="content">
    <ul class="timeline">
        @foreach ($pages as $page)
        {{--<li class="event">--}}
            {{--<a href="{{ URL('pages/'.$page->id) }}">--}}
                {{--<div class="title">--}}
                    {{--<h4>{{ $page->title }}</h4>--}}
                {{--</div>--}}
                {{--<div class="body">--}}
                    {{--<p>{!! $page->body !!}</p>--}}
                {{--</div>--}}
            {{--</a>--}}
            {{--</li>--}}
            <li class="event">
                <a href="{{ URL('pages/'.$page->id) }}">
                    <input type="radio" name="tl-group" checked/>
                    <label></label>
                    <div class="thumb user-4"><span>{{$page->updated_at->format('d M')}}</span></div>
                    <div class="content-perspective">
                        <div class="content">
                            <div class="content-inner">
                                <h3>{{ $page->title }}</h3>
                                {{--<p>Don't be too proud of this technological terror you've constructed. The ability to destroy a planet is insignificant next to the power of the Force. The plans you refer to will soon be back in our hands. A tremor in the Force. The last time I felt it was in the presence of my old master. Escape is not his plan. I must face him. Alone.</p>--}}
                            </div>
                        </div>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
</div>
@endsection