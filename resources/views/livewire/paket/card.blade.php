<div class="card card-compact">
    <div class="card-body">
        <div class="flex gap-3">
            <button class="avatar">
                <div class="w-16 rounded-xl bg-base-200">
                    <img src="{{ $paket->image }}" alt="">
                </div>
            </button>
            <div class="flex flex-col">
                <div class="flex flex-col">
                    <h3 class="text-lg font-bold line-clamp-1 text-primary">{{ $paket->name }}</h3>
                    <div class="text-error font-bold">{{ $paket->rupiah }}</div>
                </div>
                <div class="text-xs line-clamp-1">{{ $paket->keterangan }}</div>
            </div>
        </div>
    </div>
</div>
