<template>
  <div class="card">
    <div class="flex flex-col">
      <span class="header top">Level Kementrian</span>
      <span class="header content">
        <div class="mini-card">
          <div class="flex mb-4">
            <div class="w-1/3 bg-gray-400 h-full">
              <div class="flex px-2">
                <span>IKU-1</span>
              </div>
            </div>
          </div>
        </div>
      </span>
      <span class="header footer">
        <div class="flex justify-between">
          <span class="footer-title"></span>
        </div>
      </span>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    kementrian: {
      Type: Array,
    },
  },
  mounted() {
    console.log(this.kementrian);
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