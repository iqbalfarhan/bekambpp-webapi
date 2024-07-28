<div class="card card-compact bg-base-200">
    <div class="card-body">
        <div class="flex gap-3 items-center">
            <button class="btn btn-circle btn-primary text-xl">{{ $number }}</button>
            <div class="flex flex-col text-primary">
                <h4 class="text-lg font-bold">{{ $title }}</h4>
                <div class="text-sm line-clamp-2 text-error">{{ $subtitle }}</div>
            </div>
        </div>
    </div>
</div>
