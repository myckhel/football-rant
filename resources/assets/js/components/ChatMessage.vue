<template lang="html">
  <li :class="message.user.id === user_id ? 'sent' : 'replies' ">
    <img :src="'../Home_files/'+message.user.avatar" alt="" />
    <p>{{message.msg}}</p>
  </li>
</template>

<!-- {{message.user.name}} -->
<script>
  export default {
    props: ['message', 'user_id'],
  }
</script>

<style lang="css">

</style>
