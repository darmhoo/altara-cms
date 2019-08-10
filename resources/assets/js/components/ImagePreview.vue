<template>
	<div class="image__preview" v-if="image">
		<img :src="image" width="350" height="200">
		<button class="btn btn-danger image-close" @click="close">
			&times;
		</button>
	</div>
</template>
<script type="text/javascript">
	export default {
		props: {
			preview: {
			    type: [String, File],
			    default: null
			}
		},
		data() {
			return {
				image: null
			}
		},
		created() {
			this.setPreview()
		},
		watch: {
			'preview': 'setPreview'
		},
		methods: {
			setPreview() {
				if(this.preview instanceof File ) {
					const fileReader = new FileReader()
					fileReader.onload = (event) => {
					  this.image = event.target.result
					}
					fileReader.readAsDataURL(this.preview)
				} else if (typeof this.preview === 'string') {
					this.image = `/images/catalog/${this.preview}`
				} else {
					this.image = null
				}
			},
			close() {
				this.$emit('close')
			}
		}
	}
</script>
<style lang="scss" scoped>
.image__preview{
    max-height: 250px;
    max-width: 380px;
    overflow: hidden;
}
.image__preview img{
	overflow: hidden;
}
.image-close{
	position: relative;
    bottom: 200px;
    left: 280px;

}


</style>

