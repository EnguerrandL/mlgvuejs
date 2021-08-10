<?php

$adresseUrl = $_POST['adresseurl'];
$formeJuridique = $_POST['formejuridique'];
$nomEntreprise = $_POST['nomentreprise'];
$siegeSocial = $_POST['adressesiege'];
$codePostal = $_POST['cp'];
$ville = $_POST['ville'];
$capitalSocial = $_POST['capitalsocial'];
$contacthost = $_POST['contacthost'];

// $webMasterNom = $_POST['webmastenom'];
// $webMasterMail = $_POST['webmastermail'];
// $responsableNom = $_POST['responsablenom'];
// $responsableMail = $_POST['responsablemail'];

// $representantEntreprise = $_POST['representantlegaleentreprise'];
$villeTribunalCompetent = $_POST['villetribunal'];

$nomHebergeur = $_POST['nomhost'];
$adresseHebergeur = $_POST['adressehost'];
$cpHebergeur = $_POST['cphost'];
$villeHebergeur = $_POST['villehost'];
$contactHebergeur = $_POST['contacthost'];

// Conditionnel

$siret = $_POST['siret'];
$rm = $_POST['rm'];
$tva = $_POST['tva'];
$photos = $_POST['photos'];
$responsableRed = $_POST['resRed'];
$delegueDonne = $_POST['deleDonne'];


$wdesignnom = $_POST['wdesignnom'];
$devnom = $_POST['devnom'];


$directeurpubnom = $_POST['directeurpubnom'];
$directeurpubmail = $_POST['directeurpubmail'];
// $responsableredacnom = $_POST['responsableredacnom'];

?> 



<?php require('header.php');  ?>


 <div style="margin-top:6rem;" class=" col-8 mx-auto">



 <?php if (isset($_POST['check1'])) {

// Checkbox is selected
echo " <div class='alert alert-success mx-auto text-center'> L'utilisateur souhaite avoir le paragraphe sur les données personneles</div>";
} else {

echo "<div class='alert alert-danger mx-auto text-center'> L'utilisateur ne souhaite pas avoir le paragraphe sur les données personneles</div>";
}

?>



 <small>Ce générateur de mentions légales est fourni par l'agence <a target="_blank" href="#"> NetMedia </a></small>
