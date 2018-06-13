<template>
<div>
    <!-- Page Content -->
    <div class="container-fluid">
        <div class="row">
            <sidebar></sidebar>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 portfolio-item" v-for="product in products">
                        <div class="card h-100">
                                <img class="card-img-top" :src="`/images/catalog/${product.image}`" v-if="product.image">   
                                <div class="card-body">
                                    <h4 class="card-text">
                                        {{product.name}}
                                    </h4>
                                    <hr>
                                    <div class="info">
                                        <div class="row">
                                            <div class="tag-price col-md-6">
                                                <h5>First</h5>
                                            </div>
                                            <div class="price col-md-6">
                                                <h5 class="price-text-color">
                                                    &#8358; {{product.price}}</h5>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="tag-price col-md-6">
                                                <h5>Monthly</h5>
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
                    <div class="modal fade modal modal-primary" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                                        <h3>{{viewMore.name}}</h3>
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
                                                                    <h5>Monthly Repaymentt</h5>
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
                                                        <h4>Product Specification</h4>
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
                                          <div class="col-md-6">
                                              <button  type="button" class="btn btn-link btn-simple" ><i class="fa fa-undo"></i> &nbsp;Update</button> |
                                               <button  type="button" class="btn btn-link btn-simple" > <i class="fa fa-trash"></i> &nbsp; Delete </button> |
                                            
                                             <button type="button" class="btn btn-link btn-simple" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp; Close </button>
                                        </div>
                                        <div class="col-md-6">
<div class="footer">
To buy this product, Kindly visite any Altara Credit Office closest to you, or 
Call Us : <a href="tel:08068492563"> 08068492563</a> for more enquiries
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
import { get } from '../../helpers/api'
import Sidebar from '../../components/Sidebar.vue'
export default {
    components: {
			Sidebar
		},
  data() {
			return {
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
        user_id: null
      },
			}
		},
		created() {
			get('/api/products')
				.then((res) => {
					console.log(res);
                    this.products = res.data.products
                    console.log(this.products)
				})
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
 .info
{
    padding: 5px;
    border-radius: 0 0 5px 5px;
    margin-top: 1px;
}

/* .info:hover {
  
} */
.content-right{
border-right: 1px solid #ccc;
}
.content-left{
    margin-left:10px
}


.card-body:hover{
      background-color: #E0F2FF;
}
.price
{
    /*width: 50%;*/
    margin-top: 3px;
}

.price h5
{
    margin: 0;
    font-size:13px;
}


.tag-price h5{
    margin: 0;
    font-size:14px;
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
}.footer{
    background-color: #003366;
    color:#fff;
    font-size:12px;
    padding:5px;

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
