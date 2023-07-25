<h2><?php echo $application['title']; ?></h2>
<p><?php echo $application['content'] ?></p>

<form action="/index.php" method="POST">

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" />
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" />
    </div>
    <div class="form-group">
        <label for="message">Message</label>
        <textarea name="message"></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Send" />
    </div>
</form>