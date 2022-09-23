<form action="{{route('soal-4')}}" method="POST">
    @csrf
    <label for="total">Total</label>
    <input type="text" name="total" placeholder="masukkan total"><br>
    <label for="total">Persen</label>
    <input type="text" name="persen_pajak" placeholder="masukkan persen">
    <button type="submit">Submit</button>
</form>