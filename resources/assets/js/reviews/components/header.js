import React from 'react';

const style = {
    margin:'20px',
    display: 'flex',
    justifyContent: 'space-between'
}

export default class Header extends React.Component {

    render (){
        return (
            <div style={style}>
                <div>
                    <div>
                        <input type="text" placeholder="Search" />
                    </div>
                    <div>
                        <p>Order by</p>
                        <select>
                            <option value="asc">Ascending</option>
                            <option value="desc">Descending</option>
                        </select>
                    </div>
                </div>
                <div>
                    <div>
                        <p>Pick by category</p>
                    </div>
                </div>
            </div>
        )
    }
}
