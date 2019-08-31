<template>
  <input
    class="AppInput"
    :class="{ [`has-status-${status}`]: status }"
    @input="$emit('input', $event.target.value)">
</template>

<script>
export default {
  name: 'AppInput',
  props: {
    status: {
      type: String,
    },
  },
};
</script>

