@props(['job'])


<x-panel class="flex flex-col text-center ">
    <div class="self-start text-sm">{{ $job->employer->name}}</div>

    <div class="py-8 font-bold">
        <a href="{{ $job->url }}" target="_blank">
            <h3 class="group-hover:text-blue-600 text-xl  transition-color duration-300">{{$job->title}}</h3>
        </a>
        <p class="text-sm mt-4">{{ $job->salary }}</p>
    </div>
    
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
                <x-tag :$tag :size="'small'"/>
            @endforeach
        </div>
        <!-- <img src="https://picsum.photos/seed/{{ rand(0, 1000) }}/42/42" alt="Placeholder" class="rounded-xl"> -->

        <x-employer-logo :employer="$job->employer" :width="42" />
    </div>  
</x-panel>