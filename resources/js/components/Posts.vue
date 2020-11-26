<template>
    <div class="row">
        <!-- Blog Entries Column -->
        <div v-if="issearching" class="col-md-8">
            <h2>Is Searching ....</h2>
            </div>
        <div v-else class="col-md-8">
            <h1 class="my-4">Page Heading
            <small>Secondary Text</small>
            </h1>
            <div class="container">
                <div class="media simple-post" v-for="post in  posts.data" :key="post.id">
                <img class="mr-3" :src="'/img/'+post.image" alt="Generic placeholder image">
                    <div class="media-body">
                        <h4><router-link :to="'/posts/'+post.slug">{{post.title}}</router-link></h4>
                        {{post.body}}
                        <ul class="list-inline list-unstyled d-flex post-info">
                            <li><span><i class="fa fa-user"></i> posted by : <strong class="text-primary" v-if="post.user">{{post.user.name}}</strong> </span></li>
                            <li>|</li>
                            <li><span><i class="fa fa-calendar"></i> {{post.added_at}}</span></li>
                            <li>|</li>
                            <span><i class="fa fa-comment"></i>{{post.comments_count}}</span>
                            
                        </ul>
                    </div>
                </div>
                <pagination :data="posts" @pagination-change-page="getPosts"></pagination>

            </div>
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">
            <!-- Search Widget -->
            <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
                <div class="input-group">
                <input type="text" class="form-control" v-model="searchpost" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Go!</button>
                </span>
                </div>
            </div>
            </div>

            <!-- Categories Widget -->
            <categories></categories>

        
        </div>
    </div>
</template>

<script>
import categories from './Categories.vue';
    export default {
        data(){
            return{
                posts:{},
                searchpost:'',
                issearching : false,
            }
        },
        components:{
            categories
        },
        watch:{
            searchpost(query){
                if(query.length>0){
                    axios.get('/api/searchposts/'+query)
                    .then(res=>{
                    this.issearching = true;
                    setTimeout(()=>{ this.posts = res.data; this.issearching = false;}, 2000);

                        
                    })
                    .catch(err=>{
                        console.log(err);
                    })
                    }
               
            }
        },
        mounted(){
            this.getPosts();

        },
        methods:{
            Hello(){
                console.log('Hello')
            },
            getPosts(page){
                  axios.get('api/posts?page=' + page)
                  .then(res=>{
                      this.posts = res.data
                  })
                  .catch(err=>{
                      console.log(err);
                  })
            }
        },
       

    }
</script>
