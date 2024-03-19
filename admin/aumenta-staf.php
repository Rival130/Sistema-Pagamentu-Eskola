<h5>Desktop Aumenta Data Staf</h5>
<a href="?url=staf" class="btn btn-primary">FILA</a>
<hr>
<form action="?url=proses-aumenta-staf" method="post">
    <div class="form-group mb-2">
        <label for="">Username</label>
        <input type="text" name="username" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label for="">Password</label>
        <input type="text" name="password" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label for="">Naran Staf</label>
        <input type="text" name="naran_staf" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label for="">Staf</label>
        <select name="level" class="form-control" required>
            <option value="">Hili level Staf</option>
            <option value="admin">Admin</option>
            <option value="staf">Staf</option>
        </select>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary"> RAI </button>
        <button type="reset" class="btn btn-danger"> RESET </button>
    </div>
</form>