@props(['active', 'icon', 'link', 'name','submenu'])

@php
$classes = ($active ?? false)
            ? 'sidebar-item  active'
            : 'sidebar-item';
if (!empty($submenu)) {
    $classes.=" has-sub";
}
@endphp



<li class="{{$classes}}">
    <a href="{{ $link }}" class='sidebar-link'>
        <i class="{{ $icon }}"></i>
        <span>{{ $name }}</span>
    </a>

    @if (!empty($submenu))
    <ul class="submenu @if($active) active @endif">
        @foreach ($submenu as $item)
            @php
                $active=URL::current()==$item['link'];
            @endphp
            <li class="submenu-item @if($active) active @endif">
            <a href="{{$item['link']}}">{{$item['name']}}</a>
          </li>
        @endforeach
    </ul>
    @endif
</li>