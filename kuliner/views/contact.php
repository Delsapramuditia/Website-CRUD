
<div class="container mt-5 mb-5 p-4" style="background-color: #f8e6e9; border-radius: 10px;">
    <h1 class="text-center mb-4" style="color: black;">Contact Me</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="post" action="send_message.php">
                <div class="form-group">
                    <label for="name" style="color: black;">Name</label>
                    <input type="text" class="form-control" id="name" name="name" style="background-color: #f8c8dc; color: black; border-color: #f8c8dc;" required>
                </div>
                <div class="form-group">
                    <label for="email" style="color: black;">Email</label>
                    <input type="email" class="form-control" id="email" name="email" style="background-color: #f8c8dc; color: black; border-color: #f8c8dc;" required>
                </div>
                <div class="form-group">
                    <label for="message" style="color: black;">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" style="background-color: #f8c8dc; color: black; border-color: #f8c8dc;" required></textarea>
                </div>
                <button type="submit" class="btn btn-success mt-3">Send Message</button>
            </form>
        </div>
    </div>
</div>