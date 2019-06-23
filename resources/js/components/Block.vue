<template>
    <div class="block"
        style="position: absolute;" @click="removeBlock(block)" :style="{
            left: block.x + 'px',
            top: block.y + 'px',
            width: block.width + 'px',
            height: block.height + 'px',
            background: block.color
        }">
    </div>
</template>

<script>
export default {
    name: 'Block',
    props: ['block'],
    methods: {
        removeBlock(block) {
            this.$store.commit('CACHE_REMOVED', block)
            this.$store.dispatch('DELETE_BLOCK', block);
        }
    }
};
</script>