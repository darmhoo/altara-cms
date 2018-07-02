<template>
<div>
    <!-- Page Content -->
       <spinner v-if="products.length === 0"></spinner>
    <div v-if="products.length > 0" class="container-fluid">
        <div class="row">
            <div class="col-md-3">
      <div  id="sidebar">
        <div  class="list-group-item">
                <i class="fa fa-arrow-circle-o-left"> &nbsp; &nbsp;</i>

                <span class=""> <a @click="$router.back()">  Back to Catalog Home</a></span>
        </div>
      </div>
            </div>
            <!-- <sidebar></sidebar> -->
            <div class="col-md-9">
                <div class="row" v-if="products.length < 1">
  <h5>
      Product not available in the Catalog
  </h5>
</div>
                <div class="row" v-else>
                    <div class="col-lg-4 col-sm-6 portfolio-item" v-for="product in products">
                        <div class="card h-100">
                                <img class="card-img-top" :src="`/images/catalog/${product.image}`" v-if="product.image">
                                <div class="card-body">
                                    <h4 class="card-text">
                                        {{product.name}}  <span style=" float:right;font-size:12px;color:#777777"> {{product.brand}}</span>
                                    </h4>
                                    <hr>
                                    <div class="info">
                                        <div class="row">
                                            <div class="tag-price col-md-6">
                                                <h5>First Installment</h5>
                                            </div>
                                            <div class="price col-md-6">
                                                <h5 class="price-text-color">
                                                    &#8358; {{product.price}}</h5>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="tag-price col-md-6">
                                                <h5>Bi-Weekly</h5>
                                            </div>
                                            <div class="price col-md-6">
                                                <h5 class="price-text-color">
                                                   &#8358; {{product.rprice}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                     <div class="row">
                                         <div class="col-md-12 text-center">
<button @click="showMore(product)" data-toggle="modal" class="btn btn-small btn-primary" data-target="#myModal1">More details</button>
                                         </div>
                                    </div>


                                </div>

                        </div>
                    </div>
                    <!-- Mini Modal -->
                    <div class="modal fade modal modal-primary" id="myModal1" ref="vuemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header justify-content-center">
                                    <div class="modal-profile">
                                        <i class="nc-icon nc-bulb-63"></i>
                                    </div>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                            <!-- Project One -->
                                            <div class="row">
                                                <div class="col-md-5 content-right">
                                                       <img class="img-fluid rounded mb-3 mb-md-0" :src="`/images/catalog/${viewMore.image}`" v-if="viewMore.image">


                                                </div>
                                                <div class="col-md-6 content-left">
                                                    <div class="row">
                                                        <h3>{{viewMore.name}}  <span style=" float:right;font-size:16px;color:#777777"> {{viewMore.brand}}</span> </h3></h3>
                                                    </div>
<hr>
                                                    <div class="row">
                                                        <div class="info col-md-12">
                                                            <div class="row">
                                                                <div class="view-more-tag-price col-md-6">
                                                                    <h5>First Installment</h5>
                                                                </div>
                                                                <div class="view-more-price col-md-6">
                                                                    <h5 class="price-text-color">
                                                                       &#8358; {{viewMore.price}}</h5>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="view-more-tag-price col-md-6">
                                                                    <h5>Bi-Weekly Repayment</h5>
                                                                </div>
                                                                <div class="view-more-price col-md-6">
                                                                    <h5 class="price-text-color">
                                                                         &#8358; {{viewMore.rprice}}</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <h4>Product Specification</h4> <br>
                                                        <p>{{viewMore.features}}</p>
                                                    </div>
                                                    <hr>


                                            </div>
                                            <!-- /.row -->
                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="row">
                                           <div class="col-md-4" v-if=" authState.user_id">
                                              <router-link :to="`/product/${viewMore.id}/edit`" data-dismiss="modal" class="btn btn-link btn-simple">
                                              <i class="fa fa-undo"></i> &nbsp;Update
						                        </router-link>|
                                               <button  type="button" class="btn btn-link btn-simple" data-dismiss="modal" @click="remove" :disabled="isRemoving"><i class="fa fa-trash"></i> &nbsp; Delete </button> |
                                        </div>
                                        <div class="col-md-2">
                                            <button type="button" class="btn btn-link btn-simple" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp; Close </button>
                                        </div>
                                        <div class="col-md-6">
