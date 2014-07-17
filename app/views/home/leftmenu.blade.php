    @if (isset($categories) && is_object($categories))
            <nav class="sidebar_menu">
                @foreach ($categories as $category)
                    <a href="{{ URL::to('category/'.$category->alias) }}"{{ Request::is('category/'.$category->alias) ? ' class="active"' : '' }} data-name="{{ $category->alias }}">{{{ $category->title }}}</a>
                    @if (count($category->children))
                        <ul>
                            @foreach ($category->children as $subcategory)
                                <li>
                                    <a href="{{ URL::to('category/'.$category->alias.'/'.$subcategory->alias) }}"{{ Request::is('category/'.$subcategory->alias) ? ' class="active"' : '' }} data-name="{{ $subcategory->alias }}">{{{ $subcategory->title }}}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                @endforeach
            </nav>
    @endif