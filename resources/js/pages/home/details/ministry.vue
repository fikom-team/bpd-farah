<template>
  <div class="detail">
    <div class="header-label">
      <span>Detail Sasaran Strategis</span>
    </div>
    <loader
      v-if="isLoading"
      object="#ff9633"
      color1="#ffffff"
      color2="#17fd3d"
      size="5"
      speed="2"
      bg="#343a40"
      objectbg="#999793"
      opacity="80"
      name="circular"
    ></loader>
    <div class="flex mt-2" v-if="!isLoading">
      <Card :contents="ministry" />
    </div>
    <div class="detail-card" v-if="!isLoading">
      <Card-Detail :kementrian="ministry.kementrian" />
    </div>
  </div>
</template>

<script>
import Card from "../../../components/molecules/Card";
import CardDetail from "../../../components/molecules/DetailCard";
import Axios from "axios";
export default {
  components: {
    Card,
    CardDetail,
  },

  data: () => ({
    ministry: {},
    isLoading: false,
  }),

  beforeMount() {
    this.getDetailMinistry();
  },
  methods: {
    getDetailMinistry() {
      const { id } = this.$route.params;
      this.isLoading = true;
      Axios.get("/api/sp/" + id)
        .then((res) => {
          this.ministry = res.data.data;
        })
        .finally(() => (this.isLoading = false));
    },
  },
};
</script>

<style lang="scss">

.detail-card {
  @apply mt-3;
}
</style>