let actions = {
    ADD_BLOCK({commit}) {
        var divsize = ((Math.random()*50) + 10).toFixed()
        var color = '#'+ Math.round(0xffffff * Math.random()).toString(16)
        var posx = (Math.random() * ($('#game-area').width() - divsize)).toFixed()
        var posy = (Math.random() * ($('#game-area').height() - divsize)).toFixed()

        while (posx > 420 && posy < 180) {
            posx = (Math.random() * ($('#game-area').width() - divsize)).toFixed()
            posy = (Math.random() * ($('#game-area').height() - divsize)).toFixed()
        }

        var block = {
            x: posx,
            y: posy,
            width: divsize,
            height: divsize,
            color: color,
            is_clicked: 0
        }

        axios.post('/api/blocks', block).then(res => {
            if (res.data === 'added') {
                console.log('ok')
            }
        }).catch(err => {
            console.log(err)
        })
    },
    DELETE_BLOCK({commit}, block) {
        axios.delete(`/api/blocks/${block.id}`).then(res => {
            if (res.data === 'deleted') {
                console.log('deleted')
            }
        }).catch(err => {
            console.log(err)
        })
    },
    GET_BLOCKS({commit}) {
        axios.get('/api/blocks').then(res => {
            {
                commit('GET_BLOCKS', res.data)
            }
        }).catch(err => {
            console.log(err)
        })
    },
    GET_LEADERBOARD({commit}) {
        axios.get('/api/leaderboard').then(res => {
            {
                commit('GET_LEADERBOARD', res.data)
            }
        }).catch(err => {
            console.log(err)
        })
    }
}

export default actions