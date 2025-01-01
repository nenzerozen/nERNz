<template>
    <section class="col-12 col-md-6 col-lg-4">
        <div class="card card-wrapper image-overlay">
            <div class="card-image">
                <a :href="`blog-detail.html?id=${blog.blog_id}&url=${blog.blog_url}`">
                    <img v-bind:src="blog.image" class="card-img-top" alt="">
                </a>
            </div>
            <div class="card-body">
                <div class="mb-1">
                    <div class="star-rating">
                        <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                        
                        <div class="star-current" style="width: 100%">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h3 class="fw-bold">{{blog.subject}}</h3>
            </div>
            <div>
                <i class="fas fa-portrait"></i> 
                <i v-if="blog.blog_id !== 9" class="fab fa-itunes-note"></i>
            </div>
            <div class="card-body d-flex flex-column">
                <a :href="`blog-detail.html?id=${blog.blog_id}&url=${blog.blog_url}`" class="btn btn-primary form-control fw-bold ms-auto">
                    OPEN <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </section>
</template>
 
<script>
module.exports = {
    props: ['blog']
}
</script>
 
<style scoped>

</style>