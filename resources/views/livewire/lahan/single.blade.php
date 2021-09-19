<tr>
    <td>{{$index}}</td>
    <td>{{$lahan->sertifikat}}</td>
    <td>{{$lahan->kwitansi}}</td>
    <td>{{$lahan->lokasi}}</td>
    <td>{{$lahan->luas}} m<sup>2 </td>
    <td>{{$lahan->status}}</td>
    <td>
        <button class="btn btn-sm btn-danger" wire:click="hapus">Hapus</button>
        <a href="{{route('lahan.edit', ['lahan' => $lahan])}}" class="btn btn-sm btn-warning">Edit</a>
    </td>
</tr>