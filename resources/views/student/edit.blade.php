<x-app>
    <x-slot:title>{{ $title }}</x-slot:title>


    <div class="card shadow-md">
        <div class="card-body">

            <form action="{{ route('student.update', $student) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $student->name) }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" value="{{ old('nim', $student->nim) }}"     >
                    @error('nim')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <a href="{{ route('student.index') }}" class="btn btn-warning" role="button">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</x-app>
