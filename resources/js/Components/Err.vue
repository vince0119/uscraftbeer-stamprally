<template>
  <div v-if="haveTextError" class="error-msg" :class="{ 'have_error' : haveTextError || slotPassed() }" style="color: red;"><slot>{{ error }}</slot></div>
</template>
<script>
  export default {
    props: {
      msg: {
        type: [String, Array, Object],
      },
    },
    computed: {
      haveTextError: function () {
        if (typeof this.msg == 'object') {
          return !!this.msg.length;
        }
        return !!this.msg;
      },
      error: function () {
        if (typeof this.msg == 'object')
        {
          return this.msg[0];
        }
        return this.msg;
      },
    },
    methods: {
      slotPassed() {
        return !!this.$slots.default && !!this.$slots.default[0].text.length
      }
    }
  }
</script>
