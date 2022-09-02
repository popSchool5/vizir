<?php require("./componants/header.php"); ?>


<style>
    .titreInfo{
        text-align: center;
        padding: 1rem;
    }
.information{
    display: flex;
    justify-content: center;

}
</style>
<section>
<h2 class="titreInfo">Mes informations</h2>

<div class="row information">
    <div class="col-sm-7">

        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Adresse email</label>
            <input type="email" class="form-control">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prenom</label>
            <input type="text" class="form-control">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" class="form-control">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          
          <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</div>



</section>

<section>

<div class="row information">
    <div class="col-sm-7">

    <h2 class="titreInfo">Supprimer le compte (Cette action est irréversible)</h2>
    <button type="submit" class="btn btn-danger">Supprimer mon compte</button>


    </div>
</div>


</section>



<?php require("./componants/footer.php"); ?>