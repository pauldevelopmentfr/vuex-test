let mutations = {
    ADD_BLOCK(state, block) {
        state.blocks.unshift(block)
    },
    CACHE_REMOVED(state, block) {
        state.toRemove = block
    },
    GET_BLOCKS(state, blocks) {
        state.blocks = blocks
    },
    DELETE_BLOCK(state, block) {
        state.blocks.splice(state.blocks.indexOf(block), 1)
        state.toRemove = null;
    },
    GET_LEADERBOARD(state, leaderboard) {
        state.leaderboard = leaderboard
    }
}

export default mutations