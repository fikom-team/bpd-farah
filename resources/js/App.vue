<template>
  <div class="main">
    <Navbar />
    <router-view></router-view>
  </div>
</template>

<script>
import Navbar from "./components/molecules/Navabar";
export default {
  components: {
    Navbar,
  },
};
</script>

<style lang="scss" scoped>
  .main {
    @apply px-12;
  }
</style>
