<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Send Email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                Send Email
            </div>
            <div class="card-body">
                <form action="send_mail.php" method="post">
                    <!--  -->
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="Email">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Sender Name</label>
                                <input type="text" class="form-control" name="sender_name" id="exampleFormControlInput1" placeholder="Sender Name">
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Attachment (Multiple Available)</label>
                                <input type="file" class="form-control" name="attachments[]" id="exampleFormControlInput1" placeholder="Attachment (Multiple Available)" multiple>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Reply-to</label>
                                <input type="email" class="form-control" name="reply_to" id="exampleFormControlInput1" placeholder="Reply-to">
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Message Letter</label>
                                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                                <div class="form-check">
                                    <input class="form-check-input" value="HTML" name="message_type" checked type="radio" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        HTML
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" value="Plain" name="message_type" type="radio" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Plain
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit" name="send">Send</button>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>