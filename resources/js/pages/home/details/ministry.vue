<template>
  <div class="detail">
    <div class="header-label">
      <span>Detail Sasaran Strategis</span>
    </div>
    <div class="flex mt-2">
      <Card :contents="ministry" />
    </div>
    <div class="detail-card">
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
  }),

  beforeMount() {
    this.getDetailMinistry();
  },
  methods: {
    getDetailMinistry() {
      const { id } = this.$route.params;
      Axios.get("/api/sp/" + id).then((res) => {
        this.ministry = res.data.data;
      });
    },
  },
};
</script>

<style lang="scss">
.detail-card {
  @apply mt-3;
}
</style>