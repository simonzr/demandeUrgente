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

    <div class="container"/>
        <div class="row justify-content-center" style="border: 1px solid purple">
            <div class="col-lg-10" id="content" style="border: 1px solid blue" id="content" >
                    <h3>Je recherche pour</h3>
                    <br>


                    <!-- NAVTAB -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item grey green_font">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                <i class="fas fa-user green_font"></i> 1 personne
                            </a>
                        </li>
                        <li class="nav-item grey green_font">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                <i class="fas fa-user-friends green_font"></i> 2 personnes
                            </a>
                        </li>
                    </ul>

                    <!-- PANNEAU DE CHOIX -->
                    <div class="tab-content col-md-7 grey" id="myTabContent">
                        <!-- PANNEAU 1 -->
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <form class="col-lg-6">
                                    <br>
                                    <div class="form-row">
                                        <div class="col-md-3">
                                            <select class="custom-select">
                                                <option selected>Mr</option>
                                                <option value="1">Mr</option>
                                                <option value="2">Mme</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Prénom">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-row">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Nom">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-row">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Domiciliation (CP, Ville...)">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-row">
                                        <div class="col-md-3">
                                            <select class="custom-select">
                                                <option selected>Age</option>
                                                <option value="1">Value 1</option>
                                                <option value="2">Value 2</option>
                                                <option value="3">Value 3</option>
                                            </select>
                                        </div>
                                        <div class="col grey blue_font">
                                            <i class="fas fa-info-circle"></i> L'âge fait partie des critères pouvant déterminer le type de structure adaptée.
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- PANNEAU 2 -->
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <form class="col-lg-6">
                                    <br>
                                    <div class="form-row">
                                        <div class="col-md-3">
                                            <select class="custom-select">
                                                <option selected>Mr</option>
                                                <option value="1">Mr</option>
                                                <option value="2">Mme</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Prénom">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-row">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Nom">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-row">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Domiciliation (CP, Ville...)">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-row">
                                        <div class="col-md-3">
                                            <select class="custom-select">
                                                <option selected>Age</option>
                                                <option value="1">Value 1</option>
                                                <option value="2">Value 2</option>
                                                <option value="3">Value 3</option>
                                            </select>
                                        </div>
                                        <div class="col grey blue_font">
                                            <i class="fas fa-info-circle"></i> L'âge fait partie des critères pouvant déterminer le type de structure adaptée.
                                        </div>
                                    </div>
                                </form>
                                <form class="col-lg-6" id="second_tab">
                                    <br>
                                    <div class="form-row">
                                        <div class="col-md-3">
                                            <select class="custom-select">
                                                <option selected>Mr</option>
                                                <option value="1">Mr</option>
                                                <option value="2">Mme</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Prénom">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-row">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Nom">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-row">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Domiciliation (CP, Ville...)">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-row">
                                        <div class="col-md-3">
                                            <select class="custom-select">
                                                <option selected>Age</option>
                                                <option value="1">Value 1</option>
                                                <option value="2">Value 2</option>
                                                <option value="3">Value 3</option>
                                            </select>
                                        </div>
                                        <div class="col grey blue_font">
                                            <i class="fas fa-info-circle"></i> L'âge fait partie des critères pouvant déterminer le type de structure adaptée.
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <div class="row justify-content-center align-items-center">
                    <br><br>
                    <button class="btn">PASSER</button>
                    <br>
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