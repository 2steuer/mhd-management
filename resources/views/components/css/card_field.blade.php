.{{ $classname }}-{{ $id }} {
    color: {{ $text_color }};
    background: repeating-linear-gradient(
        45deg,
        {{ $color1 }} 0px,
        {{ $color1 }} {{ $width }}px,
        {{ $color2 }} {{ $width }}px,
        {{ $color2 }} {{ $width * 2 }}px
    ) !important;
}