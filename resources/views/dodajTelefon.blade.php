<form action="dodaj-telefon" method="post">
    @csrf

    <label for="exampleInputEmail1">Marka</label>
    <input type="text" class="form-control" name = 'mark_id' aria-describedby="emailHelp" >

    <label for="exampleInputEmail1">CIjena</label>
    <input type="text" class="form-control" name = 'cijena' aria-describedby="emailHelp" >

    <label for="exampleInputEmail1">opis</label>
    <input type="text" class="form-control" name = 'opis' aria-describedby="emailHelp" >

    <label for="exampleInputEmail1">slika_id</label>
    <input type="text" class="form-control" name = 'slika_id' aria-describedby="emailHelp" >
    <label for="exampleInputEmail1">sifra</label>
    <input type="text" class="form-control" name = 'sifra' aria-describedby="emailHelp" >

    <label for="exampleInputEmail1">model</label>
    <input type="text" class="form-control" name = 'model' aria-describedby="emailHelp" >


    <label for="exampleInputEmail1">javno</label>
    <input type="text" class="form-control" name = 'javno' aria-describedby="emailHelp" >



    <label for="exampleInputEmail1">konfiguracije</label>
    <input type="text" class="form-control" name = 'konfiguracije' aria-describedby="emailHelp" >

    <label for="exampleInputEmail1">Prodavac</label>
    <input type="text" class="form-control" name = 'prodavac' aria-describedby="emailHelp" >

    <label for="exampleInputEmail1">kontakt</label>
    <input type="text" class="form-control" name = 'kontakt' aria-describedby="emailHelp" >


    <button type="submit" class="btn btn-primary">Submit</button>
</form>
