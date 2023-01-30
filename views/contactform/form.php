<main class="flex flex-1 w-4/5 items-center justify-center bg-slate-600 h-4/5 mt-4 mb-4 rounded-xl">

    <form action="check.php" method="post" class="flex flex-col justify-center items-left gap-8">
        <div class="form-group mt-4">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group mt-4">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group mt-4">
            <label for="subject">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject">
        </div>
        <div class="form-group mt-4">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</main>