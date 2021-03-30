<form action="dodaj-konfiguracije" method="post">
    @csrf

    <label for="exampleInputEmail1">Marka</label>
    <input type="text" class="form-control" name = 'procesor' aria-describedby="emailHelp" >

    <label for="exampleInputEmail1">CIjena</label>
    <input type="text" class="form-control" name = 'ram' aria-describedby="emailHelp" >

    <label for="exampleInputEmail1">opis</label>
    <input type="text" class="form-control" name = 'baterija' aria-describedby="emailHelp" >

    <label for="exampleInputEmail1">slika_id</label>
    <input type="text" class="form-control" name = 'kamera_zadnja' aria-describedby="emailHelp" >
    <label for="exampleInputEmail1">sifra</label>
    <input type="text" class="form-control" name = 'kamera_prednja' aria-describedby="emailHelp" >

    <label for="exampleInputEmail1">model</label>
    <input type="text" class="form-control" name = 'memorija' aria-describedby="emailHelp" >


    <label for="exampleInputEmail1">javno</label>
    <input type="text" class="form-control" name = 'ekran' aria-describedby="emailHelp" >





    <button type="submit" class="btn btn-primary">Submit</button>
</form>
