    @if (isset($categories) && is_array($categories))
            <nav class="sidebar_menu">
                @foreach ($categories as $category)
                    <a href="{{ URL::to('category/'.$category['alias']) }}" class="@if($category['alias'] == Route::getCurrentRoute()->getParameter('alias')){{ 'active' }}@endif">{{{ $category['title'] }}}</a>
                    @if (count($category['children']))
                        <ul>
                            @foreach ($category['children'] as $subcategory)
                                <li>
                                    <a href="{{ URL::to('category/'.$subcategory['alias']) }}" class="@if($category['alias'] == Route::getCurrentRoute()->getParameter('alias')){{ 'active' }}@endif">{{{ $subcategory['title'] }}}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                @endforeach
            </nav>
    @endif