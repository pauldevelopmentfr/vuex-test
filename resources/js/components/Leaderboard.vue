<template>
    <ul>
        <player v-for="player in leaderboard" :player="player" :key="player.id" />
    </ul>
</template>

<script>
import { mapGetters } from 'vuex';
import player from '../components/Player';

export default {
    components: {
        player
    },
    name: 'Leaderboard',
    mounted() {
        this.$store.dispatch('GET_LEADERBOARD');
    },
    computed: {
        ...mapGetters(['leaderboard']),
    }
};
</script>