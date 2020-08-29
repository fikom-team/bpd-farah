<template>
  <button class="buttons" @click.prevent="goTodetails" v-text="name" />
</template>

<script>
export default {
  props: {
    name: {
      type: String,
      default: "Buttons",
    },
    id: {
      type: Number,
    },
  },

  data() {
    return {};
  },
  methods: {
    goTodetails() {
      this.$router.push({ name : 'Detail'  , params : {id : this.id} });
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
  @apply w-40;
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