import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
    state: function (){
        let activeRowIndex = -1;
        let activeColumnIndex = -1;

        let columns = ['row', 'name', 'date1', 'date2'];

        let data = [
            {
                row: 1,
                name: 'Terry Fuckwit',
                date1: '7',
                date2: '8'
            },
            {
                row: 2,
                name: 'Chuck Banana',
                date1: '7',
                date2: '8'
            },
            {
                row: 3,
                name: 'Frederick Spindle',
                date1: '7',
                date2: '8'
            },
            {
                row: 4,
                name: 'Gordan Wasteman',
                date1: '7',
                date2: '8'
            },
            {
                row: 5,
                name: 'Sponge Melonhead',
                date1: '7',
                date2: '8'
            },
            {
                row: 6,
                name: 'Foust Spanner',
                date1: '7',
                date2: '8'
            }
        ];

        return {
            activeRowIndex,
            activeColumnIndex,
            columns,
            data
        }
    },
    mutations: {
        ACTIVE_CELL_POSITION: (state, rowIndex, columnIndex) => {
            state.activeRowIndex = rowIndex;
            state.activeColumnIndex = columnIndex;
        }
    }
});
