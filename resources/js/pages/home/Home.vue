<template>
  <div class="home">
    <div class="header-label">
      <span>Sasaran Strategis</span>
    </div>
    <Layout-Card>
      <Card-Grids v-for="content in contents" :key="content.id">
        <Card :contents="content" />
      </Card-Grids>
    </Layout-Card>
    <Loading />
  </div>
</template>

<script>
import Card from "../../components/molecules/Card";
import LayoutCard from "../../utils/Layout-card";
import CardGrids from "../../utils/Card-grids";
import Loading from "../../components/atoms/loading";
import Axios from "axios";

export default {
  name: "Home",
  components: {
    Card,
    LayoutCard,
    CardGrids,
    Loading,
  },
  data: () => ({
    contents: [
      {
        id: 1,
        header: "header 1",
        content: "content 1",
        footer: "footer 1",
      },
      {
        id: 2,
        header: "header 2",
        content: "content 2",
        footer: "footer 2",
      },
      {
        id: 3,
        header: "header 3",
        content: "content 3",
        footer: "footer 3",
      },
      {
        id: 4,
        header: "header 4",
        content: "content 4",
        footer: "footer 4",
      },
      {
        id: 5,
        header: "header 5",
        content: "content 5",
        footer: "footer 5",
      },
      {
        id: 6,
        header: "header 5",
        content: "content 5",
        footer: "footer 5",
      },
    ],
  }),
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

