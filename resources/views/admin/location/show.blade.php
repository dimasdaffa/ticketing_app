<x-layouts.admin title="Detail Lokasi">
    <div class="container mx-auto p-10">
        @if (session('success'))
            <div class="toast toast-bottom toast-center z-50">
                <div class="alert alert-success">
                    <span>{{ session('success') }}</span>
                </div>
            </div>

            <script>
                setTimeout(() => {
                    document.querySelector('.toast')?.remove()
                }, 3000)
            </script>
        @endif
        <div class="card bg-base-100 shadow-sm">
            <div class="card-body">
                <h2 class="card-title text-2xl mb-6">Detail Lokasi</h2>

                <div class="space-y-4">
                    <!-- Nama Lokasi -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text font-semibold">Nama Lokasi</span>
                        </label>
                        <input type="text" class="input input-bordered w-full" value="{{ $location->lokasi }}" disabled />
                    </div>

                    <!-- Tombol Aksi -->
                    <div class="card-actions justify-end mt-6">
                        <a href="{{ route('admin.locations.index') }}" class="btn btn-ghost">Kembali</a>
                        <a href="{{ route('admin.locations.edit', $location->id) }}" class="btn btn-primary">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin>
