var form = document.querySelector("form")
date1 = document.getElementById("Date").value;
date2 = document.getElementById("DateA").value;
form.onsubmit = function(e) {
    if (dateDiff(date1,date2)===false && !((date1==="")||(date2===""))){
        window.alert("Votre date de départ doit etre inferieur a la date de retour")
        document.getElementById("DateA").value="";
        e.preventDefault();
    }
    if (date1 === ""){
        window.alert("Vous n'avez pas renseigner votre date de départ ")
        e.preventDefault();
    }

    if (date2 ===""){
        window.alert("Vous n'avez pas renseigner votre date de retour ")
        e.preventDefault();
    }
}

function OnClickDivEntreprise() {
    window.location.href="gestion_flotte.html";

}

function OnClickDivLoc(){
    window.location.href="location.html"
}

function OnClickFacebook(){
    window.location.href="https://m.facebook.com/EMS-Location-101000738888860/posts"
}

function OnClickTwitter(){
    window.location.href=""
}

function OnClickInstagram(){
    window.location.href=""
}
function dateDiff(date1, date2){
    return date1<date2;
}

function onlyNumber()
{
    var champ=document.getElementById('Tel');
    while (champ.value.match(/[^0-9]/))
    {
        champ.value = champ.value.replace(/[^0-9]/,'');
    }
}