<div class="footer">
To buy this product, Kindly visit any Altara Credit Office closest to you, or
Call Us : <a href="tel:08150479425" style="text-decoration:none"> 08150479425</a> for more enquiries
                                                    </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  End Modal -->
                </div>

            </div>
        </div>
        <hr>
    </div>
    <!-- /.container -->
</div>
</template>

<script>
import Spinner from '../../components/Spinner.vue'
import Auth from '../../store/auth'
import { get, del } from '../../helpers/api'
import Sidebar from '../../components/Sidebar.vue'
export default {
    components: {
			Sidebar,
            Spinner
		},
  data() {
			return {
                authState: Auth.state,
                isRemoving: false,
                route:this.$route.params.id,
                products: [],
                viewMore: {
        brand_id: null,
        category_id: null,
        created_at: null,
        features: null,
        id: null,
        image: null,
        name: null,
        price: null,
        rprice: null,
        updated_at: null,
        user_id: null,
        brand:null
      },
			}
		},

	created() {
			get(`/api/products/${this.$route.params.id}`)
					.then((res) => {
                    let p = res.data.products;
                    let b = res.data.brands;
                    p.forEach((element) =>b.forEach((element2)=>{
                    if (element.brand_id === element2.id){
                        element.brand=element2.brand;
                    }
                    }));
                    this.products = p;
                    console.log(this.products);
				})
		},
watch:{
route(){
get(`/api/products/${this.$route.params.id}`)
					.then((res) => {
                    this.products = res.data.products
				})
}
},
          methods: {
              showMore(productData) {
                    this.viewMore.brand_id = productData.brand_id;
                    this.viewMore.category_id = productData.category_id;
                    this.viewMore.created_at = productData.created_at;
                    this.viewMore.features = productData.features;
                    this.viewMore.id = productData.id;
                    this.viewMore.image = productData.image;
                    this.viewMore.name = productData.name;
                    this.viewMore.price = productData.price;
                    this.viewMore.rprice = productData.rprice;
                    this.viewMore.updated_at = productData.updated_at;
                    this.viewMore.user_id = productData.user_id;
                    this.viewMore.brand = productData.brand;
    },
       remove() {
				this.isRemoving = false
				del(`/api/products/${this.$route.params.id}`)
					.then((res) => {
						if(res.data.deleted) {
							Flash.setSuccess('You have successfully deleted Product!')
							this.$router.push('/')
						}
					})
			}
          }
	}
</script>
<style>
.card-text{
    font-weight: 800;
    font-size: 13px;
    line-height: 17px;
}
.card-text h4{
text-transform: capitalize;
}
 .info
{
    padding: 5px;
    border-radius: 0 0 5px 5px;
    margin-top: 1px;
}

/* .info:hover {

} */

.card-body:hover{
      background-color: #E0F2FF;
}
.price
{
    /*width: 50%;*/
    float: left;
    margin-top: 3px;
}

.price h5
{
    margin: 0;
    font-size:13px;
}


.tag-price h5{
    margin: 0;
    font-size:12px;
    font-weight:normal
}

.view-more-price h5
{
    margin: 0;
    font-size:20px;
    font-weight: 900
}


.view-more-tag-price h5{
    margin: 0;
    font-size:15px;
    font-weight: bold;
}



.price-text-color
{
    color: #003366;
}

 .info .rating
{
    color: #777;
}

 .rating
{
    /*width: 50%;*/
    float: left;
    font-size: 17px;
    text-align: right;
    line-height: 52px;
    margin-bottom: 10px;
    height: 52px;
}

 .separator
{
    border-top: 1px solid #E1E1E1;
}

.clear-left
{
    clear: left;
}

.separator p
{
    line-height: 20px;
    margin-bottom: 0;
    margin-top: 10px;
    text-align: center;
}

 .separator p i
{
    margin-right: 5px;
}
 .btn-add
{
    width: 50%;
    float: left;
}

 .btn-add
{
    border-right: 1px solid #E1E1E1;
}

 .btn-details
{
    width: 50%;
    float: left;
    padding-left: 10px;
}
.modal-lg{
    max-width:80%;
}


</style>
