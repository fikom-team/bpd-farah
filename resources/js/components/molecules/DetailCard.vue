<template>
  <div class="detail-card">
    <div class="header-label">
      <span>Level Kementrian</span>
    </div>
    <div class="px-2 my-2">
      <div class="flex flex-wrap -mx-2">
        <div class="w-full lg:w-1/3 px-2 my-1" v-for="data in kementrian" :key="data.id">
          <div class="card">
            <div class="flex justify-between">
              <span class="title">{{data.kode_iku}}</span>
              <span class="title target">{{data.target}}</span>
            </div>
            <div class="card-box p-1">
              <span class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, itaque at sed nam ipsum asperiores consectetur inventore deserunt veniam quo porro, fugiat unde numquam odio. Doloribus asperiores repudiandae eos aliquam!</span>
            </div>
          </div>
        </div>
      </div>
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
  mounted() {},
};
</script>

<style scoped>
.title {
  @apply text-white;
  @apply px-2;
  @apply uppercase;
  @apply font-bold;
  @apply mt-2
}

.target { 
  @apply bg-gray-500;
  @apply rounded-full;
}

.card-box {
  @apply mt-2;
  @apply mb-2;
  @apply mx-2;
  @apply bg-gray-400;
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
</style>