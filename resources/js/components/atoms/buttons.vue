<template>
  <button
    class="bg-blue-400 hover:bg-blue-700 text-white font-bold w-64 py-2 px-4 rounded"
    @click.prevent="callback"
    v-text="name"
  />
</template>

<script>
export default {
  props: {
    name: {
      type: String,
      default: "Buttons",
    },
    callback: {
      type: Function,
      required: true,
    },
  },
};
</script>