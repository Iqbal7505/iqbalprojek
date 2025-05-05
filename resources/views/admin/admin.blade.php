<!DOCTYPE html>
<html>
    <head>
        <title>Contact Form</title>
    </head>
<body>
<form action="{{ route('admin.store') }}" method="POST">
    @csrf
    <label>Nama: <input type="text" name="nama" /></label><br>
    <label>Email: <input type="email" name="email" /></label><br>
    <label>No. HP: <input type="text" name="no_hp" /></label><br>
    <label>Alamat: <input type="text" name="alamat" /></label><br>
    <label>Role:
        <select name="role">
            <option value="Super Admin">Super Admin</option>
            <option value="Kasir">Kasir</option>
        </select>
    </label><br>
    <button type="submit">Submit</button>
</form>

{{-- Tampilkan error jika ada --}}
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $err)
                <li>{{ $err }}</li>
            @endforeach
        </ul>
    </div>
@endif

</body>    
</html>