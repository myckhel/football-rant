
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

//var requirejs = require('requirejs');
//
//requirejs.config({
//    //Pass the top-level main.js/index.js require
//    //function to requirejs so that node modules
//    //are loaded relative to the top-level JS file.
//    nodeRequire: require
//});
//
//requirejs(['bootstrap'],
//function   (bootstrap) {
//    //foo and bar are loaded according to requirejs
//    //config, but if not found, then node's require
//    //is used to load the module.
//});

require('bootstrap');

import Echo from 'laravel-echo'

window.Pusher = require('pusher-js');

window.Echo = new Echo({
    authEndpoint: "../broadcasting/auth",
    broadcaster: 'pusher',
    key: '43efe68dfe733ed427e9',
    cluster: 'eu',
    encrypted: true
});
//require(["http://localhost/football-rant/resources/assets/js/'bootstrap"], function () {
//    //foo is now loaded.
//});
import Vue from 'vue';

window.Vue = require('vue');
//window.Bus = new Vue();

import axios from 'axios'

Vue.use(axios)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('chat-message', require('./components/ChatMessage.vue').default);
Vue.component('chat-log', require('./components/ChatLog.vue').default);
Vue.component('chat-composer', require('./components/ChatComposer.vue').default);
Vue.component('group-list', require('./components/GroupList.vue').default);
Vue.component('data-list', require('./components/DataList.vue').default);

const app = new Vue({
    el: '#frame',
    data: {
      messages: [
      ],
      groups: [

      ],
      currentUser: {},
      UsersInRoom: [],
    },
    created(){
      axios.get('../group/messages?club=1&group=4').then(response => {
        this.messages = response.data;
      });
      axios.get('../group/list').then(response => {
        this.groups = response.data;
      });

      window.Echo.join('discussion')
        .here((users) => {
          this.UsersInRoom = users;
        })
        .joining((user) => {
          this.UsersInRoom.push(user);
        })
        .leaving((user) => {
          this.UsersInRoom = this.UsersInRoom.filter(u => u != user);
        })
        .listen('NewMessage', (e) => {
          //Handle Event
          this.messages.push({
            msg: e.msg,
            user: {
              avatar: e.avatar,
              id: e.user_id,
            },
          });
          $('.contact.active .preview').html('<span>' + e.user.name +':</span>' + e.message.msg);
          this.scrollDown();
        });
    },
    methods: {
      addMessage(message){
        //add to existing messages
        message.avatar = this.currentUser.user.avatar
        // this.messages.push(message);
        //add to the database
        axios.post('../group/message/save', message).then(status => {
          // console.log(status.status);
        });
      },
      userSave(user){
        this.currentUser = user;
      },
      scrollDown(){
        $(".messages").animate({ scrollTop: $(document).height() }, "fast");
      },
      toggleStatus(){
        $("#status-options ul li").click(function() {
        	$("#profile-img").removeClass();
        	$("#status-online").removeClass("active");
        	$("#status-away").removeClass("active");
        	$("#status-busy").removeClass("active");
        	$("#status-offline").removeClass("active");
        	$(this).addClass("active");

        	if($("#status-online").hasClass("active")) {
        		$("#profile-img").addClass("online");
        	} else if ($("#status-away").hasClass("active")) {
        		$("#profile-img").addClass("away");
        	} else if ($("#status-busy").hasClass("active")) {
        		$("#profile-img").addClass("busy");
        	} else if ($("#status-offline").hasClass("active")) {
        		$("#profile-img").addClass("offline");
        	} else {
        		$("#profile-img").removeClass();
        	};

        	$("#status-options").removeClass("active");
        });
      },
      toggleGroup(obj){
        $("#contacts ul li.contact").removeClass("active");
        $(obj).addClass("active");
      },
      toggleProfile(){
        $(".expand-button").click(function() {
          $("#profile").toggleClass("expanded");
        	$("#contacts").toggleClass("expanded");
        });
      },
      toggleProfileImg(){
        $("#profile-img").click(function() {
        	$("#status-options").toggleClass("active");
        });
      }
    },
});

$(".messages").animate({ scrollTop: $(document).height() }, "fast");

$("#profile-img").click(function() {
	$("#status-options").toggleClass("active");
});

$(".expand-button").click(function() {
  $("#profile").toggleClass("expanded");
	$("#contacts").toggleClass("expanded");
});


$("#status-options ul li").click(function() {
	$("#profile-img").removeClass();
	$("#status-online").removeClass("active");
	$("#status-away").removeClass("active");
	$("#status-busy").removeClass("active");
	$("#status-offline").removeClass("active");
	$(this).addClass("active");

	if($("#status-online").hasClass("active")) {
		$("#profile-img").addClass("online");
	} else if ($("#status-away").hasClass("active")) {
		$("#profile-img").addClass("away");
	} else if ($("#status-busy").hasClass("active")) {
		$("#profile-img").addClass("busy");
	} else if ($("#status-offline").hasClass("active")) {
		$("#profile-img").addClass("offline");
	} else {
		$("#profile-img").removeClass();
	};

	$("#status-options").removeClass("active");
});

// function newMessage() {
// 	message = $(".message-input input").val();
// 	if($.trim(message) == '') {
// 		return false;
// 	}
// 	$('<li class="sent"><img src="http://emilcarlsson.se/assets/mikeross.png" alt="" /><p>' + message + '</p></li>').appendTo($('.messages ul'));
// 	$('.message-input input').val(null);
// 	$('.contact.active .preview').html('<span>You: </span>' + message);
// 	$(".messages").animate({ scrollTop: $(document).height() }, "fast");
// };

// $('.submit').click(function() {
//   newMessage();
// });

// $(window).on('keydown', function(e) {
//   if (e.which == 13) {
//     newMessage();
//     return false;
//   }
// });
//# sourceURL=pen.js
