<template>
  <div class="card">
    <div class="flex flex-col">
      <span class="header top">Sasaran Strategis</span>
      <span class="header content">{{contents.name}}</span>
      <span class="header footer">
        <div class="flex justify-between">
          <span class="footer-title">KODE : {{contents.kode}}</span>
          <div v-if="isDetail">
            <Button name="Lihat" :id="contents.id" />
          </div>
        </div>
      </span>
    </div>
  </div>
</template>

<script>
import Button from "../../components/atoms/buttons";
export default {
  name: "Card",
  components: {
    Button,
  },
  props: {
    contents: {
      type: Object,
    },
  },
  data: () => ({
    isDetail: false,
  }),

  beforeMount() {
    if (this.$route.name == "home") {
      this.isDetail = true;
    }
  },
};
</script>

<style scoped>
.header {
  @apply p-3;
}

.top {
  @apply font-bold;
  @apply text-white;
  @apply text-center;
  @apply text-xl;
  @apply tracking-wider;
}

.content {
  @apply bg-white;
  @apply mx-3;
  @apply rounded;
}

.card {
  @apply bg-gradient-to-r;
  @apply from-gray-600;
  @apply h-full;
  @apply shadow-md;
  @apply rounded-md;
  @apply transition-all;
  @apply duration-500;
  @apply ease-in-out;
}

.card:hover {
  @apply transform;
  @apply -translate-x-2;
  @apply scale-90;
}

.footer {
  @apply mx-2;
}

.footer .flex .footer-title {
  @apply text-gray-300;
  @apply font-bold;
}
</style>