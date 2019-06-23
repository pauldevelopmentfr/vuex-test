<template>
    <div id="block-list">
        <block v-for="block in blocks" :block="block" :key="block.id" />
    </div>
</template>

<script>
import { mapGetters } from 'vuex';
import block from '../components/Block';

export default {
    components: {
        block
    },
    name: 'BlockList',
    mounted() {
        this.$store.dispatch('GET_BLOCKS');
    },
    computed: {
        ...mapGetters(['blocks']),
    }
};
</script>