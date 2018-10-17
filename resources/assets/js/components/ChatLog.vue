<template lang="html">
  <ul>
    <chat-message v-for="message in messages" :message="message" :user_id="user_id"></chat-message>
    <div class="empty" v-show="messages.length === 0">
      Nothing gere yet
    </div>
	</ul>
</template>

<script>
  export default {
    props: ['messages', 'user_id'],
    created(){
      $(".messages").animate({ scrollTop: $(document).height() }, "fast");
    }
  }
</script>

<style lang="css">
</style>
