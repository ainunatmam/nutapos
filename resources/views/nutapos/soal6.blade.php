
<form action="{{route('soal-6')}}" method="POST">
    @csrf
    <label for="harga_sebelum_markup">Harga Sebelum Markup</label>
    <input type="text" name="harga_sebelum_markup" placeholder="masukkan harga sebelum markup"><br>
    <label for="markup_persen">markup persen</label>
    <input type="text" name="markup_persen" placeholder="masukkan markup persen"><br>
    <label for="share_persen">Share Persen</label>
    <input type="text" name="share_persen" placeholder="masukkan share persen">
    <button type="submit">Submit</button>
</form>