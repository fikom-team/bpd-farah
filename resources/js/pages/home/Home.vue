<template>
  <div class="home">
    <div class="header-label">
      <span>Sasaran Strategis</span>
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

    <Layout-Card>
      <Card-Grids v-for="content in strategisData" :key="content.id">
        <Card :contents="content" />
      </Card-Grids>
    </Layout-Card>
  </div>
</template>

<script>
import Card from "../../components/molecules/Card";
import LayoutCard from "../../utils/Layout-card";
import CardGrids from "../../utils/Card-grids";
import axios from "axios";

export default {
  name: "Home",
  components: {
    Card,
    LayoutCard,
    CardGrids,
  },
  data: () => ({
    strategisData: {},
    isLoading: false,
  }),

  beforeMount() {
    this.fetchStrategisData();
  },

  methods: {
    /**
     * Fetch Data Strategis Data
     * @author luck_nut
     */
    fetchStrategisData() {
      this.isLoading = true;
      const res = axios
        .get("/api/sp")
        .then((res) => {
          this.strategisData = res.data.data;
        })
        .finally(() => (this.isLoading = false));
    },
  },
};
</script>


<style scoped>
</style>

