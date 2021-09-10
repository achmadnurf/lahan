<tr>
    <td>{{$index}}</td>
    <td>{{$anggota->sertifikat}}</td>
    <td>{{$anggota->kwitansi}}</td>
    <td>{{$anggota->lokasi}}</td>
    <td>{{$anggota->luas}} m<sup>2 </td>
    <td>{{$anggota->status}}</td>
    <td>
        <button class="btn btn-sm btn-danger" wire:click="hapus">Hapus</button>
        <a href="{{route('anggota.edit', ['anggota' => $anggota])}}" class="btn btn-sm btn-warning">Edit</a>
    </td>
</tr>