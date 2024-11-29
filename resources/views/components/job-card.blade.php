@props(['job'])

<x-panel>
    <div class="self-start text-sm">Laracasts</div>


    <div class="py-8 ">
        <h3 class="font-bold group-hover:text-blue-800 text-xl transition-colors duration-300">Video Producer</h3>
        <p class="text-xs mt-5">Full Time - from $60,000</p>
    </div>


    <div class="flex justify-between items-center mt-auto bg-red">
        <div>
            @foreach ($job->tags as $tag)
            <x-tag :tag size="small">Backend</x-tag>
            @endforeach

        </div>

        <x-employer-logo : width="42"/>
    </div>

</x-panel>

