<div class="card card-compact">
    <div class="card-body">
        <div class="flex items-center justify-center gap-6">
            <div class="flex-none">
                <div class="avatar">
                    <div class="w-20 rounded-xl bg-base-300">
                        <img src="{{ $user->image_url }}" alt="">
                    </div>
                </div>
            </div>
            <div class="flex-1">
                <div class="flex justify-between items-center gap-x-10">
                    <div>
                        <div class="text-xs text-secondary">Nama user</div>
                        <div class="text-primary font-bold max-w-64">{{ $user->name }}</div>
                    </div>
                    <div>
                        <div class="text-xs text-secondary">Phone</div>
                        <div class="text-primary font-bold max-w-64">{{ $user->phone }}</div>
                    </div>
                    <div>
                        <div class="text-xs text-secondary">Email</div>
                        <div class="text-primary font-bold max-w-64">{{ $user->email }}</div>
                    </div>
                    <div>
                        <div class="text-xs text-secondary">Alamat</div>
                        <div class="text-primary font-bold max-w-64">{{ $user->address }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
