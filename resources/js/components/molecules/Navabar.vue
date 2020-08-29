<template>
  <nav class="bg-gray-600 shadow-md rounded mx-2">
    <div class="flex justify-between">
      <div class="flex mt-2">
        <span class="logo">
          <img src="../../assets/makassar.png" alt="makassar" />
        </span>
        <a class="links">
          <router-link :to="{name : 'home'}">Home</router-link>
        </a>
      </div>
      <div class="hidden sm:flex lg:flex avatar p-1 mr-2">
        <span
          class="text-gray-800 bg-white rounded-full h-12 w-12 flex items-center justify-center"
        >
          <img
            src="https://avatars2.githubusercontent.com/u/23658759?s=460&u=282d8a9ebcb3cb461a16574d233ef777d7f27b9d&v=4"
            alt
          />
        </span>
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
  @apply text-gray-400;
  @apply rounded;
  @apply p-2;
  @apply tracking-wide;
  @apply text-center;
}

.links:hover {
  @apply text-white;
  @apply bg-gray-500;
  @apply rounded;
  @apply mb-2;
  @apply shadow-md;
}

.logo {
  @apply mx-5;
  @apply mb-1;
}

.logo > img {
  @apply w-12;
  @apply h-12;
  @apply rounded-full;
  @apply -mt-1;
  @apply border-gray-300;
  @apply border-2;
  @apply border-solid;
}

.avatar > span > img {
  @apply rounded-full;
  @apply w-12;
  @apply h-12;
  @apply border-gray-100;
  @apply border-2;
  @apply border-solid;
  @apply shadow-md;
}
</style>