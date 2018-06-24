<template>
	<div class="image">
		<image-preview :preview="value" @close="$emit('input', null)"
			 v-if="value"></image-preview>
              <span class="btn btn-default btn-file" v-else>
                      Browse… <input  type="file" accept="image/*" @change="upload" id="imgInp">
             </span>
	</div>
</template>
<script type="text/javascript">
	import ImagePreview from './ImagePreview.vue'
	export default {
		components: {
			ImagePreview
		},
		props: {
			value: {
			    type: [String, File],
			    default: null
			}
		},
		methods: {

			upload(e) {
				const files = e.target.files
				if (files && files.length > 0) {
				  this.$emit('input', files[0])
				}
			}
		}
	}
</script>
