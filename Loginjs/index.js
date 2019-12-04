    function CalculAge() { 
    var erreur;
    var today = new Date();
    var dtn=document.getElementById('age').value; // on lit la date de naissance
    var an=dtn.substr(6,4); // l'année (les quatre premiers caractères de la chaîne à partir de 6)
    var mois=dtn.substr(3,2);// On selectionne le mois de la date de naissance
    var day= dtn.substr(0,2); // On selectionne la jour de la date de naissance

    var dateNaissance = new Date(an + "/" + mois + "/" + day);

    var age = today.getFullYear() - dateNaissance.getFullYear();
    var m = today.getMonth() - dateNaissance.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < dateNaissance.getDate())) {
        age = age - 1;
    }
    document.getElementById('Age').value = age; // que l'on place dans le input d'id Age

}

         //Quand j'appuis sur submit de mon formulaire "myForm" une fenêtre apparait
        //e.preventDefault empeche le comportement par defaut du formulaire
        document.getElementById("myForm").addEventListener("submit", function(e) {
        e.preventDefault();

            //On crée des variables pour chaque id des inputs, une varibale erreur lorsque les conditions ne sont pas respectées
        var erreur;
            // Cette variable sert dans le cas où on a plusieurs formulaires : var inputs = this;
        var pseudo = document.getElementById("pseudo");
        var lastName = document.getElementById("lastName");
        var firstName = document.getElementById("firstName");
        var age = document.getElementById("age");
        var email = document.getElementById("email");
        var pwd1 = document.getElementById("pwd1");
        var pwd2 = document.getElementById("pwd2");
        var sex = document.getElementById("sex");


        //   les pseudos  "dieu" , "root" et "admin" sont déjà utilisés 
        if (pseudo.value == "dieu" || pseudo.value == "root" || pseudo.value == "admin"){

            erreur = "Ce pseudo est déjà utilisé";
            pseudo.className = "incorrect";  
        }
        else{
            pseudo.className = "correct";
        }

        // On indique que certains emails sont déjà utilisés
        if (email.value == "dieu@paca.happy-dev.fr" || email.value == "root@paca.happy-dev.fr" || email.value == "admin@paca.happy-dev.fr"){

            erreur = "Cette adresse mail est déjà utilisée";
            email.className = "incorrect";  
        }
        else
        {
             email.className = "correct";
        }
            
        // Si le mot de passe et sa confirmation sont différents une erreur est envoyée
        if (pwd1.value != pwd2.value)
        {
            erreur = "Les mots de passes doivent être identiques";
            pwd1.className = "incorrect";
            pwd2.className = "incorrect";
        } 
        else
        {
            pwd1.className = "correct";
            pwd2.className = "correct";
        }    
        // Si le mot de passe et sa confirmation font moins de 6 caractères une erreur est envoyée
        if (pwd1.value.length < 6 || pwd2.value.length < 6)
        {
            erreur = "Veuillez renseigner un mot de passe avec au moins 6caractères";
            pwd1.className = "incorrect";
            pwd2.className = "incorrect";
        }
        else 
        {
            pwd1.className = "correct";
        }

        // Si l'email est vide une erreur est envoyée
        if (!email.value)
        {
            erreur = "Veuillez renseigner un email";
            email.className = "incorrect";
        }
        //Si la date de naissance n'est pas renseignée une erreur est envoyée
        if (!age.value || age.value.length != 10 )
        {
            erreur = "Veuillez renseigner une date de naissance valide au format JJ/MM/AAAA";
            document.getElementById('Age').value = "ERREUR";
            age.className = "incorrect";
        }
        else
        {
            age.className = "correct";
        }
        if (Age.value>= 18)
        {
            age.className = "correct";
        }
        else
        {
            erreur = "Vous êtes mineur";
            age.className = "incorrect";
        }
        if (Age.value< 0)
        {
            erreur = "Vous êtes pas nés";
            age.className = "incorrect";
        }
        //Si le prenom est vide une erreur est envoyée
        if (!firstName.value)
        {
            erreur = "Veuillez renseigner un prénom";
            firstName.className = "incorrect";
        }
        else
        {
            firstName.className = "correct";
        }
        //Si le nom est vide une erreur est envoyée
        if (!lastName.value)
        {
            erreur = "Veuillez renseigner un nom";
            lastName.className = 'incorrect';
        }
        else
        {
            lastName.className = "correct";
        }
        // si le pseud est vide et qu'il fait moins de 4 caractères une erreur est envoyée
        if (!pseudo.value || pseudo.value.length < 4)
        {
            erreur = "Veuillez renseigner un pseudo avec au moins 4caractères";
            pseudo.className = 'incorrect';
        }
        // Si une erreur est detectée un message d'eereur est envoyée
        if (erreur) 
        {
            e.preventDefault();
            document.getElementById("erreur").innerHTML = erreur;
            return false;
        }
        // Si toutes les conditions sont réunis le formulaire est envoyé 
        else 
        {
            alert("Formulaire envoyé");
            window.location = "index1.html"; 
        }



    });


