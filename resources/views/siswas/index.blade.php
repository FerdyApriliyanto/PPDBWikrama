@extends('template')
 
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>PPDB SMK Wikrama</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('siswas.create') }}"> Tambah Siswa</a>
            </div>
        </div>
    </div>
 
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
 
    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Asal Sekolah</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        @foreach ($siswas as $siswa)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $siswa->NIS }}</td>
            <td>{{ $siswa->Nama }}</td>
            <td>{{ $siswa->Jns_kelamin }}</td>
            <td>{{ $siswa->Temp_lahir }}</td>
            <td>{{ $siswa->Tgl_lahir }}</td>
            <td>{{ $siswa->Alamat }}</td>
            <td>{{ $siswa->Asal_sekolah }}</td>
            <td>{{ $siswa->Kelas }}</td>
            <td>{{ $siswa->Jurusan }}</td>
            <td class="text-center">
                <form action="{{ route('siswas.destroy',$siswa->id) }}" method="POST">
 
                    <a class="btn btn-info btn-sm" href="{{ route('siswas.show',$siswa->id) }}">Show</a>
 
                    <a class="btn btn-primary btn-sm" href="{{ route('siswas.edit',$siswa->id) }}">Edit</a>
 
                    @csrf
                    @method('DELETE')
 
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
 
    {!! $siswas->links() !!}
 
@endsection