  <template>
    <div class="wrapper wrapper-full-page">
        <!-- Navbar -->
        <!-- <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
            <div class="container">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="www.altaracredit.com">Altara</a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            	<router-link to="/catalog"   class="nav-link">  
                                <i class="nc-icon nc-chart-pie-35"></i> Catalog
                                </router-link>
                        </li>
                        <li class="nav-item ">
                            <a href="www.altaracredit.com" class="nav-link">
                                <i class="nc-icon nc-badge"></i> Website
                            </a>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </nav> -->
        <!-- End Navbar -->
        <div class="full-page  section-image" data-color="black" data-image="../../assets/img/full-screen-image-2.jpg">
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            <div class="content">
                <div class="container">
                    <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                        <form @submit.prevent="login">
                            <div class="card card-login card-hidden">
                                <div class="card-header ">
                                    <h3 class="header text-center">Login</h3>
                                </div>
                                <div class="card-body ">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Email address</label>
                                            <input type="email" v-model="form.email" placeholder="Enter email" class="form-control">
                                            <small class="error-control" v-if="error.email">{{error.email[0]}}</small>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" v-model="form.password" placeholder="Password" class="form-control">
                                            <small class="error-control" v-if="error.password">{{error.password[0]}}</small>
                                        </div>
                                     
                                    </div>
                                </div>
                                <div class="card-footer ml-auto mr-auto">
                                    <button type="submit" :disabled="isProcessing" class="btn btn-primary btn-wd">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="footer">
            <div class="container">
                <nav class="fixed-bottom">
                   
                    <p class="copyright text-center">
                        ©
                        2018
                        <a href="http://www.altaracredit.com/">Altara</a>, Buy now, Pay small small
                    </p>
                </nav>
            </div>
        </div> -->
    </div>
</template>
<script type="text/javascript">
    import Flash from '../../helpers/flash'
    import Auth from '../../store/auth'
    import { post } from '../../helpers/api'
    export default {
        data() {
            return {
                form: {
                    email: '',
                    password: ''
                },
                error: {},
                isProcessing: false
            }
        },
        methods: {
            login() {
                this.isProcessing = true
                this.error = {}
                post('api/login', this.form)
                    .then((res) => {
                        if(res.data.authenticated) {
                            // set token
                            Auth.set(res.data.api_token, res.data.user_id)
                            Flash.setSuccess('You have successfully logged in.')
                            this.$router.push('/')
                        }
                        this.isProcessing = false
                    })
                    .catch((err) => {
                        if(err.response.status === 422) {
                            this.error = err.response.data
                        }
                        this.isProcessing = false
                    })
            }
        }
    }
</script>
