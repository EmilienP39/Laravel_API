<h1>Création de partenaire</h1>
<form action="{{ route("store-partner") }}" method="post">
    @csrf
    <label for="nom_partner">Nom</label><br>
    <input type="text" name="nom_partner"/>
    <br>
    <label for="description">descrption</label><br>
    <textarea name="description"></textarea><br>

    <label for="ville_partner">Ville</label><br>
    <input type="text" name="ville_partner"><br>

    <label for="address_partner">Addresse</label><br>
    <input type="text" name="address_partner"><br>

    <button type="submit">Envoyer</button>
</form>
