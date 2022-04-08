<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Burrito</title>
</head>
<body>

<div class="container-fluid">
    <h1>Maak je eigen burrito!</h1>
    <form action="./create.php" method="post">
        <div class="form-group">
            <label for="modelFormControlSelect2">Saus</label>
            <select class="form-control" id="modelFormControlSelect2" name="formaat">
                <option>20cm</option>
                <option>25cm</option>
                <option>30cm</option>
            </select>
        </div>
        <div class="form-group">
            <label for="optionFormControlSelect2">Optie pakket</label>
            <select class="form-control" id="optionFormControlSelect2" name="saus">
                <option>Salsa crudo</option>
                <option>Salsa verde</option>
                <option>Salsa roja</option>
                <option>Crème fraiche</option>
            </select>
        </div>
</div>

<div class="content">
    <h2>Bonen</h2>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="bonen" id="flexRadioDefault1" value="witte bonen">
        <label class="form-check-label" for="flexRadioDefault1">
            witte bonen
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="bonen" id="flexRadioDefault2" value="zwarte bonen">
        <label class="form-check-label" for="flexRadioDefault2">
            zwarte bonen
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="bonen" id="flexRadioDefault2" value="bruine bonen">
        <label class="form-check-label" for="flexRadioDefault2">
            bruine bonen
        </label>
    </div>
</div>
<div class="content">
    <h2>rijst</h2>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="rijst" id="flexRadioDefault1" value="witte rijst">
        <label class="form-check-label" for="flexRadioDefault1">
            witte rijst
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="rijst" id="flexRadioDefault2" value="zwarte rijst">
        <label class="form-check-label" for="flexRadioDefault2">
            zwarte rijst
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="rijst" id="flexRadioDefault2" value="bruine rijst">
        <label class="form-check-label" for="flexRadioDefault2">
            bruine rijst
        </label>
    </div>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>