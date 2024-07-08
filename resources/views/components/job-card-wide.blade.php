@props(['job'])
<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo :width="100" />
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm  text-gray-400">{{$job->employer->name}}</a>
        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-600 transition-colors duration-300">{{$job->title}}</h3>
        <p class="text-sm text-gray-400 mt-auto">{{$job->title}}</p>
    </div>


    <div>
        @foreach ($job->tags as $tag)
            <x-tag :tag="$tag" />
        @endforeach

    </div>

</x-panel>