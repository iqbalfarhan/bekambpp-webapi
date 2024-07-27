<div>
    <input type="checkbox" class="modal-toggle" @checked($show) />
    <div class="modal" role="dialog">
        <form class="modal-box max-w-sm" wire:submit="simpan">
            <h3 class="text-lg font-bold">Form approve order bekam</h3>
            <div class="py-4 space-y-1">
                <div class="form-control">
                    <div class="label">
                        <div class="label-text">Nama user</div>
                    </div>
                    <label for="" class="input flex items-center gap-2">
                        <x-tabler-user class="size-5" />
                        <input type="text" class="grow" placeholder="nama user">
                    </label>
                </div>
                <div class="form-control">
                    <div class="label">
                        <div class="label-text">Sesi jam</div>
                    </div>
                    <label for="" class="input flex items-center gap-2">
                        <x-tabler-clock class="size-5" />
                        <input type="text" class="grow" placeholder="nama user">
                    </label>
                </div>
                <div class="form-control">
                    <div class="label">
                        <div class="label-text">Paket bekam</div>
                    </div>
                    <label for="" class="input flex items-center gap-2">
                        <x-tabler-box class="size-5" />
                        <input type="text" class="grow" placeholder="nama user">
                    </label>
                </div>
            </div>
            <div class="modal-action justify-between">
                <button class="btn btn-ghost">Close</button>
                <button class="btn btn-primary">
                    <x-tabler-check />
                    <span>Approve</span>
                </button>
            </div>
        </form>
    </div>
</div>
