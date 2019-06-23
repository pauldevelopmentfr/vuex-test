let getters = {
    blocks: state => {
        return state.blocks
    },
    toRemove: state => {
        return state.toRemove
    },
    newBlock: state => {
        return state.newBlock
    },
    leaderboard: state => {
        return state.leaderboard
    }
}

export default getters