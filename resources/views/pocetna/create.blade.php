<html>
<head>
</head>

<body>

    <h1>Dodaj uzorak</h1>

    <form method="post" action="/store">
        @csrf
        <label>Naziv</label>
        <input type="text" name="naziv">
        <br>
        <label>Vreme prikupljanja</label>
        <input type="number" name="vreme_prikupljanja">
        <br>
        <label>Sirina</label>
        <input type="number" name="sirina">
        <br>
        <label>Visina</label>
        <input type="number" name="visina">
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
