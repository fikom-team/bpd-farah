<template>
  <div class="home">
    <div class="header-label">
      <span>Sasaran Strategis</span>
    </div>
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
      const res = axios.get("/api/sp").then((res) => {
        this.strategisData = res.data.data;
      });
    },
  },
};
</script>


<style scoped>
.header-label {
  @apply bg-gradient-to-r;
  @apply from-gray-500;
  @apply font-bold;
  @apply mx-2;
  @apply w-56;
  @apply mt-12;
  @apply p-2;
  @apply rounded-tl-lg;
  @apply tracking-wider;
  @apply text-white;
}
</style>

