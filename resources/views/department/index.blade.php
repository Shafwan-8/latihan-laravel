<x-app>
    <x-slot:title>{{ $title }}</x-slot:title>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('department.create') }}" class="btn btn-primary mb-3" role="button">Create Department</a>

    <table class="table table-hover table-bordered border-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($department as $dept)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $dept->name }}</td>
                    <td>
                        <a href="{{ route('department.edit', $dept) }}" class="btn btn-sm btn-warning" role="button">Edit</a>
                        <form action="{{ route('department.destroy', $dept) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app>
