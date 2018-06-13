<template>
    <div class="col-md-3">
      <div  id="sidebar">
        <div class="list-group list-group-item" data-parent="#sidebar">
           <div  style="margin-bottom : 20px;">
                <span class=""><h5>Product Category  &nbsp; &nbsp;  &nbsp; &nbsp;<i class="fa fa-arrow-circle-o-down"></i></h5></span> 
           </div>
                <div  id="menu1">
                    <div  v-for="category in categories">
<router-link class="list-group-item"  :to="`/product/category/${category.id}`">
				 <i class="fa fa-list"></i> &nbsp;
                <span class="hidden-sm-down">{{category.category}}</span> 
			</router-link>
                    </div>


                 <!--    <div class="collapse" id="menu1sub1">
                //     <a href="#" class="list-group-item" data-parent="#menu2sub1">Sub 1 a</a>
                //     <a href="#" class="list-group-item" data-parent="#menu2sub1">Sub 1 b</a>
                //     <a href="#" class="list-group-item" data-parent="#menu2sub1">Sub 1 c</a>
                // </div> 
              <a href="#" class="list-group-item" data-parent="#menu2">Sub 2</a>
                <a href="#" class="list-group-item" data-parent="#menu2">Sub 3</a>
                </div>
                <a href="#menu1sub1" class="list-group-item" data-toggle="collapse" aria-expanded="false">
                    Sub 1 <i class="fa fa-caret-down"></i>
                </a>
-->       
                
                
            </div>
            </div> 
        </div>
    </div>
</template>

<script>
import { get } from '../helpers/api'
export default {
  data() {
			return {
                categories: []
        }
  },
		created() {
			get('/api/category')
				.then((res) => {
					console.log(res);
                    this.categories = res.data.categories
                    console.log(this.categories)
				})
        },
          methods: {
             
          }
	}
</script>
<style>
a.list-group-item{
    color:  #fff !important;
    background-color: #003366 !important;
}
</style>
