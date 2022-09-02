<?php require("./componants/header.php"); ?>



<style>

</style>
<section id="profil">
    <div class="banner">
        <img src="./componants/images/photo1.jpg" alt="">

    </div>
    <div class="buttonAjoutStorieEtActu">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Ajout Storie
        </button>



        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Ajout Actualitée
        </button>

    </div>


    <div class="mesStories">
        <h2>Mes Stories</h2>
        <div class="listeMesStorie">
            <div class="uneStorie">

            </div>
        </div>
    </div>



    <div class="mesActu">
        <section id="listeActus">

            <div class="uneActu">
                <img src="./componants/images/photo1.jpg" alt="">
                <div class="extrait">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, vel?
                </div>
                <div class="buttonAimeCommente">
                    <button type="button" class="btn btn-danger ">Supprimer</button>
                    <button type="button" class="btn btn-warning ">Modifier</button>
                    <button type="button" class="btn btn-primary ">Voir l'article</button>
                </div>

            </div>




        </section>
    </div>

</section>








<!-- Actualité modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- fin actu modal -->


<!-- modal storie -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- fin modal storie -->



<?php require("./componants/footer.php"); ?>