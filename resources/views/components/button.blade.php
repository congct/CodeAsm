<button @class(["$class $colour hover:bg-opacity-90 active:bg-opacity-70 py-2 px-4 border-2 dark:border-0 rounded my-3"] ) {{$attributes}}>
    <i class="{{$icon}}" aria-hidden="true"></i>
    {{$slot}} {{$label}}
</button>