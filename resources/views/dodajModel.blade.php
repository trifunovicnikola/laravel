<form action="dodaj-model" method="post">
    @csrf

    <label for="exampleInputEmail1">Model</label>
    <input type="text" class="form-control" name = 'model_naziv' aria-describedby="emailHelp" >

    <label for="exampleInputEmail1">Marka</label>
    <input type="text" class="form-control" name = 'marka_id' aria-describedby="emailHelp" >



    <button type="submit" class="btn btn-primary">Submit</button>
</form>
