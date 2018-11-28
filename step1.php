<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <title>Demande Urgente</title>
</head>


<body>
    <?php include 'header.php'; ?>

    <div class="container border border-success">
        <div class="row">

            <!--Onglets-->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                        <i class="fas fa-user"></i> 1 personne
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                        <i class="fas fa-user-friends"></i> 2 personnes
                    </a>
                </li>
            </ul>

            <!--Panneaux-->
            <div class="tab-content col-sm-12 border border-success" id="myTabContent">
                <div class="tab-pane fade show active border border-warning" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <form>
                        <div class="form-row border border-primary">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <select class="form-control form-control-lg" name="Sexe" id="">
                                            <option value="Mr">Mr</option>
                                            <option value="Mme">Mme</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-9">
                                        <input type="password" class="form-control-lg" id="inputPassword4" placeholder="Prénom">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" id="inputCity">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <select id="inputState" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control" id="inputZip">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </form>
                    <button class="btn btn-warning">Submit 1</button>
                </div>
                <div class="tab-pane fade border border-danger" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <button class="btn btn-danger">Submit 2</button>
                </div>
            </div>

        </div>
    </div>

    <?php include 'footer.php'; ?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>