

<form action="iletisimekle" method="post">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Ad Soyad</label><br>
        <input type="text" class="form-control" name="adsoyad" id="adsoyad" aria-describedby="emailHelp" placeholder="Ad Soyad Giriniz">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Mail</label><br>
        <input type="email" name="mail" class="form-control" id="exampleInputPassword1" placeholder="Mailinizi giriniz">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Telefon</label><br>
        <input type="tel" name="telefon" class="form-control" id="exampleInputPassword1" placeholder="Telefon giriniz">
    </div><br>
    <div class="form-group">
        <textarea name="mesaj" placeholder="Mesajınızı giriniz." class="form-control" style="width:300px; height:200px"></textarea>
    </div>
    <button type="submit" class="btn btn-primary" name="gonder" >Gönder</button>
</form>
