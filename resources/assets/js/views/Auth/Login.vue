  <template>
    <div class="wrapper wrapper-full-page">

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
                                            <small class="error-control text-danger" v-if="error.email">{{error.email[0]}}</small>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" v-model="form.password" placeholder="Password" class="form-control">
                                            <small class="error-control text-danger" v-if="error.password">{{error.password[0]}}</small>
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
                isProcessing: false,
                authState: Auth.state
            }
        },
        created(){
            if(this.authState.api_token !== null){
                Flash.setError('You are signed in');
                this.$router.push('/');
            }
        },
        methods: {
            login() {
                this.isProcessing = true;
                this.error = {};
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
