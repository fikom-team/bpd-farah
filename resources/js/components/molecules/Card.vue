<template>
  <div class="card">
    <div class="flex flex-col">
      <span class="header top">{{contents.header}}</span>
      <span class="header content">{{contents.content}}</span>
      <span class="header footer">
        <div class="flex justify-between">
           <span class="footer-title">Footer</span>
          <Button name="Lihat" />
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

  data: () => ({}),
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
  @apply text-lg;
}

.content {
  @apply bg-white;
  @apply mx-3;
  @apply rounded;
}

.card {
  @apply bg-gray-500;
  @apply h-full;
  @apply shadow-md;
  @apply rounded;
}

.footer {
  @apply mx-2
}

.footer .flex .footer-title {
    @apply text-gray-300;
    @apply font-bold;
}
</style>