<br>

 
<h2>Définitions</h2>




                <p><b>Client&nbsp;:</b>&nbsp;tout professionnel ou personne physique capable au sens des articles 1123 et suivants du Code civil, ou personne morale, qui visite le site objet des présentes conditions générales.<br>
              

                <p><b>Contenu&nbsp;:</b>&nbsp;Ensemble des éléments constituants l’information présente sur le Site, notamment textes – images – vidéos.</p>

                <p><b>Informations clients&nbsp;:</b> Ci après dénommé «&nbsp;Information (s)&nbsp;» qui correspondent à l’ensemble des données personnelles susceptibles d’être détenues par <a href="<?php echo  $_POST['nomentreprise'] ?>"></a> pour la gestion de votre compte, de la gestion de la relation client et à des fins d’analyses et de statistiques.</p>


                <p><b>Utilisateur :</b> Internaute se connectant, utilisant le site susnommé.</p>
                <p><b>Informations personnelles :</b> « Les informations qui permettent, sous quelque forme que ce soit, directement ou non, l'identification des personnes physiques auxquelles elles s'appliquent » (article 4 de la loi n° 78-17 du 6 janvier 1978).</p>
                <p>Les termes «&nbsp;données à caractère personnel&nbsp;», «&nbsp;personne concernée&nbsp;», «&nbsp;sous traitant&nbsp;» et «&nbsp;données sensibles&nbsp;» ont le sens défini par le Règlement Général sur la Protection des Données (RGPD&nbsp;: n° 2016-679)</p>

                <h2>1. Présentation du site internet.</h2>
                <p>En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site internet&nbsp;<a href="<?php echo  $_POST['adresseurl'] ?>"><?php echo  $_POST['adresseurl'] ?></a>&nbsp;l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi:
                </p><p><strong>Propriétaire</strong> :  <?php echo  $_POST['nomentreprise'] ?> –  <?php echo  $_POST['adressesiege'] ?> <?php echo  $_POST['cp'] ?> <?php echo  $_POST['ville'] ?><br>


                <strong>Téléphone</strong> :  <?php echo  $_POST['contacthost'] ?> <br>
                <strong>Email</strong> :  <?php echo  $_POST['directeurpubmail'] ?>  <br>
                <strong>Forme juridique</strong> :  <?php echo  $_POST['formejuridique'] ?><br>


             



          <?php  if ( !empty($_POST['siret']) ){
            echo '<strong>Siret : </strong>';
            echo $siret; 
            echo '<br>';
         };
          ?>

          <?php  if ( !empty($_POST['rm']) ){
            echo '<strong>RM : </strong>';
            echo $rm; 
            echo '<br>';
         };
          ?>

          <?php  if ( !empty($_POST['tva']) ){
            echo '<strong>Numéro de TVA : </strong>';
            echo $tva; 
            echo '<br>';
         };
          ?>


                <strong>Directeur de la publication </strong> :  <?php echo  $_POST['directeurpubnom'] ?> <br>

                <?php  if ( !empty($_POST['responsableredacnom']) ){
            echo '<strong>Responsable de rédaction : </strong>';
            echo $responsableredacnom; 
            echo '<br>';
         };
          ?>
                   <?php  if ( !empty($_POST['delegueDonne']) ){
            echo '<strong>Délégué à la protection des données : </strong>';
            echo $delegueDonne; 
            echo '<br>';
         };
          ?>

     


                   <h5>CREDITS</h5> 

                <strong> Web design </strong> :  <a href="<?php echo  $_POST['wdesignsite'] ?>"><?php echo  $_POST['wdesignnom'] ?></a> <br>
                <strong> Développement  </strong> :  <a href="<?php echo  $_POST['devsite'] ?>"><?php echo  $_POST['devnom'] ?></a> <br>
             

                <?php  if ( !empty($_POST['photos']) ){
            echo '<strong>photos : </strong>';
            echo $photos; 
            echo '<br>';
         };
          ?>
             
                              
               
                <strong>Hébergement </strong> : <?php echo  $_POST['resRed'] ?> – <a href="<?php echo  $_POST['sitehost'] ?>"><?php echo  $_POST['nomhost'] ?></a> <?php echo  $_POST['adressehost'] ?> <?php echo  $_POST['cphost'] ?> <?php echo  $_POST['villehost'] ?> <?php echo  $_POST['contacthost'] ?> <br>


  



        
               
           
               
             
                </p>


                <h2>2. Conditions générales d’utilisation du site et des services proposés.</h2>

                <p>Le Site constitue une œuvre de l’esprit protégée par les dispositions du Code de la Propriété Intellectuelle et des Réglementations Internationales applicables. 
                Le Client ne peut en aucune manière réutiliser, céder ou exploiter pour son propre compte tout ou partie des éléments ou travaux du Site.</p>

                <p>L’utilisation du site&nbsp;<a href="<?php echo  $_POST['adresseurl'] ?>"><?php echo  $_POST['adresseurl'] ?></a>&nbsp;implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site&nbsp;<a href="<?php echo  $_POST['adresseurl'] ?>"><?php echo  $_POST['adresseurl'] ?></a>&nbsp;sont donc invités à les consulter de manière régulière.</p>

                <p>Ce site internet est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut être toutefois décidée par <a href="<?php echo  $_POST['nomentreprise'] ?>"></a>, qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.
                 De la même façon, les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer le plus souvent possible afin d’en prendre connaissance.</p>

                <h2>3. Description des services fournis.</h2>

                <p>Le site internet&nbsp;<a href="<?php echo  $_POST['adresseurl'] ?>"><?php echo  $_POST['adresseurl'] ?></a>&nbsp;a pour objet de fournir une information concernant l’ensemble des activités de la société.
                <a href="<?php echo  $_POST['nomentreprise'] ?>"><?php echo  $_POST['adresseurl'] ?></a> s’efforce de fournir sur le site&nbsp;<a href="<?php echo  $_POST['adresseurl'] ?>"><?php echo  $_POST['adresseurl'] ?></a>&nbsp;des informations aussi précises que possible. Toutefois, il ne pourra être tenu responsable des oublis, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.</p>

                <p>Toutes les informations indiquées sur le site&nbsp;<a href="<?php echo  $_POST['adresseurl'] ?>"><?php echo  $_POST['adresseurl'] ?></a>&nbsp;sont données à titre indicatif, et sont susceptibles d’évoluer. Par ailleurs, les renseignements figurant sur le site&nbsp;<a href="<?php echo  $_POST['adresseurl'] ?>"><?php echo  $_POST['adresseurl'] ?></a>&nbsp;ne sont pas exhaustifs. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne.</p>

                <h2>4. Limitations contractuelles sur les données techniques.</h2>

                <p>Le site utilise la technologie JavaScript.

                Le site Internet ne pourra être tenu responsable de dommages matériels liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour.
                Le site <a href="<?php echo  $_POST['adresseurl'] ?>"><?php echo  $_POST['adresseurl'] ?></a> est hébergé chez un prestataire sur le territoire de l’Union Européenne conformément aux dispositions du Règlement Général sur la Protection des Données (RGPD&nbsp;: n° 2016-679)</p>

                <p>L’objectif est d’apporter une prestation qui assure le meilleur taux d’accessibilité. L’hébergeur assure la continuité de son service 24 Heures sur 24, tous les jours de l’année. Il se réserve néanmoins la possibilité d’interrompre le service d’hébergement pour les durées les plus courtes possibles notamment à des fins de maintenance, d’amélioration de ses infrastructures, de défaillance de ses infrastructures ou si les Prestations et Services génèrent un trafic réputé anormal.</p>

                <p><a href="<?php echo  $_POST['nomentreprise'] ?>"></a> et l’hébergeur ne pourront être tenus responsables en cas de dysfonctionnement du réseau Internet, des lignes téléphoniques ou du matériel informatique et de téléphonie lié notamment à l’encombrement du réseau empêchant l’accès au serveur.</p>

                <h2>5. Propriété intellectuelle et contrefaçons.</h2>

                <p><a href="<?php echo  $_POST['nomentreprise'] ?>"></a> est propriétaire des droits de propriété intellectuelle et détient les droits d’usage sur tous les éléments accessibles sur le site internet, notamment les textes, images, graphismes, logos, vidéos, icônes et sons.
                Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de : <a href="<?php echo  $_POST['nomentreprise'] ?>"></a>.</p>

                <p>Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>

                <h2>6. Limitations de responsabilité.</h2>

                <p><a href="<?php echo  $_POST['nomentreprise'] ?>"></a> agit en tant qu’éditeur du site. <a href="<?php echo  $_POST['adresseurl'] ?>"><?php echo  $_POST['adresseurl'] ?></a> &nbsp;est responsable de la qualité et de la véracité du Contenu qu’il publie. </p>

                <p><a href="<?php echo  $_POST['nomentreprise'] ?>"></a> ne pourra être tenu responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site internet <a href="<?php echo  $_POST['adresseurl'] ?>"><?php echo  $_POST['adresseurl'] ?></a>, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point 4, soit de l’apparition d’un bug ou d’une incompatibilité.</p>

                <p><a href="<?php echo  $_POST['adresseurl'] ?>"><?php echo  $_POST['adresseurl'] ?></a> ne pourra également être tenu responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une chance) consécutifs à l’utilisation du site&nbsp;<a href="<?php echo  $_POST['adresseurl'] ?>"><?php echo  $_POST['adresseurl'] ?></a>.
                Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs. <a href="<?php echo  $_POST['nomentreprise'] ?>"></a> se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données. Le cas échéant, <a href="<?php echo  $_POST['nomentreprise'] ?>"></a> se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie …).</p>

             
               
             

                </p><h2>7. Droit applicable et attribution de juridiction.</h2>  
                 <p>
                Tout litige en relation avec l’utilisation du site&nbsp;<a href="<?php echo  $_POST['adresseurl'] ?>"><?php echo  $_POST['adresseurl'] ?></a>&nbsp;est soumis au droit français. 
                En dehors des cas où la loi ne le permet pas, il est fait attribution exclusive de juridiction aux tribunaux compétents de <?php echo  $_POST['villetribunal'] ?></p>


                </div>
</body>
</html>
                <?php require('footer.php'); ?>



