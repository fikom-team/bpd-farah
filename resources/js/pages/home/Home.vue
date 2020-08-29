<template>
  <div class="home">
    <Layout-Card>
      <Card-Grids v-for="content in contents" :key="content.id">
        <Card :contents="content" />
      </Card-Grids>
    </Layout-Card>
  </div>
</template>

<script>
import Card from "../../components/molecules/Card";
import LayoutCard from "../../utils/Layout-card";
import CardGrids from "../../utils/Card-grids";
export default {
  name: "Home",
  components: {
    Card,
    LayoutCard,
    CardGrids,
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
    ],
  }),
  methods: {},
  mounted() {},
};
</script>


