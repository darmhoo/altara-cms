<template>
<div class="container-fluid">
     <!-- Navbar -->
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <div class="logo navbar-brand">
                     <a href="http://www.altaracredit.com/" class="photo logo-mini">
                         <img src="/images/altara_logo.png" width="134" height= "50" alt="">
                    </a>
                </div>
                    <div  class="navbar-collapse justify-content-end">
                        <ul class="nav navbar-nav" v-if="catalog">
                            <form class="navbar-form navbar-search-form" role="search">
                                <div class="input-group">
                                    <input type="text" name="search" value="" class="form-control" placeholder="Search...">
                                </div>
                            </form>
                            
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item" v-if="catalog">
                                <a href="#" class="nav-link icon-link">
                                    <i class="fa fa-heart-o"></i>
                                </a>
                            </li>
                            <li class="nav-item" v-if="catalog">
                                <a href="#" class="nav-link icon-link">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
<div class="navbar navbar1">
			<div class="navbar__brand">
				Welcome to Altara Catalog
			</div>
			<ul   class="navbar__list">
				<li class="navbar__item" v-if="guest">
					<router-link class="bar-link" to="/login"><i class="fa fa-sign-out"> Login  </i> </router-link>
				</li>
				<li class="navbar__item">
					<router-link class="bar-link" to="/catalog"> <i class="fa fa-shopping-cart"> Catalog </i></router-link>
				</li>
        <li class="navbar__item"   v-if="auth">
					<router-link class="bar-link" to="/product/create"><i class="fa fa-plus"> Add Product</i>  </router-link>
				</li>
				<li class="navbar__item" v-if="auth">
					<a class="bar-link" @click.stop="logout"> <i class="fa fa-sign-out"> Logout </i> </a>
				</li>
			</ul>
		</div>
                                    <div class="alert alert-success" v-if="flash.success">
                                        <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                                            <i class="nc-icon nc-simple-remove"></i>
                                        </button>
                                        <span>
                                            <b> Success - </b> {{flash.success}}</span>
                                    </div>
                                    <div class="alert alert-danger" v-if="flash.error">
                                        <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                                            <i class="nc-icon nc-simple-remove"></i>
                                        </button>
                                        <span>
                                            <b> Danger - </b> {{flash.error}}</span>
                                    </div>
<router-view> </router-view> 
</div>
         
</template>
<script type="text/javascript">
import Auth from "./store/auth";
import Flash from "./helpers/flash";
import { post, interceptors } from "./helpers/api";
import Sidebar from "./components/Sidebar.vue";
export default {
  components: {
    Sidebar
  },
  data() {
    return {
      authState: Auth.state,
      flash: Flash.state
    };
  },
  created() {
    // global error http handler
    interceptors(err => {
      if (err.response.status === 401) {
        Auth.remove();
        this.$router.push("/login");
      }

      if (err.response.status === 500) {
        Flash.setError(err.response.statusText);
      }

      if (err.response.status === 404) {
        this.$router.push("/not-found");
      }
    });
    Auth.initialize();
  },
  data() {
    return {
      authState: Auth.state,
      flash: Flash.state
    };
  },
  computed: {
    auth() {
      if (this.authState.api_token) {
        return true;
      }
      return false;
    },
    guest() {
      return !this.auth;
    },
     catalog() {
      if (this.$route.meta.mode === "catalog") {
        return true;
      }
      return false;
    },
  },
  methods: {
    logout() {
      post("/api/logout").then(res => {
        if (res.data.done) {
          // remove token
          Auth.remove();
          Flash.setSuccess("You have successfully logged out.");
          this.$router.push("/login");
        }
      });
    }
  }
};
</script>
<style>
input[type=text][name=search] {
    width: 200px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 10px;
    font-size: 16px;
    background-color: white;
    background-image: url('/images/icons/search.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 8px 20px 8px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text][name=search]:focus {
    width: 100%;
}

a.bar-link{color:white;text-decoration:none;
background-color:transparent;
-webkit-text-decoration-skip:objects;
font-size: 15px}
a.bar-link:hover{color:white;
text-decoration:underline;cursor: pointer;
}

a.icon-link{color:#003366;
}

</style>
