    @if (isset($categories) && is_object($categories))
        <div class="sidebar left">
            <nav class="sidebar_menu">
                @foreach ($categories as $category)
                    <a href="#">{{{ $category->title }}}</a>
                    @if (count($category->children))
                        <ul>
                            @foreach ($category->children as $subcategory)
                                <li>
                                    <a href="#">{{{ $subcategory->title }}}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                @endforeach
            </nav>
        </div>
    @endif