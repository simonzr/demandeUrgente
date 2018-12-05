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
        <div class="row border border-success pt-5 pb-5">

            <!--Onglets-->
            <ul class="nav nav-tabs grey" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link green_font" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                        <i class="fas fa-user"></i> 1 personne
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link green_font" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                        <i class="fas fa-user-friends"></i> 2 personnes
                    </a>
                </li>
            </ul>

            <!--Panneaux-->
            <div class="tab-content col-sm-12 border border-success grey" id="myTabContent">
                <div class="tab-pane fade show active border border-warning" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <form>
                        <div class="form-row">
                            <div class="col-sm-5">
                                <div class="form-row">
                                    <div class="form-group col-sm-4 mt-3">
                                        <select class="custom-select form-control" name="Sex" id="">
                                            <option  selected value="Mr">Mr</option>
                                            <option value="Mme">Mme</option>
                                        </select>
                                    </div>
                                    <div class="form-group col mt-3">
                                        <input type="text" class="form-control" placeholder="Prénom">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <input type="text" class="form-control" placeholder="Nom">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <input type="text" class="form-control" placeholder="Domiciliation (CP, Ville...)">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-4">
                                        <select class="custom-select form-control" name="Sex" id="Âge" >
                                            <option selected>Âge</option>
                                            <option value="+ de 60 ans">+ de 60 ans</option>
                                            <option value="+ de 70 ans">+ de 70 ans</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade border border-danger" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <form>
                        <div class="form-row">
                            <div class="col-sm-5">
                                <div class="form-row">
                                    <div class="form-group col-sm-4 mt-3">
                                        <select class="custom-select form-control" name="Sex" id="">
                                            <option  selected value="Mr">Mr</option>
                                            <option value="Mme">Mme</option>
                                        </select>
                                    </div>
                                    <div class="form-group col mt-3">
                                        <input type="text" class="form-control" placeholder="Prénom">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <input type="text" class="form-control" placeholder="Nom">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <input type="text" class="form-control" placeholder="Domiciliation (CP, Ville...)">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-4">
                                        <select class="custom-select form-control" name="Sex" id="Âge" >
                                            <option selected>Âge</option>
                                            <option value="+ de 60 ans">+ de 60 ans</option>
                                            <option value="+ de 70 ans">+ de 70 ans</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-row">
                                    <div class="form-group col-sm-4 mt-3">
                                        <select class="custom-select form-control" name="Sex" id="">
                                            <option  selected value="Mr">Mr</option>
                                            <option value="Mme">Mme</option>
                                        </select>
                                    </div>
                                    <div class="form-group col mt-3">
                                        <input type="text" class="form-control" placeholder="Prénom">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <input type="text" class="form-control" placeholder="Nom">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <input type="text" class="form-control" placeholder="Domiciliation (CP, Ville...)">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-4">
                                        <select class="custom-select form-control" name="Sex" id="Âge" >
                                            <option selected>Âge</option>
                                            <option value="+ de 60 ans">+ de 60 ans</option>
                                            <option value="+ de 70 ans">+ de 70 ans</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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