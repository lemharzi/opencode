function showHidden(id)
{
    if(document.getElementById(id).style.visibility=="hidden")
    {
        document.getElementById(id).style.visibility="visible";
        document.getElementById('button_'+id).innerHTML='Cacher la réponse';
    }
    else
    {
        document.getElementById(id).style.visibility="hidden";
        document.getElementById('button_'+id).innerHTML='Afficher la réponse';
    }
    return true;
}
