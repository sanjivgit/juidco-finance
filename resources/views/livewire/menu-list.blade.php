<div>
    <ul>
        @foreach ($sidebarLinks as $items)
                @if (is_array($items))
                @foreach($items as $i)
            @if (is_array($i))
            @foreach($i as $a)
            <li>{{$a}}</li>
            @endforeach
            @else
            <li>{{$i}}</li>
            @endif
            @endforeach
            @else
                <li>{{$items}}</li>
            @endif
        @endforeach
    </ul>
</div>
