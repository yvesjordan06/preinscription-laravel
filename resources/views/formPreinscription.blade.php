<!DOCTYPE html>
<html>
<head>
    <meta charset="UFT-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>formulaire de preinscription</title>
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/w3.css">
    <link href="css/icon.css" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.min.css">

</head>
<body>
<header>

</header>
<div class="row ">
    <div class="col s12  grey darken-4">
        <ul  class="tabs tabs-fixed-width grey darken-4" >
            <li class="tab "><a   class="active formlinks grey-text text-lighten-3 " href="#infos">information sur l'etat civile</cite></a></li>
            <li class="tab "><a class="formlinks grey-text text-lighten-3" href="#filiation">filiation et information d'ungence</a></li>
            <li class="tab "><a  class="formlinks grey-text text-lighten-3"href="#facultes">facultes et domaines d'etudes</a></li>
            <li class="tab"><a   class="formlinks grey-text text-lighten-3 " href="#diplome">diplome presenté</a></li>
            <li class="tab "><a   class="formlinks grey-text text-lighten-3 " href="#autre">autre details</a></li>
        </ul>
    </div>
</div>

<form  class="container" action="">
    <div id="infos" class="container ">
        <div class="formcontainer  ">

            <h3 class="teal-text text-lighten-2 w3-container ">information sur l'etat civil</h3>
            <hr>

            <br>
            <label for="fnom">nom de famille:</label>
            <input  class="w3-input w3-animate-input" type="text"   style="width: 50%;"placeholder="Entrer votre nom" name="fnom" required>
            <br>
            <label for="Prenom">Prenom:</label>
            <input type="text" class="w3-input w3-animate-input"  style="width: 50%;" placeholder="Entrer votre" name="Prenom" required>
            <br>
            <label for="date de naissance">Date de naissance:</label>
            <input type="text" class="datepicker  w3-input w3-animate-input" style="width: 50%;"name="Datenaissance" requireds>
            <br>
            <label for="naissance">lieu de naissance:</label>
            <input type="text" class="w3-input w3-animate-input"  style="width: 50%;" placeholder="lieu de naissance" name="naissance" required>
            <br>
            <div class="input-field col s12">

                <select id="sexe"  class="w3-select "  style="width: 50%;" name="sexe" required>
                    <option value="" selected disabled></option>
                    <option value="feminin">Feminin</option>
                    <option value="Masculin">Masculin</option>
                </select>
                <label>sexe:</label>
            </div>
            <br>
            <div class="input-field col s12">

                <select id="etat" name="etat"  class=""  style="width: 50%;"required>
                    <option value="" selected disabled></option>
                    <option value="Marié">Marié(e)</option>
                    <option value="celibataire">celibataire</option>
                </select>
                <label>Etat matrimonial:</label>
            </div>
            <br>

            <div class="input-field col s12">
                <select id="langue"    style="width: 50%;"name="langue" required>
                    <option  value="" selected disabled></option>
                    <option value="anglais">Anglais</option>
                    <option value="francais">Francais</option>
                </select>
                <label>Premiere langue de travail:</label>
            </div>
            <br>
            <label for="adresse">Adresse:</label>
            <input type="text" placeholder="Adresse" name="adresse" class="w3-input w3-animate-input"   style="width: 50%;" required>
            <br>

            <label for="Telephone">Telephone:</label>
            <input type="text" placeholder="telephone"   class="w3-input w3-animate-input" style="width: 50%;" name="telephone" required>
            <br>
            <label for="mail">Email:</label>
            <input type="email" class="w3-input w3-animate-input"  style="width: 50%;"placeholder="Email" name="mail" required>
            <br>

            <button class="btn waves-effect waves-light teal right" type="submit" name="action">valider
                <i class="material-icons right">send</i>
            </button>
            <br> <br>
        </div>
    </div>

    <div id="filiation" class="container">
        <div class="formcontainer w3-container">
            <h3 class="teal-text text-lighten-2 w3-container">filiation et information d'urgence</h3>
            <hr>
            <div class="input-field col s12">

                <select id="nationalité" name="nationalité"  class="" style="width:50%;" required>
                    <option ></option>
                    <option value="algerie">algerie</option>
                    <option value="egypte">egypte</option>
                    <option value="Cameroun">Cameroun</option>
                    <option value="cote d'ivoire">cote d'ivoire</option>
                </select>
                <label>nationalité:</label>
            </div>
            <br>
            <div class="input-field col s12">

                <select id="region" name="region"   class="" style="width:50%;" required>
                    <option ></option>
                    <option value="etrangere">etrangere</option>
                    <option value="egypte">egypte</option>
                    <option value="Cameroun">Cameroun</option>
                    <option value="cote d'ivoire">cote d'ivoire</option>

                </select>
                <label>region d'origine:</label>
            </div>
            <br>
            <label for="pnom">Nom du pere:</label>
            <input type="text" class="w3-input w3-animate-input"  style="width: 50%;" placeholder="Entrer le nom de votre pere" name="pnom" >
            <br>
            <label for="fnom">Profession du pere :</label>
            <input type="text" class="w3-input w3-animate-input"  style="width: 50%;" placeholder="profession" name="profession" >
            <br>
            <label for="mnom">nom de la mere:</label>
            <input type="text"  class="w3-input w3-animate-input"  style="width: 50%;" placeholder="Entrer le nom de votre mere" name="mnom" >
            <br>
            <label for="fnom">profession de la mere:</label>
            <input type="text" class="w3-input w3-animate-input"  style="width: 50%;" placeholder="profession" name="profession" >
            <br>
            <label for="fnom">personne a contactée en cas d'urgence:</label>
            <input type="text" class="w3-input w3-animate-input"  style="width: 50%;"name="urgence" required>
            <br>
            <label for="fnom"><b>telephone de la personne:</b></label>
            <input type="text" class="w3-input w3-animate-input" style="width: 50%;" name="telurgence" required>
            <br>
            <label for="fnom"><b>ville de residence de la personne:</b></label>
            <input type="text" class="w3-input w3-animate-input" style="width: 50%;" name="villeurgence" required>
            <br>
            <button class="btn waves-effect waves-light teal right" type="submit" name="action">valider
                <i class="material-icons right">send</i>
            </button>
        </div>
    </div>

    <div id="facultes" class="container ">
        <div class="formcontainer w3-container">
            <h3 class="teal-text text-lighten-2 w3-container">facultes et domaines d'etudes</h3>
            <hr>
            <div class="input-field col s12">

                <select id="langue" name="langue"   class="" style="width:50%;" required>
                    <option ></option>
                    <option value="science">Facultes des sciences</option>
                    <option value="Lettres">Facultes des arts,Lettres et science humaines</option>
                    <option value="education">Facultes des sciences de l'education</option>
                </select>
                <label>facultes:</label>
            </div>
            <br>
            <div class="input-field col s12">

                <select id="domaines" name="domaines"   class="w3-select" style="width:50%;"required>
                    <option value="" selected disabled></option>
                    <option value="mathematiques">Mathematiques</option>
                    <option value="physiques">physiques</option>
                    <option value="informatiques">Informatiques</option>
                    <option value="geos">Geo-sciences</option>
                    <option value="Bios">bio-sciences</option>
                </select>
                <label>1er choix de domaines:</label>
            </div>
            <br>
            <div class="input-field col s12">

                <select id="domaines" name="domaines"  class="w3-select" style="width:50%;" required>
                    <option  value="" selected disabled></option>
                    <option value="mathematiques">Mathematiques</option>
                    <option value="physiques">physiques</option>
                    <option value="informatiques">Informatiques</option>
                    <option value="geos">Geo-sciences</option>
                    <option value="Bios">bio-sciences</option>
                </select>
                <label>2eme choix de domaines:</label>
            </div>
            <br>
            <div class="input-field col s12">

                <select id="domaines" name="domaines"  class="w3-select" style="width:50%;" required>
                    <option value="" selected disabled></option>
                    <option value="mathematiques">Mathematiques</option>
                    <option value="physiques">physiques</option>
                    <option value="informatiques">Informatiques</option>
                    <option value="geos">Geo-sciences</option>
                    <option value="Bios">bio-sciences</option>
                </select>
                <label>3eme choix de domaines:</label>
            </div>
            <br>
            <div class="input-field col s12">

                <select id="niveau" name="niveau"   class="w3-select" style="width:50%;" required>
                    <option ></option>
                    <option value="1">Licences 1</option>
                    <option value="2">Licences 2 </option>
                    <option value="2">Licences 3</option>
                    <option value="master-1">Master-1</option>
                    <option value="master-2">Master-2</option>
                    <option value="doctorat">Doctorat</option>

                </select>
                <label>niveau d'inscription d'etudes:</label>
            </div>
            <br><br>
            <button class="btn waves-effect waves-light teal right" type="submit" name="action">valider
                <i class="material-icons right">send</i>
            </button>
            <br> <br>
        </div>
    </div>

    <div id="diplome" class="container">
        <h3 class="teal-text text-lighten-2 w3-container">diplome presente</h3>
        <hr>
        <div class="input-field col s12">

            <select id="typeDiplome" name="typeDiplome" class=""  style="width: 50%;"required>
                <option value="" selected disabled></option>
                <option value="bacc">BacC</option>
                <option value="bad">BacD</option>
                <option value="baA">BacA</option>
                <option value="licence">licence</option>
                <option value="master-1">master-1</option>
                <option value="master-2">master-2</option>
            </select>
            <label>diplome presenté:</label>
        </div>
        <label for="annee">Anné d'obtention:</label>
        <input type="text" class="w3-input w3-animate-input"  style="width: 50%;" name="annee" >
        <br>
        <label for="registration">Registration/exam number:</label>
        <input type="text" class="w3-input w3-animate-input"  style="width: 50%;"  name="registration" >
        <br>
        <label for="jury">information sur le jury:</label>
        <input type="text" class="w3-input w3-animate-input"  style="width: 50%;"  name="jury" >
        <br>
        <label for="issuer">Matricuke dilplome:</label>
        <input type="text" class="w3-input w3-animate-input"  style="width: 50%;"  name="issuer" >

        <br>
        <label for="issuerDate">Date de delivrance:</label>
        <input type="text" class=" datepicker  w3-input w3-animate-input"  style="width: 50%;"  name="issuerDate" >

        <br>
        <label for="paper">nombrer de papier reussie</label>
        <input type="number" class="  w3-input " name="paper" >

        <br>
        <button class="btn waves-effect waves-light teal right" type="submit" name="action">valider
            <i class="material-icons right">send</i>
        </button>

        <br> <br>
    </div>

    <div id="autre" class="container">
        <div class="formcontainer w3-container">
            <h3 class="teal-text text-lighten-2 " > information de paiement</h3>
            <div class="input-field col s12">
                <select id="paiement" name="paiement"   class="" style="width:50%;" required>
                    <option > </option>
                    <option value="om">Orange money</option>
                    <option value="momo">Mobiles money</option>
                    <option value="uba">UBA</option>
                    <option value="eu">Express union</option>
                </select>
                <label>Branches de paiement:</label>
            </div>
            <br>

            <label for="transaction">N° de transaction:</label>
            <input type="text" class="w3-input w3-animate-input" style="width: 50%;" name="transaction" required>

            <hr>
            <h3 class="teal-text text-lighten-2  w3-container">informations diverses</h3>
            <br>
            <label >
                <input type="checkbox"  class="sport" value="oui">
                <span> pratique sport</span>

            </label>
            <br>
            <div class="input-field col s12">
                <i class="material-icons prefix">textsms</i>
                <label for="desciption">sport precis</label>

                <textarea id="desciption" name="desciption"  class="materialize-textarea" data-length="30" ></textarea>
            </div>
            <br>
            <label >

                <input type="checkbox" name="art" value="oui">
                <span>Arts pratiqué</span>
            </label>
            <br>
            <label >
                <input type="checkbox" name="assurence" value="oui">
                <span>Sohaitez-vous souscrire a une police d'assurence?</span>
            </label>

            <hr>
            <h3 class="teal-text text-lighten-2 w3-container">information sur votre etat de santé</h3>
            <br>
            <label >
                <input type="checkbox" name="infection" value="oui">
                <span> Avez-vous une infection chronique</span>

            </label>
            <br>
            <label >
                <input type="checkbox" name="maladie" value="oui">
                <span> une maladie hereditaire</span>

            </label>

            <br>
            <label >
                <input type="checkbox" name="handicap" value="oui" >
                <span> Avez-vous un handicap</span>

            </label>
            <br>
            <label>
                <input type="checkbox" name="vaccin"  value="oui">
                <span>Avez-vous ete vacciné</span>

            </label>
            <br>
            <hr>
            <label >
                <input type="checkbox" name="valide"  value="oui">
                <span> declare tous ces données vrai et correcte</span>

            </label>
            <br>
            <br>
            <button class="btn waves-effect waves-light teal right" type="submit" name="action">valider
                <i class="material-icons right">send</i>
            </button>
            <br> <br>
        </div>
    </div>
</form>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
        $('.tabs').tabs(
            {/*swipeable : true,*/

            }
        );
        $('select').formSelect();
        $('.datepicker').datepicker(
            {format : 'yyyy-mm-dd',
                yearRange : 60

            }
        );
        $(' textarea#desciption').characterCounter();
    });

</script>


</body>
</html>