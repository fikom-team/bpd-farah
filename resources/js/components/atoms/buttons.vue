<template>
  <button
    class="buttons"
    @click.prevent="callback"
    v-text="name"
  />
</template>

<script>
export default {
  props: {
    name: {
      type: String,
      default: "Buttons",
    },
    callback: {
      type: Function,
    },
  },
};
</script>

<style lang="css">
.buttons {
  @apply bg-blue-400;
  @apply rounded;
  @apply px-4;
  @apply py-2;
  @apply w-64;
  @apply font-bold;
  @apply text-white;
}
.buttons:hover {
  @apply bg-gradient-to-r;
  @apply from-blue-800;
  @apply text-white;
}
.buttons:focus { 
  @apply outline-none;
}
</style>