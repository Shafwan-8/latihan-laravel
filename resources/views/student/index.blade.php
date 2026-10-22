<x-app>
    <x-slot:title>{{ $title }}</x-slot:title>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('student.create') }}" class="btn btn-primary mb-3" role="button">Create Student</a>

    <table class="table table-hover table-bordered border-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->nim }}</td>
                    <td>
                        <a href="{{ route('student.edit', $student) }}" class="btn btn-sm btn-warning" role="button">Edit</a>
                        <form action="{{ route('student.destroy', $student) }}" method="POST" class="d-inline">
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
