
<form action="{{route('soal-5')}}" method="POST">
    @csrf
    <label for="diskon">Diskon 1</label>
    <input type="text" name="diskon[]" placeholder="masukkan diskon"><br>
    <label for="diskon">Diskon 2</label>
    <input type="text" name="diskon[]" placeholder="masukkan diskon"><br>
    <label for="total">Total sebelum diskon</label>
    <input type="text" name="total_sebelum_diskon" placeholder="masukkan total sebelum diskon">
    <button type="submit">Submit</button>
</form>