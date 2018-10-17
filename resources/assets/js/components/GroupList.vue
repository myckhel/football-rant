<template lang="html">
  <li class="contact" @click="toggleGroup($event)">
    <div class="wrap">
      <img :src="'../images/team/logo/'+group.badge" alt="" />
      <div class="meta">
        <p class="name">{{group.name}}</p>
        <p class="preview">You just got LITT up, Mike.</p>
      </div>
    </div>
  </li>
</template>

<script>
  export default {
    props: ['group'],
    methods: {
      toggleGroup(event){
        // this.$emit('tgroup', obj);
        $("#contacts ul li.contact").removeClass("active");
        $(event.currentTarget).addClass("active");
      }
    }
  }
</script>
