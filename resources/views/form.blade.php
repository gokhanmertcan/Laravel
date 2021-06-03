<html>
<head>
    <meta charset="utf-8">
<title>FORM SAYFASI</title>
</head>

<body>
    <form action="{{ route('sonuc')}}" method="post">
        @csrf
        <textarea name="metin" style="height: 300px; width:300px;"></textarea><br>
        <button name="ilet" type="submit">Gönder</button>
    </form>
</body>
</html>
