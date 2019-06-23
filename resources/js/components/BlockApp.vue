<template>
    <div id="app">
        <block-list></block-list>

        <div id="leaderboard">
            <span class="title">Leaderboard</span>

            <leaderboard></leaderboard>
        </div>
    </div>
</template>

<script>
import leaderboard from '../components/Leaderboard'
import blockList from '../components/BlockList'
import { mapGetters } from 'vuex';

export default {
    components: {
        leaderboard,
        blockList
    },
    name: 'BlockApp',
    mounted() {
        window.Echo.channel('newBlock').listen('.block-created', e => {
            this.$store.commit('ADD_BLOCK', e.block)
            this.newBlock.title = ''
        });
        window.Echo.channel('blockClicked').listen('.block-clicked', e => {
            this.$store.commit('DELETE_BLOCK', this.toRemove)
        });
        window.Echo.channel('leaderboardRefreshed').listen('.leaderboard-refreshed', e => {
            this.$store.commit('GET_LEADERBOARD')
        });
        this.$store.dispatch('ADD_BLOCK')
        setInterval(() => {
            this.$store.dispatch('ADD_BLOCK')
        }, 10000)
    },
    computed: {
        ...mapGetters(['newBlock', 'toRemove'])
      }
};
</script>