<template>
  <div class="login">
    <div class="flex justify-around">
      <div class="form mt-20">
        <Form>
          <h2 class="font-bold text-gray-400 text-xl text-center mb-3">Silakan Login</h2>
          <InputField label="username" v-model="form.username" />
          <InputField label="password" v-model="form.password" />
          <div class="text-center mt-20">
            <Button name="Login" :callback="login" />
          </div>
        </Form>
      </div>
    </div>
  </div>
</template>

<script>
import Form from "../../components/molecules/Form";
import InputField from "../../components/atoms/InputField";
import Button from "../../components/atoms/buttons";
export default {
  name: "Home",
  components: {
    Form,
    InputField,
    Button,
  },
  data: () => ({
    form: {
      username: "",
      password: "",
    },
  }),

  mounted() { 
    console.log('component mounted');
  },

  methods: {
    login() {
      alert('ini berhasil')
    },
  },
};
</script>