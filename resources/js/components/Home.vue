<template>
    <div class="container">
        <div class="media simple-post" v-for="post in  posts" :key="post.id">
          <img class="mr-3" :src="'/img/'+post.image" alt="Generic placeholder image">
          <div class="media-body">
            <h4 class="mt-0"><a href="'/post/'+post.slug">{{post.title}}</a></h4>
            {{post.body}}
            <ul class="list-inline list-unstyled d-flex post-info">
                  <li><span><i class="fa fa-user"></i> posted by : <strong class="text-primary">{{post.user_id}}</strong> </span></li>
                  <li>|</li>
                  <li><span><i class="fa fa-calendar"></i> {{post.added_at}}</span></li>
                  <li>|</li>
                  <span><i class="fa fa-comment"></i>{{post.comments_count}}</span>
                  
            </ul>
          </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                posts:[]
            }
        },
        methods:{
            getPosts(){
                axios.get('/api/posts')
                .then((data)=>{
                    this.posts = data.data;
                })
                .catch((err)=>{
                    console.log(err)
                })
            }
        },
        created() {
            console.log('Component mounted.')
            this.getPosts();
        }

    }
</script>
