<h1>Daftar Menu Minuman</h1>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama Menu</th>
        <th>Harga</th>
    </tr>
    <!-- Melakukan looping untuk setiap data minuman -->
    @foreach ($menuList as $menu)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $menu->nama_menu }}</td>
        <td>Rp {{ number_format($menu->harga_jual, 0, ',', '.') }}</td>
    </tr>
    @endforeach
</table>