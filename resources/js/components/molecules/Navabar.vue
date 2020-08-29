<template>
  <nav class="bg-gray-600 shadow-md rounded">
    <div class="flex">
      <div class="logo mr-4 px-5 py-3">
        <span class>Logo</span>
      </div>
      <div class="flex">
        <a class="links">
          <router-link to="/">Home</router-link>
        </a>
        <a class="links">
          <router-link to="/login">Login</router-link>
        </a>
      </div>
    </div>
  </nav>
</template>

<script>
export default {};
</script>

<style lang="css">
.links {
  @apply cursor-pointer;
  @apply font-bold;
  @apply text-white;
  @apply rounded;
  @apply px-2;
  @apply py-3;
  @apply tracking-wide;
}

.links:hover {
  @apply text-gray-400;
  @apply bg-gray-500;
  @apply rounded;
}
</style>