<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Pendaftaran Mahasiswa</title>
</head>
<body>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-8 col-xl-6">
                <h1>Pendaftaran Mahasiswa</h1>
                <hr>

                <form action="{{ route('mahasiswas.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" id="nim" name="nim" value="{{ old('nim') }}" class="form-control @error('nim') is-invalid @enderror">
                        @error('nim')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label" >Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror">
                        @error('nama')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="form-label">Jenis Kelamin</label>
                        <div class="d-flex">
                            <div class="form-check me-3">
                                <input type="radio" class="forom-check-input" name="jenis_kelamin" id="laki_laki" value="L" {{ old('jenis_kelamin')=='L' ? 'checked': '' }}>
                                <label for="laki_laki" class="form-check-label">Laki-Laki</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="jenis_kelamin" id="perempuan" value="P" {{ old('jenis_kelamin')=='P' ? 'checked': '' }}>
                                <label for="perempuan" class="form-check-label">Perempuan</label>
                            </div>
                        </div>

                        @error('jenis_kelamin')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="jurusan">Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-select" value="{{ old('jurusan') }}">
                            <option value="Teknik Informatika" {{ old('jurusan')=='Teknik Informatika' ? 'selected': '' }}>
                                Teknik Informasi
                            </option>
                            <option value="Sistem Informasi" {{ old('jurusan')=='Sistem Informasi' ? 'selected': '' }}>
                                Sistem Informasi
                            </option>
                            <option value="Ilmu Komputer" {{ old('jurusan')=='Ilmu Komputer' ? 'selected': '' }}>
                                Ilmu Komputer
                            </option>
                            <option value="Teknik Komputer" {{ old('jurusan')=='Teknik Komputer' ? 'selected': '' }}>
                                Teknik Komputer
                            </option>
                            <option value="Teknik Telekomunikasi" {{ old('jurusan')=='Teknik Telekomunikasi' ? 'selected': '' }}>
                                Teknik Telekomunikasi
                            </option>
                        </select>
                        @error('jurusan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="bm-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea name="alamat" id="alamat" rows="3" class="form-control">{{ old('alamat') }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mb-2">Daftar</button>
                </form>

            </div>
        </div>
    </div>
</body>
</html>