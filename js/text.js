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

function ControleDate(){
    var form = document.querySelector('form')
    date1 = document.getElementById("Date").value;
    date2 = document.getElementById("DateA").value;
    if (dateDiff(date1,date2)){
        window.alert("c'est bon")
    }
    else{
        window.alert("Votre date de retour doit etre inferieur a la date d'arriver")
        document.getElementById("DateA").value="";
    }

}
