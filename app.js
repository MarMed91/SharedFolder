var $ = require('jquery');
require('./bootstrap');
window.Vue = require('vue');

function init() {

  token = $('meta[name="csrf-token"]').attr('content');
  window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token;

  Vue.component('post-card', {

    template: '#post-card',
    data: function() {
      return {

        update:false,
        deleted:false,
        liked:false // 1) mettiamo qui un liked, !)punti esenziali avere una variabile che possa cambiare
      }
    },
    props: {

      postId: String,
      title:String,
      author:String,
      categories:String,
      content:String,
      updated_at:String,
      likes:String
    },
    computed: {
      shortcontent: function() {

      },
      hearticon : function() {
        return x = this.liked ? "fas" : "far";
      },
      postLikes: function() {

        var tmpLikes = Number(this.likes) + (this.liked ? 1 : 0);

        return tmpLikes;
      }
    },
    methods: {
      setLiked() {

        this.liked = !this.liked;
      },
      destroy() {

        axios.delete("/post/destroy/" + this.postId)
              .then((response) =>{

                this.deleted = true;
                console.log(response.data);
              }).catch((error) => {
                console.log(error.response.data);
              });
      },
      update() {

        axios.update("/post/edit/" + this.postId)
              .then((response) =>{

                this.update = true;
                console.log(response.data);
              }).catch((error) => {
                console.log(error.response.data);
              });
      }
    }
  });
  new Vue({
    el:"#app"
  });
}

$(document).ready(init);
