<template>
    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <h1 class="my-4">Page Heading
            <small>Secondary Text</small>
            </h1>
            <div class="container">
                <div class="media simple-post" v-for="post in  posts" :key="post.id">
                <img class="mr-3" :src="'/img/'+post.image" alt="Generic placeholder image">
                    <div class="media-body">
                        <h4><router-link :to="'/posts/'+post.slug">{{post.title}}</router-link></h4>
                        {{post.body}}
                        <ul class="list-inline list-unstyled d-flex post-info">
                            <li><span><i class="fa fa-user"></i> posted by : <strong class="text-primary">{{post.user.name}}</strong> </span></li>
                            <li>|</li>
                            <li><span><i class="fa fa-calendar"></i> {{post.added_at}}</span></li>
                            <li>|</li>
                            <span><i class="fa fa-comment"></i>{{post.comments_count}}</span>
                            
                        </ul>
                    </div>
                </div>
                <nav aria-label="...">
                <ul class="pagination float-right">
                    <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active">
                    <span class="page-link">
                        2
                        <span class="sr-only">(current)</span>
                    </span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
                </nav>
            </div>
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">
            <!-- Search Widget -->
            <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
                <div class="input-group">
                <input type="text" class="form-control"  placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Go!</button>
                </span>
                </div>
            </div>
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
        created(){
            this.getPosts();

        },
        methods:{
            getPosts(){
                  axios.get('/api/category/'+this.$route.params.slug+'/posts')
                  .then(res=>{
                      console.log(res);
                    this.posts = res.data;
                  })
                  .catch()
            }
        },
       

    }
</script>
