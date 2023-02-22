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


function verif(){
    let date1 = document.getElementById("Date").value;
    let date2 = document.getElementById("DateA").value;
    //faire la difference entre date1 et la date du jour
    if (dateDiff(date1,date2)===false){
        if(date1===""|| date2===""){
            window.alert("La date de départ ou d'arriver n'est pas remplis")
            return false;
        }
        else if(date1 <= date2) {
            window.alert("Votre date de départ doit etre inferieur a la date de retour")
            document.getElementById("DateA").value = "";
            return false;
        }
    }
    else{
        return true;
    }
}



