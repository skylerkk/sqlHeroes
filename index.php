<?php include "functions.php"; ?>
<!doctype html>
<html lang="en">

<head>
    <title>SQL Heroes</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row my-5">




            <form class="col-12" method="post" action="thankyou.php">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name</label>
                    <input type="name" name='name' class="form-control" id="heroname" placeholder="Hero Name">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Power</label>
                    <select name='ability_id' class="form-control" id="exampleFormControlSelect1">
                        <?php
                        $result = get_powers();
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                        ?>
                                <option value=<?php echo $row["id"] ?>><?php echo $row["ability"] ?></option>
                        <?php }
                        } else {
                            echo "0 results";
                        } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">About Me</label>
                    <textarea name="about_me" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Biography</label>
                    <textarea name="bio" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>


                <input name='signup' type="hidden"></input>
                <button type="submit" class="btn btn-secondary">Sign Up</button>
            </form>


        </div>
        <div class="row">
            <form class="col-12" action="Home.php">
                <button type="submit" class="btn btn-secondary">Home</button>
            </form>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>