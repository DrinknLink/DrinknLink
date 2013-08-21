<div id='editonTop' class="inline-right-elements">
    <a id="trash-icon" href="#"><div id="fontastic-trash" data-icon="K"></div></a>
</div>
<h3>History</h3>
<form id="frm-history" method="post" action='javascript:_addHistory();' name="history_form">
    <textarea name="textarea" rows="6" class='news-text' id="barHistory"><?php echo $generalInfo['BarHistory'] ?></textarea>

    <hr class="admin-horizontal admin-horizontal2" />
    <br />
    <p class="inline-elements">Foto:</p>
    <a href="" class="pictureLink"><p class="inline-right-elements fotoText">Foto verwijderen</p></a><br /><br />
    <div id='image-corner'>
        <img src='common/img/barpic.jpg' alt="" class="inline-right-elements fotoText" />
    </div>
    <hr class="admin-horizontal admin-horizontal2" />
    <!--<a href="" class="pictureLink"><p class="inline-elements">Nog een foto toevoegen</p></a>-->
    <br />
    <div class="row-fluid controls">
        <div class="span4"><a id="annuleren" href="">Annuleren</a></div>
        <div class="span4"><a id ="voorbeeld" href="">Voorbeeld bekijken</a></div>
        <div class="span4"><a id="opslaan" href="javascript:;" onclick="$('#frm-history').submit();">Wijzigingen opslaan</a></div>
    </div>
</form>

