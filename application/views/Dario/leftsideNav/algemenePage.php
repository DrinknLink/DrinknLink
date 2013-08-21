<h3>Algemene gegevens</h3>
<p class="colorRed">* Verplicht invullen</p>
<form id="frm-general" method="post" action='javascript:_addGeneral();' name="general_form">
    <span><span class="colorRed">*</span> Naam café</span>
    <input class="inline-right-elements algemeneInput" type="text" name="naamCafe" id="naamCafe" value="<?php echo $generalInfo['BarName'] ?>"><br /><br />
    <span><span class="colorRed">*</span> Adres</span>
    <input class="inline-right-elements algemeneInput" type="text" name="adres" id="adres" value="<?php echo $generalInfo['BarAddress'] ?>"><br /><br />
    <span><span class="colorRed">*</span> Postcode</span>
    <input class="inline-right-elements algemeneInput" type="text" name="postcode" id="postcode" value="<?php echo $generalInfo['BarPostcode'] ?>"><br /><br />
    <span><span class="colorRed">*</span> Plaats</span>
    <input class="inline-right-elements algemeneInput" type="text" name="plaats" id="plaats" value="<?php echo $generalInfo['BarTown'] ?>"><br /><br />
    <span><span class="colorRed">*</span> Telefoon</span>
    <input class="inline-right-elements algemeneInput" type="text" name="telefoon" id="telefoon" value="<?php echo $generalInfo['BarTelefon'] ?>"><br /><br />
    <span>Email</span>
    <input class="inline-right-elements algemeneInput" type="text" name="email" id="email" value="<?php echo $generalInfo['BarEmail'] ?>"><br /><br />
    <span>Website</span>
    <input class="inline-right-elements algemeneInput" type="text" name="website" id="website" value="<?php echo $generalInfo['BarWebsite'] ?>">

    <div class="row-fluid controls">
        <div class="span4"><a id="annuleren" href="">Annuleren</a></div>
        <div class="span4"><a id ="voorbeeld" href="">Voorbeeld bekijken</a></div>
        <div class="span4"><a id="opslaan" href="javascript:;" onclick="$('#frm-general').submit();">Wijzigingen opslaan</a></div>
    </div>
</form>

<script src="common/js/general.js"></script>