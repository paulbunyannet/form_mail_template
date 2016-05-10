@if( ! empty($data['html']))
    {!! $data['html']  !!}
@elseif( ! empty($data['text']))
    {!! $data['text'] !!}
@endif