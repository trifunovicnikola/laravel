<form action="dodaj-oglas" method="post">
    @csrf
    <label for="exampleInputEmail1">Tekst</label>
    <input type="text" class="form-control" name = 'tekst' aria-describedby="emailHelp" >

    <label for="exampleInputEmail1">Datum Objave</label>
    <input type="date" class="form-control" name = 'datum' aria-describedby="emailHelp" >



    <button type="submit" class="btn btn-primary">Submit</button>
</form>
