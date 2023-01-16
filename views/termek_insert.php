<h1>Pizza felvétele</h1>
<form method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="nev_input" class="form-label">Név</label>
        <input type="text" class="form-control" id="nev_input" name="nev">
    </div>

    <div class="mb-3">
        <label for="leiras_input" class="form-label">AR</label>
        <textarea class="form-control" id="leiras_input" rows="3" name="leiras"></textarea>
    </div>

    <div class="mb-3">
        <label for="kepInput">Kép</label>
        <input type="file" class="form-control" id="kepInput" name="kep">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>