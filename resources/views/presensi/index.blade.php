<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Attendance List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('presensi.create') }}" class="btn btn-primary">Tambah Presensi</a>
                    <table class="table-auto w-full mt-4">
                        <thead>
                            <tr>
                                <th>Murid</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($presensis as $presensi)
                                <tr>
                                    <td>{{ $presensi->murid->nama }}</td>
                                    <td>{{ $presensi->tanggal }}</td>
                                    <td>{{ $presensi->status }}</td>
                                    <td>
                                        <a href="{{ route('presensi.edit', $presensi->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('presensi.destroy', $presensi->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
