<template>
    <h1>Hai</h1>
    <div class="table">
        <table>
            <thead>
                <tr>
                    <th
                        v-for="key in columns"
                    >
                        {{ key | capitalize }}
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr
                    v-for="(rowIndex, entry) in data"
                >
                    <td v-for="(columnIndex, key) in columns"
                        class="cell"
                        :class="{activeRow: rowIndex == activeRowIndex, activeColumn: columnIndex == activeColumnIndex}"
                    >
                        <div class="view">
                            <label @click="makeCellActive(rowIndex, columnIndex)">
                                {{ entry[key] }}
                            </label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    import Vue from 'vue';

    Vue.use(require('vue-resource'));

    import io from 'socket.io-client';
    const socket = io('http://192.168.10.10:8081');

    import { updateActiveCellPosition } from '../vuex/action';

    export default {
        vuex: {
            actions: {
                updateActiveCellPosition
            },
            getters: {
                columns: state => state.columns,
                data: state => state.data,
                activeRowIndex: state => state.activeRowIndex,
                activeColumnIndex: state => state.activeColumnIndex
            }
        },
        ready() {
            socket.on('clicked-cell-channel:App\\Events\\UserChangedActiveCell', (data) => {
                this.updateActiveCellPosition(data.rowIndex, data.columnIndex);
            });
        },
        methods: {
            makeCellActive(rowIndex, columnIndex) {
                console.log(rowIndex, columnIndex);

                Vue.http.post('/api/updateActiveCellPosition', {rowIndex, columnIndex});
            }
        }
    }
</script>

<style>
table {
  border: 2px solid #42b983;
  border-radius: 3px;
  background-color: #fff;
}

th {
  background-color: #42b983;
  color: rgba(255,255,255,0.66);
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -user-select: none;
}

td {
  background-color: #f9f9f9;
}

th, td {
  min-width: 120px;
  padding: 10px 20px;
}

th.active {
  color: #fff;
}

th.active .arrow {
  opacity: 1;
}

.arrow {
  display: inline-block;
  vertical-align: middle;
  width: 0;
  height: 0;
  margin-left: 5px;
  opacity: 0.66;
}

.arrow.asc {
  border-left: 4px solid transparent;
  border-right: 4px solid transparent;
  border-bottom: 4px solid #fff;
}

.arrow.dsc {
  border-left: 4px solid transparent;
  border-right: 4px solid transparent;
  border-top: 4px solid #fff;
}

#search {
  margin-bottom: 10px;
}
</style>
