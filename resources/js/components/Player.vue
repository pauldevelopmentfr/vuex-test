<template>
    <li><span class="user">{{player.user}}</span> - <span class="score">{{player.points}} points</span></li>
</template>

<script>
export default {
    name: 'Player',
    props: ['player']
};
</script>