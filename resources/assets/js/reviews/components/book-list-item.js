import React from 'react';

const style = {
    margin: '5px 0',
    padding: '10px'
}

export default class BookListItem extends React.Component {

    render (){
        return (
            <div style={style}>
                <div>
                    {this.props.book.name}
                </div>
            </div>
        )
    }
}
