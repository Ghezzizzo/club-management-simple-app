<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Molteno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <button id="new-person">aggiungi</button>
    <div id="table-conatiner"></div>

    <!-- form for insert -->

    <div id="new-person-form" class="row g-3" style="max-width: 90%; display:none;">
        <div class="col-md-6">
            <label for="Name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name">
        </div>
        <div class="col-md-6">
            <label for="surname" class="form-label">Cognome</label>
            <input type="text" class="form-control" id="surname">
        </div>
        <div class="col-md-4">
            <label for="age" class="form-label">Età</label>
            <input type="text" class="form-control" id="age">
        </div>
        <div class="col-md-6">
            <label for="team" class="form-label">Squadra</label>
            <select id="team" class="form-select">
                <option selected>Seleziona</option>
                <option>scuola calcio</option>
                <option>pulcini 1° anno</option>
                <option>pulcini 2° anno</option>
                <option>esordienti 1° anno</option>
                <option>esordienti 2° anno</option>
            </select>
        </div>
        <div class="col-12">
            <button id="insert-btn" class="btn btn-primary" style="display: none;">aggiungi</button>
        </div>

    </div>


    <div id="update-person-form" class="row g-3" style="max-width: 90%; display:none;">
        <div class="col-md-6">
            <label for="Name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name">
        </div>
        <div class="col-md-6">
            <label for="surname" class="form-label">Cognome</label>
            <input type="text" class="form-control" id="surname">
        </div>
        <div class="col-md-4">
            <label for="age" class="form-label">Età</label>
            <input type="text" class="form-control" id="age">
        </div>
        <div class="col-md-6">
            <label for="team" class="form-label">Squadra</label>
            <select id="team" class="form-select">
                <option selected>Seleziona</option>
                <option>scuola calcio</option>
                <option>pulcini 1° anno</option>
                <option>pulcini 2° anno</option>
                <option>esordienti 1° anno</option>
                <option>esordienti 2° anno</option>
            </select>
        </div>
        <div class="col-12">
            <div class="col-12">
                <button id="update-btn" class="btn btn-primary">modifica</button>
            </div>
        </div>

    </div>
    <div id="result" class="alert py-2 px-4 invisible"></div>




    <script src="./js/players.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>