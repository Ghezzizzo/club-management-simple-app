<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Molteno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        @import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
        @import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700');
        @import url('https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700');

        body {
            font-family: 'Open Sans', sans-serif;
        }

        *:hover {
            -webkit-transition: all 1s ease;
            transition: all 1s ease;
        }

        section {
            float: left;
            width: 100%;
            background: #fff;
            /* fallback for old browsers */
            padding: 30px 0;
        }

        h1 {
            float: left;
            width: 100%;
            color: #232323;
            margin-bottom: 30px;
            font-size: 14px;
        }

        h1 span {
            font-family: 'Libre Baskerville', serif;
            display: block;
            font-size: 45px;
            text-transform: none;
            margin-bottom: 20px;
            margin-top: 30px;
            font-weight: 700
        }

        h1 a {
            color: #131313;
            font-weight: bold;
        }

        /* card grid */
        .tab {
            display: flex;
            flex-wrap: wrap;
        }

        /*Profile Card 5*/
        .profile-card {
            margin: 20px 10px;
        }

        .profile-card .btn {
            border-radius: 2px;
            text-transform: uppercase;
            font-size: 12px;
            padding: 7px 20px;
        }

        .profile-card .card-img-block {
            width: 91%;
            margin: 0 auto;
            position: relative;
            top: -20px;

        }

        .profile-card .card-img-block img {
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.63);
        }

        .profile-card h5 {
            color: #4E5E30;
            font-weight: 600;
        }

        .profile-card p {
            font-size: 14px;
            font-weight: 300;
        }

        .profile-card .btn-primary {
            background-color: #4E5E30;
            border-color: #4E5E30;
        }
    </style>

</head>

<body>
    <button id="new-person">aggiungi</button>

    <div class="container">
        <div id="table-conatiner"></div>
    </div>

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
            <button id="insert-btn" class="btn btn-primary">aggiungi</button>
        </div>

    </div>


    <div id="result" class="alert py-2 px-4 invisible">
    </div>

    <script src="./js/players.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>