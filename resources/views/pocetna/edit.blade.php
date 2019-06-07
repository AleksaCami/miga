<html>
<head>
</head>

<body>

<h1>Izmeni uzorak uzorak</h1>

<form method="post" action="/update/{{$uzorak->id}}">
    @csrf
    @method('PUT')
    <label>Naziv</label>
    <input type="text" name="naziv" value="{{ old('naziv', $uzorak->naziv) }}">
    <br>
    <label>Vreme prikupljanja</label>
    <input type="number" name="vreme_prikupljanja" value="{{ old('vreme_prikupljanja', $uzorak->vreme_prikupljanja) }}">
    <br>
    <label>Sirina</label>
    <input type="number" name="sirina" value="{{ old('sirina', $uzorak->sirina) }}">
    <br>
    <label>Visina</label>
    <input type="number" name="visina" value="{{ old('visina', $uzorak->visina) }}">
    <br>
    <select name="status">
        <option value="0">Na Marsu</option>
        <option value="1">U transportu</option>
        <option value="2">Na Zemlji</option>
    </select>
    <br>
    <button type="submit" class="btn btn-primary">
        Potvrdi
    </button>

</form>
</body>
</html>
