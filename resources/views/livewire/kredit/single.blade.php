<tr>
    <td>{{$index}}</td>
    {{-- <td>{{$kredit->tanggal_pinjam}}</td> --}}
    <td>{{$kredit->lahan->sertifikat}}</td>
    <td>{{$kredit->jangka_waktu}} <sup>° </td>
    <td>{{$kredit->jumlah}} <sup>° </td>
    {{-- <td>{{$kredit->status}}</td> --}}
    <td>{{$kredit->mdpl}}</td>
    <td>
        <a class="btn btn-sm btn-warning" href="{{route('kredit.show', ['kredit' => $kredit])}}">Lihat</a>
        <button class="btn btn-sm btn-danger" wire:click="hapus">Hapus</button>
    </td>
</tr>