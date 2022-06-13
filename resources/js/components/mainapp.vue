<template>
	<div>
		<router-view></router-view>
	</div>
</template>

<script>
export default {
  name: 'mainapp',
  
   mounted() {
       console.log('Component mounted.')
   } 
};
</script>

<style lang="css" scoped>
</style>
