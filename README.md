# Cours-PHP
## 00_exos
## 00_pages
## 01_intro
    ### 01_introduction.php
    ### infos.php
## 02_variables
    ### 01_variables.php
    ### 02_types.php
    ### 03_chaines.php
    ### 04_tableaux.php
## 03_conditions
    ### 01_conditions.php
    ### 02_boucles.php
## 04_get
    ### 01_method.get.php
    ### 02_method.get.php
## 05_post
    ### 01_method.post.php
## 06_pdo
    ### 01_pdo.php
## 07_cookies
    ### 01_cookies.php
## 08_session
    ### 01_session.php
    ### 02_session.php
    ### 03_session.php
## 09_sécurité
    ### 01_dialogue.php
    ### 02_employes.php
    ### 03_employes_suite.php
    ### 04_fiche_employe.php
## inc (inc = includ)
    ### functions.php
    ### tete.inc.php
    ### corps.inc.php
    ### nav.inc.php
    ### footer.inc.php

## 10_boutique

# lisez-moi.md

<!-- ## est équivalent au h1 -->
## Création de la BDD nomée "boutique"
    #### La BDD comporte 4 tables :
    commandes
    details_commande
    membres
    produits

## TABLE commandes
    id_commande
    id_membre
    montant
    date_enregistrement
    etat (enum : 'en cours de traitement', 'envoyé', 'livré)

## TABLE details_commande
    id_detail_commande
    id_commande
    id_produit
    quantite
    prix

## TABLE membres
    id_membre
    pseudo
    mdp
    nom
    prenom
    email
    civilite (enum, 'm', 'f')
    ville
    code_postal
    adresse
    statut // si on est admin ou client

## TABLE produits
    id_produit
    reference
    categorie
    description
    couleur
    taille
    public (enum, 'm', 'f', 'mixte')
    photo
    prix
    stock
