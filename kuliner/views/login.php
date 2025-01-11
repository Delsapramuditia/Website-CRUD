<div class="container mt-5 mb-5 p-4" style="background-color: #f8e6e9; border-radius: 10px;">
    <h1 class="text-center mb-4" style="color: black;">Login</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="post" action="login_process.php">
                <div class="form-group">
                    <label for="username" style="color: black;">Username</label>
                    <input type="text" class="form-control" id="username" name="username" style="background-color: #f8c8dc; color: black; border-color: #f8c8dc;" required>
                </div>
                <div class="form-group">
                    <label for="password" style="color: black;">Password</label>
                    <input type="password" class="form-control" id="password" name="password" style="background-color: #f8c8dc; color: black; border-color: #f8c8dc;" required>
                </div>
                <button type="submit" class="btn btn-success mt-3">Login</button>
            </form>
        </div>
    </div>
</div>