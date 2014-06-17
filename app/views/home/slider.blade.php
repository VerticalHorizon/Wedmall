    @if (isset($slides) && is_object($slides))
            <div class="slider">
                <ul class="slides">
                    @foreach ($slides as $slide)
                        <li class="slide">
                            <img src="{{ URL::to('uploads/slides/detail/'.$slide->photo) }}" alt="">
                            <div>
                                <p>
                                    {{{ $slide->description }}}
                                </p>
                                @if (isset($slide->link))
                                    <a href="{{{ $slide->link }}}">Подробнее</a>
                                @endif
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
    @endif