<x-app>
    <x-slot:title>{{ $title }}</x-slot:title>

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
                    <td>-</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app>
