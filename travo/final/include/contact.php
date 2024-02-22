<section class="formulaire">
    <div class="warpper">
        <form method="POST" action="#">
            <h1>Conctatez-nous</h1>
            <h4>
                Veuillez remplir ce formulaire pour prendre contact avec Ecefram
            </h4>
            <div class="input-text oui">
                <input type="text" placeholder="Votre Nom" name="name" required />
                <input type="number" placeholder="Votre Téléphone" name="tel" required />
            </div>
            <div class="input-text">
                <input type="text" placeholder="Email" name="mail" required />
            </div>
            <div class="input-text">
                <input type="text" placeholder="Objet" name="subject" required />
            </div>
            <div class="area">
                <textarea name="" id="" cols="30" rows="10" placeholder="Votre Meessage" name="msg" required></textarea>
            </div>
            <div class="adherant">
                <label><input type="checkbox" /></label>
                <p>Voulez-vous devenir adhérent à ECEFRAM ?</p>
            </div>
            <div class="contact-text">
                <p>
                    Ce formulaire permet simplement de nous envoyer votre
                    commentaire par le biais d'un mail. Ainsi nous vous
                    réponderons dans les plus bref délais par mail ou par SMS.
                </p>
                <p>
                    Si vous ne souhaitez pas devenir adhérent à ECEFRAM, aucune
                    donnée personnelle ne sera enregistrée.
                </p>
            </div>
            <div class="choix">
                <button type="submit" class="btn-submit">Envoyez</button>
                <!-- <a href="index.html" class="btn-retour">Retour</a> -->
            </div>
        </form>
    </div>
</section>