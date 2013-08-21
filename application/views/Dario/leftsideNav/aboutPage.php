<div id='editonTop' class="inline-right-elements">
    <a id="trash-icon" href="#"><div id="fontastic-trash" data-icon="K"></div></a>
</div>
<h3>About the bar</h3>
<form id="frm-about" method="post" action='javascript:_addAbout();' name="about_form">
    <textarea name="textarea" rows="6" class='news-text' id="aboutBar" ><?php echo $generalInfo['BarAbout'] ?></textarea>

    <div class="row-fluid controls">
        <div class="span4"><a id="annuleren" href="">Annuleren</a></div>
        <div class="span4"><a id ="voorbeeld" href="">Voorbeeld bekijken</a></div>
        <div class="span4"><a id="opslaan" href="javascript:;" onclick="$('#frm-about').submit();">Wijzigingen opslaan</a></div>
    </div>
</form>