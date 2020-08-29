<template>
  <nav class="bg-gray-600 shadow-md rounded mx-2">
    <div class="flex justify-between">
      <div class="flex mt-2">
        <span class="logo">Logo</span>
        <a class="links">
          <router-link :to="{name : 'home'}">Home</router-link>
        </a>
        <span class="links">
          <router-link :to="{name : 'login'}">Login</router-link>
        </span>
      </div>
      <div class="hidden sm:flex lg:flex avatar p-1 mr-2">
        <span
          class="text-gray-800 bg-white rounded-full h-12 w-12 flex items-center justify-center"
        ></span>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  data: () => ({}),

  methods: {},
};
</script>

<style lang="css">
.links {
  @apply cursor-pointer;
  @apply font-bold;
  @apply text-white;
  @apply rounded;
  @apply p-2;
  @apply tracking-wide;
  @apply text-center;
}

.links:hover {
  @apply text-gray-400;
  @apply bg-gray-500;
  @apply rounded;
  @apply mb-2;
}

.logo {
  @apply mx-5;
  @apply mt-2;
}
</style>