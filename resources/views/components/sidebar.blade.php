{{-- $attributes = default from laravel --}}
{{-- combine $attributes with class="text-xl" --}}
<div {{$attributes->merge(['class'=>'text-xl'])}}>
    <h1>{{$title}}</h1>
    <h2>{{$sub_title}}</h2>
    <h1>{{$info}}</h1>
    Hello from sidebar component

    <ul>
        {{-- add another to array list --}}
        @foreach ($list('another') as $item)
        <li>{{$item}}</li>
        @endforeach
    </ul>
    {{-- slot = default from laravel --}}
    {{$slot}}
</div>