<template>
  <div class="app">
    <div class="main">
      <Navbar />
      <router-view></router-view>
    </div>
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
