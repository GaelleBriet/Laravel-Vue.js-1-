<script setup>
const checkboxes = [
  { name: 'Mise en place du projet', id: 'mise-en-place' },
  { name: 'Homepage', id: 'homepage' },
  { name: 'Blog', id: 'blog' },
  { name: "Offres d'emplois", id: 'offres-demplois' },
  { name: 'Évènements', id: 'evnements' },
  { name: 'Module météo', id: 'module-meteo' },
  { name: "Galerie d'images", id: 'galerie-dimages' },
  { name: 'Page de contact', id: 'page-de-contact' },
  { name: 'Inscription/Connexion des utilisateurs', id: 'inscription-connexion-des-utilisateurs' },
  { name: 'Paiement en ligne', id: 'paiement-en-ligne' },
  { name: 'Espace utilisateur', id: 'espace-utilisateur' },
  { name: 'Formulaire de contact', id: 'formulaire-de-contact' },
  { name: 'Chat en direct', id: 'chat-en-direct' },
  { name: 'Gestion des commentaires', id: 'gestion-des-commentaires' },
  { name: 'Système de recherche', id: 'systme-de-recherche' },
  { name: 'Intégration des médias sociaux', id: 'intgration-des-medias-sociaux' },
  { name: 'Système de notifications', id: 'systme-de-notifications' },
  { name: 'Système de messagerie interne', id: 'systme-de-messagerie-interne' },
  { name: 'Suivi des performances (analytiques)', id: 'suivi-des-performances' },
  { name: "Gestion des droits d'accès (rôles et autorisations)", id: 'gestion-des-droits-dacces' }
]
</script>
<template>
  <div class="input-group">
    <span class="main-label">Développement génériques</span>

    <template v-for="checkbox in checkboxes" :key="checkbox.id">
      <div class="checkbox-group">
        <input type="checkbox" :id="checkbox.id" :name="checkbox.name" :value="checkbox.name" />
        <label :for="checkbox.id"> {{ checkbox.name }} </label>
      </div>
    </template>
  </div>
</template>
