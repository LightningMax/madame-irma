# Madame Irma – Prédiction de votre avenir

Un projet PHP simple intégrant Stripe pour le paiement et Mailtrap pour l'envoi d'emails.

---

## Pré-requis

Avant de lancer le projet, assurez-vous d'avoir les éléments suivants :

- Un compte [Mailtrap](https://mailtrap.io/) pour le service SMTP
- Un compte [Stripe](https://dashboard.stripe.com/register)
- Une **clé API Stripe**
- Un **produit créé** sur votre tableau de bord Stripe
- Un **lien de paiement** (Payment Link)

---

## Configuration du lien de paiement

> **Important !**  
> Le lien de paiement Stripe pour votre produit **doit rediriger vers :**
> http://localhost:8000/successful.php?session_id={CHECKOUT_SESSION_ID}

Pour cela :

1. Dans Stripe, allez dans **Produits > Lien de paiement > Modifier**.
2. Ajoutez une URL de redirection après le paiement réussi :
   http://localhost:8000/successful.php?session_id={CHECKOUT_SESSION_ID}

# Installation

1. Clonez ce dépôt :

```bash
git clone https://github.com/votre-utilisateur/madame-irma.git
cd madame-irma
```

2. Installez les dépendances avec Composer :

```bash
composer install
```

Modifier le fichier .env:

- STRIPE_KEY=...
- PRODUCT_LINK=...
- SMTP_USER=...
- SMTP_PASSWORD=...
- SMTP_HOST=sandbox.smtp.mailtrap.io
- SMTP_PORT=2525

## Lancement du projet

Lancez le serveur PHP local :

php -S 127.0.0.1:8000
