<template>
    <h1>Hi I'm from test</h1>
    <ul>
        <li v-for="stuff in dayta">
            {{ stuff }}
        </li>
    </ul>

    <h3>and from state: </h3>
    <ul>
        <li v-for="item in storey">
            {{ item }}
        </li>
    </ul>

    <span @click="summin">Click here</span>
</template>

<script>

    var myStore = new Vuex.Store({
        state: {
            storey: ['one', 'two']
        },
        mutations: {
            doStuff: state => state.dayta.push('three')
        }
    })



    export default {
        vuex: {
            state: {
                
            }

        },
        data() {
            return {
                dayta: ['hey there', 'youre an all star', 'get your game on']
            }
        },
        created() {
            //console.log('component working');
        }
    }

</script>
