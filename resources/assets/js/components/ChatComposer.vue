<template lang="html">
  <div class="wrap">
		<input type="text" placeholder="Write your message..." v-model="messageText" @keyup.enter="sendMessage" />
		<i class="fa fa-paperclip attachment" aria-hidden="true"></i>
		<button class="submit" @click="sendMessage" ><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
	</div>
</template>


<script>
    export default {
      props: ['user'],
      data() {
        return {
          messageText: ''
        }
      },
      methods: {
        sendMessage (){
          this.$emit('messagesent', {
            msg: this.messageText,
            user: {
              avatar: this.user.avatar,
              id: this.user.id,
            },
          });
          this.messageText = '';
        }
      }
    }
</script>

<style lang="css">

</style>
