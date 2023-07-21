<script setup></script>

<template>
  <header class="main-header">
    <span class="site-name">Estimato'r</span>
    <nav class="main-nav">
      <ul>
        <li>
          <routerLink to="/" class="nav-link">Calculato'r</routerLink>
        </li>
        <li>
          <routerLink to="/estimate" class="nav-link"> Dernières estimations</routerLink>
        </li>
      </ul>
    </nav>
  </header>
</template>

<style scoped lang="scss">
li {
  list-style-type: none;
  .nav-link {
    color: white;
    text-decoration: none;
    font-weight: bold;
    padding: 0 20px;
  }
  .nav-link:hover {
    color: var(--color-secondary);
  }
}
</style>
