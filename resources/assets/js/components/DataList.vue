<template lang="html"></template>
<script>
export default {
  props: ['user'],
  created(){
    this.$emit('user-on', {
      user: this.user,
    });
  }
}
</script>
