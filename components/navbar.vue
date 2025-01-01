<template>
    <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-transparent">
        <div class="container">

            <a class="navbar-brand" href="./">
                <img src="assets/images/Erniverse_TextLogo.png" height="70px" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                    <!-- change mb-2 mb-lg-0 to float-end-->
                <ul class="navbar-nav ms-auto float-end ul-navbar">  
                    <li class="nav-item px-3 active">
                        <a class="nav-link" href="./">ERN 's world</a>
                    </li>
                    <li class="nav-item px-3" v-if="!auth.data">
                        <a class="nav-link" href="register.html" >Sign Up</a>
                    </li>
                    <li class="nav-item px-3" v-if="!auth.data">
                        <a class="nav-link" href="login.html">Log In</a>
                    </li>
                    
                    <li class="nav-item dropdown ml-auto text-right px-3" v-if="auth.data">
                        <a class="nav-link dropdown-toggle text-right" href="#" id="navbarDropdown" role="button" 
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="profile-img" width="40px" height="40px"  src="assets/images/uploads/Earn_Avatar.png" alt="Avatar">
                            <strong class="text-capitalize">ERN_Z.K</strong>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end text-capitalize rounded-lg mb-3">
                            <li>
                                <a class="dropdown-item" href="profile.html">
                                    <div class="d-flex align-items-center">
                                        <img class="profile-img" src="assets/images/uploads/Earn_Avatar.png" width="90px" height="90px" alt="avatar" > 
                                        <div class="p-3 lh-sm">
                                            <span class="font-weight-bold">Zupaksil Kusol</span>  <br>
                                            <small>Your Profile </small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="" @click="logout">
                                    <i class="fas fa-sign-out-alt"></i> Sign Out
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
        <div class="progressContainer">
            <div class="progressBar">
            </div>
        </div>
    </nav>

</template>
 
<script>
module.exports = {
    props: ['auth'],
    mounted() {
        window.addEventListener('scroll', function() {
            let wintop = this.scrollY
            let navbar = document.querySelector(".navbar")

            let winheight = this.innerHeight
            let docheight = document.querySelector("body").offsetHeight
            let totalScroll = ( wintop / (docheight - winheight) ) * 100
            console.log(totalScroll)
            let bar = document.querySelector(".progressBar")
            bar.style.width = `${totalScroll}%`
            
            if(wintop > 150) {
                navbar.classList.remove("navbar-dark", "bg-transparent")
                navbar.classList.add("navbar-light", "bg-light")
            } else {
                navbar.classList.remove("navbar-light", "bg-light")
                navbar.classList.add("navbar-dark", "bg-transparent")
            }
        })
    },
    methods: {
        logout() {
            localStorage.clear()
            location.assign('./')
        }
    }
}


//  Mounted() ในเหตุการณ์นี้ จะเกิดขึ้นเมื่อ DOM ถูกสร้างเสร็จแล้ว เราสามารถเข้าถึง Element ต่างๆใน DOM ได้ทั้งหมด
</script>
 
<style>
</style>