<div class="row-fluid">

</div>
<div class="row-fluid">
    <div class="span3 z100">
        <div class="container">
            <div class="span12">
                <div class="container" id="toBeFixed-span12">
                    <div class="span3">

                        <div id="actionsEventsDiv" class="span12">
                            <a id="actionsA" href=""><div id="actionsTab" class="inline-elements"><span id="actionsText">Maak Actie</span></div></a>
                            <a id="EventA" href=""><div id="eventTab" class="inline-elements"><span id="eventText">Maak Evenement</span></div></a>
                        </div>

                        <span id="overzicht">Overzicht Events / Acties</span>

                        <div class="input-append">
                            <input type="text" id="appendedInputButton" placeholder="What is it you're looking for?" />
                            <button class="btn btn-search" type="button"><div id="searchIcon" data-icon="+" class="inline-elements"></div>&nbsp;Search</button>
                            </fieldset>
                        </div>

                        <hr class="admin-horizontal" />

                        <div class="span12">
                            <div id="arrowsFirst" class="span3 inline-elements">
                                <a href="#" class="inline-elements"><div id="arrowUpGreen" data-icon="k"></div></a>
                                <a href="#" class="inline-elements"><div id="arrowDownGreen" data-icon="i"></div></a>
                            </div>
                            <div id="arrowsSecond" class="span3 inline-elements">
                                <a href="#" class="inline-elements"><div id="arrowUpGreen" data-icon="k"></div></a>
                                <a href="#" class="inline-elements"><div id="arrowDownGreen" data-icon="i"></div></a>
                            </div>
                        </div>

                        <div class="ActionOrEvent span12">
                            <div id="AEmain" class="">
                                <div>
                                    <span class="inline-elements inline-elements-clear">Actie</span>
                                    <span class="inline-right-elements">juni 2013</span>
                                </div>
                                <div>
                                    <span class="inline-elements inline-elements-clear"><strong>Tweede biertje gratis</strong></span>
                                </div>
                            </div>
                        </div>
                        <div class="ActionOrEvent span12">
                            <div id="AEmain" class="">
                                <div >
                                    <span class="inline-elements inline-elements-clear">Evenement</span>
                                    <span class="inline-right-elements">29 juni</span>
                                </div>
                                <div>
                                    <span class="inline-elements inline-elements-clear"><strong>Queen tribute band</strong></span>
                                </div>
                            </div>
                        </div>
                        <div class="ActionOrEvent span12">
                            <div id="AEmain" class="">
                                <div >
                                    <span class="inline-elements inline-elements-clear">Actie</span>
                                    <span class="inline-right-elements">augustus 2013</span>
                                </div>
                                <div>
                                    <span class="inline-elements inline-elements-clear"><strong>Gratis wijn op vertoon van blaa</strong></span>
                                </div>
                            </div>
                        </div>
                        <div class="ActionOrEvent span12">
                            <div id="AEmain" class="">
                                <div >
                                    <span class="inline-elements inline-elements-clear">Evenement</span>
                                    <span class="inline-right-elements">1 augustus</span>
                                </div>
                                <div>
                                    <span class="inline-elements inline-elements-clear"><strong>Heatwave party</strong></span>
                                </div>
                            </div>
                        </div>
                        <div class="ActionOrEvent span12">
                            <div id="AEmain" class="">
                                <div >
                                    <span class="inline-elements inline-elements-clear">Evenement</span>
                                    <span class="inline-right-elements">5 augustus</span>
                                </div>
                                <div>
                                    <span class="inline-elements inline-elements-clear"><strong>The end of Summer party</strong></span>
                                </div>
                            </div>
                        </div>
                        <div class="ActionOrEvent span12">
                            <div id="AEmain" class="">
                                <div >
                                    <span class="inline-elements inline-elements-clear">Actie</span>
                                    <span class="inline-right-elements">september 2013</span>
                                </div>
                                <div>
                                    <span class="inline-elements inline-elements-clear"><strong>Voetbal actie</strong></span>
                                </div>
                            </div>
                        </div>
                        <div class="ActionOrEvent span12">
                            <div id="AEmain" class="">
                                <div >
                                    <span class="inline-elements inline-elements-clear">Evenement</span>
                                    <span class="inline-right-elements">31 oktober</span>
                                </div>
                                <div>
                                    <span class="inline-elements inline-elements-clear"><strong>Halloween!</strong></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="span9 z101" id="content">

        <div id='editonTop' class="inline-right-elements">
            <a id="trash-icon" href="#"><div id="fontastic-trash" data-icon="K"></div></a>
        </div>
        <h3>Events & Promotions</h3>
        <form id="frm-event" method="post" action='javascript:_addEvent();' name="event_form">
            <div class="crewMember span12">
                <div class="span9">
                    <table id='crewDescTable'>
                        <tbody>
                            <tr>
                                <td class='tableTopLeft tableTopLeftEP'>
                                    <span>Categorie:</span>
                                </td>
                                <td class="widthFull tableTopLeft">
                                    Evenement
                                </td>
                            </tr>
                            <tr>
                                <td class='tableTopLeft'><span>Naam:</span></td>
                                <td><input type="text" id="eventName" name="eventName" value="Tweede biertje gratis" class="widthFull"></td>
                            </tr>
                            <tr>
                                <td class='tableTopLeft'><span>Toelichting:</span></td>
                                <td><textarea id="eventDesc" name="eventDesc" rows="4" cols="50" class="widthFull">Op vertoon van deze code krijg je je tweede biertje gratis! Geldig op alle dagen tussen 18:00 en 20:00.</textarea></td>
                            </tr>
                            <tr>
                                <td class='tableTopLeft tableTopLeftEP'>
                                    <span>Begindatum:</span>
                                </td>
                                <td class="widthFull tableTopLeft">
                                    <input type="text" name="eventBeginDate" value="02/16/13" data-date-format="mm/dd/yy" id="eventBeginDate">
                                </td>
                            </tr>
                            <tr>
                                <td class='tableTopLeft tableTopLeftEP'>
                                    <span>Einddatum:</span>
                                </td>
                                <td class="widthFull tableTopLeft">
                                    <input type="text" name="eventEndDate" value="02/16/13" data-date-format="mm/dd/yy" id="eventEndDate">
                                </td>
                            </tr>
                            <tr>
                                <td class='tableTopLeft tableTopLeftEP'><span>Tijdstip start/stop:</span></td>
                                <td class="widthFull tableTopLeft">
                                    <div class="input-append bootstrap-timepicker pickerSize picker2 secondOpening inline-elements">
                                        <input id="eventStart" name="eventStart" type="text" class="input-smaller">
                                        <span class="add-on"><i class="icon-chevron-down"></i></span>
                                    </div>
                                    <span class="secondOpening inline-elements">tot</span>
                                    <div id="lastPicker" class="input-append bootstrap-timepicker picker2 pickerSize secondOpening inline-elements">
                                        <input id="eventStop" name="eventStop" type="text" class="input-smaller">
                                        <span class="add-on"><i class="icon-chevron-down"></i></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class='tableTopLeft tableTopLeftEP'><span>Herhaling:</span></td>
                                <td class="widthFull tableTopLeft">
                                    <span class="checkLabel"><input type = "radio" name = "eventRepeat" id = "eventRepeat1" value = "small" checked = "checked" /> Eenmalig</span>
                                    <span class="checkLabel"><input type = "radio" name = "eventRepeat" id = "eventRepeat2" value = "small" /> Dagelijks</span>
                                    <span class="checkLabel"><input type = "radio" name = "eventRepeat" id = "eventRepeat3" value = "small" /> Wekelijks</span>
                                    <span class="checkLabel"><input type = "radio" name = "eventRepeat" id = "eventRepeat4" value = "small" /> Maandelijks</span>
                                </td>
                            </tr>
                            <tr>
                                <td class='tableTopLeft'><span class="inline-elements">Overige links: <a id="overigeButton" class="questionModalEvents1" role="button" data-toggle="modal" href="#overigeModal"><img alt="" src="common/img/questionMArk2.png" /></a></span></td>
                                <td>
                                    <table id='crewDescTable'>
                                        <tbody>
                                            <tr>
                                                <td><span class="checkLabel"> Website</span></td>
                                                <td><input id="eventWebsite" name="eventWebsite" type="text" value="" class="widthFull"></td>
                                            </tr>
                                            <tr>
                                                <td><span class="checkLabel"> Facebook pagina</span></td>
                                                <td><input id="eventFacebookPage" name="eventFacebookPage" type="text" value="" class="widthFull"></td>
                                            </tr>
                                            <tr>
                                                <td><span class="checkLabel"> Flickr</span></td>
                                                <td><input id="eventFlickr" name="eventFlickr" type="text" value="" class="widthFull"></td>
                                            </tr>
                                            <tr>
                                                <td><span class="checkLabel"> Youtube</span></td>
                                                <td><input id="eventYouTube" name="eventYouTube" type="text" value="" class="widthFull"></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <br />

                    <div><span class="checkLabel"><input class="checkBox" id="EventConnectFriends" type="checkbox" /> Vink aan om eenmalig dit bericht naar de aangesloten fans te sturen <strong>(97)</strong></span></div>
                    <br />
                    <div><span class="checkLabel"><input class="checkBox vouchercheck" id="EventVoucher" type="checkbox" /> Voucher: stuur code mee <a id="overigeButton" class="questionModalEvents2" role="button" data-toggle="modal" href="#voucherModal"><img alt="" src="common/img/questionMArk2.png" /></a></span></div>

                </div>
                <div class="span3">

                    <div class="avatarImage"></div>
                    <span class="spanPictureText">Add or edit photo</span>
                </div>

            </div>
            <br /><br />
            <div class="row-fluid controls">
                <div class="span4"><a id="annuleren" href="">Annuleren</a></div>
                <div class="span4"><a id ="voorbeeld" href="">Voorbeeld bekijken</a></div>
                <div class="span4"><a id="opslaan" href="javascript:;" onclick="$('#frm-event').submit();">Wijzigingen opslaan</a></div>
            </div>
        </form>

    </div>
</div>

<!-- overigeModal -->
<div id="overigeModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="holidayModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Modal header</h3>
    </div>
    <div class="modal-body">
        <p>One fine body…</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button class="btn btn-primary">Save changes</button>
    </div>
</div>

<!-- voucherModal -->
<div id="voucherModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="holidayModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Modal header</h3>
    </div>
    <div class="modal-body">
        <p>One fine body…</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button class="btn btn-primary">Save changes</button>
    </div>
</div>

<script type="text/javascript">
                    $('#eventBeginDate').datepicker('place', 'bottom');
                    $('#eventEndDate').datepicker('place', 'bottom');

                    $('#eventStart').timepicker({
                        showMeridian: false
                    });
                    $('#eventStop').timepicker({
                        showMeridian: false
                    });
</script>
