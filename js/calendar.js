function CalculAge() {  
    var today = new Date();
    var dtn=document.getElementById('DateNais').value; // on lit la date de naissance
    var an=dtn.substr(6,4); // l'année (les quatre premiers caractères de la chaîne à partir de 6)
    var mois=dtn.substr(3,2);// On selectionne le mois de la date de naissance
    var day= dtn.substr(0,2); // On selectionne la jour de la date de naissance

    var dateNaissance = new Date(an + "-" + mois + "-" + day);

    var age = today.getFullYear() - dateNaissance.getFullYear();
    var m = today.getMonth() - dateNaissance.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < dateNaissance.getDate())) {
        age = age - 1;
    }
  
    document.getElementById('Age').value = age; // que l'on place dans le input d'id Age
}