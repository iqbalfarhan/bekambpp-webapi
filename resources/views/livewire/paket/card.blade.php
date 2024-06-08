<div class="card card-compact h-full">
    <div class="card-body items-center text-center space-y-2">
        <button class="avatar">
            <div class="w-24 rounded-full bg-base-200">
                <img src="{{ $paket->image }}" alt="">
            </div>
        </button>
        <div class="flex flex-col">
            <h3 class="text-lg font-bold line-clamp-1">{{ $paket->name }}</h3>
            <span>Rp. {{ Number::format($paket->harga) }}</span>
        </div>
        <p class="text-xs line-clamp-3">{{ $paket->keterangan }}</p>
    </div>
</div>
